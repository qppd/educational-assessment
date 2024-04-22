@include('includes/header')
@include('includes/modal_examinations')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ url('storage/images/topcitlogo.png') }}" alt="TOPCIT Logo" height="180"
                width="180">
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
                            <h1>Examinations</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Examinations</li>
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
                                <form action="/admin/examinations/manage" method="POST" class="form-horizontal">
                                    @csrf

                                    <table id="example3" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Duration</th>
                                                <th>No. of Questions</th>
                                                <th>Description</th>
                                                <th>Date & Time of Examination</th>
                                                <th>Status</th>
                                                <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($examinations as $examination)
                                                <tr>
                                                    <td>{{ $examination['id'] }}</td>
                                                    <td>{{ $examination['title'] }}</td>
                                                    <td>{{ $examination['duration'] . ' minutes' }}</td>
                                                    <td>{{ $examination['limit'] }}</td>
                                                    <td>{{ $examination['description'] }}</td>
                                                    <td>{{ $examination['examination_at'] }}</td>
                                                    <td>
                                                        @if ($examination['status'] == 'Pending')
                                                            <center><span
                                                                    class="badge bg-warning">{{ $examination['status'] }}</span>
                                                            </center>
                                                        @elseif ($examination['status'] == 'Active')
                                                            <center><span
                                                                    class="badge bg-green">{{ $examination['status'] }}</span>
                                                            </center>
                                                        @elseif ($examination['status'] == 'Finished')
                                                            <center><span
                                                                    class="badge bg-red">{{ $examination['status'] }}</span>
                                                            </center>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($examination['status'] == 'Pending')
                                                            <button type="button" class="btn btn-success btn-sm edit"
                                                                data-id="{{ $examination['id'] }}"><i
                                                                    class="fas fa-edit"></i>
                                                                Edit</button>

                                                            <a href="/admin/examinations/manage/{{ $examination['id'] }}"
                                                                class="btn bg-navy btn-sm" name = "examination_id"><i
                                                                    class="fas fa-briefcase"></i>
                                                                Manage </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <tfoot>

                                        </tfoot>
                                    </table>
                                </form>
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
                var employee_no = $(this).data('employee_no');
                var firstname = $(this).data('firstname');
                var surname = $(this).data('surname');
                var designation = $(this).data('designation');
                var photo = $(this).data('photo');
                var email = $(this).data('email');
                var contact = $(this).data('contact');
                var status = $(this).data('status');

                $('#edit_id').val(id);
                $('#edit_employee_no').val(employee_no);
                $('#edit_firstname').val(firstname);
                $('#edit_surname').val(surname);
                $('#edit_designation').val(designation).change();
                $("#edit_professor_photo").attr("src",
                    `{{ url('/storage/images/professors/${photo}') }}`);
                $('#edit_email').val(email);
                $('#edit_contact').val(contact);
                $('#edit_status').val(status).change();
            });

            // $('#example3 tbody').on("click", ".delete", function() {
            //     $('#delete').modal('show');
            //     var id = $(this).data('id');

            //     $('#delete_id').val(id);
            // });
        });
    </script>


</body>



</html>
