<?php
/* Smarty version 3.1.33, created on 2019-09-28 04:17:11
  from '/home/cryptocodex/public_html/content/themes/default/templates/__feeds_event.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8edec7876646_99055045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b85a4ce3736bab79d9790d573c3109510314734a' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/__feeds_event.tpl',
      1 => 1569643106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8edec7876646_99055045 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_tpl']->value == "box") {?>
    <li class="col-md-6 col-lg-3">
        <div class="ui-box">
            <div class="img">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>">
                    <img alt="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_picture'];?>
" />
                </a>
            </div>
            <div class="mt10">
                <a class="h6" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
</a>
                <div><?php echo $_smarty_tpl->tpl_vars['_event']->value['event_interested'];?>
 <?php echo __("Interested");?>
</div>
            </div>
            <div class="mt10">
                <?php if ($_smarty_tpl->tpl_vars['_event']->value['i_joined']['is_interested']) {?>
                    <button type="button" class="btn btn-sm btn-primary js_uninterest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                        <i class="fa fa-check mr5"></i><?php echo __("Interested");?>

                    </button>
                <?php } else { ?>
                    <button type="button" class="btn btn-sm btn-primary js_interest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                        <i class="fa fa-star mr5"></i><?php echo __("Interested");?>

                    </button>
                <?php }?>
            </div>
        </div>
    </li>
<?php } elseif ($_smarty_tpl->tpl_vars['_tpl']->value == "list") {?>
    <li class="feeds-item">
        <div class="data-container <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>small<?php }?>">
            <a class="data-avatar" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
">
            </a>
            <div class="data-content">
                <div class="float-right">
                    <?php if ($_smarty_tpl->tpl_vars['_event']->value['i_joined']['is_interested']) {?>
                        <button type="button" class="btn btn-sm btn-primary js_uninterest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                            <i class="fa fa-check mr5"></i><?php echo __("Interested");?>

                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-sm btn-primary js_interest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                            <i class="fa fa-star mr5"></i><?php echo __("Interested");?>

                        </button>
                    <?php }?>
                </div>
                <div>
                    <span class="name">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
</a>
                    </span>
                    <div><?php echo $_smarty_tpl->tpl_vars['_event']->value['event_interested'];?>
 <?php echo __("Interested");?>
</div>
                </div>
            </div>
        </div>
    </li>
<?php }
}
}
