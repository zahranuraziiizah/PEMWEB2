<?php
class Hero{
    // atribut
    public $name = 'Alucard';
    public $hp = 3200;
    public $damage = 240;

    //method
    public function __construct($name, $hp, $damage)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->damage = $damage;
    }

    public function getDetail()
    {
        echo "<br> Name: " . $this->name;
        echo "<br> Health Poin: " . $this->hp;
        echo "<br> Damage: " . $this->damage;
        echo "<br> ==============================";
    }

    public function attack($target){
        $target->hp - $this->damage;
        echo "<br> Berhasil menyerang $target->name";
        echo "<br> Hp target saat ini $target->hp";      
    }
}

// instansiasi object hero
$hero1 = new Hero('Alucard', 3200, 240);
$hero1->getDetail();

$hero2 = new Hero('Baxia', 5600, 70);
$hero2->getDetail();

$hero1->attack($hero2);