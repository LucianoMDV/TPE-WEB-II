{include file="../header.tpl"}
            <div class="col">
                <div class="card bg-light mb-3">
                    <div class="card-header">Tabla productos</div>
                    <table class="table table-sm table-dark table-borderedless text-center table-hover mb-0">
                        <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>PRECIO</th>
                                <th>CATEGORIA</th>
                                <th>CAMBIOS-ADMIN</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$productos item=producto} <!-- from="$productos" es un arreglo de la tabla producto -->
                                <tr>
                                    <td><a class='tablaNombre' href="producto/{$producto->id_producto}">{$producto->nombre}</a></td>            
                                    <td>{$producto->precio}</td>
                                    <td>{$producto->nombre_categoria}</td>
                                    <td>
                                        <a class="btn btn-outline-warning" id="modificar" href="crearEdit/{$producto->id_producto}"><i class="fas fa-edit"></i></a> 
                                        <a class="btn btn-outline-danger" href="eliminarProducto/{$producto->id_producto}"><i class="fa fa-trash"></i></a>
                                    </td>                        
                                </tr>       
                            {/foreach}
                        </tbody>
                    </table>
                    {* </div> *}
                </div>
                
                <div class="card text-white bg-dark mb-3" style="max-width: 100rem;">
                    <div class="card-header">SOLO ADMIN</div>
                    {* <div class="card-body"> *}
                        {* <h5 class="card-title">Dark card title</h5> *}
                        <form class="cargaListaPrecios bg-danger p-3 w-100" method="POST" action="insertarProducto">
                            <div class="form-group row">
                                <label class="col-3 col-md-2 col-form-label">Nombre</label>
                                <div class="col-9 col-md-10">
                                    <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_nombre" placeholder="Ingrese un nombre" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-md-2 col-form-label">Precio:</label>
                                <div class="col-9 col-md-10">
                                    <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_precio" placeholder="Ingrese un precio" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-md-2 col-form-label">Descripcion:</label>
                                <div class="col-9 col-md-10">
                                    <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_descripcion" placeholder="Ingrese una descripcion" />
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
                                <button class="btn btn-success" id="enviarCatalogo" type="submit">Insertar producto</button>   
                            </div>
                        </form>
                        {* <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> *}
                    {* </div> *}
                </div>
            </div>
{include file="../footer.tpl"}