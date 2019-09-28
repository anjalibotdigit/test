<?php
/* Smarty version 3.1.33, created on 2019-09-28 04:18:04
  from '/home/cryptocodex/public_html/content/themes/default/templates/__feeds_comment.text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8edefc738359_93990533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '302042b66931496396b6093fb5b4f2db5e614fd2' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/__feeds_comment.text.tpl',
      1 => 1569643106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8edefc738359_93990533 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="comment-replace">
    <div class="comment-text js_readmore" dir="auto"><?php echo $_smarty_tpl->tpl_vars['_comment']->value['text'];?>
</div>
    <div class="comment-text-plain x-hidden"><?php echo $_smarty_tpl->tpl_vars['_comment']->value['text_plain'];?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['_comment']->value['image'] != '') {?>
        <span class="text-link js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_comment']->value['image'];?>
">
            <img alt="" class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_comment']->value['image'];?>
">
        </span>
    <?php }?>
</div>
<?php }
}
