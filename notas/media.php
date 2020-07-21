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
 <input type="text" placeholder= "nota1:" name="nota1" />
<p> <input type="text" placeholder= "nota2:" name="nota2" /></p>
<p> <input type="text" placeholder= "nota3:" name="nota3" /></p>
<p> <input type="text" placeholder= "nota4:" name="nota4" /></p>
 
 <p><input type="submit" value="Calcular"></p>
</form>

<?php

class Media {

private $nota1;
private $nota2;
private $nota3;
private $nota4;

public function getNota1(){
	return $this->nota1;
}
public function setNota1($argNota1){
	 $this->nota1 = $argNota1;
}
public function getNota2(){
	return $this->nota2;
}
public function setNota2($argNota2){
	 $this->nota2 = $argNota2;
}
public function getNota3(){
	return $this->nota3;
}
public function setNota3($argNota3){
	 $this->nota3 = $argNota3;
}
public function getNota4(){
	return $this->nota4;
}
public function setNota4($argNota4){
	 $this->nota4 = $argNota4;
}
public function media(){
                $not1= $this-> getNota1();
				$not2= $this-> getNota2();
				$not3= $this-> getNota3();
				$not4= $this-> getNota4();
				
				$media = ($not1+$not2+$not3+$not4)/4;
				return $media;
            }
public function imprimir(){
               $media=$this-> media();
			   if ($media>=9) {
				echo"MB ". "<br/>" ;
				}
				if ($media>=7 && $media<=8) {
				echo"B ". "<br/>" ;
				}
				if ($media>=5 && $media<=6) {
				echo"R ". "<br/>" ;
				}
				if ($media<5) {
				echo"I ". "<br/>" ;
				}
            }

}
?>
</body>
</html>
