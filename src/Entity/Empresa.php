<?php

namespace App\Entity;

use App\Repository\EmpresaRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=EmpresaRepository::class)
 * @UniqueEntity("ruc")
 */
class Empresa
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $ruc;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $razon_social;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $direccion;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Factura", mappedBy="empresa")
     */
    private $factura;
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRuc(): ?string
    {
        return $this->ruc;
    }

    public function setRuc(string $ruc): self
    {
        $this->ruc = $ruc;

        return $this;
    }

    public function getRazonSocial(): ?string
    {
        return $this->razon_social;
    }

    public function setRazonSocial(string $razon_social): self
    {
        $this->razon_social = $razon_social;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }
}
