<!-- Upload -->
<div class="modal fade" id="upload">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Examination | Upload</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/faculty/examinations/manage/upload"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="upload_id" name="id">
                    <p>File must be a PDF, PPT, DOC, DOCX, XLXS, XLS only. File must be 500kb maximum only.</p>
                    <div class="form-group">
                        <label class="col-sm-7 control-label">Reviewer File</label>
                        <div class="col-sm-12">
                            <input type="file" id="reviewer" name="reviewer"
                                accept=".pdf, .doc, .docx, .ppt, .pptx, .xls, .xlsx">
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
