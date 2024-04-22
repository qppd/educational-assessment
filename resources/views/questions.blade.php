@include('includes/header')
@include('includes/modal_questions')

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
                            <h1>Questions|<b>{{ $examination->title }}</b></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                                <li class="breadcrumb-item">Examinations</li>
                                <li class="breadcrumb-item active">Questions</li>
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
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Question</th>
                                            <th>Type</th>
                                            <th>Choice A</th>
                                            <th>Choice B</th>
                                            <th>Choice C</th>
                                            <th>Choice D</th>
                                            <th>Answer</th>
                                            <th>Status</th>
                                            <th>By</th>
                                            <th>Date Created</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form action="/admin/examinations/manage" method="POST"
                                            class="form-horizontal">
                                            @foreach ($questions as $question)
                                                <tr>
                                                    <!--
                                                        SELECT `id`, `examination_id`, `question`, `type`, `choice_1`, `choice_2`,
                                                        `choice_3`, `choice_4`, `answer`, `status`, `professor_id`, `created_at`,
                                                         `updated_at` FROM `questions` WHERE 1
                                                     -->
                                                    <td>{{ $question['id'] }}</td>
                                                    {{-- <td>{{ $question['question'] }}</td> --}}
                                                    <td>{!! $question['question'] !!}</td>
                                                    <td>{{ $question['type'] }}</td>
                                                    <td>{{ $question['choice_1'] }}</td>
                                                    <td>{{ $question['choice_2'] }}</td>
                                                    <td>{{ $question['choice_3'] }}</td>
                                                    <td>{{ $question['choice_4'] }}</td>
                                                    <td>{{ $question['answer'] }}</td>
                                                    <td>
                                                        @if ($question['status'] == 'Pending')
                                                            <center><span
                                                                    class="badge bg-warning">{{ $question['status'] }}</span>
                                                            </center>
                                                        @elseif ($question['status'] == 'Approved')
                                                            <center><span
                                                                    class="badge bg-green">{{ $question['status'] }}</span>
                                                            </center>
                                                        @elseif ($question['status'] == 'Rejected')
                                                            <center><span
                                                                    class="badge bg-red">{{ $question['status'] }}</span>
                                                            </center>
                                                        @endif
                                                    </td>
                                                    <td>{{ $question['professor'] }}</td>
                                                    <td>{{ $question['created_at'] }}</td>


                                                    <td>
                                                        @if ($question['status'] == 'Pending')
                                                            <button type="button" class="btn btn-success btn-sm approve"
                                                                data-id="{{ $question['id'] }}"><i
                                                                    class="fas fa-check"></i>
                                                                Approve</button>

                                                            <button type="button" class="btn btn-danger btn-sm reject"
                                                                data-id="{{ $question['id'] }}"><i
                                                                    class="fas fa-close"></i>
                                                                Reject</button>

                                                            <!--<button type="submit" class="btn bg-navy btn-sm"
                                                                name = "examination_id"
                                                                value="{{ $question['id'] }}"><i
                                                                    class="fas fa-briefcase"></i>
                                                                Delete </button> -->
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </form>
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

            $('#example2 tbody').on("click", ".approve", function() {
                $('#approve').modal('show');
                var id = $(this).data('id');

                $('#approve_id').val(id);
            });

            $('#example2 tbody').on("click", ".reject", function() {
                $('#reject').modal('show');
                var id = $(this).data('id');

                $('#reject_id').val(id);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#type').change(function() {
                var selectedOption = $(this).val();
                if (selectedOption == '1' || selectedOption == '2') {
                    $('#choices_header').hide();
                    $('#choice_a_label').hide();
                    $('#choice_b_label').hide();
                    $('#choice_c_label').hide();
                    $('#choice_d_label').hide();
                    $('#choice_a').hide();
                    $('#choice_b').hide();
                    $('#choice_c').hide();
                    $('#choice_d').hide();
                } else {
                    $('#choices_header').show();
                    $('#choice_a_label').show();
                    $('#choice_b_label').show();
                    $('#choice_c_label').show();
                    $('#choice_d_label').show();
                    $('#choice_a').show();
                    $('#choice_b').show();
                    $('#choice_c').show();
                    $('#choice_d').show();
                }
            });
        });
    </script>

</body>

</html>
