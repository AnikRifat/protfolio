@include('admin.inc.header')
@include('admin.inc.nav')
@include('admin.inc.sidebar')

<!-- Begin page -->
<div id="wrapper">

    <div class="content-page">
        <div class="content">
            @yield('main-body')
        </div> <!-- content -->

    </div>
</div>
<!-- END wrapper -->


@include('admin.inc.footer')
