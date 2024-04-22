<!-- Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Student | New</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/student/add" enctype="multipart/form-data">
                    @csrf
                    <div class="card" style="width:100%;">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Personal Information</h3>
                        </div>
                        <div class="card-body">

                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="student_no" class="col-sm-12 control-label">Student No.</label>
                                    <div class="col-xs-12">
                                        <input type="text" class="form-control" id="student_no" name="student_no"
                                            placeholder="Ex: 0000000001"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <p>Fill student's personal information below.</p>
                            <div class="row">

                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="lastname" class="col-sm-12 control-label">Last Name</label>
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" id="lastname" name="lastname"
                                                placeholder="Ex: Dela Cruz"
                                                oninput="this.value = this.value.replace(/[^A-Z a-z ]/g, '');" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="firstname" class="col-sm-12 control-label">First Name</label>
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" id="firstname" name="firstname"
                                                placeholder="Ex: Juan"
                                                oninput="this.value = this.value.replace(/[^A-Z a-z ]/g, '');" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="middlename" class="col-sm-12 control-label">M.I.</label>
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" id="middlename" name="middlename"
                                                placeholder="Ex: T"
                                                oninput="this.value = this.value.replace(/[^A-Z a-z .]/g, '');">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>

                        </div>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- Add -->


<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Student | Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/student/edit" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="edit_id" name="id">
                    <div class="card" style="width:100%;">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Personal Information</h3>
                        </div>
                        <div class="card-body">

                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="edit_student_no" class="col-sm-12 control-label">Student No.</label>
                                    <div class="col-xs-12">
                                        <input type="text" class="form-control" id="edit_student_no"
                                            name="student_no" placeholder="Ex: 0000000001"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <p>Fill student's personal information below.</p>
                            <div class="row">

                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="edit_lastname" class="col-sm-12 control-label">Last Name</label>
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" id="edit_lastname"
                                                name="lastname" placeholder="Ex: Dela Cruz"
                                                oninput="this.value = this.value.replace(/[^A-Z a-z ]/g, '');"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="edit_firstname" class="col-sm-12 control-label">First Name</label>
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" id="edit_firstname"
                                                name="firstname" placeholder="Ex: Juan"
                                                oninput="this.value = this.value.replace(/[^A-Z a-z ]/g, '');"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="edit_middlename" class="col-sm-12 control-label">M.I.</label>
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" id="edit_middlename"
                                                name="middlename" placeholder="Ex: T"
                                                oninput="this.value = this.value.replace(/[^A-Z a-z .]/g, '');">
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <br>
                            <p>Choose student's account status.</p>
                            <div class="form-group">
                                <label for="edit_status" class="col-sm-3 control-label">Status</label>

                                <div class="col-sm-4">
                                    <select class="form-control" id="edit_status" name="sstatus" required>
                                        <option value="" selected>- Select -</option>
                                        <option value="1">Enabled</option>
                                        <option value="0">Disabled</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>



            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- Edit -->


<!-- Edit 2-->
<div class="modal fade" id="edit2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Student | Edit 2</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/student/editaccount" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="edit2_id" name="id">
                    <div class="card" style="width:100%;">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Personal Information</h3>
                        </div>
                        <div class="card-body">

                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="edit2_student_no" class="col-sm-12 control-label">Student No.</label>
                                    <div class="col-xs-12">
                                        <input type="text" class="form-control" id="edit2_student_no"
                                            name="student_no" placeholder="Ex: 0000000001"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <p>Fill student's personal information below.</p>
                            <div class="row">

                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="edit2_lastname" class="col-sm-12 control-label">Last Name</label>
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" id="edit2_lastname"
                                                name="lastname" placeholder="Ex: Dela Cruz"
                                                oninput="this.value = this.value.replace(/[^A-Z a-z ]/g, '');"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="edit2_firstname" class="col-sm-12 control-label">First Name</label>
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" id="edit2_firstname"
                                                name="firstname" placeholder="Ex: Juan"
                                                oninput="this.value = this.value.replace(/[^A-Z a-z ]/g, '');"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="edit2_middlename" class="col-sm-12 control-label">M.I.</label>
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" id="edit2_middlename"
                                                name="middlename" placeholder="Ex: T"
                                                oninput="this.value = this.value.replace(/[^A-Z a-z .]/g, '');">
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <br>
                            <p>Choose student's account status.</p>
                            <div class="form-group">
                                <label for="edit2_status" class="col-sm-3 control-label">Status</label>

                                <div class="col-sm-4">
                                    <select class="form-control" id="edit2_status" name="sstatus" required>
                                        <option value="" selected>- Select -</option>
                                        <option value="1">Enabled</option>
                                        <option value="0">Disabled</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>



            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- Edit 2-->




<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Student | Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="GET" action="/admin/student/delete">
                    @csrf
                    <input type="hidden" id="delete_id" name="id">
                    <div class="text-center">
                        <h2 class="bold"> Are you sure you want to delete this Student?</h2>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
                <button type="submit" class="btn btn-danger"> Delete</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- Delete -->



<!-- Upload -->
<div class="modal fade" id="upload">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Students | Upload</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/student/upload"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="excel" class="col-sm-3 control-label">Excel</label>

                        <div class="col-sm-12">
                            <input type="file" accept=".xls, .xlsx" id="excel" name="excel">
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Upload</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- Upload -->


<!-- View -->
<div class="modal fade" id="view">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Student | View</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/student/upload"
                    enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="contact" class="col-sm-12 control-label">Contact No.</label>
                                <div class="col-xs-12">
                                    <input type="text" class="form-control" id="view_contact" name="contact" 
                                        oninput="this.value = this.value.replace(/[^0-9 ]/g, '');" maxlength="11"
                                        disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="email" class="col-sm-12 control-label">Email Address</label>
                                <div class="col-xs-12">
                                    <input type="email" class="form-control" id="view_email" name="email" disabled>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="form-group">
                        {{-- <label for="student_images" class="col-sm-3 control-label">Student Images</label> --}}

                        <div class="col-sm-12">
                            <div class="row" id="imageContainer">
                                <!-- Images will be dynamically inserted here -->
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{-- <button type="submit" class="btn btn-success">Upload</button> --}}
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- View -->
