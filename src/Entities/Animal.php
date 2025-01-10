<?php




abstract class Animal
{

// Propriété

protected float $age;


 // Méthode magique

 


 // Méthode custom

//  public function setAge(float $age){
//   $this->age = $age;
// }


 protected function info() : string
 {

   return "Je suis un animal de l'age de : {$this->age}";

 }


 
}




