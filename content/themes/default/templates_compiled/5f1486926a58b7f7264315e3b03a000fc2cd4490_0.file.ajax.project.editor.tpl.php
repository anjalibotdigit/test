<?php
/* Smarty version 3.1.33, created on 2019-09-23 03:25:54
  from '/home/cryptocodex/public_html/content/themes/default/templates/ajax.project.editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d883b426bfb57_94137456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f1486926a58b7f7264315e3b03a000fc2cd4490' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/ajax.project.editor.tpl',
      1 => 1569209122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d883b426bfb57_94137456 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <h6 class="modal-title">
        <i class="fa fa-shopping-cart mr5"></i><?php echo __("Edit Project");?>

    </h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="js_ajax-forms publisher-mini" data-url="posts/edit.php">
    <div class="modal-body">
        <div class="row">
            <div class="form-group col-md-8">
                <label class="form-control-label"><?php echo __("Project Name");?>
</label>
                <input type="hidden" name="handle" value="project">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
                <input name="name" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['project']['name'];?>
">

            </div>

        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Pattern");?>
</label>
                <input name="pattern" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['project']['pattern'];?>
">

            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Status");?>
</label>
                <select name="status" class="form-control">
                    <option <?php if ($_smarty_tpl->tpl_vars['post']->value['project']['status'] == "start") {?>selected<?php }?> value="start"><?php echo __("start");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['post']->value['project']['status'] == "progress") {?>selected<?php }?> value="progress"><?php echo __("progress");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['post']->value['project']['status'] == "finished") {?>selected<?php }?> value="finished"><?php echo __("finished");?>
</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Made for");?>
</label>
                <input name="made" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['project']['made'];?>
">
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Craft");?>
</label>

                <input name="craft" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['project']['craft'];?>
">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Size");?>
</label>
                <input name="size" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['project']['size'];?>
">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Colorway");?>
</label><br>
                <select name="colorway" class="form-control" style="padding:8px">
                    <option <?php if ($_smarty_tpl->tpl_vars['post']->value['project']['colorway'] == "red") {?>selected<?php }?> value="red" ><?php echo __("red");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['post']->value['project']['colorway'] == "black") {?>selected<?php }?> value="black"><?php echo __("black");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['post']->value['project']['colorway'] == "blue") {?>selected<?php }?> value="blue"><?php echo __("blue");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['post']->value['project']['colorway'] == "white") {?>selected<?php }?> value="white"><?php echo __("white");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['post']->value['project']['colorway'] == "yellow") {?>selected<?php }?> value="yellow"><?php echo __("yellow");?>
</option>
                </select>
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Needle");?>
</label>
                <input name="needle" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['project']['needle'];?>
">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Started Date");?>
</label>
                <input name="sta_date" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['project']['sta_date'];?>
">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Finished Date");?>
</label>
                <input name="fini_date" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['project']['fini_date'];?>
">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Yarn");?>
</label>
                <input name="yarn" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['project']['yarn'];?>
">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("How much");?>
</label>
                <input name="how_much" type="text" class="from-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['project']['how_much'];?>
">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Dyes lot");?>
</label>
                <input name="dye_lot" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['project']['dye_lot'];?>
">
            </div>
        </div>
        <div class="form-group">
            <label class="form-control-label"><?php echo __("Description");?>
</label>
            <textarea name="message" rows="5" dir="auto" class="form-control"><?php echo $_smarty_tpl->tpl_vars['post']->value['text_plain'];?>
</textarea>
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
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['post']->value['photos_num']-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['post']->value['photos_num']-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>

                        <div class="x-image" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];
echo "/";
echo $_smarty_tpl->tpl_vars['post']->value['photos'][$_smarty_tpl->tpl_vars['i']->value]['source'];?>
);margin-left: 10px">
                            <button type="button" class="close js_publisher-mini-attachment-image-remover" title='<?php echo __("Remove");?>
'>
                                <span>×</span>
                            </button>
                            <div class="x-image-loader">
                                <div class="progress x-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <i class="fa fa-camera fa-2x js_x-uploader" data-handle="x-image"></i>
                            <input type="hidden" class="js_x-image-input" name="photos[]" value=<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][$_smarty_tpl->tpl_vars['i']->value]['source'];?>
>
                        </div>
                    <?php }
}
?>
                </div>
            </div>


        <div class="alert alert-danger mb0 x-hidden"></div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo __("Cancel");?>
</button>
        <button type="submit" class="btn btn-primary"><?php echo __("Save");?>
</button>
    </div>
</div>
</form><?php }
}
