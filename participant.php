
<?php 
abstract class Participant{
    protected $Nom;


    abstract public function cree();
    abstract public function gettAll();
    abstract public function update();
    abstract public function delete();
}


?>