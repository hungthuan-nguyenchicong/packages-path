{{-- <nav aria-label="navigation"> --}}
  <ul class="pagination">
    {{-- Nút Previous --}}
    @if ($paginator->onFirstPage())
      <li class="page-item disabled"><span class="page-link">Previous</span></li>
    @else
      <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Previous</a></li>
    @endif

    {{-- Duyệt các trang --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator (Nếu có quá nhiều trang) --}}
        @if (is_string($element))
            <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
        @endif

        {{-- Mảng các link trang --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Nút Next --}}
    @if ($paginator->hasMorePages())
      <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a></li>
    @else
      <li class="page-item disabled"><span class="page-link">Next</span></li>
    @endif
  </ul>
{{-- </nav> --}}
