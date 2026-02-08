@props(['data'])
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        {{-- lặp các trang con --}}
        @if ($data)
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            {{-- {{ debug($data) }} --}}
            @foreach ($data as $item)
                @foreach ($item as $url => $name)
                    @if ($url === 'active' || $loop->parent->last)
                        <li class="breadcrumb-item active" aria-current="page">{{ $name }}</li>
                    @else
                        <li class="breadcrumb-item"><a href="{{ $url }}">{{ $name }}</a></li>
                    @endif
                @endforeach
            @endforeach
        @else
            {{-- default trang index với / --}}
            <li class="breadcrumb-item active" aria-current="page">
                <x-wp-comp::breadcrumb.icon-home />
                Home
            </li>
        @endif
    </ol>
</nav>
