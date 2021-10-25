<!-- ปุ่มโมดอล Create -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#CreateProject">
    Create Project
</button>
<!-- ฟอร์มโมดอล Create -->
<div class="modal fade " id="CreateProject" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
    style="color:black; font-weight: bold;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-success" style="color:white;">
                <h5 class="modal-title" id="exampleModalCenterTitle"><strong>Create BOM</strong> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" name="form_create" action="{{ url('/create_project') }}" accept-charset="UTF-8"
                class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}