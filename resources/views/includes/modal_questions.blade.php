<!-- Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Question | Add</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/examinations/questions/add"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="examination_id" name="examination_id" value="{{ $examination_id }}" />
                    <div class="card" style="width:100%;">
                        <div class="card-body">

                            <p>Question will be reviewed by Super Administrator.</p>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="question" class="col-sm-3 control-label">Question</label>
                                        <div class="col-xs-12">


                                            <textarea id="summernote" class="form-control" id="question" name="question" placeholder="Enter description here..."
                                                row="5" required>
                                                  </textarea>
                                            <!--<textarea id="summernote">
                                                    Place <em>some</em> <u>text</u> <strong>here</strong>
                                                  </textarea> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <p>Choose question type.</p>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="type" class="col-sm-3 control-label">Type</label>
                                        <div class="col-xs-12">
                                            <select class="form-control" id="type" name="type" required>
                                                <option value="" selected>- Select -</option>
                                                <option value="0">Multiple choice</option>
                                                <option value="1">Enumeration</option>
                                                <option value="2">Fill in the blank</option>
                                            </select>


                                        </div>
                                    </div>
                                </div>

                            </div>

                            <br>
                            <p>Enter the correct answer/s.</p>

                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label for="answer" class="col-sm-3 control-label">Answer</label>
                                        <div class="col-xs-7">
                                            <input type="text" class="form-control" id="answer" name="answer"
                                                placeholder="Enter the answer for the question"
                                                oninput="this.value = this.value.replace(/[^A-Z a-z 0-9 ]/g, '');" required>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <br>
                            <p id="choices_header">Enter the question's choices.</p>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="choice_a" id="choice_a_label" class="col-sm-3 control-label">Choice A</label>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control" id="choice_a" name="choice_a"
                                                placeholder="Enter first choice for the question">
                                                
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="choice_b" id="choice_b_label" class="col-sm-3 control-label">Choice B</label>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control" id="choice_b" name="choice_b"
                                                placeholder="Enter second choice for the question" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="choice_c" id="choice_c_label" class="col-sm-3 control-label">Choice C</label>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control" id="choice_c" name="choice_c"
                                                placeholder="Enter third choice for the question" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="choice_d" id="choice_d_label" class="col-sm-3 control-label">Choice D</label>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control" id="choice_d" name="choice_d"
                                                placeholder="Enter fourth choice for the question" />
                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{-- <br>
                            <p>Put examination details.</p>
                            <div class="row">

                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label for="surname"
                                            class="col-sm-12 control-label">Instruction/Description</label>
                                        <div class="col-xs-12">
                                            <textarea class="form-control" id="description" name="description" placeholder="Enter description here..."
                                                row="3" oninput="this.value = this.value.replace(/[^A-Z a-z ]/g, '');"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div> --}}

                            
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

<!-- Approve -->
<div class="modal fade" id="approve">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Question | Approve</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/examinations/manage/approve">
                    @csrf
                    <input type="hidden" id="approve_id" name="id">
                    <div class="text-center">
                        <h2 class="bold"> Are you sure you want to approve this Question?</h2>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
                <button type="submit" class="btn btn-success"> Approve</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- Approve -->

<!-- Reject -->
<div class="modal fade" id="reject">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Question | Reject</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/examinations/manage/reject">
                    @csrf
                    <input type="hidden" id="reject_id" name="id">
                    <div class="text-center">
                        <h2 class="bold"> Are you sure you want to reject this Question?</h2>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
                <button type="submit" class="btn btn-danger"> Reject</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- Reject -->
