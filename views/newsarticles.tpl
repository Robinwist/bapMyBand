{*'<section>*}

    {*while ($newsItem = $data->fetch_assoc()) {*}

    {*<article>*}
       {*<h1>newsItem['title']</h1>*}
        {*<content>newsItem['content']</content>*}
       {*</article>*}
    {*}*}

    {*</section>*}
{include file="search.tpl"}
<div id="newsWrapper">
<section>
    {foreach from=$data item=newsitem}
        <article>
            <h1>{$newsitem.title}</h1>
            <div class="content">{$newsitem.content}</div>
            {if $newsitem.image}
                <img src="img/{$newsitem.image}">
            {/if}
        </article>
    {/foreach}
</section>
</div>

{include file="pagination.tpl"}