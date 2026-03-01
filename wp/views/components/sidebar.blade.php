@env('local')
    <x-wp-compName::sidebar-component />
@else
    {{-- Trả về thẻ kỹ thuật cho Nginx server --}}
    <!-- #include virtual="/esi/sidebar" -->
    <esi:include src="/esi/sidebar" />
@endenv
