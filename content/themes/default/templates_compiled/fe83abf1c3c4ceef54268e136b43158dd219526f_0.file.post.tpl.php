<?php
/* Smarty version 3.1.33, created on 2019-09-19 09:53:25
  from '/home/cryptocodex/public_html/content/themes/default/templates/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d835015884308_00532018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe83abf1c3c4ceef54268e136b43158dd219526f' => 
    array (
      0 => '/home/cryptocodex/public_html/content/themes/default/templates/post.tpl',
      1 => 1568886767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_post.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5d835015884308_00532018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container mt20 <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas<?php }?>">
	<div class="row">

        <!-- side panel -->
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
            <div class="col-3 d-block offcanvas-sidebar mt20">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        <?php }?>
        <!-- side panel -->
		
		<!-- content panel -->
        <div class="col-9 <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas-mainbar<?php }?>">
        	<div class="row">
        		<!-- left panel -->
				<div class="col-md-8 col-lg-8">
				<?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true), 0, false);
?>
				</div>
				
				<!-- left panel -->

				<!-- right panel -->
				<div class="col-md-4 col-lg-4">
					<?php $_smarty_tpl->_subTemplateRender('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>
				<!-- right panel -->
        	</div>
        </div>
        <!-- content panel -->

	</div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
