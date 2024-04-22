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
                                            @php
                                                $examinationsCount = 1;
                                            @endphp

                                            @foreach ($examinations as $examination)
                                                <tr>
                                                    <td>{{ $examination['id'] }}</td>
                                                    <td><b>{{ $examination['title'] }}</b></td>
                                                    <td>{{ $examination['duration'] . ' minutes' }}</td>
                                                    <td>{{ $examination['question_count'] .'/'. $examination['limit'] }}
                                                    </td>
                                                    <td>{{ $examination['description'] }}</td>
                                                    <td><b>{{ $examination['examination_at'] }}</b></td>

                                                    <td>
                                                        <center>
                                                            @if ($examination['status'] == 'Pending')
                                                                <span
                                                                    class="badge bg-warning">{{ $examination['status'] }}</span>
                                                            @elseif ($examination['status'] == 'Active')
                                                                <span
                                                                    class="badge bg-green">{{ $examination['status'] }}</span>
                                                            @elseif ($examination['status'] == 'Finished')
                                                                <span
                                                                    class="badge bg-red">{{ $examination['status'] }}</span>
                                                            @endif
                                                        </center>
                                                    </td>
                                                    <td>
                                                        @if ($examination['status'] == 'Pending')
                                                            <button type="button" class="btn btn-success btn-sm edit"
                                                                data-id="{{ $examination['id'] }}"
                                                                data-title="{{ $examination['title'] }}"
                                                                data-duration="{{ $examination['duration'] }}"
                                                                data-limit="{{ $examination['limit'] }}"
                                                                data-description="{{ $examination['description'] }}"
                                                                data-datetime="{{ $examination['examination_at'] }}"
                                                                data-status="{{ $examination['statusInt'] }}"><i
                                                                    class="fas fa-edit"></i>
                                                                Edit</button>
                                                                {{-- <p>{{ $examination['question_count'] }}</p> --}}

                                                            @if ($examination['question_count'] < $examination['limit'])
                                                                <a href="/admin/examinations/manage/{{ $examination['id'] }}"
                                                                    class="btn bg-navy btn-sm" name = "question"><i
                                                                        class="fas fa-question"></i>
                                                                    Questions </a>
                                                            @endif

                                                            <a href="/admin/examinations/reviewers/{{ $examination['id'] }}"
                                                                class="btn bg-navy btn-sm" name = "reviewer"><i
                                                                    class="fas fa-file"></i>
                                                                Reviewers </a>
                                                            <button type="button" class="btn btn-danger btn-sm delete"
                                                                data-id="{{ $examination['id'] }}"><i
                                                                    class="fas fa-trash"></i>
                                                                Delete</button>
                                                        @elseif($examination['status'] == 'Active')
                                                            <button type="button" class="btn btn-success btn-sm edit"
                                                                data-id="{{ $examination['id'] }}"
                                                                data-title="{{ $examination['title'] }}"
                                                                data-duration="{{ $examination['duration'] }}"
                                                                data-limit="{{ $examination['limit'] }}"
                                                                data-description="{{ $examination['description'] }}"
                                                                data-datetime="{{ $examination['examination_at'] }}"
                                                                data-status="{{ $examination['statusInt'] }}"><i
                                                                    class="fas fa-edit"></i>
                                                                Edit</button>
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
                var title = $(this).data('title');
                var duration = $(this).data('duration');
                var limit = $(this).data('limit');
                var description = $(this).data('description');
                var datetime = $(this).data('datetime');
                var status = $(this).data('status');

                //console.log(title);
                $('#edit_id').val(id);
                $('#edit_title').val(title);
                $('#edit_duration').val(duration).change();
                $('#edit_limit').val(limit);
                $('#edit_description').val(description);
                // $("#edit_professor_photo").attr("src",
                //     `{{ url('/storage/images/professors/${photo}') }}`);
                // $('#edit_email').val(email);
                //console.log(datetime);
                $('#edit_datetime').val(datetime);
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
