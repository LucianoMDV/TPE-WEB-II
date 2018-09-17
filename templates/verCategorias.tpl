{include file="header.tpl"}
    <h1>tabla categoria</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$categorias item=categoria} <!-- from="$productos" es un arreglo de la tabla producto -->
                <tr>
                    <td>{$categoria->id_categoria}</td>            
                    <td>{$categoria->nombre}</td>
                    <td><button type="submit">Editar</button><button type="submit">Borrar</button></td>                        
                </tr>   
            {/foreach}
        </tbody>
    </table>
       
    {$categorias|@debug_print_var}

{include file="footer.tpl"}