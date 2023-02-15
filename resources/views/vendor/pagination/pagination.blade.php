@if ($paginator->hasPages())
    <div class="news_pagination__cart">
        <ul class="news_pagination">
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <li>
                    <a class="news_pagination__next" href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')"><i class="fas fa-angle-double-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a class="news_pagination__page active"><span>{{ $page }}</span></a></li>
                        @else
                            <li><a class="news_pagination__page" href="{{ $url }}"><span>{{ $page }}</span></a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="news_pagination__next" aria-label="@lang('pagination.next')"><i class="fas fa-angle-double-right"></i></a>
                </li>
            @endif
        </ul>
    </div>
@endif
