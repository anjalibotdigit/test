<?php
/* Smarty version 3.1.33, created on 2019-09-25 21:33:42
  from '/home/cryptocodex/public_html/content/themes/default/templates/ajax.who_shares.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8bdd36ac6705_80687577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a36ddf453ecdf504da448aefa76996b661893298' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/ajax.who_shares.tpl',
      1 => 1568278182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
),false)) {
function content_5d8bdd36ac6705_80687577 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <h6 class="modal-title"><?php echo __("People Who Shared This");?>
</h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_snippet'=>true), 0, true);
?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

        <?php if (count($_smarty_tpl->tpl_vars['posts']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
            <!-- see-more -->
            <div class="alert alert-info see-more js_see-more" data-get="shares" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <span><?php echo __("See More");?>
</span>
                <div class="loader loader_small x-hidden"></div>
            </div>
            <!-- see-more -->
        <?php }?>
    <?php } else { ?>
        <p class="text-center text-muted">
            <?php echo __("No people shared this");?>

        </p>
    <?php }?>
    
</div>
<?php }
}
