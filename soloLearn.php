<?php
class Singer {
    public $name = "Ann";
    public function display(){
        echo $this->name;
    }
}
$s = new Singer();
$s->display();
?>