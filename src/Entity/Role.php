<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_role = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $nama_role = null;

    public function getIdRole(): ?int
    {
        return $this->id_role;
    }

    public function getNamaRole(): ?string
    {
        return $this->nama_role;
    }

    public function setNamaRole(?string $nama_role): self
    {
        $this->nama_role = $nama_role;

        return $this;
    }
}
