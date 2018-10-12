{if !$partial}
    {include file="../header.tpl"}
{/if}
    <div class="col col-lg-4 bg-light border border-dark">
        <h1>{$producto->nombre}</h1>
        
        <p>{$producto->descripcion}</p>
    
        <a href="producto">Volver a la lista de productos</a>   
    </div>
{if !$partial}
    {include file="../footer.tpl"}
{/if}