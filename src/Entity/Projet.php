<?php

namespace App\Entity;

use App\Repository\ProjetRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjetRepository::class)]
class Projet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $NameProjet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameProjet(): ?string
    {
        return $this->NameProjet;
    }

    public function setNameProjet(string $NameProjet): self
    {
        $this->NameProjet = $NameProjet;

        return $this;
    }
}
