<!-- Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Examination | New</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/examinations/add"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card" style="width:100%;">
                        <div class="card-body">

                            <p>Title will be the main heading of the examination.</p>


                            <div class="row">

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label for="title" class="col-sm-3 control-label">Title</label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Ex: PROGRAMMING 101"
                                                oninput="this.value = this.value.replace(/[^a-z A-Z 0-9]/g, '');" required>

                                            <!--<textarea id="summernote">
                                                    Place <em>some</em> <u>text</u> <strong>here</strong>
                                                  </textarea> -->
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <br>
                            <p>Choose examination's time and question limit.</p>
                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="duration" class="col-sm-12 control-label">Duration</label>
                                        <div class="col-xs-12">
                                            <select class="form-control" id="duration" name="duration" required>
                                                <option value="" selected>- Select -</option>
                                                <option value="5">5 minutes</option>
                                                <option value="10">10 minutes</option>
                                                <option value="15">15 minutes</option>
                                                <option value="20">20 minutes</option>
                                                <option value="25">25 minutes</option>
                                                <option value="30">30 minutes</option>
                                                <option value="35">35 minutes</option>
                                                <option value="40">40 minutes</option>
                                                <option value="45">45 minutes</option>
                                                <option value="50">50 minutes</option>
                                                <option value="55">55 minutes</option>
                                                <option value="60">60 minutes</option>
                                                <option value="65">65 minutes</option>
                                                <option value="70">70 minutes</option>
                                                <option value="75">75 minutes</option>
                                                <option value="80">80 minutes</option>
                                                <option value="85">85 minutes</option>
                                                <option value="90">90 minutes</option>
                                                <option value="95">95 minutes</option>
                                                <option value="100">100 minutes</option>
                                                <option value="105">105 minutes</option>
                                                <option value="110">110 minutes</option>
                                                <option value="115">115 minutes</option>
                                                <option value="120">120 minutes</option>
                                                <option value="125">125 minutes</option>
                                                <option value="130">130 minutes</option>
                                                <option value="135">135 minutes</option>
                                                <option value="140">140 minutes</option>
                                                <option value="145">145 minutes</option>
                                                <option value="150">150 minutes</option>
                                                <option value="155">155 minutes</option>
                                                <option value="160">160 minutes</option>
                                                <option value="165">165 minutes</option>
                                                <option value="170">170 minutes</option>
                                                <option value="175">175 minutes</option>
                                                <option value="180">180 minutes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="limit" class="col-sm-12 control-label">No. of Question</label>
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" id="limit" name="limit"
                                                placeholder="Ex: 100"
                                                oninput="this.value = this.value.replace(/[^0-9 ]/g, '');"
                                                maxlength = "11" minLength = "11" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <p>Put examination details.</p>
                            <div class="row">

                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label for="surname"
                                            class="col-sm-12 control-label">Instruction/Description</label>
                                        <div class="col-xs-12">
                                            <textarea class="form-control" id="description" name="description" placeholder="Enter description here..."
                                                row="3" oninput="this.value = this.value.replace(/[^A-Z a-z ]/g, '');" required></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <br>
                            <p>Set date and time of examination.</p>
                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="datetime" class="col-sm-12 control-label">Date & Time</label>
                                        <div class="col-xs-12">
                                            <div class="input-group date" id="datetime" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#datetime" name="datetime" required />
                                                <div class="input-group-append" data-target="#datetime"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
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
                <h4 class="modal-title">Examination | Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/examinations/edit"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="edit_id" name="id">
                    <div class="card" style="width:100%;">
                        <div class="card-body">

                            <p>Title will be the main heading of the examination.</p>


                            <div class="row">

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label for="edit_title" class="col-sm-3 control-label">Title</label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control" id="edit_title" name="title"
                                                placeholder="Ex: PROGRAMMING 101"
                                                oninput="this.value = this.value.replace(/[^a-z A-Z 0-9]/g, '');" required>

                                            <!--<textarea id="summernote">
                                                    Place <em>some</em> <u>text</u> <strong>here</strong>
                                                  </textarea> -->
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <br>
                            <p>Choose examination's time and question limit.</p>
                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="edit_duration" class="col-sm-12 control-label">Duration</label>
                                        <div class="col-xs-12">
                                            <select class="form-control" id="edit_duration" name="duration" required>
                                                <option value="" selected>- Select -</option>
                                                <option value="5">5 minutes</option>
                                                <option value="10">10 minutes</option>
                                                <option value="15">15 minutes</option>
                                                <option value="20">20 minutes</option>
                                                <option value="25">25 minutes</option>
                                                <option value="30">30 minutes</option>
                                                <option value="35">35 minutes</option>
                                                <option value="40">40 minutes</option>
                                                <option value="45">45 minutes</option>
                                                <option value="50">50 minutes</option>
                                                <option value="55">55 minutes</option>
                                                <option value="60">60 minutes</option>
                                                <option value="65">65 minutes</option>
                                                <option value="70">70 minutes</option>
                                                <option value="75">75 minutes</option>
                                                <option value="80">80 minutes</option>
                                                <option value="85">85 minutes</option>
                                                <option value="90">90 minutes</option>
                                                <option value="95">95 minutes</option>
                                                <option value="100">100 minutes</option>
                                                <option value="105">105 minutes</option>
                                                <option value="110">110 minutes</option>
                                                <option value="115">115 minutes</option>
                                                <option value="120">120 minutes</option>
                                                <option value="125">125 minutes</option>
                                                <option value="130">130 minutes</option>
                                                <option value="135">135 minutes</option>
                                                <option value="140">140 minutes</option>
                                                <option value="145">145 minutes</option>
                                                <option value="150">150 minutes</option>
                                                <option value="155">155 minutes</option>
                                                <option value="160">160 minutes</option>
                                                <option value="165">165 minutes</option>
                                                <option value="170">170 minutes</option>
                                                <option value="175">175 minutes</option>
                                                <option value="180">180 minutes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="edit_limit" class="col-sm-12 control-label">No. of Question</label>
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" id="edit_limit" name="limit"
                                                placeholder="Ex: 100"
                                                oninput="this.value = this.value.replace(/[^0-9 ]/g, '');" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <p>Put examination details.</p>
                            <div class="row">

                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label for="edit_description"
                                            class="col-sm-12 control-label">Instruction/Description</label>
                                        <div class="col-xs-12">
                                            <textarea class="form-control" id="edit_description" name="description" placeholder="Enter description here..."
                                                row="3" oninput="this.value = this.value.replace(/[^A-Z a-z .]/g, '');" required></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <br>
                            <p>Set date and time of examination.</p>
                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="edit_datetime" class="col-sm-12 control-label">Date & Time</label>
                                        <div class="col-xs-12">
                                            <div class="input-group date" id="datetime" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#datetime" id="edit_datetime" name="datetime" required />
                                                <div class="input-group-append" data-target="#datetime"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <br>
                            <p>Set current examination status.</p>
                            <div class="row">

                                <div class="col-sm-5">

                                    <div class="form-group">
                                        <label for="edit_status" class="col-sm-3 control-label">Status</label>


                                        <select class="form-control" id="edit_status" name="status" required>
                                            <option value="" selected>- Select -</option>
                                            <option value="0">Pending</option>
                                            <option value="1">Active</option>
                                            <option value="2">Finished</option>
                                        </select>

                                    </div>
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

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Examination | Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/examinations/delete">
                    @csrf
                    <input type="hidden" id="delete_id" name="id">
                    <div class="text-center">
                        <h2 class="bold"> Are you sure you want to delete this Examination?</h2>
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
