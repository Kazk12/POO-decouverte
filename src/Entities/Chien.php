<?php




final class Chien  extends Mammifere {

    private $race;


    public function __construct(float $height, float $age, string $race){
        // $this->setHeight($height);
        // $this->setAge($age);
        $this->race=$race;

    }

    public function crie() : string {
        return "j'aboie ! et je suide de la race de : {$this->race}";

    }
}