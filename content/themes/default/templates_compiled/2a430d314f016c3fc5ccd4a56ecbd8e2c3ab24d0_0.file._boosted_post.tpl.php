<?php
/* Smarty version 3.1.33, created on 2019-09-12 09:23:07
  from '/home/cryptocodex/public_html/content/themes/default/templates/_boosted_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7a0e7b947ee6_34518002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a430d314f016c3fc5ccd4a56ecbd8e2c3ab24d0' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/_boosted_post.tpl',
      1 => 1568278182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
),false)) {
function content_5d7a0e7b947ee6_34518002 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- posts-filter -->
<div class="posts-filter">
    <span><?php echo __("Promoted Posts");?>
</span>
</div>
<!-- posts-filter -->
<?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>false,'boosted'=>true), 0, false);
}
}
