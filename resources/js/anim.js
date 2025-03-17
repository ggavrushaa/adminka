const canvas = document.createElement("canvas");
const gl = canvas.getContext("webgl2");

let header_canvas = document.querySelector('.header-canvas');

header_canvas.appendChild(canvas);
header_canvas.style = "margin:0;touch-action:none;overflow:hidden;";
header_canvas.width = "100%";
header_canvas.height = "auto";
header_canvas.userSelect = "none";

const dpr = Math.max(1, .5*window.devicePixelRatio)

function resize() {
    const {
        innerWidth: width,
        innerHeight: height
    } = window

    canvas.width = width * dpr
    canvas.height = height * dpr

    gl.viewport(0, 0, width * dpr, height * dpr)
}
window.onresize = resize

const vertexSource = `#version 300 es
#ifdef GL_FRAGMENT_PRECISION_HIGH
precision highp float;
#else
precision mediump float;
#endif

in vec4 position;

void main(void) {
    gl_Position = position;
}
`

const fragmentSource = `#version 300 es
/*********
* made by Matthias Hurrle (@atzedent)
*/
#ifdef GL_FRAGMENT_PRECISION_HIGH
precision highp float;
#else
precision mediump float;
#endif
out vec4 O;
uniform vec2 resolution;
uniform float time;
uniform int pointerCount;
uniform vec2 touch;
#define mouse (touch/R)
#define P pointerCount
#define FC gl_FragCoord.xy
#define R resolution
#define T mod(time,60.)
#define S smoothstep
#define N normalize
#define rot(a) mat2(cos(a-vec4(0,11,33,0)))
float rnd(vec2 p) { return fract(sin(dot(p,vec2(12.9898,78.599)))*345678.); }
float noise(vec2 p) { vec2 i=floor(p), f=fract(p), u=S(.0,1.,f); float a=rnd(i),b=rnd(i+vec2(1,0)),c=rnd(i+vec2(0,1)),d=rnd(i+1.); return mix(mix(a,b,u.x),mix(c,d,u.x),u.y); }
float fbm(vec2 p) {
    float t=.0, a=1., h=.0;
    vec2 s=vec2(100);
    mat2 m=rot(.5);
    for (int i=0; i<5; i++) {
        t+=a*noise(p-T*.4);
        p=2.*p*m+s;
        a*=.5;
        h+=a;
    }
    return t/h;
}
vec3 palette(float t) { vec3 a=vec3(.5),b=a,c=a+a,d=vec3(.3,.6,.9); return a+b*cos(6.3*(c*t+d)); }
vec3 pattern(vec2 uv) {
    vec3 col=vec3(0);
    vec2 p=uv;
    float d=1.;
    for (float i=.0; i<3.; i++) {
        p=vec2(cos(uv.x),sin(uv.y));
        uv*=1.5;
        float a=fbm(uv*d+T*.1);
        d+=a;
        col+=palette(i+.5+.5*(length(p)/d));
    }
    col=S(.25,1.,.05/col);
    col=pow(col,vec3(.4545));
    return col;
}
float box(vec2 p, vec2 s, float r) { p=abs(p)-(s-r); return length(max(p,.0))+min(.0,max(p.x,p.y))-r; }
float map(vec3 p) {
    float r=1.2;
    vec2 q=vec2(length(p.xz)-r,p.y);
    float a=atan(p.x,p.z);
    q*=rot(.5*a+T);
    q.y=abs(q.y)-.5;
    return .4*box(q,vec2(.2,.225*(1.+(sin(a+T)*.5+.5))),.05);
}
vec3 norm(vec3 p) {
    const float h=1e-3;
    const vec2 k=vec2(-1,1);
    return N(
        k.xyy*map(p+k.xyy*h)+
        k.yxy*map(p+k.yxy*h)+
        k.yyx*map(p+k.yyx*h)+
        k.xxx*map(p+k.xxx*h)
    );
}
void cam(inout vec3 p) { p.yz*=rot(-mouse.y*6.3+3.14); }
void main(void) {
    vec2 uv=(FC-.5*R)/min(R.x,R.y);
    vec3 col=vec3(0),
    p=vec3(0,0,-4),
    rd=N(vec3(uv,1));
    cam(p);
    cam(rd);
    const float steps=4000., maxd=4.;
    float grain=mix(.95,1.,rnd(uv));
    for (float i=.0; i<steps; i++) {
        float d=map(p)*grain;
        if (abs(d)<1e-3) {
            vec3 n=norm(p),
            l=N(vec3(1,2,-3)-p),
            r=reflect(rd,n);
            float dif=max(.0,dot(l,n)*.5+.5),
            spec=max(.0,r.y);
            col+=dif+dif*pow(spec,21.);
            col=mix(palette(dif),palette(1.-dif),r.y*.5+.5);
            break;
        }
        if (d>maxd) { col=max(col,pattern(uv)); break; }
        
        p+=rd*d;
    }
    
    O=vec4(col,1);
}
`

