<?php
session_start();

if ($_SESSION['autenticacion'] !=2){
    
    echo "Lo siento pero no tienes permiso para ver esta pagina.";
    exit();   
}


?>

<html>
<head>
<title>El mejor jugador del mundo <?php   echo $_GET['bestplayer'];?> </title>


</head>


<body>
<?php
//3 VARIABLES SESSION

echo $_COOKIE["usuario"];
echo "</br>";
echo "Bienvenido a tu pagina, ";
echo $_SESSION["usuario"];
echo "Tu profesion es: ";
echo $_SESSION["campo"];
echo "</br>";
//1 GET VARIABLE
echo "El mejor jugador del mundo es:";
echo $_GET['bestplayer'];
$calidad = 10;
echo "</br>";
echo "La nota de calidad del jugador es:";
echo $calidad;
echo "</br>";
echo "Date function: ";

date_default_timezone_set("America/New_York");

$anovisiesto = date("L");
if ($anovisiesto == 1)
{
    echo "Enhorabuena es un año bisiesto";
    
}
else {
    
    echo "Vaya... parece que no es una año bisiesto";
}
echo "</br>";
echo "Null Controls:";
$nom_usuari = $_GET[''] ?? $_POST['usuario'] ?? 'nadie';
echo $nom_usuari;
echo "</br>";
echo "</br>";
echo "Yesterday it was: ";
echo date("d/m/Y", strtotime("yesterday"));
echo "</br>";
echo "The previous month is: ";
echo date('d/m/Y',strtotime("-1 month"));
echo "</br>";

$a=date("t");
$b=date("d");
$dias_restantes= $a-$b;

echo "There are ";
echo $dias_restantes;
echo " days left in this month.";
echo "</br>";
$c=date("m");
$meses_restantes=12-$c;
echo "There are ";
echo $meses_restantes;
echo "  months left in the current year";
echo "</br>";
$mesActual=date("m");

if($mesActual==1||$mesActual==2||$mesActual==3||$mesActual==4){
    
    echo "Good Winter!!!";
}
else if($mesActual==5||$mesActual==6||$mesActual==7||$mesActual==8){
    
    echo "Good Summer!!!";
    
}
else{
    
    echo "Good fall!!!";
}

echo "</br>";
if(isset($_SESSION['views'])) 
    $_SESSION['views'] = $_SESSION['views']+1; 
else
    $_SESSION['views']=1; 
      
echo "Visitas en esta pagina: = ".$_SESSION['views']; 
echo "</br>";
  
 
if (isset($_POST['recordar'])){
$style= "color: ".$_POST['color'].";font-family: ". $_POST['font']. ";font-size: ".$_POST['sizechoice'].";";

setcookie("style",$style,time()+30);
setcookie("color",$_POST['color'],time()+30);
}
else{
echo "no quieres que se recuerde la contrasena ????";
}




?> 

<p style="color:<?php echo $_POST['color'];?>;font-family:<?php echo $_POST['font'];?>;font-size:<?php echo $_POST['sizechoice'];?>">Texto cambiado</p>
<form method="post" action="Link.php">
<p>Introduce tu usuario: 
<input type="text" name="user"/>
</p>
<p>Introduce tu contrasena: 
<input type="text" name="contra"/>
</p>
<p>
<input type="submit" name="submit" value="Submit"/>
</p>
</form>

<a href="https://mail.google.com/mail/u/0/#inbox">Site developed by: ADRIA FUENTES LOPEZ.</a>
</body>
</html>
