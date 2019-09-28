<?php
/* Smarty version 3.1.33, created on 2019-09-17 21:35:00
  from '/home/cryptocodex/public_html/content/themes/default/templates/ajax.product.editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8151842a8612_01923225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da8f8077712f5926a9776143914f8ad5b0e0dc3b' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/ajax.product.editor.tpl',
      1 => 1568278182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8151842a8612_01923225 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <h6 class="modal-title">
        <i class="fa fa-shopping-cart mr5"></i><?php echo __("Edit Product");?>

    </h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="js_ajax-forms" data-url="posts/edit.php">
    <div class="modal-body">
        <div class="row">
            <div class="form-group col-md-8">
                <label class="form-control-label"><?php echo __("Product Name");?>
</label>
                <input type="hidden" name="handle" value="product">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
                <input name="name" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['name'];?>
">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Price");?>
</label>
                <input name="price" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['price'];?>
">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
                <label class="form-control-label"><?php echo __("Category");?>
</label>
                <select name="category" class="form-control">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['market_categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['category_id'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Status");?>
</label>
                <select name="status" class="form-control">
                    <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['status'] == "new") {?>selected<?php }?> value="new"><?php echo __("New");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['status'] == "old") {?>selected<?php }?> value="old"><?php echo __("Used");?>
</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="form-control-label"><?php echo __("Location");?>
</label>
            <input name="location" type="text" class="form-control js_geocomplete" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['location'];?>
">
        </div>
        <div class="form-group">
            <label class="form-control-label"><?php echo __("Description");?>
</label>
            <textarea name="message" rows="5" dir="auto" class="form-control"><?php echo $_smarty_tpl->tpl_vars['post']->value['text_plain'];?>
</textarea>
        </div>
        <!-- error -->
        <div class="alert alert-danger mb0 x-hidden"></div>
        <!-- error -->
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo __("Cancel");?>
</button>
        <button type="submit" class="btn btn-primary"><?php echo __("Save");?>
</button>
    </div>
</form><?php }
}
