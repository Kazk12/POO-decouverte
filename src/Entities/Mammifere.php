<?php 





abstract class Mammifere  extends Animal {

protected float $height;


// public function setHeight(float $height){
//     $this->height = $height;
// }

    protected function infoPlus() : string {
        return "je suis un mammifère de la taille : {$this->height} cm";

    }
}