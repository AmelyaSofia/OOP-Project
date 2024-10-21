<?php

require_once 'domain_object/composite_role.php';

class roleModel
{
    private $roles = [];

    public function tambahRole($role_id, $role_name, $role_description, $role_status, $agensi)
    {
        $role = new Role($role_id, $role_name, $role_description, $role_status, $agensi);
        $this->roles[] = $role;
    }

    public function getAllRoles()
    {
        return $this->roles;
    }

    public function hapusRole($role_id)
    {
        foreach ($this->roles as $index => $role) {
            if ($role->role_id == $role_id) {
                unset($this->roles[$index]);
            }
        }
        $this->roles = array_values($this->roles);
    }
}
