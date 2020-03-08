@if ($paginator->hasPages())
<nav class="pagination is-centered" role="navigation" aria-label="pagination">
  {{-- Previous Page Link --}}
  @if ($paginator->onFirstPage())
  <a class="pagination-previous disabled">Previous</a>
  @else
  <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination-previous disabled">Previous</a>
  @endif
  {{-- Pagination Elements --}}
  @foreach ($elements as $element)
  {{-- "Three Dots" Separator --}}
  @if (is_string($element))
  <li class="disabled"><span>{{ $element }}</span></li>
  @endif
  {{-- Array Of Links --}}
  @if (is_array($element))
  @foreach ($element as $page => $url)
  @if ($page == $paginator->currentPage())
  <li><a class="active pagination-link">{{ $page }}</a></li>
  @else
  <li><a href="{{ $url }}" class="pagination-link">{{ $page }}</a></li>
  @endif
  @endforeach
  @endif
  @endforeach

  {{-- Next Page Link --}}
  @if ($paginator->hasMorePages())
  <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination-next">Next page</a>
  @else
  <a class="disable pagination-next">Next page</a>
  @endif
</nav>
@endif
