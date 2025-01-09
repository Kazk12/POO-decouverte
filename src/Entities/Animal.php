<?php




class Animal
{

// Propriété

private float $age;


 // Méthode magique

 


 // Méthode custom

 public function setAge(float $age){
  $this->age = $age;
}


 public function info() : string
 {

   return "Je suis un animal de l'age de : {$this->age}";

 }


 
}




