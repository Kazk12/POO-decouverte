<?php 





class Mammifere  extends Animal {

private float $height;


public function setHeight(float $height){
    $this->height = $height;
}

    public function infoPlus() : string {
        return "je suis un mammifère de la taille : {$this->height} cm";

    }
}