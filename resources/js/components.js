import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
import { CustomSelect, selectHandlerBlur } from "./custom-select";
window.selectHandlerBlur = selectHandlerBlur;
// import ScrollSmoother from 'gsap/ScrollSmoother';

const supportsTouch = "ontouchstart" in window || navigator.msMaxTouchPoints;
// Custom VH
let vh = window.innerHeight * 0.01;
let vw = document.documentElement.clientWidth;

document.documentElement.style.setProperty("--vh", `${vh}px`);
document.documentElement.style.setProperty("--vw", `${vw}px`);
window.addEventListener("resize", () => {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);

    let vw = document.documentElement.clientWidth;
    document.documentElement.style.setProperty("--vw", `${vw}px`);
});

// Remove class
function removeClass(nodes, className) {
    nodes.forEach((node) => {
        node.classList.remove(className);
    });
}

function addClass(nodes, className) {
    nodes.forEach((node) => {
        node.classList.add(className);
    });
}

// Breakpoints checker, прослуховувач медіазапитів
const breakpoint_mob = window.matchMedia("(max-width:767px)"); // 0 - 767
const breakpoint_tablet = window.matchMedia("(max-width:1024px)"); // 767 - 991
const breakpoint_laptop = window.matchMedia("(max-width:1440px)"); // 991 - 1999
const breakpoint_desktop = window.matchMedia("(min-width:1920px)"); // 1999 >
//
// const breakpoint_mob = window.matchMedia('(max-width:767px)'); // 0 - 767
// const breakpoint_tablet = window.matchMedia('(min-width:768px)'); // 767 - 1023
// const breakpoint_laptop = window.matchMedia('(min-width:1024px)'); // 1024 - 1440
// const breakpoint_desktop = window.matchMedia('(min-width:1440px)'); // 1440 >

const breakpointChecker = function () {
    if (breakpoint_mob.matches === true) {
        // Активувати слайдер клієнтів на головній сторінці
        enableSliderClients();

        // return false;
    }
    if (breakpoint_tablet.matches === true) {
        // Активувати слайдер клієнтів на головній сторінці
        enableSliderClients();

        return false;
    }
    if (breakpoint_laptop.matches === true) {
        // Вимкнути слайдер клієнтів на головній сторінці
        if (slider_clients !== undefined) {
            slider_clients.destroy(true, true);
        }

        return false;
    }
    if (breakpoint_desktop.matches === true) {
        return false;
    }
};

breakpoint_mob.addEventListener("change", breakpointChecker);
breakpoint_tablet.addEventListener("change", breakpointChecker);
breakpoint_laptop.addEventListener("change", breakpointChecker);
breakpoint_desktop.addEventListener("change", breakpointChecker);
breakpointChecker();

let slider_clients;

//Слайдер на странице каталога
function enableSliderClients() {
    if (document.querySelector(".clients-slider")) {
        slider_clients = new Swiper(".clients-slider", {
            modules: [Navigation, Pagination],
            scrollbar: {
                el: ".swiper-scrollbar",
                draggable: false,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: "auto",
                    spaceBetween: 20,
                    freeMode: {
                        enabled: true,
                        sticky: true,
                    },
                },
                1024: {
                    slidesPerView: 3,
                    grid: {
                        rows: 2,
                    },
                    spaceBetween: 20,
                    freeMode: {
                        enabled: false,
                        sticky: true,
                    },
                },
            },
        });
    }
}

// Mask Phone
function initMaskPhone() {
    let mask_phones = document.querySelectorAll("._js-mask-phone");
    if (mask_phones.length !== 0) {
        mask_phones.forEach((phone) => {
            let mask = new Inputmask({
                showMaskOnHover: false,
                //regex: "^\\+380[35-9][0-9]{8}$",
                // regex: '^\\+',
                regex: "^\\+[1-9][0-9]{0,19}$",
                // regex: '^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$',
                placeholder: " ",
                onBeforeMask: function (value, opts) {
                    // return value.replace(/^(0|\+?380)/, "");
                },
            });
            mask.mask(phone);
        });
    }
}
initMaskPhone();

// Mask Email
function initMaskEmail() {
    let mask_email = document.querySelectorAll("._js-mask-email");

    if (mask_email.length !== 0) {
        mask_email.forEach((email) => {
            let mask = new Inputmask({
                showMaskOnHover: false,
                mask: "*{1,100}[.*{1,100}][.*{1,100}][.*{1,100}]@*{1,50}[.*{2,20}][.*{1,20}]",
                placeholder: " ",
                greedy: false,
                onBeforePaste: function (pastedValue, opts) {
                    pastedValue = pastedValue.toLowerCase();
                    return pastedValue.replace("mailto:", "");
                },
                definitions: {
                    "*": {
                        validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~-]",
                        casing: "lower",
                    },
                },
            });
            mask.mask(email);
        });
    }
}
initMaskEmail();

// Validate inputs
let form_groups_required = document.querySelectorAll(
    ".form-group.required, .form-group.valid-not-required"
);
form_groups_required.forEach((form_group) => validate(form_group));

