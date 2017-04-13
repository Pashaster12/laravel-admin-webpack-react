<!DOCTYPE html>
<html lang="ru">

@include('admin.layouts.htmlheader')

<body class="skin-blue sidebar-mini">
    <div id="app">
        <div class="wrapper">

        @include('admin.layouts.mainheader')

        @include('admin.layouts.sidebar')

        <div class="content-wrapper">

            @include('admin.layouts.contentheader')

            <section class="content">
                @yield('main-content')
            </section>
        </div>

        @include('admin.layouts.controlsidebar')

        @include('admin.layouts.footer')

    </div>
</div>
    
@include('admin.layouts.scripts')

</body>
</html>
