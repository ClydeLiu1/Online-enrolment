<?php

class Language {
    public function good_morning() {
        throw new Exception("good_morning() function not implemented");
    }
}
class Maori extends Language {
    public function good_morning() {
        echo "Morena</br>";
    }
}
class Spanish extends Language {
    public function good_morning() {
        echo "Hola</br>";
    }
}
class German extends Language {
    public function good_morning() {
        echo "Guten Morgen</br>";
    }
}
$maori = new Maori();
$spanish = new Spanish();
$german = new German();
$maori->good_morning();
$spanish->good_morning();
$german->good_morning();
?>