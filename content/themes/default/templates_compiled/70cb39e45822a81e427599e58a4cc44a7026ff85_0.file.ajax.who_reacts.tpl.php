<?php
/* Smarty version 3.1.33, created on 2019-09-17 21:37:33
  from '/home/cryptocodex/public_html/content/themes/default/templates/ajax.who_reacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d81521d9a11a1_35218304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70cb39e45822a81e427599e58a4cc44a7026ff85' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/ajax.who_reacts.tpl',
      1 => 1568278182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__reaction_emojis.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
  ),
),false)) {
function content_5d81521d9a11a1_35218304 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header with-nav">
    <div class="modal-title">
        <!-- panel nav -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['reaction_type']->value == "all") {?>active<?php }?>" href="#" data-toggle="modal" data-url="posts/who_reacts.php?<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&reaction_type=all">
                    <?php echo __("All");?>

                </a>
            </li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reactions']->value, 'reaction');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reaction']->value) {
?>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['reaction_type']->value == $_smarty_tpl->tpl_vars['reaction']->value['reaction']) {?>active<?php }?>" href="#" data-toggle="modal" data-url="posts/who_reacts.php?<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&reaction_type=<?php echo $_smarty_tpl->tpl_vars['reaction']->value['reaction'];?>
">
                        <div style="height: 19px;">
                            <div class="inline-emoji no_animation">
                                <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['reaction']->value['reaction']), 0, true);
?>
                            </div>
                        </div>
                    </a>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <!-- panel nav -->
    </div>
    <!-- close -->
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <!-- close -->
</div>
<div class="modal-body">
    <?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_reaction'=>$_smarty_tpl->tpl_vars['_user']->value["reaction"]), 0, true);
?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

        <?php if (count($_smarty_tpl->tpl_vars['users']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
            <!-- see-more -->
            <div class="alert alert-info see-more js_see-more" data-get="<?php echo $_smarty_tpl->tpl_vars['handle']->value;?>
_reactions" data-filter="<?php echo $_smarty_tpl->tpl_vars['reaction_type']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <span><?php echo __("See More");?>
</span>
                <div class="loader loader_small x-hidden"></div>
            </div>
            <!-- see-more -->
        <?php }?>
    <?php } else { ?>
        <p class="text-center text-muted">
            <?php echo __("No reactions yet");?>

        </p>
    <?php }?>
</div>
<?php }
}
