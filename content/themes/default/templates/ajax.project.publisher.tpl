<div class="modal-header">
    <h6 class="modal-title">
        <i class="fa fa-shopping-cart mr5"></i>{__("Create New Project")}
    </h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="publisher-mini">
    <div class="modal-body">
        <div class="row">
            <div class="form-group col-md-8">
                <label class="form-control-label">{__("Project Name")}</label>
                <input name="name" type="text" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label class="form-control-label">{__("Pattern")}</label>
                <input name="pattern" type="text" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Status")}</label>
                <select name="status" class="form-control">
                    <option value="start">{__("start")}</option>
                    <option value="progress">{__("progress")}</option>
                    <option value="finished">{__("finished")}</option>
                </select>


            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Craft")}</label>
                <input name="craft" type="text" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Size")}</label>
                <input name="size" type="text" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Made for")}</label>
                <input name="made" class="form-control" type="text">

            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Needle")}</label>
                <input name="needle" type="text" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Yarn")}</label>
                <input name="yarn" class="form-control" type="text">

            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Colorway")}</label><br>
                <select name="colorway" class="form-control" style="padding:8px">
                    <option value="red" >{__("red")}</option>
                    <option value="black">{__("black")}</option>
                    <option value="blue">{__("blue")}</option>
                    <option value="white">{__("white")}</option>
                    <option value="yellow">{__("yellow")}</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label class="form-control-label">{__("How much")}</label>
                <input name="how_much" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label class="form-control-label">{__("Dye lots")}</label>
                <input name="dye_lot" class="form-control" type="text">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label class="form-control-label">{__("Started Date")}</label>
                <input name="sta_date" type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label class="form-control-label">{__("Finished Date")}</label>
                <input name="fini_date" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="form-control-label">{__("Note")}</label>
            <textarea name="message" rows="5" dir="auto" class="form-control">{$post['text_plain']}</textarea>
        </div>
        <div class="form-group">
            <label class="form-control-label">{__("Photos")}</label>
            <div class="attachments clearfix" data-type="photos">
                <ul>
                    <li class="add">
                        <i class="fa fa-camera js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
                    </li>
                </ul>
            </div>
        </div>
        <!-- error -->
        <div class="alert alert-danger mb0 x-hidden"></div>
        <!-- error -->
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary ghost">{__("Publish")}</button>
    </div>
</form>