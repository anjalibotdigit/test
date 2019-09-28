{if $_tpl == "box"}
    <li class="col-md-6 col-lg-3">
        <div class="ui-box">
            <div class="img">
                <a href="{$system['system_url']}/posts/{$_project['project']['post_id']}{if $_search}?ref=qs{/if}">
                    <img alt="{$_project['project']['name']}" src="{if $_project['photos'][0]['source'] != ''}{$system['system_uploads']}/{$_project['photos'][0]['source']}{else}{$system['system_url']}/content/themes/{$system['theme']}/images/blank_product.jpg{/if}" />
                </a>
            </div>
            <div class="mt10">
                <span class="js_user-popover" data-uid="{$_project['project']['post_id']}" data-type="project">
                    <a class="h6" href="{$system['system_url']}/posts/{$_project['project']['post_id']}{if $_search}?ref=qs{/if}">{$_project['project']['name']}</a>
                </span>
               <div>{$_project['project']['project_likes']} {__("Likes")}</div>
            </div>
            <div class="mt10">
                {if $_project['project']['project_likes']}
                    <button type="button" class="btn btn-sm btn-primary js_unlike" data-id="{$_project['project']['post_id']}">
                        <i class="fa fa-thumbs-up mr5"></i>{__("Unlike")}
                    </button>
                {else}
                    <button type="button" class="btn btn-sm btn-primary js_like" data-id="{$_project['project']['post_id']}">
                        <i class="fa fa-thumbs-up mr5"></i>{__("Like")}
                    </button>
                {/if}

            </div>
        </div>
    </li>
{elseif $_tpl == "list"}
    <li class="feeds-item">
        <div class="data-container {if $_small}small{/if}">
            <a class="data-avatar" href="{$system['system_url']}/projects/{$_project['project']['name']}{if $_search}?ref=qs{/if}">
                <img alt="{$_project['project']['name']}" src="{if $_project['photos'][0]['source'] != ''}{$system['system_uploads']}/{$_project['photos'][0]['source']}{else}{$system['system_url']}/content/themes/{$system['theme']}/images/blank_product.jpg{/if}" />
            </a>
            <div class="data-content">
                <div class="float-right">
                    {if $_project['project']['project_likes']}
                        <button type="button" class="btn btn-sm btn-primary js_unlike" data-id="{$_project['project']['post_id']}">
                            <i class="fa fa-thumbs-up mr5"></i>{__("Unlike")}
                        </button>
                    {else}
                        <button type="button" class="btn btn-sm btn-primary js_like" data-id="{$_project['project']['post_id']}">
                            <i class="fa fa-thumbs-up mr5"></i>{__("Like")}
                        </button>
                    {/if}
                </div>
                <div>
                    <span class="js_user-popover" data-uid="{$_project['project']['post_id']}" data-type="project">
                    <a class="h6" href="{$system['system_url']}/posts/{$_project['project']['post_id']}{if $_search}?ref=qs{/if}">{$_project['project']['name']}</a>
                </span>
                    <div>{$_project['project']['project_likes']} {__("Likes")}</div>
                </div>
            </div>
        </div>
    </li>
{/if}