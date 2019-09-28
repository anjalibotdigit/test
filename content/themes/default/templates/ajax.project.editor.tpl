<div class="modal-header">
    <h6 class="modal-title">
        <i class="fa fa-shopping-cart mr5"></i>{__("Edit Project")}
    </h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="js_ajax-forms publisher-mini" data-url="posts/edit.php">
    <div class="modal-body">
        <div class="row">
            <div class="form-group col-md-8">
                <label class="form-control-label">{__("Project Name")}</label>
                <input type="hidden" name="handle" value="project">
                <input type="hidden" name="id" value="{$post['post_id']}">
                <input name="name" type="text" class="form-control" value="{$post['project']['name']}">

            </div>

        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Pattern")}</label>
                <input name="pattern" type="text" class="form-control" value="{$post['project']['pattern']}">

            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Status")}</label>
                <select name="status" class="form-control">
                    <option {if $post['project']['status'] == "start"}selected{/if} value="start">{__("start")}</option>
                    <option {if $post['project']['status'] == "progress"}selected{/if} value="progress">{__("progress")}</option>
                    <option {if $post['project']['status'] == "finished"}selected{/if} value="finished">{__("finished")}</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Made for")}</label>
                <input name="made" type="text" class="form-control" value="{$post['project']['made']}">
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Craft")}</label>

                <input name="craft" type="text" class="form-control" value="{$post['project']['craft']}">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Size")}</label>
                <input name="size" type="text" class="form-control" value="{$post['project']['size']}">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Colorway")}</label><br>
                <select name="colorway" class="form-control" style="padding:8px">
                    <option {if $post['project']['colorway'] == "red"}selected{/if} value="red" >{__("red")}</option>
                    <option {if $post['project']['colorway'] == "black"}selected{/if} value="black">{__("black")}</option>
                    <option {if $post['project']['colorway'] == "blue"}selected{/if} value="blue">{__("blue")}</option>
                    <option {if $post['project']['colorway'] == "white"}selected{/if} value="white">{__("white")}</option>
                    <option {if $post['project']['colorway'] == "yellow"}selected{/if} value="yellow">{__("yellow")}</option>
                </select>
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Needle")}</label>
                <input name="needle" type="text" class="form-control" value="{$post['project']['needle']}">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Started Date")}</label>
                <input name="sta_date" type="text" class="form-control" value="{$post['project']['sta_date']}">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Finished Date")}</label>
                <input name="fini_date" type="text" class="form-control" value="{$post['project']['fini_date']}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Yarn")}</label>
                <input name="yarn" type="text" class="form-control" value="{$post['project']['yarn']}">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("How much")}</label>
                <input name="how_much" type="text" class="from-control" value="{$post['project']['how_much']}">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label">{__("Dyes lot")}</label>
                <input name="dye_lot" type="text" class="form-control" value="{$post['project']['dye_lot']}">
            </div>
        </div>
        <div class="form-group">
            <label class="form-control-label">{__("Description")}</label>
            <textarea name="message" rows="5" dir="auto" class="form-control">{$post['text_plain']}</textarea>
        </div>
            <div class="form-group">
                <div class="attachments clearfix" data-type="photos">
                    <ul>
                        <li class="add">
                            <i class="fa fa-camera js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    {for $i=0 to $post['photos_num']-1}

                        <div class="x-image" style="background-image: url({$system['system_uploads']}{"/"}{$post['photos'][$i]['source']});margin-left: 10px">
                            <button type="button" class="close js_publisher-mini-attachment-image-remover" title='{__("Remove")}'>
                                <span>×</span>
                            </button>
                            <div class="x-image-loader">
                                <div class="progress x-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <i class="fa fa-camera fa-2x js_x-uploader" data-handle="x-image"></i>
                            <input type="hidden" class="js_x-image-input" name="photos[]" value={$post['photos'][$i]['source']}>
                        </div>
                    {/for}
                </div>
            </div>


        <div class="alert alert-danger mb0 x-hidden"></div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">{__("Cancel")}</button>
        <button type="submit" class="btn btn-primary">{__("Save")}</button>
    </div>
</div>
</form>