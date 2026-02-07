@props(['post'])
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ $post->featured_image_src }}" class="img-fluid rounded-start"
                alt="{{ $post->featured_image_alt }}">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="{{ url($post->slug) }}" class="link-primary text-decoration-none fw-semibold">
                    Xem Thêm
                </a>
            </div>
        </div>
    </div>
</div>
