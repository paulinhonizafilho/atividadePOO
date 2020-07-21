<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exerc</title>
</head>
<body>

<form action="mostrar.php" method="post">
 <input type="text" placeholder= "base:" name="base" />
<p> <input type="text" placeholder= "altura:" name="altura" /></p>

 
 <p><input type="submit" value="Calcular"></p>
</form>

<?php

class Triangulo {

private $base;
private $altura;

public function getBase(){
	return $this->base;
}
public function setBase($argBase){
	 $this->base = $argBase;
}
public function getAltura(){
	return $this->altura;
}
public function setAltura($argAltura){
	 $this->altura = $argAltura;
}

public function area(){
                $bas= $this-> getBase();
				$alt= $this-> getAltura();
				
				$area = ($bas*$alt)/2;
				return $area;
            }
public function imprimir(){
                
				echo"Área: ". $this-> area(). "<br/>" ;
				echo"Base: ". $this-> getBase(). "<br/>";
				echo"Altura: ". $this-> getAltura(). "<br/>";
            }

}
?>
</body>
</html>
