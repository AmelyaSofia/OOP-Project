<?php
class Agensi{
    public $nama_agensi;

    public function __construct($nama_agensi)
    {
        $this->nama_agensi = $nama_agensi;
    }

    public function getagensi()
    {
        return "Agensi : " . $this->nama_agensi;
    }
}

class Role{
    public $role_id;
    public $role_name;
    public $role_description;
    public $role_status;
    public $agensi;

    public function __construct($role_id, $role_name, $role_description, $role_status, $agensi){
        $this->role_id = $role_id;
        $this->role_name = $role_name;
        $this->role_description = $role_description;
        $this->role_status = $role_status;
        $this->agensi = $agensi;
    }

    public function tampilRole(){
        echo "Id : ".$this->role_id."<br>";
        echo "Nama : ".$this->role_name."<br>";
        echo "Deskripsi : ".$this->role_description."<br>";
        echo "Status : ".$this->role_status."<br>";
        echo $this->agensi->getagensi()."<br>";
        echo "<br>";
    }
}
?>