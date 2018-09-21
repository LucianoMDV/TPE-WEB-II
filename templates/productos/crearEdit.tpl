{include file="../header.tpl"}
    <h1>Ingrese los nuevos datos del producto</h1>

    <form class="bg-danger p-3 w-100" method="POST" action="editarProducto/{$id_producto}">
            <div class="form-group row">
                <label class="col-2 col-form-label">Nombre:</label>
                <div class="col-10">
                    <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_nombre" value="{$producto->nombre}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Precio:</label>
                <div class="col-10">
                    <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_precio" value="{$producto->precio}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Descripcion:</label>
                <div class="col-10">
                    <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_descripcion" value="{$producto->descripcion}" />
                </div>
            </div>
            <div>
                <select class="form-control" name="buscar">
                    {foreach from=$categorias item=categoria}
                        <option value="{$categoria->id_categoria}">{$categoria->nombre}</option>
                    {/foreach}
                </select>
            </div>
            <div>
                <button class="btn btn-success" id="enviarCatalogo" type="submit">Actualizar producto</button>   
            </div>
        </form>
{include file="../footer.tpl"}