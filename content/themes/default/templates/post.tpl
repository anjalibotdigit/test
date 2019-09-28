{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
<div class="container mt20 {if $user->_logged_in}offcanvas{/if}">
	<div class="row">

        <!-- side panel -->
        {if $user->_logged_in}
            <div class="col-3 d-block offcanvas-sidebar mt20">
                {include file='_sidebar.tpl'}
            </div>
        {/if}
        <!-- side panel -->
		
		<!-- content panel -->
        <div class="col-9 {if $user->_logged_in}offcanvas-mainbar{/if}">
        	<div class="row">
        		<!-- left panel -->
				<div class="col-md-8 col-lg-8">
				{include file='__feeds_post.tpl' standalone=true}
				</div>
				
				<!-- left panel -->

				<!-- right panel -->
				<div class="col-md-4 col-lg-4">
					{include file='_ads_campaigns.tpl'}
					{include file='_ads.tpl'}
					{include file='_widget.tpl'}
				</div>
				<!-- right panel -->
        	</div>
        </div>
        <!-- content panel -->

	</div>
</div>
<!-- page content -->

{include file='_footer.tpl'}