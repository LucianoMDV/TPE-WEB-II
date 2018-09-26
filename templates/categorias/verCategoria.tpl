{include file="header.tpl"}
    </div>

    <div class="row">
        {foreach from=$productosCateg item=producto}  
            <div class="col-sm-6 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{$producto->nombre}</h5>
                        <h3 class="card-title">{$producto->precio}</h3>
                        <p class="card-text">{$producto->descripcion}</p>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
    
    <div class="row mt-2">
        <a href="categorias" class="col btn btn-primary">Volver atras</a>
{include file="footer.tpl"}