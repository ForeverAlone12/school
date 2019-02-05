{include file="navigation.tpl"}

<div class="container-fluid">
    <div class="container-fluid">
        <h4></h4>
    </div>
    <div class="row">
        {foreach from=$listSystem key=k item=system}
            <div class="col-lg-2">
                <div class="card card-block text-xs-center">
                    <div class="card-block ">
                        <h4 class="card-title">{$system.name}</h4>
                    </div>
                    <img class="img-thumbnail" src="{$system.path_to_image_admin}" alt="{$system.alt_image}">
                    <p class="card-text">{$system.subcribe}</p>
                    <a href="{$system.url}" class="btn btn-outline-info">Войти<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
        {/foreach}
    </div>
