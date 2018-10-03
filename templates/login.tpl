{include file="header.tpl"}
    <form class="bg-white p-2" action="verificarLogin" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="input" class="form-control" name="usuario" placeholder="Escriba su usuario" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" name="contraseña" placeholder="Escriba su contraseña" required>
        </div>
        <button type="submit" class="btn btn-primary">Logearse</button>
        {if !empty($error) }
              <div class="alert alert-danger mt-2" role="alert">{$error}</div>
        {/if}
    </form>
{include file="footer.tpl"}