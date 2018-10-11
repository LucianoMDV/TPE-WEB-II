{* {include file="header.tpl"} *}
        <div class="col">
            <ul class="list-group">
                {foreach from=$categorias item=categoria}
                    <div>
                        <a href="categorias/{$categoria->id_categoria}">
                            <li class="list-group-item">{$categoria->nombre}</li>
                        </a>
                        <a class="btn btn-outline-danger" href="eliminarCategoria/{$categoria->id_categoria}">Borrar</a>
                    </div>
                {/foreach}
            </ul>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <div class="card text-white bg-dark mb-3" style="max-width: 100rem;">
                <div class="card-header">SOLO ADMIN</div>
                <form class="cargaListaPrecios bg-danger p-3 w-100" method="POST" action="insertarCategoria">
                    <div class="form-group row">
                        <label class="col-3 col-md-2 col-form-label">Nombre</label>
                        <div class="col-9 col-md-10">
                        <input class="input ListaCatalogo form-control" type="text" name="nombreCateg" placeholder="Ingrese un nombre" />
                    </div>
                    <div>
                        <button class="btn btn-success" id="enviarCatalogo" type="submit">Insertar categoria</button>   
                    </div>
                </form>
            </div>
        </div>
    </div>
{* {include file="footer.tpl"} *}