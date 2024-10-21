<?php
require_once 'model/aggregation_model.php';

echo " TESTING AGGREGATION MODEL <br>";

$agensikerja = new Agensi("Pertamina");
$agensikerja2 = new Agensi("KAI");

$roleModel = new RoleModel();

$roleModel->tambahRole(1, "Kasir", "Mengelola transaksi", "Aktif", $agensikerja);
$roleModel->tambahRole(2, "Manajer", "Mengawasi operasional", "Aktif", $agensikerja2);

echo "<strong>Daftar Role:</strong><br>";
foreach ($roleModel->getAllRoles() as $role) {
    $role->tampilRole();
}

$roleModel->hapusRole(1);
echo "<br><strong>Setelah Role Kasir Dihapus:</strong><br>";
foreach ($roleModel->getAllRoles() as $role) {
    $role->tampilRole();
}
