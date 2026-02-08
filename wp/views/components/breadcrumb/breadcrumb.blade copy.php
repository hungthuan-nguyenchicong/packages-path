@props(['items' => []])
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        {{-- lặp các trang con --}}
        @if ($items)
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            {{ debug($items->attributes->toArray()) }}
            @foreach ($items as [$url, $name])
                <li class="breadcrumb-item"><a href="{{ $url }}">{{ $name }}</a></li>
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
