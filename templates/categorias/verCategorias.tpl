{include file="header.tpl"}
    <div class="col">
        <ul class="list-group">
            {foreach from=$categorias item=categoria}
                <a href="categorias/{$categoria->id_categoria}">
                    <li class="list-group-item">{$categoria->nombre}</li>
                </a>
            {/foreach}
        </ul>
    </div>
{include file="footer.tpl"}