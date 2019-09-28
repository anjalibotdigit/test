<?php
/* Smarty version 3.1.33, created on 2019-09-17 21:42:51
  from '/home/cryptocodex/public_html/content/themes/default/templates/__feeds_video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d81535b14aad8_58806761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '248360febafbee2877563f2ef221f6dd049641e3' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/__feeds_video.tpl',
      1 => 1568278182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d81535b14aad8_58806761 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-6 col-md-4 col-lg-3">
    <a class="pg_video" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['video']->value['post_id'];?>
">
        <video>
            <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['video']->value['source'];?>
" type="video/mp4">
            <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['video']->value['source'];?>
" type="video/webm">
        </video>
        <div class="play-button"><i class="fa fa-play fa-2x"></i></div>
    </a>
</div><?php }
}
