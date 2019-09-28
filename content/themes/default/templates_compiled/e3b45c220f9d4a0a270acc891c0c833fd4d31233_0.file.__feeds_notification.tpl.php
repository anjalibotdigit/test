<?php
/* Smarty version 3.1.33, created on 2019-09-12 09:23:07
  from '/home/cryptocodex/public_html/content/themes/default/templates/__feeds_notification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7a0e7b93b479_01134177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3b45c220f9d4a0a270acc891c0c833fd4d31233' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/__feeds_notification.tpl',
      1 => 1568278182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__reaction_emojis.tpl' => 1,
  ),
),false)) {
function content_5d7a0e7b93b479_01134177 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="feeds-item <?php if (!$_smarty_tpl->tpl_vars['notification']->value['seen']) {?>unread<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['notification']->value['notification_id'];?>
">
    <a class="data-container" href="<?php echo $_smarty_tpl->tpl_vars['notification']->value['url'];?>
">
        <div class="data-avatar">
            <img src="<?php echo $_smarty_tpl->tpl_vars['notification']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['notification']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['notification']->value['user_lastname'];?>
">
        </div>
        <div class="data-content">
            <div>
            	<span class="name"><?php echo $_smarty_tpl->tpl_vars['notification']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['notification']->value['user_lastname'];?>
</span>
            	<?php if ($_smarty_tpl->tpl_vars['notification']->value['user_verified']) {?>
                    <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['notification']->value['user_subscribed']) {?>
                    <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Pro User");?>
' class="fa fa-bolt fa-fw pro-badge"></i>
                <?php }?>
           	</div>
            <div>
                <?php if ($_smarty_tpl->tpl_vars['notification']->value['reaction']) {?>
                    <div class="reaction-btn float-left mr5">
                        <div class="reaction-btn-icon">
                            <div class="inline-emoji no_animation">
                                <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['notification']->value['reaction']), 0, false);
?>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <i class="fa <?php echo $_smarty_tpl->tpl_vars['notification']->value['icon'];?>
 pr5"></i> 
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['notification']->value['message'];?>

            </div>
            <div class="time js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['notification']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['notification']->value['time'];?>
</div>
        </div>
    </a>
</li><?php }
}
