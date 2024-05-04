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

    <title>Admin Login</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                {{-- <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a> --}}
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
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
    
        <!-- Your custom CKEDITOR setup -->
        <!-- <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('editor1');
        </script> -->
    </body>
    
    </html>
    
    </body>
</html>
