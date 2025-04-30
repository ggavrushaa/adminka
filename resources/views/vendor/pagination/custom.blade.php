@if ($paginator->hasPages())
    <div class="pagination">
        <ul class="pagin-list">
            {{-- Назад --}}
            @if ($paginator->onFirstPage())
                <li class="pagin-page prev disabled"></li>
            @else
                <li class="pagin-page icon-short-arrow-left prev">
                    <a style="color: #FE6F21" href="{{ $paginator->previousPageUrl() }}" rel="prev" class="icon-short-arrow-left"></a>
                </li>
            @endif

            {{-- Страницы --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="pagin-page pagin-dots">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pagin-page active">{{ $page }}</li>
                        @else
                            <li class="pagin-page"><a style="color: #FE6F21" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Вперед --}}
            @if ($paginator->hasMorePages())
                <li class="pagin-page next">
                    <a style="color: #FE6F21" href="{{ $paginator->nextPageUrl() }}" rel="next" class="icon-short-arrow-right"></a>
                </li>
            @else
                <li class="pagin-page icon-short-arrow-right next disabled"></li>
            @endif
        </ul>
    </div>
@endif