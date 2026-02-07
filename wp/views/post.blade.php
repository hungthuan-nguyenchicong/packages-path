<x-wp-comp::layout>
    {{ debug($post) }}
    {{ debug($data['post']) }}
    <p>wp/views/post.blade.php</p>
    {!! $post->content !!}
</x-wp-comp::layout>
