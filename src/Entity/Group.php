<?php

namespace App\Entity;

use App\Repository\GroupRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=GroupRepository::class)
 * @ORM\Table(name="`group`")
 */
class Group
{
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombrepax;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombrepax(): ?int
    {
        return $this->nombrepax;
    }

    public function setNombrepax(int $nombrepax): self
    {
        $this->nombrepax = $nombrepax;

        return $this;
    }
}
