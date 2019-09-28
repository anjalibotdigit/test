<?php
/* Smarty version 3.1.33, created on 2019-09-24 22:36:42
  from '/home/cryptocodex/public_html/content/themes/default/templates/admin.themes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8a9a7ac30920_06410472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89dc3ce7000e46a9165db2b6a66f4a1c8433c062' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/admin.themes.tpl',
      1 => 1568278182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8a9a7ac30920_06410472 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/themes/add" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus mr5"></i><?php echo __("Add New Theme");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/themes" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-desktop mr10"></i><?php echo __("Themes");?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['name'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <?php echo __("Add New Theme");
}?>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Thumbnail");?>
</th>
                            <th><?php echo __("Name");?>
</th>
                            <th><?php echo __("Default");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['theme_id'];?>
</td>
                                <td>
                                    <img width="210" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
/thumbnail.png">
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['default']) {?>
                                        <span class="badge badge-pill badge-lg badge-success"><?php echo __("Yes");?>
</span>
                                    <?php } else { ?>
                                        <span class="badge badge-pill badge-lg badge-danger"><?php echo __("No");?>
</span>
                                    <?php }?>
                                </td>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/themes/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['theme_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="theme" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['theme_id'];?>
">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
        
        <form class="js_ajax-forms " data-url="admin/themes.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['theme_id'];?>
">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Default");?>

                    </label>
                    <div class="col-md-9">
                        <label class="switch" for="default">
                            <input type="checkbox" name="default" id="default" <?php if ($_smarty_tpl->tpl_vars['data']->value['default']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="form-text">
                            <?php echo __("Make it the default theme of the site");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
                    </div>
                </div>
                
                <!-- success -->
                <div class="alert alert-success mb0 x-hidden"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>
        

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>

        <form class="js_ajax-forms " data-url="admin/themes.php?do=add">
            <div class="card-body">
            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Default");?>

                </label>
                <div class="col-md-9">
                    <label class="switch" for="default">
                        <input type="checkbox" name="default" id="default">
                        <span class="slider round"></span>
                    </label>
                    <span class="form-text">
                        <?php echo __("Make it the default theme of the site");?>

                    </span>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Name");?>

                </label>
                <div class="col-md-9">
                    <input class="form-control" name="name">
                </div>
            </div>
            
            <!-- success -->
            <div class="alert alert-success mb0 x-hidden"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger mb0 x-hidden"></div>
            <!-- error -->
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>

    <?php }?>
</div><?php }
}
