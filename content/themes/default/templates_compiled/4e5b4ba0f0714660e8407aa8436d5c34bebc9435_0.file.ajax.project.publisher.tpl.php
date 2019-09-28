<?php
/* Smarty version 3.1.33, created on 2019-09-25 15:03:10
  from '/home/cryptocodex/public_html/content/themes/default/templates/ajax.project.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8b81aeb7c5b9_55991808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e5b4ba0f0714660e8407aa8436d5c34bebc9435' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/ajax.project.publisher.tpl',
      1 => 1569378783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8b81aeb7c5b9_55991808 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <h6 class="modal-title">
        <i class="fa fa-shopping-cart mr5"></i><?php echo __("Create New Project");?>

    </h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="publisher-mini">
    <div class="modal-body">
        <div class="row">
            <div class="form-group col-md-8">
                <label class="form-control-label"><?php echo __("Project Name");?>
</label>
                <input name="name" type="text" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label class="form-control-label"><?php echo __("Pattern");?>
</label>
                <input name="pattern" type="text" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Status");?>
</label>
                <select name="status" class="form-control">
                    <option value="start"><?php echo __("start");?>
</option>
                    <option value="progress"><?php echo __("progress");?>
</option>
                    <option value="finished"><?php echo __("finished");?>
</option>
                </select>


            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Craft");?>
</label>
                <input name="craft" type="text" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Size");?>
</label>
                <input name="size" type="text" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Made for");?>
</label>
                <input name="made" class="form-control" type="text">

            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Needle");?>
</label>
                <input name="needle" type="text" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Yarn");?>
</label>
                <input name="yarn" class="form-control" type="text">

            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Colorway");?>
</label><br>
                <select name="colorway" class="form-control" style="padding:8px">
                    <option value="red" ><?php echo __("red");?>
</option>
                    <option value="black"><?php echo __("black");?>
</option>
                    <option value="blue"><?php echo __("blue");?>
</option>
                    <option value="white"><?php echo __("white");?>
</option>
                    <option value="yellow"><?php echo __("yellow");?>
</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label class="form-control-label"><?php echo __("How much");?>
</label>
                <input name="how_much" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label class="form-control-label"><?php echo __("Dye lots");?>
</label>
                <input name="dye_lot" class="form-control" type="text">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label class="form-control-label"><?php echo __("Started Date");?>
</label>
                <input name="sta_date" type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label class="form-control-label"><?php echo __("Finished Date");?>
</label>
                <input name="fini_date" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="form-control-label"><?php echo __("Note");?>
</label>
            <textarea name="message" rows="5" dir="auto" class="form-control"><?php echo $_smarty_tpl->tpl_vars['post']->value['text_plain'];?>
</textarea>
        </div>
        <div class="form-group">
            <label class="form-control-label"><?php echo __("Photos");?>
</label>
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
        <button type="button" class="btn btn-primary ghost"><?php echo __("Publish");?>
</button>
    </div>
</form><?php }
}
