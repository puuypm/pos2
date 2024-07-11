<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

@include('layouts.inc.css')
</head>
<body class="hold-transition sidebar-mini">

<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include ('layouts.inc.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.inc.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('titlecate')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">@yield('title')</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          @yield('content')
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Sausu's Life
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('layouts.inc.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<!-- AdminLTE App -->
@include('layouts.inc.js')
@include('sweetalert::alert')
<script>
    $('.show_confirm').click(function(event){
        let form = $(this).closest('form');
        let name = $(this).data('name');

        event.preventDefault();

        const swalButton = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success mr-2",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
        });
        swalButton.fire({
            title: "Apakah Anda Yakin?",
            text: "Akan menghapus data ini?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yaa, Hapus!",
            confirmButtonClass: "mr-2",
            cancelButtonText: "Yaa, Jangan Dihapus!",
            reverseButton: true

        }).then((result) => {
            if(result.isConfirmed){
                form.submit();
            } else{
                swalButton.fire(
                    'Batal',
                    'Data Anda Aman :)',
                    'Error'

                )
            }
        });
    });
</script>
</body>
</html>
