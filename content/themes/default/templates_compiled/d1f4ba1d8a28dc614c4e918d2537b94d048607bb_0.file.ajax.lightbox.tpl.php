<?php
/* Smarty version 3.1.33, created on 2019-09-18 18:52:24
  from '/home/cryptocodex/public_html/content/themes/default/templates/ajax.lightbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d827ce80a8476_88569065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1f4ba1d8a28dc614c4e918d2537b94d048607bb' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/ajax.lightbox.tpl',
      1 => 1568278182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post_photo.tpl' => 1,
  ),
),false)) {
function content_5d827ce80a8476_88569065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('post', $_smarty_tpl->tpl_vars['photo']->value['post']);?>

<div class="lightbox-post" data-id="<?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {
echo $_smarty_tpl->tpl_vars['post']->value['post_id'];
} else {
echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];
}?>">
	<div class="js_scroller js_scroller-lightbox" data-slimScroll-height="100%">

        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_lightbox'=>true), 0, false);
?>

	</div>
</div><?php }
}
