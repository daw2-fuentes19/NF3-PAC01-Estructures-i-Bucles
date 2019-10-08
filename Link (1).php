<?php
session_start();
$_SESSION['usuario']="Adria123";
$_SESSION['autenticacion']=2;
$_SESSION['campo']="Developer";
setcookie("usuario","AdriCookie",time()+6);
?>
<html>
<head>
<title>El mejor jugador del mundo es</title>
</head>
<body>
<?php
$mejorjugador = urlencode("Leo Messi");
echo "<a href='jugadorSite.php?bestplayer=$mejorjugador'>";
echo "Clica para saber quien es el mejor jugador del mundo";
echo "</a>";

echo "</br>";
echo "Nombre de usuario: ";
echo $_POST['user'];
echo "</br>";
echo "Contrasena del usuario: ";
echo $_POST['contra'];
echo "</br>";
$style= "color: ".$_POST['color'].";font-family: ".$_POST['font']. ";font-size: ".$_POST['sizechoice'].";";

?>




<form method="post" action="jugadorSite.php">
  <p>
    <select name="color" size="1">
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>
        </select>
    </p>
    <p>
        <select name="font" size="1">
        <option value="Arial">Arial</option>
        <option value="Verdana">Verdana</option>
        <option value="Calibri">Calibri</option>
        </select>
    </p>
     <p>
        <select name="sizechoice" size="1">
        <option value="6">6</option>
        <option value="10">10</option>
        <option value="14">14</option>
        <option value="18">18</option>
        <option value="22">22</option>
        </select>
    </p>
    <input type="submit" value="Ver texto cambiado">
  </p>
  <input type="checkbox" name="recordar">
<p style="<?php echo $_COOKIE['style'] ?>">hola este es mi texto con las cookies</p>
</form>
</body>
</hmtl>
