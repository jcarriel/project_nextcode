<?php

namespace App\Controller;

use App\Entity\FacturaDetalle;
use App\Form\FacturaDetalleType;
use App\Repository\FacturaDetalleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/new", name="factura_detalle_new", methods={"GET","POST"})
     */
    public function new()
    {
        
    }

    /**
     * @Route("/{id}", name="factura_detalle_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FacturaDetalle $facturaDetalle): Response
    {
        if ($this->isCsrfTokenValid('delete'.$facturaDetalle->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($facturaDetalle);
            $entityManager->flush();
        }

        return $this->redirectToRoute('factura_detalle_index');
    }
}