function validate(form_group) {
    const valid_type_arr = form_group.dataset.valid.split(",");

    if (valid_type_arr.length > 0) {
        let error_count = 0;
        for (let i = 0; i < valid_type_arr.length; i++) {
            let valid_type = valid_type_arr[i];
            if (valid_type_arr[i].indexOf("maxlength") !== -1) {
                valid_type = "maxlength";
            }

            switch (valid_type) {
                case "empty": {
                    form_group
                        .querySelector("input, textarea")
                        .addEventListener("blur", () => {
                            if (form_group.classList.contains("required")) {
                                if (i === 0) {
                                    error_count = +!validateField(
                                        form_group,
                                        valid_type
                                    );
                                } else {
                                    if (error_count === 0) {
                                        error_count = +!validateField(
                                            form_group,
                                            valid_type
                                        );
                                    }
                                }
                            }
                        });
                    break;
                }
                case "mask": {
                    form_group
                        .querySelector("input")
                        .addEventListener("blur", () => {
                            if (form_group.classList.contains("required")) {
                                if (i === 0) {
                                    error_count = +!validateField(
                                        form_group,
                                        valid_type
                                    );
                                } else {
                                    if (error_count === 0) {
                                        error_count = +!validateField(
                                            form_group,
                                            valid_type
                                        );
                                    }
                                }
                            }
                        });
                    break;
                }
                case "checkbox": {
                    form_group
                        .querySelector("input")
                        .addEventListener("change", () => {
                            if (form_group.classList.contains("required")) {
                                if (i === 0) {
                                    error_count = +!validateField(
                                        form_group,
                                        valid_type
                                    );
                                } else {
                                    if (error_count === 0) {
                                        error_count = +!validateField(
                                            form_group,
                                            valid_type
                                        );
                                    }
                                }
                            }
                        });
                    break;
                }
                case "maxlength": {
                    form_group
                        .querySelector("input, textarea")
                        .addEventListener("blur", () => {
                            if (i === 0) {
                                error_count = +!validateField(
                                    form_group,
                                    valid_type_arr[i]
                                );
                            } else {
                                if (error_count === 0) {
                                    error_count = +!validateField(
                                        form_group,
                                        valid_type_arr[i]
                                    );
                                }
                            }
                        });
                    break;
                }
                case "cyrillic": {
                    form_group
                        .querySelector("input, textarea")
                        .addEventListener("blur", () => {
                            if (i === 0) {
                                error_count = +!validateField(
                                    form_group,
                                    valid_type
                                );
                            } else {
                                if (error_count === 0) {
                                    error_count = +!validateField(
                                        form_group,
                                        valid_type
                                    );
                                }
                            }
                        });
                    break;
                }
            }
        }
    }
}

