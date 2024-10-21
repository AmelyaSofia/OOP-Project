<?php
require_once 'model/composite_model.php';

echo " TESTING COMPOSITION MODEL <br>";

$roleModel = new RoleModel();

$roleModel->tambahRole(1, "Pilot", "Menyetir Pesawat", "Inaktif", "Garuda Indonesia");
$roleModel->tambahRole(2, "Penyanyi", "Menyanyi", "Inktif", "SM Entertainment");
$roleModel->tambahRole(3, "Penari", "Menari", "Aktif", "YG Entertainment");


echo "<strong>Daftar Role:</strong><br>";
foreach ($roleModel->getAllRoles() as $role) {
    $role->tampilRole();
}


$roleModel->hapusRole(2);
echo "<br><strong>Setelah Role Penyanyi Dihapus:</strong><br>";
foreach ($roleModel->getAllRoles() as $role) {
    $role->tampilRole();
}
