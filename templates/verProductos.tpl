{include file="header.tpl"}
    <h1>tabla productos</h1>
    <table>
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>PRECIO</th>
                <th>DESCRIPCION</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$productos item=producto} <!-- from="$productos" es un arreglo de la tabla producto -->
                <tr>
                    <td>{$producto->nombre}</td>            
                    <td>{$producto->precio}</td>            
                    <td>{$producto->descripcion}</td>            
                </tr>   
            {/foreach}
        </tbody>
    </table>
    {* {$productos|@debug_print_var} para debugear*}
{include file="footer.tpl"}