<?php

namespace App\Entity;

use App\Repository\ClientesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=ClientesRepository::class)
 * @UniqueEntity("ci_ruc")
 */
class Clientes
{

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Factura", mappedBy="clientes")
     */
    private $factura;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255,unique=true)
     * @Assert\NotBlank
     */
    private $ci_ruc;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $razon_social;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $direccion;
    const status = ['ACTIVO', 'INACTIVO'];
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $estado;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function getCiRuc(): ?string
    {
        return $this->ci_ruc;
    }

    public function setCiRuc(string $ci_ruc): self
    {
        $this->ci_ruc = $ci_ruc;

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
    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }


    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

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
