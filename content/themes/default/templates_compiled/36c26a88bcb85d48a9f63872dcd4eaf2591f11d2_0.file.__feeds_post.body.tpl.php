<?php
/* Smarty version 3.1.33, created on 2019-09-28 04:17:11
  from '/home/cryptocodex/public_html/content/themes/default/templates/__feeds_post.body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8edec7714c61_79581538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36c26a88bcb85d48a9f63872dcd4eaf2591f11d2' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/__feeds_post.body.tpl',
      1 => 1569643106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.text.tpl' => 2,
    'file:__feeds_post.body.tpl' => 2,
  ),
),false)) {
function content_5d8edec7714c61_79581538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/cryptocodex/public_html/includes/libs/Smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!-- post header -->
<div class="post-header">
    <!-- post picture -->
    <div class="post-avatar">
        <a class="post-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['_post']->value['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['_post']->value['post_author_picture'];?>
);">
        </a>
    </div>
    <!-- post picture -->

    <!-- post meta -->
    <div class="post-meta">
        <!-- post menu -->
        <?php if (!$_smarty_tpl->tpl_vars['_shared']->value && $_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['_get']->value != "posts_information") {?>
            <div class="float-right dropdown">
                <i class="fa fa-chevron-down dropdown-toggle" data-toggle="dropdown" data-display="static"></i>
                <div class="dropdown-menu dropdown-menu-right post-dropdown-menu">
                    <?php if ($_smarty_tpl->tpl_vars['_post']->value['manage_post'] && $_smarty_tpl->tpl_vars['_post']->value['post_type'] == "product") {?>
                        <?php if ($_smarty_tpl->tpl_vars['_post']->value['product']['available']) {?>
                            <div class="dropdown-item pointer js_sold-post">
                                <div class="action no-desc">
                                    <i class="fa fa-tag fa-fw"></i> <span><?php echo __("Mark as Sold");?>
</span>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="dropdown-item pointer js_unsold-post">
                                <div class="action no-desc">
                                    <i class="fa fa-tag fa-fw"></i> <span><?php echo __("Mark as Available");?>
</span>
                                </div>
                            </div>
                        <?php }?>
                        <div class="dropdown-divider"></div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_post']->value['i_save']) {?>
                        <div href="#" class="dropdown-item pointer js_unsave-post">
                            <div class="action no-desc">
                                <i class="fa fa-bookmark fa-fw"></i> <span><?php echo __("Unsave Post");?>
</span>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="dropdown-item pointer js_save-post">
                            <div class="action no-desc">
                                <i class="fa fa-bookmark fa-fw"></i> <span><?php echo __("Save Post");?>
</span>
                            </div>
                        </div>
                    <?php }?>
                    <div class="dropdown-divider"></div>
                    <?php if ($_smarty_tpl->tpl_vars['_post']->value['manage_post']) {?>
                        <!-- Boost -->
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['_post']->value['boosted']) {?>
                                <div class="dropdown-item pointer js_unboost-post">
                                    <div class="action no-desc">
                                        <i class="fa fa-bolt fa-fw"></i> <span><?php echo __("Unboost Post");?>
</span>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_boost_posts']) {?>
                                    <div class="dropdown-item pointer js_boost-post">
                                        <div class="action no-desc">
                                            <i class="fa fa-bolt fa-fw"></i> <span><?php echo __("Boost Post");?>
</span>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="dropdown-item">
                                        <div class="action no-desc">
                                            <i class="fa fa-bolt fa-fw"></i> <span><?php echo __("Boost Post");?>
</span>
                                        </div>
                                    </a>
                                <?php }?>
                            <?php }?>
                        <?php }?>
                        <!-- Boost -->
                        <!-- Pin -->
                        <?php if ($_smarty_tpl->tpl_vars['_post']->value['pinned']) {?>
                            <div class="dropdown-item pointer js_unpin-post">
                                <div class="action no-desc">
                                    <i class="fa fa-thumbtack fa-fw"></i> <span><?php echo __("Unpin Post");?>
</span>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="dropdown-item pointer js_pin-post">
                                <div class="action no-desc">
                                    <i class="fa fa-thumbtack fa-fw"></i> <span><?php echo __("Pin Post");?>
</span>
                                </div>
                            </div>
                        <?php }?>
                        <!-- Pin -->
                        <!-- Edit -->
                        <?php if ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "product") {?>
                            <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/product.php?do=edit&post_id=<?php echo $_smarty_tpl->tpl_vars['_post']->value['post_id'];?>
">
                                <div class="action no-desc">
                                    <i class="fa fa-pencil-alt fa-fw"></i> <?php echo __("Edit Product");?>

                                </div>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "article") {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/edit/<?php echo $_smarty_tpl->tpl_vars['_post']->value['post_id'];?>
" class="dropdown-item pointer">
                                <div class="action no-desc">
                                    <i class="fa fa-pencil-alt fa-fw"></i> <?php echo __("Edit Article");?>

                                </div>
                            </a>
                        <?php } else { ?>
                            <div class="dropdown-item pointer js_edit-post">
                                <div class="action no-desc">
                                    <i class="fa fa-pencil-alt fa-fw"></i> <?php echo __("Edit Post");?>

                                </div>
                            </div>
                        <?php }?>
                        <!-- Edit -->
                        <!-- Delete -->
                        <div class="dropdown-item pointer js_delete-post">
                            <div class="action no-desc">
                                <i class="fa fa-trash-alt fa-fw"></i> <?php echo __("Delete Post");?>

                            </div>
                        </div>
                        <!-- Delete -->
                        <!-- Disable Comments -->
                        <?php if ($_smarty_tpl->tpl_vars['_post']->value['comments_disabled']) {?>
                            <div class="dropdown-item pointer js_enable-post-comments">
                                <div class="action no-desc">
                                    <i class="fa fa-comment fa-fw"></i> <span><?php echo __("Turn on Commenting");?>
</span>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="dropdown-item pointer js_disable-post-comments">
                                <div class="action no-desc">
                                    <i class="fa fa-comment-slash fa-fw"></i> <span><?php echo __("Turn off Commenting");?>
</span>
                                </div>
                            </div>
                        <?php }?>
                        <!-- Disable Comments -->
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['_post']->value['user_type'] == "user") {?>
                            <div class="dropdown-item pointer js_hide-author" data-author-id="<?php echo $_smarty_tpl->tpl_vars['_post']->value['user_id'];?>
" data-author-name="<?php echo $_smarty_tpl->tpl_vars['_post']->value['post_author_name'];?>
">
                                <div class="action">
                                    <i class="fa fa-minus-circle fa-fw"></i> <?php echo __("Unfollow");?>
 <?php echo $_smarty_tpl->tpl_vars['_post']->value['user_firstname'];?>

                                </div>
                                <div class="action-desc"><?php echo __("Stop seeing posts but stay friends");?>
</div>
                            </div>
                        <?php }?>
                        <div class="dropdown-item pointer js_hide-post">
                            <div class="action">
                                <i class="fa fa-eye-slash fa-fw"></i> <?php echo __("Hide this post");?>

                            </div>
                            <div class="action-desc"><?php echo __("See fewer posts like this");?>
</div>
                        </div>
                        <div class="dropdown-item pointer js_report" data-handle="post" data-id="<?php echo $_smarty_tpl->tpl_vars['_post']->value['post_id'];?>
">
                            <div class="action no-desc">
                                <i class="fa fa-flag fa-fw"></i> <?php echo __("Report post");?>

                            </div>
                        </div>
                    <?php }?>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['_post']->value['post_id'];?>
" target="_blank" class="dropdown-item">
                        <div class="action no-desc">
                            <i class="fa fa-link fa-fw"></i> <?php echo __("Open post in new tab");?>

                        </div>
                    </a>
                </div>
            </div>
        <?php }?>
        <!-- post menu -->

        <!-- post author -->
        <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['_post']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['_post']->value['user_id'];?>
">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_post']->value['post_author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_post']->value['post_author_name'];?>
</a>
        </span>
        <?php if ($_smarty_tpl->tpl_vars['_post']->value['post_author_verified']) {?>
            <?php if ($_smarty_tpl->tpl_vars['_post']->value['user_type'] == "user") {?>
                <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
            <?php } else { ?>
                <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
            <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_post']->value['user_subscribed']) {?>
            <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Pro User");?>
' class="fa fa-bolt fa-fw pro-badge"></i>
        <?php }?>
        <!-- post author -->

        <!-- post-title -->
        <span class="post-title">
            <?php if (!$_smarty_tpl->tpl_vars['_shared']->value && $_smarty_tpl->tpl_vars['_post']->value['post_type'] == "shared") {?>
                <?php echo __("shared");?>
 
                <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['_post']->value['origin']['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['_post']->value['origin']['user_id'];?>
">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_post']->value['origin']['post_author_url'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['_post']->value['origin']['post_author_name'];?>

                    </a><?php echo __("'s");?>

                </span> 
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['_post']->value['origin']['post_id'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['_post']->value['origin']['post_type'] == 'photos') {?>
                        <?php if ($_smarty_tpl->tpl_vars['_post']->value['origin']['photos_num'] > 1) {
echo __("photos");
} else {
echo __("photo");
}?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['origin']['post_type'] == 'media') {?>
                        <?php if ($_smarty_tpl->tpl_vars['_post']->value['origin']['media']['media_type'] != "soundcloud") {?>
                            <?php echo __("video");?>

                        <?php } else { ?>
                            <?php echo __("song");?>

                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['origin']['post_type'] == 'link') {?>
                        <?php echo __("link");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['origin']['post_type'] == 'poll') {?>
                        <?php echo __("poll");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['origin']['post_type'] == 'album') {?>
                        <?php echo __("album");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['origin']['post_type'] == 'video') {?>
                        <?php echo __("video");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['origin']['post_type'] == 'audio') {?>
                        <?php echo __("audio");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['origin']['post_type'] == 'file') {?>
                        <?php echo __("file");?>

                    <?php } else { ?>
                        <?php echo __("post");?>

                    <?php }?>
                </a>

            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "link") {?>
                <?php echo __("shared a link");?>


            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "album") {?>
                <?php echo __("added");?>
 <?php echo $_smarty_tpl->tpl_vars['_post']->value['photos_num'];?>
 <?php echo __("photos to the album");?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['album']['path'];?>
/album/<?php echo $_smarty_tpl->tpl_vars['_post']->value['album']['album_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_post']->value['album']['title'];?>
</a>

            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "poll") {?>
                <?php echo __("created a poll");?>


            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "product") {?>
                <?php echo __("added new product for sale");?>


            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "article") {?>
                <?php echo __("added new article");?>


            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "video") {?>
                <?php echo __("added a video");?>


            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "audio") {?>
                <?php echo __("added an audio");?>


            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "file") {?>
                <?php echo __("added a file");?>


            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "photos") {?>
                <?php if ($_smarty_tpl->tpl_vars['_post']->value['photos_num'] == 1) {?>
                    <?php echo __("added a photo");?>

                <?php } else { ?>
                    <?php echo __("added");?>
 <?php echo $_smarty_tpl->tpl_vars['_post']->value['photos_num'];?>
 <?php echo __("photos");?>

                <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "profile_picture") {?>
                <?php echo __("updated the profile picture");?>


            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "profile_cover") {?>
                <?php echo __("updated the cover photo");?>


            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "page_picture") {?>
                <?php echo __("updated page picture");?>


            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "page_cover") {?>
                <?php echo __("updated cover photo");?>


            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "group_picture") {?>
                <?php echo __("updated group picture");?>


            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "group_cover") {?>
                <?php echo __("updated group cover");?>


            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "event_cover") {?>
                <?php echo __("updated event cover");?>

                
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['_get']->value != 'posts_group' && $_smarty_tpl->tpl_vars['_post']->value['in_group']) {?>
                <i class="fa fa-caret-right ml5 mr5"></i><i class="fa fa-flag ml5 mr5"></i><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_post']->value['group_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['_post']->value['group_title'];?>
</a>

            <?php } elseif ($_smarty_tpl->tpl_vars['_get']->value != 'posts_event' && $_smarty_tpl->tpl_vars['_post']->value['in_event']) {?>
                <i class="fa fa-caret-right ml5 mr5"></i><i class="fa fa-calendar ml5 mr5"></i><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_post']->value['event_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_post']->value['event_title'];?>
</a>

            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['in_wall']) {?>
                <i class="fa fa-caret-right ml5 mr5"></i>
                <span class="js_user-popover" data-type="user" data-uid="<?php echo $_smarty_tpl->tpl_vars['_post']->value['wall_id'];?>
">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['wall_username'];?>
"><?php echo $_smarty_tpl->tpl_vars['_post']->value['wall_fullname'];?>
</a>
                </span>
            <?php }?>
        </span>
        <!-- post-title -->

        <!-- post feeling -->
        <?php if ($_smarty_tpl->tpl_vars['_post']->value['feeling_action']) {?>
            <span class="post-title">
                <?php if ($_smarty_tpl->tpl_vars['_post']->value['post_type'] != '' && $_smarty_tpl->tpl_vars['_post']->value['post_type'] != "map") {?> & <?php }
echo __("is");?>
 <?php echo __($_smarty_tpl->tpl_vars['_post']->value["feeling_action"]);?>
 <?php echo __($_smarty_tpl->tpl_vars['_post']->value["feeling_value"]);?>
 <i class="twa twa-lg twa-<?php echo $_smarty_tpl->tpl_vars['_post']->value['feeling_icon'];?>
"></i>
            </span>
        <?php }?>
        <!-- post feeling -->
        
        <!-- post time & location & privacy -->
        <div class="post-time">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['_post']->value['post_id'];?>
" class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['_post']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['_post']->value['time'];?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['_post']->value['location']) {?>
             - <i class="fa fa-map-marker"></i> <span><?php echo $_smarty_tpl->tpl_vars['_post']->value['location'];?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['post_translation_enabled']) {?>
             - <span class="text-link js_translator"><?php echo __("Translate");?>
</span>
            <?php }?>
            - 
            <?php if (!$_smarty_tpl->tpl_vars['_shared']->value && $_smarty_tpl->tpl_vars['_post']->value['manage_post'] && $_smarty_tpl->tpl_vars['_post']->value['user_type'] == 'user' && !$_smarty_tpl->tpl_vars['_post']->value['in_group'] && !$_smarty_tpl->tpl_vars['_post']->value['in_event'] && $_smarty_tpl->tpl_vars['_post']->value['post_type'] != "product" && $_smarty_tpl->tpl_vars['_post']->value['post_type'] != "article") {?>
                <!-- privacy -->
                <?php if ($_smarty_tpl->tpl_vars['_post']->value['privacy'] == "me") {?>
                    <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="me" title='<?php echo __("Shared with: Only Me");?>
'>
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-display="static">
                            <i class="btn-group-icon fa fa-lock"></i>
                        </button>
                <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['privacy'] == "friends") {?>
                    <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="friends" title='<?php echo __("Shared with: Friends");?>
'>
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-display="static">
                            <i class="btn-group-icon fa fa-users"></i>
                        </button>
                <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['privacy'] == "public") {?>
                    <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="public" title='<?php echo __("Shared with: Public");?>
'>
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-display="static">
                            <i class="btn-group-icon fa fa-globe"></i>
                        </button>
                <?php }?>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-item pointer js_edit-privacy" data-title='<?php echo __("Shared with: Public");?>
' data-value="public">
                            <i class="fa fa-globe"></i> <?php echo __("Public");?>

                        </div>
                        <div class="dropdown-item pointer js_edit-privacy" data-title='<?php echo __("Shared with: Friends");?>
' data-value="friends">
                            <i class="fa fa-users"></i> <?php echo __("Friends");?>

                        </div>
                        <div class="dropdown-item pointer js_edit-privacy" data-title='<?php echo __("Shared with: Only Me");?>
' data-value="me">
                            <i class="fa fa-lock"></i> <?php echo __("Only Me");?>

                        </div>
                    </div>
                </div>
                <!-- privacy -->
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['_post']->value['privacy'] == "me") {?>
                    <i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Only Me");?>
'></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['privacy'] == "friends") {?>
                    <i class="fa fa-users" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Friends");?>
'></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['privacy'] == "public") {?>
                    <i class="fa fa-globe" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Public");?>
'></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['privacy'] == "custom") {?>
                    <i class="fa fa-cog" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Custom People");?>
'></i>
                <?php }?>
            <?php }?>
        </div>
        <!-- post time & location & privacy -->
    </div>
    <!-- post meta -->
</div>
<!-- post header -->

<!-- post text -->
<?php if ($_smarty_tpl->tpl_vars['_post']->value['post_type'] != "product") {?>
    <?php if (!$_smarty_tpl->tpl_vars['_shared']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <div class="post-text js_readmore text-muted" dir="auto"><?php echo $_smarty_tpl->tpl_vars['_post']->value['text'];?>
</div>
        <div class="post-text-translation x-hidden" dir="auto"></div>
    <?php }
}?>
<!-- post text -->

<?php if ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "album" || ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "product" && $_smarty_tpl->tpl_vars['_post']->value['photos_num'] > 0) || $_smarty_tpl->tpl_vars['_post']->value['post_type'] == "photos" || $_smarty_tpl->tpl_vars['_post']->value['post_type'] == "profile_picture" || $_smarty_tpl->tpl_vars['_post']->value['post_type'] == "profile_cover" || $_smarty_tpl->tpl_vars['_post']->value['post_type'] == "page_picture" || $_smarty_tpl->tpl_vars['_post']->value['post_type'] == "page_cover" || $_smarty_tpl->tpl_vars['_post']->value['post_type'] == "group_picture" || $_smarty_tpl->tpl_vars['_post']->value['post_type'] == "group_cover" || $_smarty_tpl->tpl_vars['_post']->value['post_type'] == "event_cover") {?>
    <div class="mt10 clearfix">
        <div class="pg_wrapper">
            <?php if ($_smarty_tpl->tpl_vars['_post']->value['photos_num'] == 1) {?>
                <div class="pg_1x">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][0]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][0]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][0]['source'];?>
" data-context="<?php if ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == 'product') {?>post<?php } else { ?>album<?php }?>">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][0]['source'];?>
">
                    </a>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['photos_num'] == 2) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_post']->value['photos'], 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                    <div class="pg_2x">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
');"></a>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['photos_num'] == 3) {?>
                <div class="pg_3x">
                    <div class="pg_2o3">
                        <div class="pg_2o3_in">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][0]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][0]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][0]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][0]['source'];?>
');"></a>
                        </div>
                    </div>
                    <div class="pg_1o3">
                        <div class="pg_1o3_in">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][1]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][1]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][1]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][1]['source'];?>
');"></a>
                        </div>
                        <div class="pg_1o3_in">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][2]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][2]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][2]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][2]['source'];?>
');"></a>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="pg_4x">
                    <div class="pg_2o3">
                        <div class="pg_2o3_in">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][0]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][0]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][0]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][0]['source'];?>
');"></a>
                        </div>
                    </div>
                    <div class="pg_1o3">
                        <div class="pg_1o3_in">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][1]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][1]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][1]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][1]['source'];?>
');"></a>
                        </div>
                        <div class="pg_1o3_in">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][2]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][2]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][2]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][2]['source'];?>
');"></a>
                        </div>
                        <div class="pg_1o3_in">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][3]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][3]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][3]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos'][3]['source'];?>
');">
                                <?php if ($_smarty_tpl->tpl_vars['_post']->value['photos_num'] > 4) {?>
                                <span class="more">+<?php echo $_smarty_tpl->tpl_vars['_post']->value['photos_num']-4;?>
</span>
                                <?php }?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "media" && $_smarty_tpl->tpl_vars['_post']->value['media']) {?>
    <div class="mt10">
        <?php if ($_smarty_tpl->tpl_vars['_post']->value['media']['source_type'] == "photo") {?>
            <div class="post-media">
                <div class="post-media-image">
                    <div style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['_post']->value['media']['source_url'];?>
');"></div>
                </div>
                <div class="post-media-meta">
                    <div class="source"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_post']->value['media']['source_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_post']->value['media']['source_provider'];?>
</a></div>
                </div>
            </div>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['_post']->value['media']['source_provider'] == "YouTube") {?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['smart_yt_player']) {?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['_post']) ? $_smarty_tpl->tpl_vars['_post']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['media']['vidoe_id'] = get_youtube_id($_smarty_tpl->tpl_vars['_post']->value['media']['source_html']);
$_smarty_tpl->_assignInScope('_post', $_tmp_array);?>
                    <div class="youtube-player" data-id="<?php echo $_smarty_tpl->tpl_vars['_post']->value['media']['vidoe_id'];?>
">
                        <img src="https://i.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['_post']->value['media']['vidoe_id'];?>
/hqdefault.jpg">
                        <div class="play"></div>
                    </div>
                <?php } else { ?>
                    <div class="post-media">
                        <div class="embed-responsive embed-responsive-16by9">
                            <?php echo html_entity_decode($_smarty_tpl->tpl_vars['_post']->value['media']['source_html'],ENT_QUOTES);?>

                        </div>
                    </div>
                    <div class="post-media-meta">
                        <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['_post']->value['media']['source_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_post']->value['media']['source_title'];?>
</a>
                        <div class="text mb5"><?php echo $_smarty_tpl->tpl_vars['_post']->value['media']['source_text'];?>
</div>
                        <div class="source"><?php echo $_smarty_tpl->tpl_vars['_post']->value['media']['source_provider'];?>
</div>
                    </div>
                <?php }?>
                    
            <?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['media']['source_provider'] == "Vimeo" || $_smarty_tpl->tpl_vars['_post']->value['media']['source_provider'] == "SoundCloud" || $_smarty_tpl->tpl_vars['_post']->value['media']['source_provider'] == "Vine") {?>
                <div class="post-media">
                    <div class="embed-responsive embed-responsive-16by9">
                        <?php echo html_entity_decode($_smarty_tpl->tpl_vars['_post']->value['media']['source_html'],ENT_QUOTES);?>

                    </div>
                </div>
                <div class="post-media-meta">
                    <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['_post']->value['media']['source_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_post']->value['media']['source_title'];?>
</a>
                    <div class="text mb5"><?php echo $_smarty_tpl->tpl_vars['_post']->value['media']['source_text'];?>
</div>
                    <div class="source"><?php echo $_smarty_tpl->tpl_vars['_post']->value['media']['source_provider'];?>
</div>
                </div>
            <?php } else { ?>
                <div class="embed-ifram-wrapper">
                    <?php echo html_entity_decode($_smarty_tpl->tpl_vars['_post']->value['media']['source_html'],ENT_QUOTES);?>

                </div>
            <?php }?>
        <?php }?>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "link" && $_smarty_tpl->tpl_vars['_post']->value['link']) {?>
    <div class="mt10">
        <div class="post-media">
            <?php if ($_smarty_tpl->tpl_vars['_post']->value['link']['source_thumbnail']) {?>
                <div class="post-media-image">
                    <div style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['_post']->value['link']['source_thumbnail'];?>
');"></div>
                </div>
            <?php }?>
            <div class="post-media-meta">
                <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['_post']->value['link']['source_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_post']->value['link']['source_title'];?>
</a>
                <div class="text mb5"><?php echo $_smarty_tpl->tpl_vars['_post']->value['link']['source_text'];?>
</div>
                <div class="source"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['_post']->value['link']['source_host'], 'UTF-8');?>
</div>
            </div>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "poll" && $_smarty_tpl->tpl_vars['_post']->value['poll']) {?>
    <div class="poll-options mt10" data-poll-votes="<?php echo $_smarty_tpl->tpl_vars['_post']->value['poll']['votes'];?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_post']->value['poll']['options'], 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
            <div class="mb5">
                <div class="poll-option js_poll-vote" data-id="<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" data-option-votes="<?php echo $_smarty_tpl->tpl_vars['option']->value['votes'];?>
">
                    <div class="percentage-bg" <?php if ($_smarty_tpl->tpl_vars['_post']->value['poll']['votes'] > 0) {?> style="width: <?php echo ($_smarty_tpl->tpl_vars['option']->value['votes']/$_smarty_tpl->tpl_vars['_post']->value['poll']['votes'])*100;?>
%"<?php }?>></div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="poll_<?php echo $_smarty_tpl->tpl_vars['_post']->value['poll']['poll_id'];?>
" id="option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['option']->value['checked']) {?>checked<?php }?>>
                        <label class="custom-control-label" for="option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['text'];?>
</label>
                    </div>
                </div>
                <div class="poll-voters">
                    <div class="more" data-toggle="modal" data-url="posts/who_votes.php?option_id=<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['option']->value['votes'];?>

                    </div>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "article" && $_smarty_tpl->tpl_vars['_post']->value['article']) {?>
    <div class="mt10">
        <div class="post-media">
            <?php if ($_smarty_tpl->tpl_vars['_post']->value['article']['cover']) {?>
                <a class="post-media-image" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['_post']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['article']['title_url'];?>
">
                    <div style="padding-top: 50%; background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['article']['cover'];?>
');"></div>
                </a>
            <?php }?>
            <div class="post-media-meta">
                <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['_post']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['article']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_post']->value['article']['title'];?>
</a>
                <div class="text mb5"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['_post']->value['article']['text_snippet'],400);?>
</div>
            </div>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "video" && $_smarty_tpl->tpl_vars['_post']->value['video']) {?>
    <div>
        <video id="video-<?php echo $_smarty_tpl->tpl_vars['_post']->value['video']['video_id'];?>
" class="js_fluidplayer" onplay="update_media_views('video', <?php echo $_smarty_tpl->tpl_vars['_post']->value['video']['video_id'];?>
)" <?php if ($_smarty_tpl->tpl_vars['_post']->value['video']['thumbnail']) {?>poster="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['video']['thumbnail'];?>
"<?php }?> style="width:100%;height:100%;" width="100%" height="100%" control preload="auto">
            <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['video']['source'];?>
" type="video/mp4">
            <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['video']['source'];?>
" type="video/webm">
        </video>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "audio" && $_smarty_tpl->tpl_vars['_post']->value['audio']) {?>
    <div>
        <audio id="audio-<?php echo $_smarty_tpl->tpl_vars['_post']->value['audio']['audio_id'];?>
" onplay="update_media_views('audio', <?php echo $_smarty_tpl->tpl_vars['_post']->value['audio']['audio_id'];?>
)" controls preload="auto" style="width: 100%;">
            <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['audio']['source'];?>
" type="audio/mpeg">
            <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['audio']['source'];?>
" type="audio/mp3">
            <?php echo __("Your browser does not support HTML5 audio");?>

        </audio>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "file" && $_smarty_tpl->tpl_vars['_post']->value['file']) {?>
    <div class="post-downloader">
        <div class="icon">
            <i class="fa fa-file-alt fa-2x"></i>
        </div>
        <div class="info">
            <strong><?php echo __("File Type");?>
</strong>: <?php ob_start();
echo $_smarty_tpl->tpl_vars['_post']->value['file']['source'];
$_prefixVariable1 = ob_get_clean();
echo get_extension($_prefixVariable1);?>

            <div class="mt10">
                <a class="btn btn-primary btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_post']->value['file']['source'];?>
"><?php echo __("Download");?>
</a>
            </div>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "map") {?>
    <div class="post-map">
        <img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $_smarty_tpl->tpl_vars['_post']->value['location'];?>
&amp;zoom=13&amp;size=600x250&amp;maptype=roadmap&amp;markers=color:red%7C<?php echo $_smarty_tpl->tpl_vars['_post']->value['location'];?>
&amp;key=<?php echo $_smarty_tpl->tpl_vars['system']->value['geolocation_key'];?>
" width="100%">
    </div>
<?php } elseif (!$_smarty_tpl->tpl_vars['_shared']->value && $_smarty_tpl->tpl_vars['_post']->value['post_type'] == "shared" && $_smarty_tpl->tpl_vars['_post']->value['origin']) {?>
    <?php if ($_smarty_tpl->tpl_vars['_snippet']->value) {?>
    <span class="text-link js_show-attachments"><?php echo __("Show Attachments");?>
</span>
    <?php }?>
    <div class="mt10 <?php if ($_smarty_tpl->tpl_vars['_snippet']->value) {?>x-hidden<?php }?>">
        <div class="post-media">
            <div class="post-media-meta">
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.body.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_post'=>$_smarty_tpl->tpl_vars['_post']->value['origin'],'_shared'=>true), 0, true);
?>
            </div>
        </div>
    </div>
<?php }?>

<!-- product -->
<?php if ($_smarty_tpl->tpl_vars['_post']->value['post_type'] == "product") {?>
    <div class="mtb10 text-lg">
        <strong><?php echo $_smarty_tpl->tpl_vars['_post']->value['product']['name'];?>
</strong>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['_post']->value['product']['location']) {?>
        <div class="mb10 text-muted">
            <i class="fa fa-map-marker fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['_post']->value['product']['location'];?>

        </div>
    <?php }?>
    <!-- post text -->
    <?php if (!$_smarty_tpl->tpl_vars['_shared']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
        <div class="post-text js_readmore text-muted" dir="auto"><?php echo $_smarty_tpl->tpl_vars['_post']->value['text'];?>
</div>
        <div class="post-text-translation x-hidden" dir="auto"></div>
    <?php }?>
    <!-- post text -->
    <div class="post-product-wrapper mt10">
        <div class="post-product-details">
            <div class="title">
                <i class="fa fa-tag fa-fw mr5" style="color: #1f9cff;"></i><?php echo __("Type");?>

            </div>
            <div class="description">
                <?php if ($_smarty_tpl->tpl_vars['_post']->value['product']['status'] == "new") {?>
                    <?php echo __("New");?>

                <?php } else { ?>
                    <?php echo __("Used");?>

                <?php }?>
            </div>
        </div>
        <div class="post-product-details">
            <div class="title">
                <i class="fa fa-money-bill-alt fa-fw mr5" style="color: #2bb431;"></i><?php echo __("Price");?>

            </div>
            <div class="description">
                <?php if ($_smarty_tpl->tpl_vars['_post']->value['product']['price'] > 0) {?>
                    <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['_post']->value['product']['price'];?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                <?php } else { ?>
                    <?php echo __("Free");?>

                <?php }?>
            </div>
        </div>
        <div class="post-product-details">
            <div class="title">
                <i class="fa fa-box fa-fw mr5" style="color: #a038b2;"></i><?php echo __("Status");?>

            </div>
            <div class="description">
                <?php if ($_smarty_tpl->tpl_vars['_post']->value['product']['available']) {?>
                    <?php echo __("In stock");?>

                <?php } else { ?>
                    <?php echo __("SOLD");?>

                <?php }?>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['_post']->value['author_id'] != $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
        <div class="mt10 clearfix">
            <button type="button" class="btn btn-sm btn-primary float-right js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['_post']->value['author_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_post']->value['post_author_name'];?>
">
                <i class="fa fa-comments mr5"></i><?php echo __("Contact Seller");?>

            </button>
        </div>
    <?php }
}?>
<!-- product --><?php }
}
