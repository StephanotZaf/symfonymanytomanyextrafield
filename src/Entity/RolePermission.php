<?php


namespace App\Entity;

use App\Repository\RolePermissionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RolePermissionRepository::class)]
class RolePermission
{

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Role::class, inversedBy: 'rolePermissions')]
    private $role;

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Permission::class, inversedBy: 'rolePermissions')]
    private $permission;

    #[ORM\Column]
    private ?bool $isRead;

    #[ORM\Column]
    private ?bool $isCreate;

    #[ORM\Column]
    private ?bool $isDelete;

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getPermission(): ?Permission
    {
        return $this->permission;
    }

    public function setPermission(?Permission $permission): self
    {
        $this->permission = $permission;

        return $this;
    }

    public function isIsRead(): ?bool
    {
        return $this->isRead;
    }

    public function setIsRead(bool $isRead): self
    {
        $this->isRead = $isRead;

        return $this;
    }

    public function isIsCreate(): ?bool
    {
        return $this->isCreate;
    }

    public function setIsCreate(bool $isCreate): self
    {
        $this->isCreate = $isCreate;

        return $this;
    }

    public function isIsDelete(): ?bool
    {
        return $this->isDelete;
    }

    public function setIsDelete(bool $isDelete): self
    {
        $this->isDelete = $isDelete;

        return $this;
    }

}