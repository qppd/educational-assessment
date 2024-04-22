@include('includes/header')
@include('includes/modal_students')

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
                            <h1>Students</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/admin/home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Students</li>
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
                                <a href="#upload" data-toggle="modal" class="btn btn-outline-dark btn-sm"><i
                                        class="fas fa-upload"></i> Upload</a>
                                <a href="/admin/student/export" class="btn btn-outline-dark btn-sm"><i
                                        class="fas fa-download"></i> Download Students Template</a>
                                <a href="#add" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fas fa-plus"></i> New</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example3" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Surname</th>
                                            <th>Firstname</th>
                                            <th>Middlename</th>
                                            <th>Status</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($students as $student)
                                            <tr>
                                                <td>{{ $student['student_no'] }}</td>
                                                <td>{{ $student['lastname'] }}</td>
                                                <td>{{ $student['firstname'] }}</td>
                                                <td>{{ $student['middlename'] }}</td>
                                                <td>

                                                    {{-- @if ($student['status'] == '1' && $student['account_status'] == 'with account') 
                                                        <center><span class="badge bg-green">UACTIVE</span></center>
                                                    @elseif ($student['status'] == '0' && $student['account_status'] == 'with account')
                                                        <center><span class="badge bg-red">UINACTIVE</span></center>
                                                    @elseif ($student['student_status'] == '1' && $student['account_status'] == 'without account')
                                                        <center><span class="badge bg-red">INACTIVE</span></center>
                                                    @elseif ($student['student_status'] == '0' && $student['account_status'] == 'without account')
                                                        <center><span class="badge bg-red">INACTIVE</span></center>
                                                    @endif --}}

                                                    @if ($student['account_status'] == 'with account')
                                                        @if ($student['user_status'] == '1')
                                                            <center><span class="badge bg-green">ACTIVE</span></center>
                                                        @elseif ($student['user_status'] == '0')
                                                            <center><span class="badge bg-red">INACTIVE</span></center>
                                                        @endif
                                                    @elseif ($student['account_status'] == 'without account')
                                                        @if ($student['student_status'] == '1')
                                                            <center><span class="badge bg-green">ACTIVE</span></center>
                                                        @elseif ($student['student_status'] == '0')
                                                            <center><span class="badge bg-red">INACTIVE</span></center>
                                                        @endif
                                                    @endif
                                                </td>

                                                <td>
                                                    @if ($student['account_status'] == 'with account')
                                                        <button type="button" class="btn btn-success btn-sm edit2"
                                                            data-id="{{ $student['id'] }}"
                                                            data-student_no="{{ $student['student_no'] }}"
                                                            data-lastname="{{ ucwords($student['lastname']) }}"
                                                            data-firstname="{{ ucwords($student['firstname']) }}"
                                                            data-middlename="{{ ucwords($student['middlename']) }}"
                                                            data-user_status="{{ $student['user_status'] }}"><i
                                                                class="fas fa-edit"></i>
                                                            Edit</button>
                                                    @elseif ($student['account_status'] == 'without account')
                                                        <button type="button" class="btn btn-success btn-sm edit"
                                                            data-id="{{ $student['id'] }}"
                                                            data-student_no="{{ $student['student_no'] }}"
                                                            data-lastname="{{ ucwords($student['lastname']) }}"
                                                            data-firstname="{{ ucwords($student['firstname']) }}"
                                                            data-middlename="{{ ucwords($student['middlename']) }}"
                                                            data-student_status="{{ $student['student_status'] }}"><i
                                                                class="fas fa-edit"></i>
                                                            Edit</button>
                                                    @endif



                                                    <button type="button" class="btn btn-danger btn-sm delete"
                                                        data-id="{{ $student['id'] }}"><i class="fas fa-trash"></i>
                                                        Delete</button>


                                                    <?php if($student['account_status'] == "with account"){ ?>
                                                    <button type="button" class="btn btn-primary btn-sm view"
                                                        data-id="{{ $student['student_no'] }}"
                                                        data-contact="{{ $student['contact'] }}"
                                                        data-email="{{ $student['email'] }}"><i class="fas fa-eye"></i>
                                                        View Account</button>
                                                    <?php } ?>
                                                </td>
                                            </tr>
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
                var student_no = $(this).data('student_no');
                var lastname = $(this).data('lastname');
                var firstname = $(this).data('firstname');
                var middlename = $(this).data('middlename');
                var status = $(this).data('student_status');
                console.log(status);
                $('#edit_id').val(id);
                $('#edit_student_no').val(student_no);
                $('#edit_lastname').val(lastname);
                $('#edit_firstname').val(firstname);
                $('#edit_middlename').val(middlename);
                $('#edit_status').val(status).change();
            });

            $('#example3 tbody').on("click", ".edit2", function() {
                $('#edit2').modal('show');

                var id = $(this).data('id');
                var student_no = $(this).data('student_no');
                var lastname = $(this).data('lastname');
                var firstname = $(this).data('firstname');
                var middlename = $(this).data('middlename');
                var status = $(this).data('user_status');
                console.log(status);
                $('#edit2_id').val(id);
                $('#edit2_student_no').val(student_no);
                $('#edit2_lastname').val(lastname);
                $('#edit2_firstname').val(firstname);
                $('#edit2_middlename').val(middlename);
                $('#edit2_status').val(status).change();
            });

            $('#example3 tbody').on("click", ".delete", function() {
                $('#delete').modal('show');
                var id = $(this).data('id');

                $('#delete_id').val(id);
            });

            $('#example3 tbody').on("click", ".view", function() {
                $('#view').modal('show');
                var studentNo = $(this).data('id');
                var contact = $(this).data('contact');
                var email = $(this).data('email');
                $('#view_contact').val(contact);
                $('#view_email').val(email);

                // Assuming you have a route to fetch the student's images
                $.ajax({
                    url: '/admin/student/images/' + studentNo,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        // if (data.images.length > 0) {
                        //     var imageContainer = $('#imageContainer');
                        //     imageContainer.empty(); // Clear previous images
                        //     console.log(data);
                        //     $.each(data.images, function(index, image) {

                        //         var imageUrl = '/storage/images/students/' + studentNo +
                        //             '/' + image;

                        //         console.log(imageUrl);
                        //         var imgElement = $('<img>').attr('src', imageUrl)
                        //             .addClass('img-thumbnail');
                        //         imageContainer.append(imgElement);
                        //     });
                        // } else {
                        //     $('#imageContainer').html(
                        //         '<p>No images available for this student.</p>');
                        // }
                    },
                    error: function(xhr, status, error) {
                        //console.error('Error fetching images:', error);
                        //console.log('XHR status:', xhr.status);
                        //console.log('XHR response text:', xhr.responseText);
                    }
                });
            });
        });
    </script>


</body>

</html>
