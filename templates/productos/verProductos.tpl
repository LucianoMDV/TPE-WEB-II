{include file="../header.tpl"}
    <div class="col">
        <div class="card bg-warning mb-3" style="max-width: 100rem;">
            <div class="card-header">Tabla productos</div>
            {* <div class="card-body"> *}
                {* <h5 class="card-title">Tabla productos</h5> *}
                <table class="table table-sm table-dark table-bordered text-center mb-0">
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>PRECIO</th>
                        <th>CATEGORIA</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$productos item=producto} <!-- from="$productos" es un arreglo de la tabla producto -->
                        <tr>
                            <td><a class='tablaNombre' href="producto/{$producto->id_producto}">{$producto->nombre}</a></td>            
                            <td>{$producto->precio}</td>
                            <td>{$producto->nombre_categoria}</td>
                        </tr>       
                    {/foreach}
                </tbody>
            </table>
            {* </div> *}
        </div>
{include file="../footer.tpl"}