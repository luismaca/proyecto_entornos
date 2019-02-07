<?PHP

$n1=$_POST["a"];
$n2=$_POST["b"];
if (isset($_POST["boton1"])){
     echo $n1+$n2;
}
if (isset($_POST["boton2"])){
     echo $n1-$n2;
}
if (isset($_POST["boton3"])){
     echo $n1*$n2;
}
if (isset($_POST["boton4"])){
     echo $n1/$n2;
}
?>