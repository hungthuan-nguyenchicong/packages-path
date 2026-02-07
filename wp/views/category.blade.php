<x-wp-comp::layout>
    <x-slot name="title">
        {{$cat->name}}
    </x-slot>
    {{-- {{debug($cat)}} --}}
    {{-- category --}}
    <h1>{{$cat->name}}</h1>
    <div class="mb-3">{{$cat->description}}</div>
    {{-- category-card --}}
    {{-- {{debug($posts->items())}} --}}
@if($posts)
    @foreach($posts as $post)
        <x-wp-comp::categories.category-card :post="$post" />
    @endforeach
    {{-- pagination --}}
    {{$posts->links('wp-view::pagination')}}
@else
    <div>no post</div>
@endif

</x-wp-comp::layout>