@include('components.layouts.head')
    @include('components.layouts.aside')
    @include('components.layouts.navbar')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        {{ $slot }}
    </div>
    <!-- / Content -->

    @include('components.layouts.copy-right-area')
@include('components.layouts.footer')
