
<?php 
abstract class Participant{
    protected $Nom;

    public function __construct($name)
    {
       $this->Nom = $name;
    }

    abstract public function cree();
    abstract public function gettAll();
    abstract public function update();
    abstract public function delete();
}


?>