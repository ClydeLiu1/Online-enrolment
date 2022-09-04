
<?php
class Cat {
private $name;
 private $age;
 private $breed;
public function set_name($name) {
 $this->name = $name;
 }
 public function get_name() {
 return $this->name;
 }
 public function set_age($age) {
 $this->age = $age;
 }


 public function get_age() {
return $this->age;
 }
 public function set_breed($breed) {
 $this->breed = $breed;
}
 public function get_breed() {
 return $this->breed;
 }

 public function __toString() {
return "My " . $this->breed . " 's name is "
. $this->name. ". She is " . $this->age . " years old.";;
 }
 }
 
$cat_one = new Cat();
$cat_two = new Cat();
$cat_one->set_name("Fido");
$cat_one->set_age("10").("\n");
$cat_two->set_breed("American Bobtail");
echo $cat_one;
echo $cat_two;
?>






