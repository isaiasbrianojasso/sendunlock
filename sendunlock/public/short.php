<?php
if(isset($_POST["texto"]))
{
    $variable=$_POST["texto"];
    if($_POST["texto"])
    echo file_get_contents("https://ios.ibusca.info/api?create&key=mdM2Ryzau3ngcPtvYjWlB4ErpZJID1FGK8q&link=$variable");
	//	echo "He recibido en el archivo.php: ".$_POST["texto"];
	else
		echo "He recibido un campo vacio";
}
?>