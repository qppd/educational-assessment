<!-- Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Reviewer | New</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/examinations/reviewer/upload"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="upload_id" name="id" value="{{ $examination_id }}" required>
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
                <button type="submit" class="btn btn-primary">Upload</button>
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
                <h4 class="modal-title">Reviewer | Approve</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/examinations/reviewer/approve">
                    @csrf
                    <input type="hidden" id="approve_id" name="id">
                    <div class="text-center">
                        <h2 class="bold"> Are you sure you want to approve this Reviewer?</h2>
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
                <h4 class="modal-title">Reviewer | Reject</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/examinations/reviewer/reject">
                    @csrf
                    <input type="hidden" id="reject_id" name="id">
                    <div class="text-center">
                        <h2 class="bold"> Are you sure you want to reject this Reviewer?</h2>
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
