@include('includes/header')
@include('includes/modal_administrators')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ url('storage/images/topcitlogo.png') }}" alt="TOPCIT Logo"
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
                            <h1>Home</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active"><a href="{{ url('home') }}">Home</a></li>
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

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        @if(session('role') != 1)
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    @foreach ($administrators as $administrator)
                                    <h3>{{ $administrator['administrator_count'] }}</h3>
                                    @endforeach

                                    
                                    <p>Administrators</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-user-secret"></i>
                                </div>
                                <a href="{{ url('/admin/administrators') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        @endif
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <!--<h3>53<sup style="font-size: 20px">%</sup></h3> -->
                                    @foreach ($professors as $professor)
                                    <h3>{{ $professor['professors_count'] }}</h3>
                                    @endforeach

                                    <p>Professors</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-user-tie"></i>
                                </div>
                                <a href="{{ url('/admin/professors') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    @foreach ($students as $student)
                                    <h3>{{ $student['students_count'] }}</h3>
                                    @endforeach

                                    <p>Students</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <a href="{{ url('/admin/students') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    @foreach ($examinations as $examination)
                                    <h3>{{ $examination['examinations_count'] }}</h3>
                                    @endforeach

                                    <p>Examinations</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-list"></i>
                                </div>
                                <a href="{{ url('/admin/examinations') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-md-12">
                            <!-- USERS LIST -->
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">Examinee Ranking</h3>
            
                                <div class="card-tools">
                                  {{-- <span class="badge badge-danger">8 New Members</span> --}}
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                  </button>
                                </div>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body p-0">
                                <ul class="users-list clearfix">

                                    @foreach ($rankedStudents as $rank => $student) 

                                    <li>
                                        <img src="{{ url('storage/images/students/' . $student->photo) }}" alt="User Image">
                                        <h2>{{ "Rank: " . ($rank + 1) }}</h2>
                                        <h3>{{ $student->firstname . " " . $student->surname }}</h3>
                                        <h5>{{ "Average: " . number_format($student->average_score, 2) }}</h5>
                                      </li>
                                        {{-- echo "Rank: " . ($rank + 1) . "<br>";
                                        echo "Student Name: " . $student->firstname . " " . $student->lastname . "<br>";
                                        echo "Average Score: " . $student->average_score . "<br>";
                                        echo "<hr>"; --}}
                                    @endforeach
                                  
                                  
                                </ul>
                                <!-- /.users-list -->
                              </div>
                              <!-- /.card-body -->
                              <div class="card-footer text-center">
                                <a href="javascript:">-</a>
                              </div>
                              <!-- /.card-footer -->
                            </div>
                            <!--/.card -->
                          </div>
                          <!-- /.col -->
                        
                    


                    </div>
                    <!-- /.row -->

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

            $('#example2 tbody').on("click", ".edit", function() {
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

            $('#example2 tbody').on("click", ".delete", function() {
                $('#delete').modal('show');
                var id = $(this).data('id');

                $('#delete_id').val(id);
            });
        });
    </script>


</body>



</html>
