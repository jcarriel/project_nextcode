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

    /**
     * @ORM\ManyToOne(targetEntity=Factura::class, inversedBy="facturas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $factura;

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

    public function getProductos(): ?Productos
    {
        return $this->productos;
    }

    public function setProductos(?Productos $productos): self
    {
        $this->productos = $productos;

        return $this;
    }

    public function getFactura(): ?Factura
    {
        return $this->factura;
    }

    public function setFactura(?Factura $factura): self
    {
        $this->factura = $factura;

        return $this;
    }
}