function validateField(form_group, valid_type) {
    let maxlength;
    if (valid_type.indexOf("maxlength") !== -1) {
        maxlength = valid_type.split("-")[1];
        valid_type = "maxlength";
    }
    switch (valid_type) {
        case "empty": {
            const input = form_group.querySelector("input, textarea");

            if (input.value.trim() === "") {
                form_group.classList.add("has-error");
                form_group.querySelector(".help-block").innerHTML =
                    form_group.querySelector(".help-block").dataset.empty;

                return false;
            } else {
                form_group.classList.remove("has-error");
            }

            return true;
        }
        case "mask": {
            const input = form_group.querySelector("input");

            if (input.inputmask.isComplete()) {
                form_group.classList.remove("has-error");
            } else {
                form_group.classList.add("has-error");
                form_group.querySelector(".help-block").innerHTML =
                    form_group.querySelector(".help-block").dataset.empty;
                return false;
            }
            return true;
        }
        case "checkbox": {
            const input = form_group.querySelector("input");
            if (input.checked) {
                form_group.classList.remove("has-error");
            } else {
                form_group.classList.add("has-error");
                form_group.querySelector(".help-block").innerHTML =
                    form_group.querySelector(".help-block").dataset.empty;
                return false;
            }
            return true;
        }
        case "select": {
            let select_target = form_group.querySelector("[data-select]");
            let val = "";

            if (select_target.dataset.type === "button") {
                val = form_group.querySelector("button").value.trim();
            } else {
                val = form_group
                    .querySelector('input[type="hidden"]')
                    .value.trim();
            }

            if (val === "") {
                form_group.classList.add("has-error");
                return false;
            } else {
                form_group.classList.remove("has-error");
            }
            return true;
        }
        case "maxlength": {
            const input = form_group.querySelector("input, textarea");

            if (input.value.length > maxlength) {
                form_group.classList.add("has-error");
                form_group.querySelector(".help-block").innerHTML =
                    form_group.querySelector(".help-block").dataset.maxlength;
                return false;
            } else {
                form_group.classList.remove("has-error");
            }

            return true;
        }
        case "cyrillic": {
            const input = form_group.querySelector("input, textarea");
            // let regex = /^[а-яіїє' -]+$/gi;
            let regex = /^([а-яіїє' -]+)?$/gi;

            if (!regex.test(input.value)) {
                form_group.classList.add("has-error");
                form_group.querySelector(".help-block").innerHTML =
                    form_group.querySelector(".help-block").dataset.cyrillic;

                return false;
            } else {
                form_group.classList.remove("has-error");
            }

            return true;
        }
    }
}

function validateForm(form) {
    let required_fields = form.querySelectorAll(".required");
    let errors = 0;
    let errors_fields = [];

    required_fields.forEach((form_group) => {
        const valid_type_arr = form_group.dataset.valid.split(",");
        let error_valid_count = 0;

        for (let i = 0; i < valid_type_arr.length; i++) {
            let valid_type = valid_type_arr[i];

            if (valid_type_arr[i].indexOf("maxlength") !== -1) {
                valid_type = "maxlength";
            }

            if (i === 0) {
                // error_valid_count = ;
                if (!validateField(form_group, valid_type_arr[i])) {
                    error_valid_count = 1;
                    errors += 1;
                    errors_fields.push(form_group);
                } else {
                    error_valid_count = 0;
                }
            } else {
                if (error_valid_count === 0) {
                    if (!validateField(form_group, valid_type_arr[i])) {
                        error_valid_count = 1;
                        errors += 1;
                        errors_fields.push(form_group);
                    } else {
                        error_valid_count = 0;
                    }
                }
            }

            // if (!validateField(form_group, valid_type_arr[i])) {
            //     errors += 1;
            // }
        }
    });

    if (errors === 0) {
        return true;
    } else {
        errors_fields[0].scrollIntoView({
            behavior: "smooth",
            block: "center",
        });
        return false;
    }
}

function resetForm(form) {
    form.reset();
    let form_groups = form.querySelectorAll(".form-group");

    form_groups.forEach((form_group) => {
        form_group.classList.remove("focus");
    });
}

function toggleRequired(block, action, current = false) {
    let requiredElems = block.querySelectorAll("[data-required]");

    if (current) {
        requiredElems = [block];
    }

    if (action === "add") {
        requiredElems.forEach((item) => {
            item.classList.add("required");
            validate(item);
        });
    } else {
        requiredElems.forEach((item) => {
            item.classList.remove("required");
            item.classList.remove("has-error");
        });
    }
}

// Home page, swiper Feature
if (document.querySelector(".content-feature__main")) {
    var swiperFeature = new Swiper(".content-feature__main", {
        modules: [Navigation, Pagination],
        slidesPerView: 1,
        speed: 400,
        scrollbar: {
            el: ".swiper-scrollbar",
            draggable: false,
        },
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        on: {
            init: function (swiper) {
                document
                    .querySelectorAll(
                        ".feature-thumb__items .feature-thumb__item"
                    )
                    .forEach((item) => {
                        item.addEventListener("click", () => {
                            swiper.slideTo(+item.dataset.index - 1, 400);
                        });
                    });
            },
            slideChangeTransitionStart: function (swiper) {
                const number = swiper.activeIndex + 1;
                document.querySelector(
                    ".feature-thumb__fraction .thumb-number__start"
                ).innerHTML = number < 10 ? `0${number}` : number;
                removeClass(
                    document.querySelectorAll(
                        ".feature-thumb__items .feature-thumb__item"
                    ),
                    "active"
                );
                document
                    .querySelector(
                        `.feature-thumb__items .feature-thumb__item[data-index="${number}"]`
                    )
                    .classList.add("active");
            },
        },
    });
}

const fixedHeader = document.querySelector("header");
let fixedHeaderActive = () => fixedHeader.classList.contains("active");
// Home first block
let homeHeader = document.querySelector(".js_fixed_header-trigger");
const fixedHeaderTriggerHeight = homeHeader
    ? homeHeader.clientHeight
    : fixedHeader.clientHeight * 2;

window.addEventListener("scroll", () => {
    scrollHandler();
});

function scrollHandler() {
    if (window.scrollY > fixedHeaderTriggerHeight && !fixedHeaderActive()) {
        fixedHeader.classList.add("active");
        document.querySelector(".header-fake").classList.add("active");
        setTimeout(() => {
            fixedHeader.classList.add("anim-show");
            fixedHeader.classList.add("white-bg");
        }, 100);
    } else if (
        window.scrollY <= fixedHeaderTriggerHeight &&
        fixedHeaderActive()
    ) {
        fixedHeader.classList.add("anim-hide");
        setTimeout(() => {
            fixedHeader.classList.remove("active");
            fixedHeader.classList.remove("anim-show");
            fixedHeader.classList.remove("anim-hide");
            fixedHeader.classList.remove("white-bg");
            document.querySelector(".header-fake").classList.remove("active");
        }, 100);
    }
}

scrollHandler();

window.addEventListener("load", windowOnLoad);

function windowOnLoad() {
    // Tab
    let tabBlock = document.querySelectorAll(".js-tab");
    if (tabBlock.length > 0) {
        tabBlock.forEach((tab) => {
            const tabBtns = tab.querySelectorAll(".js-tab-btn");

            tabBtns.forEach((btn) => {
                btn.addEventListener("click", () => {
                    setActiveTab(tab, btn, tabBtns);
                    if (tab.closest(".section-reviews")) {
                        //     window.scrollTo({
                        //         top: tab.closest('.section-reviews').offsetTop - 100,
                        //         behavior: "smooth"
                        //     })

                        updateScrollTriggerReview(btn);
                    }
                });
            });

            // First load
            let activeBtn = tab.querySelector(".js-tab-btn.active");

            setActiveTab(tab, activeBtn, tabBtns);

            // Navigation
            const btn_navigation = tab.querySelectorAll(
                ".js-btn-prev, .js-btn-next"
            );

            if (btn_navigation.length === 2) {
                btn_navigation.forEach((btn) => {
                    btn.addEventListener("click", () => {
                        let next_index =
                            +tab.querySelector(".js-tab-btn.active").dataset
                                .index + 1;
                        if (btn.classList.contains("js-btn-prev")) {
                            next_index =
                                +tab.querySelector(".js-tab-btn.active").dataset
                                    .index - 1;
                        }
                        const next_btn = tab.querySelector(
                            `.js-tab-btn[data-index="${next_index}"]`
                        );

                        if (next_btn)
                            next_btn.dispatchEvent(new Event("click"));
                    });
                });
            }
        });

        function setActiveTab(tab, btn, tabBtns) {
            let index = btn.dataset.index;
            removeClass(tabBtns, "active");
            removeClass(tab.querySelectorAll('[class*="_js-tab-"]'), "active");
            removeClass(tab.querySelectorAll('[class*="_js-tab-"]'), "hide");

            btn.classList.add("active");
            tab.style.setProperty(
                "--scrollbar-position",
                `${btn.offsetLeft}px`
            );
            tab.style.setProperty("--scrollbar-width", `${btn.clientWidth}px`);
            tab.style.setProperty("--index", index);

            tab.querySelector(`._js-tab-${index}`).classList.add("active");

            setTimeout(() => {
                addClass(tab.querySelectorAll('[class*="_js-tab-"]'), "hide");
            }, 300);

            // Скролл якщо елемент виходе за рамки екрану
            const tab_top = tab.querySelector(".tab-top"),
                btn_pos = btn.getBoundingClientRect(),
                tab_top_pos = tab_top.getBoundingClientRect();

            let need_scroll = false;

            let scroll = 0;
            // Виходе за правий край екрану
            if (btn_pos.right > tab_top_pos.right) {
                scroll =
                    tab_top.scrollLeft + (btn_pos.right - tab_top_pos.right);

                // У випадку якщо таб більший ніж розмір екрану і якщо він після скролу буде виходити за лівий край
                if (
                    btn_pos.width > tab_top_pos.width &&
                    btn_pos.left - scroll < tab_top_pos.left
                ) {
                    scroll =
                        scroll -
                        (btn_pos.left - scroll - tab_top_pos.left) * -1;
                }
                need_scroll = true;
            }

            // Виходе за лівий край екрану
            if (btn_pos.left < tab_top_pos.left) {
                scroll =
                    tab_top.scrollLeft - (btn_pos.left * -1 + tab_top_pos.left);
                need_scroll = true;
            }

            if (need_scroll) {
                tab_top.scrollTo({
                    left: scroll,
                    top: 0,
                    behavior: "smooth",
                });
            }
        }
    }

    // document.querySelector('.ss-w').innerHTML = 'width: ' + window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    // document.querySelector('.ss-h').innerHTML = 'height: ' + window.innerHeight;
}

if (document.querySelectorAll(".btn-scroll-top")) {
    document.querySelectorAll(".btn-scroll-top").forEach((btn) => {
        btn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    });
}

// Show menu
let burger = document.querySelectorAll(".js-show-menu"),
    hiddenHeader = document.querySelector(".hidden-header");

burger.forEach((btn) => {
    btn.addEventListener("click", handlerHiddenMenu);
});

function handlerHiddenMenu() {
    hiddenHeader.classList.toggle("active");
    document.body.classList.toggle("hide-scroll");
}

// Modals
const btnShowModal = document.querySelectorAll("._js-btn-modal"),
    btnsCloseModal = document.querySelectorAll("._js-close-modal"),
    overlayModal = document.querySelector(".modal-overlay");

if (btnShowModal.length) {
    btnShowModal.forEach((btn) => {
        btn.addEventListener("click", () => {
            const modal = document.querySelector(`.${btn.dataset.modal}`);
            if (modal) {
                fadeIn(modal);
                bodyLockToggle();
                fadeIn(overlayModal);
            }
        });
    });
}

if (btnsCloseModal.length > 0) {
    btnsCloseModal.forEach((btn) => {
        btn.addEventListener("click", () => {
            let modal = btn.closest("._js-modal");
            if (modal) {
                fadeOut(modal);
            }
            bodyUnlock();
            fadeOut(overlayModal);
        });
    });
}

if (overlayModal) {
    overlayModal.addEventListener("click", () => {
        closeAllModal();
        bodyUnlock();
    });
}

function closeAllModal() {
    //fadeOut(overlayModal);
    bodyUnlock();
    fadeOut(overlayModal);
    document.querySelectorAll("._js-modal").forEach((modal) => {
        fadeOut(modal);
    });
}

// Заблокувати крол та прибрати стрибок
let bodyLockStatus = true;

function bodyLockToggle(delay = 500) {
    if (document.documentElement.classList.contains("lock")) {
        bodyUnlock(delay);
    } else {
        bodyLock(delay);
    }
}
function bodyUnlock(delay = 0) {
    // console.log('body unlock');
    let body = document.querySelector("body");
    if (bodyLockStatus) {
        let lock_padding = document.querySelectorAll("[data-lp]");
        setTimeout(() => {
            for (let index = 0; index < lock_padding.length; index++) {
                const el = lock_padding[index];
                el.style.paddingRight = "0px";
            }
            body.style.paddingRight = "0px";
            document.documentElement.classList.remove("lock");
        }, delay);
        bodyLockStatus = false;
        setTimeout(function () {
            bodyLockStatus = true;
        }, delay);
    }
}
function bodyLock(delay = 0) {
    // console.log('body lock');
    let body = document.querySelector("body");
    if (bodyLockStatus) {
        let lock_padding = document.querySelectorAll("[data-lp]");
        for (let index = 0; index < lock_padding.length; index++) {
            const el = lock_padding[index];
            el.style.paddingRight =
                window.innerWidth -
                document.querySelector(".main").offsetWidth +
                "px";
        }
        body.style.paddingRight =
            window.innerWidth -
            document.querySelector(".main").offsetWidth +
            "px";
        document.documentElement.classList.add("lock");

        bodyLockStatus = false;
        setTimeout(function () {
            bodyLockStatus = true;
        }, delay);
    }
}

function fadeToggle(elem, speed = 500) {
    elem.classList.remove("fade-in");
    elem.classList.remove("fade-out");
    if (elem.classList.contains("active")) {
        elem.classList.add("fade-out");

        setTimeout(() => {
            elem.classList.remove("active");
        }, speed);
    } else {
        elem.classList.add("active");
        elem.classList.add("fade-in");
    }
}

function fadeIn(elem, speed = 500) {
    elem.classList.remove("fade-in");
    elem.classList.remove("fade-out");

    elem.classList.add("active");

    setTimeout(() => {
        elem.classList.add("fade-in");
    }, speed);
}

function fadeOut(elem, speed = 500) {
    elem.style.opacity = "0";

    setTimeout(() => {
        elem.classList.remove("active");
        elem.classList.remove("fade-in");
        elem.classList.remove("fade-out");

        elem.style = "";
    }, speed);
}

function showModal(modalNode) {
    if (modalNode) {
        fadeIn(overlayModal, 100);
        fadeIn(modalNode, 200);
        bodyLock();
    }
}

// Card flipper
let cardFlipper = document.querySelectorAll(".js-card-flipper");
if (cardFlipper.length > 0) {
    cardFlipper.forEach((card) => {
        card.addEventListener("click", () => {
            card.classList.toggle("active");
        });
    });
}

// Form (form.html page)
const formTalk = document.querySelector(".form-talk");

if (formTalk) {
    const form = formTalk.querySelector("form"),
        formContent = document.querySelector(".form-content"),
        steps = formTalk.querySelectorAll(".form-content .form-item"),
        count = steps.length,
        btnNext = formTalk.querySelector(".js-btn-next"),
        btnPrev = formTalk.querySelector(".js-btn-prev"),
        btnSubmit = formTalk.querySelector('button[type="submit"]'),
        btnGoHome = formTalk.querySelector(".js-btn-home"),
        btns = formTalk.querySelectorAll(".form-navigation .btn"),
        paginationItems = document.querySelectorAll(".pagination-item"),
        paginationItemsSeparator = document.querySelectorAll(
            ".form-pagination .pagination-separator"
        );

    let currentStepIndex = 0,
        currentStep = formTalk.querySelector(".form-content .form-item.active");

    btnNext.addEventListener("click", nextStep);
    btnPrev.addEventListener("click", prevStep);

    function nextStep() {
        if (
            currentStepIndex < count - 1 &&
            validateForm(steps[currentStepIndex])
        ) {
            currentStepIndex += 1;
            setStep();
        }
        // if (currentStepIndex < count - 1) {
        //     currentStepIndex += 1;
        //     setStep();
        // }
    }

    function prevStep() {
        if (currentStepIndex > 0) {
            currentStepIndex -= 1;
            setStep();
        }
    }

    btnSubmit.addEventListener("click", () => {
        btnSubmit.setAttribute("disabled", "");

        // Відправка форми
        // console.log('submit form');
        let formData = new FormData(form);

        //console.log(uploadedFileList);
        if (uploadedFileList.length) {
            for (var i = 0; i < uploadedFileList.length; i++) {
                formData.append(
                    "files[]",
                    uploadedFileList[i],
                    uploadedFileList[i].name
                );
            }
        }

        if (validateForm(form)) {
            fetch(form.action, {
                method: "POST",
                headers: {
                    "X-Requested-With": "XMLHttpRequest", 
                    Accept: "application/json",
                },
                body: formData,
            })
                .then((response) => response.json())
                .then((data) => {
                    // console.log(data);
                    if (data.success) {
                        resetForm(form);

                        btnSubmit.removeAttribute("disabled");
                        nextStep();
                        console.log("Форма успішно відправлена");
                        console.log(data);
                    } else {
                        console.log("Помилка відправки форми");
                    }
                })
                .catch(() => {
                    console.log("Помилка відправки форми");
                });
        } else {
            btnSubmit.removeAttribute("disabled");
        }
    });

    function setStep() {
        // formTalk.style.setProperty('--step', `${currentStepIndex}`);
        // removeClass(steps, 'active');
        // steps[currentStepIndex].classList.add('active');

        removeClass(steps, "active");
        removeClass(steps, "hide");

        formTalk.style.setProperty("--step", `${currentStepIndex}`);
        steps[currentStepIndex].classList.add("active");

        formContent.classList.remove("overflow-visible");
        setTimeout(() => {
            addClass(steps, "hide");
        }, 300);

        removeClass(btns, "_hide");

        if (currentStepIndex === count - 2) {
            btnNext.classList.add("_hide");
            btnGoHome.classList.add("_hide");
        } else if (currentStepIndex === count - 1) {
            btnNext.classList.add("_hide");
            btnPrev.classList.add("_hide");
            btnSubmit.classList.add("_hide");
        } else {
            btnGoHome.classList.add("_hide");
            btnSubmit.classList.add("_hide");
        }

        window.scrollTo({
            left: 0,
            top: 0,
            behavior: "smooth",
        });

        setTimeout(() => {
            formContent.classList.add("overflow-visible");
        }, 700);

        removeClass(paginationItems, "_complete");
        removeClass(paginationItems, "_process");
        removeClass(paginationItemsSeparator, "active");

        for (let i = 0; i <= currentStepIndex; i++) {
            if (paginationItems[i]) {
                if (i !== currentStepIndex) {
                    paginationItems[i].classList.add("_complete");
                    if (paginationItems[i].nextElementSibling) {
                        paginationItems[i].nextElementSibling.classList.add(
                            "active"
                        );
                    }
                } else {
                    paginationItems[i].classList.add("_process");
                }
            }
        }
    }

    // Contact in select
    const radioContactIn = document.querySelectorAll(
        "input[name='contact_in[]']"
    );
    if (radioContactIn.length) {
        radioContactIn.forEach((radio) => {
            radio.addEventListener("change", () => {
                radio.closest(".radio-input").classList.toggle("active");
                radio
                    .closest(".radio-input")
                    .querySelector('input[type="text"]')
                    .focus();

                toggleRequired(radio.closest(".contact-in"), "remove");
                radioContactIn.forEach((radio1) => {
                    if (radio1.checked) {
                        toggleRequired(radio1.closest(".radio-input"), "add");
                    }
                });
            });
        });
    }

    // File uploader
    let fileInput = document.querySelector(".form-group.file input");
    let fileCountUploaded = 0;
    let maxFileCount = 10;
    fileInput.addEventListener("change", handleFiles, false);
    let uploadedFileList = [];

    function handleFiles() {
        let input = this;
        const fileList = this.files,
            formGroup = this.closest(".form-group"),
            label = formGroup.querySelector("label"),
            btn = formGroup.querySelector(".load-more"),
            parentBlock = input.closest(".files-group"),
            helpBlock = parentBlock.querySelector(".help-block");

        var validation = validationFiles(
            fileList,
            [
                "pdf",
                "jpg",
                "jpeg",
                "png",
                "doc",
                "docx",
                "xls",
                "xlsx",
                "excel",
            ],
            5000000
        );

        parentBlock.classList.remove("has-error");

        if (!validation.status) {
            if (validation.text_status === 1) {
                helpBlock.innerHTML = helpBlock.dataset.errorFormat;
            } else if (validation.text_status === 2) {
                helpBlock.innerHTML = helpBlock.dataset.errorSize;
            }
            parentBlock.classList.add("has-error");
        }

        if (validation.files.length > 0) {
            if (
                validation.files.length <= maxFileCount &&
                fileCountUploaded <= maxFileCount &&
                validation.files.length + fileCountUploaded <= maxFileCount
            ) {
                Object.values(validation.files).forEach((file) => {
                    var reader = new FileReader();
                    reader.addEventListener("loadend", function (e) {
                        uploadedFileList.push(file);
                    });
                    reader.readAsDataURL(file);
                });

                input.value = "";
                var newInput = input.cloneNode(true);
                input.replaceWith(newInput);
                input = newInput;
                input.addEventListener("change", handleFiles);

                if (validation.files.length === 1) {
                    let name = validation.files[0].name;
                    if (name.length > 15) {
                        name = "..." + name.slice(-15);
                        // let name1 = "..." . name.substring(name.length - 7); // Використання substring()
                        console.log(name.slice(-7));
                    }
                    console.log(validation.files);
                    label.textContent = `${label.dataset.textUploaded}: ${name}`;
                } else {
                    label.textContent = `${label.dataset.textUploaded}: ${validation.files.length}`;
                }
                fileCountUploaded += validation.files.length;

                if (fileCountUploaded < maxFileCount) {
                    formGroup.classList.add("loaded");
                    btn.addEventListener("click", handleShowMoreUploader);
                    this.removeEventListener("change", handleFiles);
                }
                if (fileCountUploaded === maxFileCount) {
                    formGroup.classList.add("_no-clickable");
                }
            } else {
                console.log("");
                helpBlock.innerHTML = helpBlock.dataset.errorMaxCount;
                parentBlock.classList.add("has-error");
            }

            setTimeout(() => {
                //console.log(uploadedFileList);
            }, 2000);
        } else {
            console.log("Photo not valid");
        }

        // console.log(uploadedFileList);
    }

    function handleShowMoreUploader() {
        const block = this.closest(".form-group");
        if (block) {
            const cloneBlock = block.cloneNode(true),
                label = cloneBlock.querySelector("label"),
                input = cloneBlock.querySelector("input"),
                index = block
                    .closest(".files-group")
                    .querySelectorAll(".form-group").length;

            cloneBlock.classList.remove("loaded");
            block.classList.remove("loaded");

            block.insertAdjacentElement("afterend", cloneBlock);

            input.addEventListener("change", handleFiles, false);
            input.id = `${input.id}-${index + 1}`;
            label.htmlFor = `${label.htmlFor}-${index + 1}`;
            label.textContent = label.dataset.textDefault;
        }
    }
}

function validationFiles(files, format, max_size) {
    var max_file =
        arguments.length > 3 && arguments[3] !== undefined
            ? arguments[3]
            : null;

    var valid = true,
        text_error = "",
        file_list = [],
        text_status = 0;

    for (var i = 0; i < files.length; i++) {
        var type = files[i].type,
            size = files[i].size,
            name = files[i].name;

        // console.log(files[i]);

        if (size <= max_size) {
            if (!format.includes(name.split(".").pop())) {
                valid = false;
                text_error = "Inappropriate image format";
                text_status = 1;
                break;
            }
        } else {
            valid = false;
            text_error = "The photo size is more than 5 mb";
            text_status = 2;
            break;
        }

        file_list.push(files[i]);
    }

    if (max_file !== null) {
        if (files.length > max_file) {
            file_list.splice(max_file, files.length - max_file);
        }
    }

    return {
        status: valid,
        text_error: text_error,
        files: file_list,
        text_status: text_status,
    };
}

if (window.matchMedia("(min-width:1280px)").matches) {
    gsap.registerPlugin(ScrollTrigger);

    let sections = gsap.utils.toArray(".road-items .item");
    let tee = 0;
    sections.forEach((section, index) => {
        let coord = section.getBoundingClientRect();
        let margin = 0;
        if (section.nextElementSibling) {
            margin =
                section.nextElementSibling.getBoundingClientRect().left -
                coord.right;
        }
        if (index === 0) {
            tee += coord.left * 2;
        }
        tee += margin + coord.width;
    });
    tee -= window.innerWidth;

    let scrollTween = gsap.to(sections, {
        x: function (i, target) {
            if (tee > 0) {
                return tee * -1;
            }
            return 0;
        },
        ease: "none", // <-- IMPORTANT!
        scrollTrigger: {
            start: "-100px",
            trigger: ".road",
            pin: true,
            scrub: 1,
            //snap: directionalSnap(1 / (sections.length - 1)),
            end: `+=${sections.length * 500}`,
            // end: `+=${1200 + window.innerWidth}`
        },
    });
}

if (window.matchMedia("(min-width:1024px)").matches) {
    const caseFixed = document.querySelector(".case-fixed");
    let childElement = document.querySelector(".cases .case-name");
    let targetElement = document.querySelector(".section-case");
    if (caseFixed) {
        let j =
            childElement.getBoundingClientRect().top -
            targetElement.getBoundingClientRect().top;

        const headings = document.querySelectorAll(".cases .case");

        const numOfTransitions = headings.length;

        const singleDuration = 1000;
        const totalDuration = singleDuration * numOfTransitions;

        gsap.to(".cases", {
            scrollTrigger: {
                pin: ".cases",
                start: `-${document.querySelector("header").clientHeight}px`,
                end: "+=" + `${totalDuration}s`,
                pinSpacing: true,
            },
        });

        headings.forEach((heading, i) => {
            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: heading,
                    toggleActions: "play reverse play reverse",
                    start: "+=" + `${singleDuration * i}s`,
                    end: "+=" + `${singleDuration}s`,
                    // markers: true,
                    toggleClass: "active",
                    onEnter: () => {
                        gsap.to([heading], { opacity: 1 });
                        document.querySelector(
                            ".case-fixed .case-fraction__number_start"
                        ).innerHTML = i < 9 ? `0${i + 1}` : i + 1;
                    },
                    onLeave: () => {
                        gsap.to([heading], { opacity: 0 });

                        if (i + 1 === headings.length) {
                            caseFixed.style.opacity = "0";
                        }
                    },
                    onEnterBack: () => {
                        gsap.to([heading], { opacity: 1 });
                        document.querySelector(
                            ".case-fixed .case-fraction__number_start"
                        ).innerHTML = i < 9 ? `0${i + 1}` : i + 1;
                    },
                    onLeaveBack: () => {
                        if (i === 0) {
                            caseFixed.style.opacity = "0";
                            return;
                        }
                    },
                    onUpdate: function (safe) {
                        let t = document.querySelector(".cases .case-name");
                        caseFixed.style.top = `${
                            t.getBoundingClientRect().top -
                            caseFixed.clientHeight
                        }px`;
                        caseFixed.style.opacity = "1";
                    },
                },
            });
        });
    }
}

