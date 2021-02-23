<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChambreRepository::class)
 */
class Chambre
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
    private $nbpax;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbpax(): ?int
    {
        return $this->nbpax;
    }

    public function setNbpax(int $nbpax): self
    {
        $this->nbpax = $nbpax;

        return $this;
    }
}
