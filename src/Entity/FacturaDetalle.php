<?php

namespace App\Entity;

use App\Repository\FacturaDetalleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FacturaDetalleRepository::class)
 */
class FacturaDetalle
{

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Factura", inversedBy="factura_detalle")
     */
    private $factura;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Productos", inversedBy="factura_detalle")
     */
    private $productos;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $cantidad;

    /**
     * @ORM\Column(type="float")
     */
    private $total;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }
}
