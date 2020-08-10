<?php

namespace App\Controller;

use App\Entity\FacturaDetalle;
use App\Repository\FacturaDetalleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/facturadetalle")
 */

class FacturaDetalleController extends AbstractController
{
    /**
     * @Route("/", name="factura_detalle_index", methods={"GET"})
     */
    public function index(FacturaDetalleRepository $facturaDetalleRepository): Response
    {
        return $this->render('factura_detalle/index.html.twig', [
            'factura_detalles' => $facturaDetalleRepository->findAll(),
        ]);
    }

    public function guardarDetalle($productos)
    {
        $em = $this->getDoctrine()->getManager();
        $resultProducto = $em->getRepository(FacturaDetalle::class)->guardarDetalle($productos);
        echo var_dump($resultProducto);
        die();
    }
}
