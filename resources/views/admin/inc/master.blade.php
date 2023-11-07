@include('admin.inc.header')
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('admin.inc.nav')

  @include('admin.inc.sidebar')

  @include('admin.inc.content')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

      @include('admin.inc.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('admin.inc.scripts')
</body>
</html>
