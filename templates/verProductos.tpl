{include file="header.tpl"}
    <h1>tabla productos</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>PRECIO</th>
                <th>DESCRIPCION</th>
                <th>CAMBIOS-ADMIN</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$productos item=producto} <!-- from="$productos" es un arreglo de la tabla producto -->
                <tr>
                    <td>{$producto->nombre}</td>            
                    <td>{$producto->precio}</td>            
                    <td>{$producto->descripcion}</td>
                    <td><button type="submit">Editar</button><button type="submit">Borrar</button></td>                        
                </tr>   
            {/foreach}
        </tbody>
    </table>
    
    <h1>SOLO ADMIN</h1>
    <form class="cargaListaPrecios bg-danger p-3 w-100">
            <div class="form-group row">
                <label class="col-2 col-form-label">Nombre</label>
                <div class="col-10">
                    <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_nombre" placeholder="ingrese un nombre" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Precio:</label>
                <div class="col-10">
                    <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_cantidad" placeholder="ingrese un precio" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Descripcion:</label>
                <div class="col-10">
                    <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_precio" placeholder="ingrese una descripcion" />
                </div>
            </div>
            <div>
                <select class="form-control" name="buscar">
                    {foreach from=$categorias item=categoria}
                        <option>{$categoria}</option>
                    {/foreach}
                </select>
            </div>
            <div>
                <button class="btn btn-success" id="enviarCatalogo" type="button">Enviar</button>
                <button class="btn btn-success" id="actualizar" type="button">Actualizar</button>
            </div>
        </form>
        {$categorias|@debug_print_var}
    {* {$productos|@debug_print_var} para debugear*}
{include file="footer.tpl"}