<?php
/* Smarty version 3.1.33, created on 2019-09-28 04:17:11
  from '/home/cryptocodex/public_html/content/themes/default/templates/__feeds_comment.form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8edec7771105_20643648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '992519ddcbab1c3ab56c976a50e988468c48ac33' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/__feeds_comment.form.tpl',
      1 => 1569643106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8edec7771105_20643648 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="comment js_comment-form <?php if ($_smarty_tpl->tpl_vars['post']->value['comments_disabled']) {?>x-hidden<?php }?>" data-handle="<?php echo $_smarty_tpl->tpl_vars['_handle']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
">
    <div class="comment-avatar">
        <a class="comment-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
);">
            </a>
    </div>
    <div class="comment-data">
        <div class="x-form comment-form">
            <textarea dir="auto" class="js_autosize js_mention js_post-comment" rows="1" placeholder='<?php echo __("Write a comment");?>
'></textarea>
            <ul class="x-form-tools clearfix">
                <li class="x-form-tools-post js_post-comment">
                    <i class="far fa-paper-plane fa-lg fa-fw"></i>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['photos_enabled']) {?>
                    <li class="x-form-tools-attach">
                        <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="comment"></i>
                    </li>
                <?php }?>
                <li class="x-form-tools-emoji js_emoji-menu-toggle">
                    <i class="far fa-smile-wink fa-lg fa-fw"></i>
                </li>
            </ul>
        </div>
        <div class="comment-attachments attachments clearfix x-hidden">
            <ul>
                <li class="loading">
                    <div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="pb10 text-center js_comment-disabled-msg <?php if (!$_smarty_tpl->tpl_vars['post']->value['comments_disabled']) {?>x-hidden<?php }?>">
    <?php echo __("Commenting has been turned off for this post");?>
.
</div><?php }
}