// Home case slider
if (document.querySelector(".case-swiper")) {
    new Swiper(".case-swiper", {
        modules: [Navigation, Pagination],
        speed: 700,
        initialSlide: 1,
        loop: true,
        loopAdditionalSlides: 1, // slidesNum contains the initial slides number
        loopedSlides: 1,
        //centeredSlides: true,
        navigation: {
            nextEl: ".case-btn-next",
            prevEl: ".case-btn-prev",
        },
        breakpoints: {
            320: {
                spaceBetween: 20,
            },
            768: {
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1280: {
                slidesPerView: 2,
                spaceBetween: 60,
            },
            1440: {
                slidesPerView: 1,
                spaceBetween: 60,
                speed: 1000,
            },
        },
    });
    let swiperCase__node = document.querySelector(".case-swiper");

    if (!supportsTouch) {
        gsap.to(swiperCase__node, {
            scrollTrigger: {
                trigger: swiperCase__node,
                start: "-60% center",
                onEnter: () => swiperCase__node.classList.add("_active"),
                onLeave: () => swiperCase__node.classList.add("_active"),
                onLeaveBack: () => swiperCase__node.classList.add("_active"),
                onEnterBack: () => swiperCase__node.classList.add("_active"),
                // markers: true,
            },
        });
    }
}

// Review card parallax
let reviewCards = document.querySelectorAll(".review-card");
let reviewScrollTrigger;
let h = 0;

if (reviewCards.length > 0) {
    if (!supportsTouch) {
        reviewScrollTrigger = gsap.to(".review-card", {
            y: function (i, target, parent) {
                let g = target
                    .closest(".tab-bottom__item")
                    .querySelector(".col")
                    .getBoundingClientRect().height;

                return g * -0.9;
            },
            ease: "none",
            scrollTrigger: {
                trigger: ".section-reviews",
                pin: true,
                scrub: 1,
                end: function (i) {
                    let trigger = i.trigger.querySelector(
                        ".tab-bottom__item.active .col"
                    );

                    console.log(trigger.getBoundingClientRect().height);
                    console.log(trigger);

                    //console.log(trigger.getBoundingClientRect().height);
                    return `+=${trigger.getBoundingClientRect().height + 300}`;
                },
            },
        });

        // console.log(document.querySelector('.section-reviews').getBoundingClientRect());

        let tabReviewBtns = document.querySelectorAll(
            ".section-reviews .js-tab-btn"
        );
        if (tabReviewBtns.length > 0) {
            tabReviewBtns.forEach((btn) => {
                btn.addEventListener("click", () => {});
            });
        }
    }
}

if (document.querySelector(".section-reviews")) {
    let ggg = document
        .querySelector(".section-reviews")
        .getBoundingClientRect().top;
}

function updateScrollTriggerReview(btn) {
    // reviewScrollTrigger.scrollTrigger.scroll(ggg);

    reviewScrollTrigger.scrollTrigger.kill();

    document.querySelectorAll(".review-card").forEach((card) => {
        card.style = "";
    });

    window.scrollTo({
        behavior: "smooth",
        top: 30,
    });

    let activeTabItem = document.querySelector(
        `.section-reviews ._js-tab-${btn.dataset.index}`
    );

    reviewScrollTrigger = null;
    reviewScrollTrigger = gsap.to(".tab-bottom__item.active .review-card", {
        y: function (i, target, parent) {
            let g = target
                .closest(".tab-bottom__item")
                .querySelector(".col")
                .getBoundingClientRect().height;

            return g * -0.9;
        },
        ease: "none",
        scrollTrigger: {
            trigger: ".section-reviews",
            pin: true,
            scrub: 1,
            end: function (i) {
                let trigger = i.trigger.querySelector(
                    ".tab-bottom__item.active .col"
                );

                console.log(
                    i.trigger.querySelector(".tab-bottom__item.active .col")
                );

                //console.log(trigger.getBoundingClientRect().height);
                return `+=${trigger.getBoundingClientRect().height + 600}`;
            },
        },
    });
}

let photo_scroll_block = document.querySelector("._js-photo-scroll");
if (photo_scroll_block) {
    let scroll_column = photo_scroll_block.querySelector(".scroll-item");
    let duplicate_count = 3;
    const animation_type = photo_scroll_block.dataset.animation;

    if (animation_type === "horizontal") {
        duplicate_count = 2;
    }

    for (let i = 0; i < duplicate_count; i++) {
        const clone = scroll_column.cloneNode(true);
        let childNodes = Array.from(clone.children);

        // Перемішуємо дочірні елементи
        childNodes.sort(function () {
            return 0.5 - Math.random();
        });

        clone.innerHTML = "";
        // Додаємо перемішані дочірні елементи до контейнера клону
        childNodes.forEach(function (node) {
            clone.appendChild(node);
        });

        if (animation_type === "horizontal" && i % 2 === 1) {
            clone.classList.add("opposite");
        }

        if (animation_type === "angle" && i % 2 === 0) {
            clone.classList.add("opposite");
        }

        scroll_column.insertAdjacentElement("afterend", clone);
    }

    let scroll_columns = gsap.utils.toArray(".scroll-block .scroll-item");

    gsap.to(scroll_columns, {
        yPercent: function (index, target, targets) {
            if (animation_type === "angle") {
                if (target.classList.contains("opposite")) {
                    return 30;
                }
                return -30;
            }
            return false;
        },
        xPercent: function (index, target, targets) {
            if (animation_type === "horizontal") {
                if (target.classList.contains("opposite")) {
                    return 30;
                }
                return -30;
            }
            return false;
        },
        ease: "none", // <-- IMPORTANT!
        scrollTrigger: {
            trigger: photo_scroll_block,
            // pin: true,
            scrub: 2,
            start: `-${window.innerHeight}px`,
            // start: `-${document.querySelector('header').clientHeight}px`,
            end: "+=3000",
        },
    });
}

// Case page

// Swiper solution
let solution_swiper_blocks = document.querySelectorAll("._js-solution-swipers");

if (solution_swiper_blocks.length > 0) {
    solution_swiper_blocks.forEach((block) => {
        if (
            block.querySelector(".solution-item__swiper") &&
            block.querySelector(".solution-item__swiper-thumbs")
        ) {
            const thumbSlides = block.querySelectorAll(
                ".solution-item__swiper-thumbs .swiper-slide"
            );
            const mainSlides = block.querySelectorAll(
                ".solution-item__swiper .swiper-slide"
            );

            let mainSwiper = new Swiper(
                block.querySelector(".solution-item__swiper"),
                {
                    modules: [Navigation, Pagination],
                    speed: 700,
                    spaceBetween: 20,
                    pagination: {
                        el: ".swiper-pagination",
                        type: "bullets",
                        clickable: true,
                    },
                    on: {
                        slideChange: function (swiper) {
                            removeClass(thumbSlides, "active");

                            thumbSlides[swiper.activeIndex].classList.add(
                                "active"
                            );
                        },
                    },
                }
            );

            if (window.matchMedia("(max-width:1280px)").matches) {
                let thumbSwiper_node = new Swiper(
                    block.querySelector(".solution-item__swiper-thumbs"),
                    {
                        modules: [Navigation, Pagination],
                        speed: 700,
                        slidesPerView: 1,
                        autoHeight: true,
                        effect: "fade",
                        fadeEffect: {
                            crossFade: true,
                        },
                        breakpoints: {
                            1280: {
                                direction: "vertical",
                                autoHeight: false,
                                effect: false,
                                slidesPerView: "auto",
                                freeMode: {
                                    enabled: true,
                                },
                            },
                        },
                    }
                );
                thumbSwiper_node.controller.control = mainSwiper;
                mainSwiper.controller.control = thumbSwiper_node;
            }

            thumbSlides.forEach((thumb, index) => {
                thumb.addEventListener("click", () => {
                    // console.log(index);
                    mainSwiper.slideTo(index);
                });
            });
        }
    });
}

// Contact page, form
// select direction
let select_contact_direction__node = document.querySelector(
    "#direction-contacts"
);
if (select_contact_direction__node) {
    let direction_contact = new CustomSelect(select_contact_direction__node, {
        required: true,
    });
}

// Get in touch, form
const formContacts = document.querySelector("#contacts-form");
if (formContacts) {
    formContacts.addEventListener("submit", function (e) {
        e.preventDefault();

        let formData = new FormData(formContacts);

        if (validateForm(formContacts)) {
            fetch(formContacts.action, {
                method: "POST",
                headers: {
                    "X-Requested-With": "XMLHttpRequest", 
                    Accept: "application/json",
                },
                body: formData,
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        resetForm(formContacts);
                        showModal(document.querySelector("._js-alert-success"));
                    } else {
                        console.log("error");
                    }
                })
                .catch(() => {
                    console.log("error");
                });
        }
    });
}