function compile(shader, source) {
    gl.shaderSource(shader, source)
    gl.compileShader(shader);

    if(!gl.getShaderParameter(shader, gl.COMPILE_STATUS)) {
        console.error(gl.getShaderInfoLog(shader))
    }
}

let program

function setup() {
    const vs = gl.createShader(gl.VERTEX_SHADER)
    const fs = gl.createShader(gl.FRAGMENT_SHADER)

    compile(vs, vertexSource)
    compile(fs, fragmentSource)

    program = gl.createProgram()

    gl.attachShader(program, vs)
    gl.attachShader(program, fs)
    gl.linkProgram(program)

    if (!gl.getProgramParameter(program, gl.LINK_STATUS)) {
        console.error(gl.getProgramInfoLog(program))
    }
}

let vertices, buffer

function init() {
    vertices = [
        -1.,-1., 1.,
        -1.,-1., 1.,
        -1., 1., 1.,
        -1., 1., 1.,
    ]

    buffer = gl.createBuffer()

    gl.bindBuffer(gl.ARRAY_BUFFER, buffer)
    gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(vertices), gl.STATIC_DRAW)

    const position = gl.getAttribLocation(program, "position")

    gl.enableVertexAttribArray(position)
    gl.vertexAttribPointer(position, 2, gl.FLOAT, false, 0, 0)

    program.resolution = gl.getUniformLocation(program, "resolution")
    program.time = gl.getUniformLocation(program, "time")
    program.touch = gl.getUniformLocation(program, "touch")
    program.pointerCount = gl.getUniformLocation(program, "pointerCount")
}

const mouse = {
    x: 0, y: 0, touches: new Set(),
    update: function(x, y, pointerId) {
        this.x = x*dpr; this.y = canvas.height-y*dpr; this.touches.add(pointerId)
    },
    remove: function(pointerId) { this.touches.delete(pointerId) }
}

function loop(now) {
    gl.clearColor(0, 0, 0, 1)
    gl.clear(gl.COLOR_BUFFER_BIT)
    gl.useProgram(program)
    gl.bindBuffer(gl.ARRAY_BUFFER, buffer)
    gl.uniform2f(program.resolution, canvas.width, canvas.height)
    gl.uniform1f(program.time, now*1e-3)
    gl.uniform2f(program.touch, mouse.x, mouse.y)
    gl.uniform1i(program.pointerCount, mouse.touches.size)
    gl.drawArrays(gl.TRIANGLES, 0, vertices.length * .5)
    requestAnimationFrame(loop)
}

setup()
init()
resize()
loop(0)

window.addEventListener("pointerdown", e => mouse.update(e.clientX, e.clientY, e.pointerId))
window.addEventListener("pointerup", e => mouse.remove(e.pointerId))
window.addEventListener("pointermove", e => {
    if (mouse.touches.has(e.pointerId))
        mouse.update(e.clientX, e.clientY, e.pointerId)
})
