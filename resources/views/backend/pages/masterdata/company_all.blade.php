        @extends('backend.master_theme')
        @section('content')
        <!-- DataTables -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Company</h1>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-sm btn-info float-right">Add Company</a>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width:20px;">No</th>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                            @foreach($companyAll as $company)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $company->code }}
                                                    <br />
                                                    <a href="" title="Edit" class="text-sm text-warning">Edit</a> | <a href="" title="Delete" class="text-sm text-danger">Delete</a>
                                                </td>
                                                <td>{{ $company->name }}</td>
                                                <td>{{ $company->description }}</td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        @endsection
        @section('style')
        <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
        @endsection
        @section('script')
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('plugins/jszip/jszip.min.js')}}"></script>
        <script src="{{ asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{ asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    // "buttons": ["excel", "pdf", "print"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            });
        </script>
        @endsection