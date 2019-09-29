@include('admin.includes.head')
<section class="body">
    <!-- start: header -->
    @include('admin.includes.header')
    <!-- end: header -->
    <div class="inner-wrapper">
        <!-- start: sidebar -->
        @include('admin.includes.sidebar')
        <!-- end: sidebar -->
        <section role="main" class="content-body pb-0">
            @include('admin.includes.title')
            <!-- start: page -->
            @yield('content')
            <!-- end: page -->
        </section>
    </div>
</section>
@yield('script')
@include('admin.includes.foot')