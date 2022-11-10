<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
        <!-- Responsive-->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css') }}">
        <!-- fevicon -->
        <link rel="icon" href="{{asset('assets/icon/logo.jpg') }}" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <!-- <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css"> -->
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

        <link rel="stylesheet" href="{{ asset('assets/page_accueil/main.css') }}">

        <!-- DataTables -->
        <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

        <!-- Sweetalert2 -->
        <link rel="stylesheet" href="{{asset('assets/plugins/sweetalert2/sweetalert2.min.css')}}">
        <!-- Toastr -->
        <link rel="stylesheet" href="{{asset('assets/plugins/toastr/toastr.min.css')}}"-->

        <title>Softdemy</title>
        @livewireStyles
    </head>

    <style>
        body{
            background-color: rgb(252, 252, 252);
        }

        label{
            color: rgb(2, 2, 2);
        }

        a{
            color: rgb(2, 6, 87);
        }

        span{
            color: rgb(2, 6, 87);
        }
    </style>

    <body class="main-layout footer_to90 contact_page">
        @include('partials.navbar')

            {{-- <livewire:flash  /> --}}

        @yield('content')

        @include('partials.footer')

        <!-- Javascript files-->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script>
        <!-- sidebar -->
        <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>

        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="{{asset('assets/js/init.js')}}"></script>
        <!-- jQuery -->
        <script src="{{asset('assets/js/jquery.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- Toastr -->
        <script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>
        <!-- sweetalert2 -->
        <script src="{{asset('assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- DataTables  & Plugins -->
        <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/plugins/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

        <script type="text/javascript">
            $(function(){
                $(document).on('click', '#delete', function(e) {
                    e.preventDefault();
                    var link = $(this).attr('href');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Delete this data",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = link;
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }
                    })
                });
            });
        </script>
        <script>
                $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            });
        });
        </script>

        <script>
            var slideshow = 0;
        </script>
        @livewireScripts
        {!! Toastr::message() !!}

    </body>
</html>