// Cookies
const btnAcceptCookies = document.querySelector(".js-btn-accept-cookies"),
    btnRejectCookies = document.querySelector(".js-btn-reject-cookies"),
    modalCookies = document.querySelector(".modal-cookies");

if (modalCookies) {
    btnAcceptCookies.addEventListener("click", () => {
        let UTCDate = new Date(
            new Date().setFullYear(new Date().getFullYear() + 1)
        ).toUTCString();

        setCookie("user-cookies", true, { secure: true, expires: UTCDate });

        modalCookies.classList.add("hide");
    });

    btnRejectCookies.addEventListener("click", () => {
        modalCookies.classList.add("hide");
    });
}

function getCookie(name) {
    let matches = document.cookie.match(
        new RegExp(
            "(?:^|; )" +
                name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") +
                "=([^;]*)"
        )
    );
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
function setCookie(name, value, options = {}) {
    options = {
        path: "/",
        // при необходимости добавьте другие значения по умолчанию
        ...options,
    };

    if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
    }

    let updatedCookie =
        encodeURIComponent(name) + "=" + encodeURIComponent(value);

    for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
    }

    document.cookie = updatedCookie;
}

if (document.querySelectorAll(".form-download__item").length) {
    document.querySelectorAll(".form-download__item").forEach((item) => {
        item.addEventListener("click", () => {
            item.classList.add("clicked");
        });
    });
}

// Find last block in editor
var editor_blocks = document.querySelectorAll(".editor");
if (editor_blocks.length) {
    editor_blocks.forEach(function (block) {
        var children = block.children;
        if (children) {
            children[0].style.marginTop = "0px";
            children[children.length - 1].style.marginBottom = "0px";
        }
    });
}
