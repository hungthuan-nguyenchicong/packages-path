@props(['data'])

<title>{{ $data->title ?? 'Tiêu đề mặc định' }}</title>
<meta name="description" content="{{ $data->description ?? '' }}">
<link rel="canonical" href="{{ url()->current() }}">

<meta property="og:type" content="article">
<meta property="og:title" content="{{ $data->title ?? '' }}">
<meta property="og:description" content="{{ $data->description ?? '' }}">
<meta property="og:image" content="{{ $data->image ?? asset('default-share.jpg') }}">
<meta property="og:url" content="{{ url()->current() }}">

@if (!empty($data->schemaJsonLd))
    <script type="application/ld+json">
    {!! json_encode($data->schemaJsonLd, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
</script>
@endif
