<h1>Search results:</h1>
{*<section>*}
    {*{foreach from=$result item=newsitem}*}
        {*<article>*}
            {*<p>{$newsitem.title}</p>*}
            {*<content>{$newsitem.content}</content>*}
            {*<img src="img/{$newsitem.image}">*}
        {*</article>*}
    {*{/foreach}*}
{*</section>*}

{include file="search.tpl"}
<div id="newsWrapper">
    <section>
        {foreach from=$result item=newsitem}
            <article>
                <h1>{$newsitem.title}</h1>
                <content>{$newsitem.content}</content>
                {if $newsitem.image}
                    <img src="img/{$newsitem.image}">
                {/if}
            </article>
        {/foreach}
    </section>
</div>

{include file="pagination.tpl"}