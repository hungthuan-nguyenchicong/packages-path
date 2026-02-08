<x-wp-comp::layout :breadcrumb="$post->breadcrumb">
    {{ debug($post->breadcrumb) }}
    {{ debug($post) }}
    {{ debug($data['post']) }}
    {{ debug($data['post']->thumbnail->attachment) }}
    {{ debug($data['post']->seo_title) }}


    <p>wp/views/post.blade.php</p>
    {!! $post->content !!}
</x-wp-comp::layout>
