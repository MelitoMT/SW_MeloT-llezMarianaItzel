<?php
echo"
<!DOCTYPE html>
<html lang='en'>
<head>
    <link rel='stylesheet' href='../Statics/Cifrado2.css'>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
<br>
<br>
";
echo"<div class='grid'>";
echo"
    <div></div>
    <div></div>
    <div>
    <h1>Cifrando Ando XDonas</h1>
    <br>
    <br>
    <form action='Cifrado2.php' method='post'>
        <input type='text' name='str' required placeholder='Texto a cifrar'>
        <br>
        <input type='submit' name='Cifrar' value='Cifrar'>
        <br>
    </form>
    <form action='Cifrado2.php' method='post'>
        <br>
        <input type='text' name='cifrado' required placeholder='Texto a Descifrar'>
        <br>
        <input type='text' name='llave' required placeholder='Llave'>
        <br>
        <input type='submit' name='Descifrar' value='Descifrar'>
    </form>
";
$array=array(
    array("A","C","F","J","O","U",".","/","!"),
    array("B","E","I","N","T","Z","&","_"),
    array("D","H","M","S","Y","%","-"),
    array("G","L","R","X"," ","#"),
    array("K","Q","W",",","+",),
    array("P","V","?","=",)
);
$simbolos=array(
    "1" => "13",
    "2" => "14",
    "3" => "89",
    "4" => "56",
    "5" => "78",
    "6" => "13",
    "7" => "43",
    "8" => "00",
    "9" => "36"
);
if(isset($_POST['Cifrar'])){
$char=rand(1,9);
$str=$_POST['str'];
$str=strtoupper($str);
$str2=str_split($str,1);
for($i=0;$i<count($array);$i++){
    for($n=0;$n<count($array[$i]);$n++){
        foreach($str2 as $key => $value){
            if($value==$array[$i][$n]){
                $str2[$key]=$i.$n;
            }
        }
    }
}
array_push($str2,$simbolos[$char]);
echo"Texto cifrado: ";
foreach($str2 as $key => $value){
    echo$str2[$key];
}
$llave=[];
array_push($llave, rand(1000,9999),$char);
echo "<br>";
echo"Llave: ";
foreach($llave as $key => $value){
echo $llave[$key];
}
}
if(isset($_POST['Descifrar'])){
$llavesita=$_POST['llave'];
$string=$_POST['cifrado'];
$llavesita2=str_split($llavesita,1);
$string2=str_split($string,2);
if($simbolos[end($llavesita2)]==end($string2)){
    echo"Texto descifrado: ";
    array_splice($string2, -1, 1);
    foreach($string2 as $key => $value){
    $split=str_split($value);
    $string2[$key]=$array[$split[0]][$split[1]];
    echo $string2[$key];
    $split=[];
    }
}
else{
    echo"Esa no es la llave";
}
}
echo"</div>";
echo"
<div></div>
<div></div>";
echo"</div>";
echo"
</body>
</html>
";
?>