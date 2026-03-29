@if ($paginator->hasPages())
    <nav class="custom-pagination" role="navigation" aria-label="Pagination Navigation">
        <div class="pagination-list">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="pagination-item disabled">Previous</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="pagination-item">Previous</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="pagination-item dots">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="pagination-item active">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="pagination-item">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="pagination-item">Next</a>
            @else
                <span class="pagination-item disabled">Next</span>
            @endif

        </div>
    </nav>
@endif