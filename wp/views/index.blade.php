@php
    $seo = (object) [
        'title' => 'Index',
    ];
@endphp
<x-wp-comp::layout :seo="$seo">
    <h1>Trang index</h1>
</x-wp-comp::layout>
