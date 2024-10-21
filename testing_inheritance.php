<?php
require_once 'model/inheritance_model.php';

echo " TESTING INHERITANCE MODEL <br>";

$roleModel = new roleModel();

$roleModel->tambahRole(1, "Pilot", "Menyetir Pesawat", "Aktif", "sopiaaa");
$roleModel->tambahRole(2, "Admin", "Mengelola sistem", "Inaktif", "maria");


echo "<strong>Daftar Role:</strong><br>";
foreach ($roleModel->getAllRoles() as $role) {
    $role->tampilRole();
}


$roleModel->hapusRole(1);
echo "<br><strong>Setelah Role Pilot Dihapus:</strong><br>";
foreach ($roleModel->getAllRoles() as $role) {
    $role->tampilRole();
}
