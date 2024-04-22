@include('includes/header')
@include('includes/modal_administrators')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ url('storage/images/topcitlogo.png') }}" alt="Blood Reserve Logo"
                height="180" width="180">
            <h1>TOPCIT</h1>
        </div>

        @include('includes/navbar')
        @include('includes/menubar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Administrators</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Administrators</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">

                @if ($errors->any())
                    <div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-warning'></i> Error!</h4>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-check'></i> Success!</h4>
                        <ul>
                            {{ session()->get('success') }}
                        </ul>
                    </div>
                @endif

                <div class="container-fluid">

                    <div class="row">

                        <div class="card" style="width:100%;">
                            <div class="card-header">
                                <a href="#add" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fas fa-plus"></i> New</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example3" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Surname</th>
                                            <th>Firstname</th>
                                            <th>Middle Initial</th>

                                            <th>Email</th>
                                            <th>Contact No.</th>
                                            <th>Status</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($administrators as $administrator)
                                            @if ($administrator['username'] != 'admin')
                                                <tr>
                                                    <td>{{ $administrator['username'] }}</td>
                                                    <td>{{ $administrator['surname'] }}</td>
                                                    <td>{{ $administrator['firstname'] }}</td>
                                                    <td>{{ $administrator['middlename'] }}</td>

                                                    <td>{{ $administrator['email'] }}</td>
                                                    <td>{{ $administrator['contact'] }}</td>
                                                    <td>
                                                        @if ($administrator['status'] == 1)
                                                            <center><span class="badge bg-green">ACTIVE</span></center>
                                                        @else
                                                            <center><span class="badge bg-red">INACTIVE</span></center>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-success btn-sm edit"
                                                            data-id="{{ $administrator['id'] }}"
                                                            data-firstname="{{ ucwords($administrator['firstname']) }}"
                                                            data-middlename="{{ ucwords($administrator['middlename']) }}"
                                                            data-surname="{{ ucwords($administrator['surname']) }}"
                                                            data-photo="{{ $administrator['photo'] }}"
                                                            data-email="{{ $administrator['email'] }}"
                                                            data-contact="{{ $administrator['contact'] }}"
                                                            data-status="{{ $administrator['status'] }}"
                                                            data-bank="{{ $administrator['bank_id'] }}"><i
                                                                class="fas fa-edit"></i>
                                                            Edit</button>

                                                        <button type="button" class="btn btn-danger btn-sm delete"
                                                            data-id="{{ $administrator['id'] }}"><i
                                                                class="fas fa-trash"></i>
                                                            Delete</button>

                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('includes/footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    @include('includes/scripts')
    <script>
        $(function() {

            $('#example3 tbody').on("click", ".edit", function() {
                $('#edit').modal('show');
                var id = $(this).data('id');
                var firstname = $(this).data('firstname');
                var middlename = $(this).data('middlename');
                var surname = $(this).data('surname');
                var photo = $(this).data('photo');
                var bank = $(this).data('bank');
                var email = $(this).data('email');
                var contact = $(this).data('contact');
                var latitude = $(this).data('latitude');
                var longitude = $(this).data('longitude');
                var status = $(this).data('status');

                $('#edit_id').val(id);
                $('#edit_firstname').val(firstname);
                $('#edit_middlename').val(middlename);
                $('#edit_surname').val(surname);
                $("#edit_administrator_photo").attr("src",
                    `{{ url('/storage/images/administrators/${photo}') }}`);
                $('#edit_bank').val(bank).change();
                $('#edit_email').val(email);
                $('#edit_contact').val(contact);
                $('#edit_status').val(status).change();
            });

            $('#example3 tbody').on("click", ".delete", function() {
                $('#delete').modal('show');
                var id = $(this).data('id');

                $('#delete_id').val(id);
            });
        });
    </script>


</body>



</html>
