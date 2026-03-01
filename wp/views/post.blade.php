<x-wp-comp::layout :breadcrumb="$post->breadcrumb">
    {{-- {{ debug($post->breadcrumb) }} --}}
    {{ debug($post) }}
    {{ debug($data) }}

    <p>wp/views/post.blade.php</p>
    {!! $post->content !!}
</x-wp-comp::layout>
