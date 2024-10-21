<?php
class Orang{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getname()
    {
        return $this->name;
    }
}

class Role extends Orang{
    public $role_id;
    public $role_name;
    public $role_description;
    public $role_status;

    public function __construct($role_id, $role_name, $role_description, $role_status, $name)
    {
        parent :: __construct($name);
        $this->role_id = $role_id;
        $this->role_name = $role_name;
        $this->role_description = $role_description;
        $this->role_status = $role_status;
    }

    public function tampilRole(){
        echo "Nama : ".$this->getname()."<br>";
        echo "Id : ".$this->role_id."<br>";
        echo "Nama Peran : ".$this->role_name."<br>";
        echo "Deskripsi : ".$this->role_description."<br>";
        echo "Status : ".$this->role_status."<br>";
        echo "<br>";
    }
}
