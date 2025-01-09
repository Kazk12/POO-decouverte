<?php




class Formule1
{

// Propriété

 private $speed = 0;



 // Méthode magique

 public function __construct(int $speed)
 {
    $this->speed = $speed;
 }


 // Méthode custom


 public function drive() : string
 {

   return "Vroom vroom à " . $this->speed . " km/h";


   // Cette function va afficher dans ma page cet echo du coup il me faut le return
  //  return $this;

 }

 public function shiftGear(int $speed) : self
 {
   $this->speed += $speed;

   // Cette function ne sert pas à afficher donc le return ne sert pas
   return $this;
 }

 
}
