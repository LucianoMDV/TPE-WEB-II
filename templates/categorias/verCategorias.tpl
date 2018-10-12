{if !$partial}
    {include file="header.tpl"}
{/if}
    <div class="col">
        <ul class="list-group">
            {foreach from=$categorias item=categoria}
                <a href="categorias/{$categoria->id_categoria}">
                    <li class="list-group-item">{$categoria->nombre}</li>
                </a>
            {/foreach}
        </ul>
    </div>
{if !$partial}
    {include file="footer.tpl"}
{/if}