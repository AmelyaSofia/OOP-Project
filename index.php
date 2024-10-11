<?php
require_once 'domain_object/node_role.php';

$obj_role = [];
$obj_role[] = new Role(1, "kasir", "dibuat untuk kasir", 1);
$obj_role[] = new Role(2, "admin", "dibuat untuk admin", 1);
$obj_role[] = new Role(1, "owner", "dibuat untuk yang punya", 0);
$obj_role[] = new Role(1, "customer", "dibuat untuk pelanggan", 1);

// foreach ($obj_role as $role){
//     echo "id role : " .$role->role_id . "<br>";
//     echo "nama role : " .$role->role_name . "<br>";
//     echo "keterangan : " .$role->role_description . "<br>";
//     echo "status role : " .$role->role_status . "<br>";
//     echo "<br>";
// }
include 'view/role_list.php';
?>