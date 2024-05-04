<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets') }}/img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets') }}/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets') }}/img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('assets') }}/img/favicon_io/site.webmanifest">
    <link rel="shortcut icon" href="./img/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/animate.css">
    <!-- Coustom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/styleothers.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/proggress.css">
    <!-- DataTable CSS -->
    <link href="css/dataTable/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link href="css/dataTable/css/jquery.dataTables.mi.css" rel="stylesheet">

    <!-- Fontawsome -->
    <script src="https://kit.fontawesome.com/ef949075f5.js" crossorigin="anonymous"></script>

    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('assets') }}/js/jquery.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>

    {{-- summer note --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <title>Admin Panel</title>
</head>

<body>

    <div id="loader" class="LoadingOverlay d-none">
        <div class="Line-Progress">
            <div class="indeterminate"></div>
        </div>
    </div>

    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- End Navbar -->

    @yield('content')

    <!-- Footer Section 2 Start -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Common Scripts -->
    <script type="text/javascript" src="{{ asset('assets') }}/js/adminscript.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/js/confiq.js"></script>

    <!-- jQuery UI -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <!-- DataTable Initialization -->
    <script>
        $(document).ready(function() {
            let table = new DataTable('#myTable');
        });
    </script>

    <!-- jQuery initialization -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        $('#summernote').summernote({
          tabsize: 3,
          height: 700
        });
      </script>

    <!-- Your custom CKEDITOR setup -->
    <!-- <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script> -->
</body>

</html>
