<?php
require_once 'model/role_model.php';

$objRole = new modelRole();
// $objRole->addRole("admin", "untuk admin", 0);
// $objRole->addRole("kasir", "untuk kasir", 1);
// $objRole->addRole("customer", "untuk pengguna", 1);

foreach ($objRole->getAllRoles() as $role) {
    echo "role ID : ".$role->role_id."<br>";
    echo "role Name : ".$role->role_name."<br>";
    echo "role Description : ".$role->role_description."<br>";
    echo "role Status : ".$role->role_status."<br>";
    echo "<br>";
}
?>