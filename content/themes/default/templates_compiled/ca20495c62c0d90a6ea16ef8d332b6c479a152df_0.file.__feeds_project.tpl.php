<?php
/* Smarty version 3.1.33, created on 2019-09-20 06:51:39
  from '/home/cryptocodex/public_html/content/themes/default/templates/__feeds_project.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8476fbceecf2_31255625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca20495c62c0d90a6ea16ef8d332b6c479a152df' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/__feeds_project.tpl',
      1 => 1568962108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8476fbceecf2_31255625 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_tpl']->value == "box") {?>
    <li class="col-md-6 col-lg-3">
        <div class="ui-box">
            <div class="img">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['post_id'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>">
                    <img alt="<?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['name'];?>
" src="<?php if ($_smarty_tpl->tpl_vars['_project']->value['photos'][0]['source'] != '') {
echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_project']->value['photos'][0]['source'];
} else {
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/blank_product.jpg<?php }?>" />
                </a>
            </div>
            <div class="mt10">
                <span class="js_user-popover" data-uid="<?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['post_id'];?>
" data-type="project">
                    <a class="h6" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['post_id'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['name'];?>
</a>
                </span>
               <div><?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['project_likes'];?>
 <?php echo __("Likes");?>
</div>
            </div>
            <div class="mt10">
                <?php if ($_smarty_tpl->tpl_vars['_project']->value['project']['project_likes']) {?>
                    <button type="button" class="btn btn-sm btn-primary js_unlike" data-id="<?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['post_id'];?>
">
                        <i class="fa fa-thumbs-up mr5"></i><?php echo __("Unlike");?>

                    </button>
                <?php } else { ?>
                    <button type="button" class="btn btn-sm btn-primary js_like" data-id="<?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['post_id'];?>
">
                        <i class="fa fa-thumbs-up mr5"></i><?php echo __("Like");?>

                    </button>
                <?php }?>

            </div>
        </div>
    </li>
<?php } elseif ($_smarty_tpl->tpl_vars['_tpl']->value == "list") {?>
    <li class="feeds-item">
        <div class="data-container <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>small<?php }?>">
            <a class="data-avatar" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/projects/<?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['name'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['name'];?>
" src="<?php if ($_smarty_tpl->tpl_vars['_project']->value['photos'][0]['source'] != '') {
echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_project']->value['photos'][0]['source'];
} else {
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/blank_product.jpg<?php }?>" />
            </a>
            <div class="data-content">
                <div class="float-right">
                    <?php if ($_smarty_tpl->tpl_vars['_project']->value['project']['project_likes']) {?>
                        <button type="button" class="btn btn-sm btn-primary js_unlike" data-id="<?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['post_id'];?>
">
                            <i class="fa fa-thumbs-up mr5"></i><?php echo __("Unlike");?>

                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-sm btn-primary js_like" data-id="<?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['post_id'];?>
">
                            <i class="fa fa-thumbs-up mr5"></i><?php echo __("Like");?>

                        </button>
                    <?php }?>
                </div>
                <div>
                    <span class="js_user-popover" data-uid="<?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['post_id'];?>
" data-type="project">
                    <a class="h6" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['post_id'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['name'];?>
</a>
                </span>
                    <div><?php echo $_smarty_tpl->tpl_vars['_project']->value['project']['project_likes'];?>
 <?php echo __("Likes");?>
</div>
                </div>
            </div>
        </div>
    </li>
<?php }
}
}
