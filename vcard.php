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

use nguyenary\QRCodeMonkey\QRCode;

require 'Librerias/vendorQR/autoload.php';
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$codigo = $_POST['codigo'];
$telefono= $codigo." + ".$telefono;
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$direccion = $_POST['direccion'];
$web = $_POST['web'];
$vcard="BEGIN:VCARD
VERSION:4.0
FN:$nombre
TEL:$telefono
EMAIL:$email
ORG:parablan
TITLE:$cargo
END:VCARD";
$qrcode = new QRCode($vcard);
$qrcode->setConfig([
        'bgColor' => '#ffffff',
        'body' => 'square',
        'bodyColor' => '#000000',
        'brf1' => [],
        'brf2' => [],
        'brf3' => [],
        'erf1' => [],
        'erf2' => [],
        'erf3' => [],
        'eye' => 'frame13',
        'eye1Color' => '#000000',
        'eye2Color' => '#000000',
        'eye3Color' => '#000000',
        'eyeBall' => 'ball0',
        'eyeBall1Color' => '#000000',
        'eyeBall2Color' => '#000000',
        'eyeBall3Color' => '#000000',
        'gradientColor1' => '#328bd7',
        'gradientColor2' => '#000000',
        'gradientOnEyes' => 'true',
        'gradientType' => 'linear',
    ]);
$qrcode->setLogo('Librerias/Logo/footer.jpg');

$data = $vcard;

$qrcode->create('QR.png');

require 'Librerias/vendorMPDF/autoload.php'; 
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [98, 55], 'default_font' => 'futurlig', 'default_font_size' => 6, 'margin_left' => 0, 'margin_right' => 0, 'margin_header' => 3, 'margin_footer' => 0, 'orientation' => 'L']);
$mpdf->SetTitle('VCard');
$mpdf->SetDisplayMode('fullpage');
$mpdf->SetMargins(0, 0, 0, 0); 
$mpdf->defaultfooterfontstyle='R';
$mpdf->defaultfooterline = 0;
$mpdf->SetFooter('<div style="text-align: center"><h5><small>Powered by parablan</small></h5><br></div>');
$mpdf->WriteHTML("
<br>
<div style='background-color: #ffffff;'>
    <table border=0 width='100%'>
        <tr>
        <td align='center' colspan='2'>&nbsp;&nbsp;<img src='Librerias/Logo/Logo.png' width='70px'>
        <tr>
        <td><br>
        <tr>
        <td align='center' colspan='2'><img src='QR.png' width='100px'>&nbsp;&nbsp;
        <tr>
        <td><br>
        <tr>
        <td align='center' colspan='2'>$direccion
        <tr>
        <td align='center' colspan='2'>$web
        <tr>
        <td><br>
        <tr>
        <td align='right' style='width:25%;'><img src='Imagenes/persona.png' width='10px'><td align='left'>&nbsp;&nbsp;$nombre
        <tr>
        <td align='right' style='width:25%;'><img src='Imagenes/cargo.png' width='10px'><td align='left'>&nbsp;&nbsp;$cargo
        <tr>
        <td align='right' style='width:25%;'><img src='Imagenes/telefono.png' width='10px'><td align='left'>&nbsp;&nbsp;$telefono
        <tr>
        <td align='right' style='width:25%;'><img src='Imagenes/email.png' width='10px'><td align='left'>&nbsp;&nbsp;$email
        <tr>
        <td><br>
        <tr>
    </table>
</div>
");
$mpdf -> Output('VCard.pdf', 'I');
?>
