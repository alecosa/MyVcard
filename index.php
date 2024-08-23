<?PHP
/*

copyright © 2024 MyVcard

Desarrollador:  Hector Alejandro Parada Blanco
                Ingeniero de Sistemas
                https://www.parablan.com/
                Powered by parablan

Descripción:
Formulario para inicio de sesión

*/

error_reporting(0);

$year = date("Y");

echo("
<!DOCTYPE html>
        <head>
                <title>MyVcard</title>
                <link rel='stylesheet' type='text/css' href='css/estilo.css'/>
        </head>
        <body>
        <center>
        <h1>Tarjeta de Presentaci&oacute;n Digital</h1>
        <h6>Evoluci&oacute;n de las tarjetas de presentaci&oacute;n f&iacute;sicas a versiones digital</h6>
        <br/>
        <br/>
        <img src='Imagenes/vcard.png' width='20%'></img>
        <br/>
        <h1>Generar Tarjeta</h1>
        <br/>
        <form method='POST' action='vcard.php'>
        <table border=0 width='28%'>
        <td colspan=2><input type='text' id='nombre' name='nombre' placeholder='Nombre'>
        <tr>
        <td align='center'><select id='codigo' name='codigo'>
              <option value='57'>57</option>
              <option value='56'>56</option>
              <option value='55'>55</option>
              <option value='54'>54</option>
              <option value='593'>593</option>
              <option value='591'>591</option>
              <option value='506'>506</option>
            </select>
        <td><input type='text' id='telefono' name='telefono' placeholder='Tel&eacute;fono'>
        <tr>
        <td colspan=2><input type='text' id='email' name='email' placeholder='email'>
        <tr>
        <td colspan=2><input type='text' id='cargo' name='cargo' placeholder='Cargo'>
        <tr>
        <td colspan=2><input type='text' id='direccion' name='direccion' placeholder='Direccion'>
        <tr>
        <td colspan=2><input type='text' id='web' name='web' placeholder='Sitio web'>
        <tr>
        <td><br/>
        <tr>
        <td colspan=2 align='center'><input type='submit' value='Generar'>
        </table>
        </form>
        </center>
        <br/>
        <br/>
        <center>
        <h6>Powered by parablan</h6>
        </center>
        <br/>
        <br/>
");
?>
