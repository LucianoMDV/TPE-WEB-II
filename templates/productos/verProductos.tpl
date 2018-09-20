{include file="../header.tpl"}
    <h1>tabla productos</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>PRECIO</th>
                {* <th>CAMBIOS-ADMIN</th> *}
            </tr>
        </thead>
        <tbody>
            {* {foreach from=$categorias item=categoria}
                <tr>    
                    <td>{$categoria->nombre}</td>
                </tr>
            {/foreach} *}
            {foreach from=$productos item=producto} <!-- from="$productos" es un arreglo de la tabla producto -->
                <tr>
                    <td><a href="producto/{$producto->id_producto}">{$producto->nombre}</a></td>            
                    <td>{$producto->precio}</td>
                    <td><a class="btn btn-outline-warning" href="">Editar</a> <a class="btn btn-outline-danger" href="borrarProducto/{$producto->id_producto}">Borrar</a></td>                        
                </tr>       
            {/foreach}
        </tbody>
    </table>
    
    <h1>SOLO ADMIN</h1>
    <form class="cargaListaPrecios bg-danger p-3 w-100" method="POST" action="guardarActualizarProducto">
            <div class="form-group row">
                <label class="col-2 col-form-label">Nombre</label>
                <div class="col-10">
                    <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_nombre" placeholder="ingrese un nombre" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Precio:</label>
                <div class="col-10">
                    <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_precio" placeholder="ingrese un precio" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Descripcion:</label>
                <div class="col-10">
                    <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_descripcion" placeholder="ingrese una descripcion" />
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
                <button class="btn btn-success" id="enviarCatalogo" type="submit">Enviar</button>
                <button class="btn btn-success" id="actualizar" type="submit" >Actualizar</button>
            </div>
        </form>
    {* {$productos|@debug_print_var} para debugear*}
{include file="../footer.tpl"}