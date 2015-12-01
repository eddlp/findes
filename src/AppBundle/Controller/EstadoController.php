<?php

namespace AppBundle\Controller;

use AppBundle\Entity\estado;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/estados", name="estados")
 */
class EstadoController extends Controller
{
    /**
     * @Route("/save")
     */
    public function createAction(Request $request)
    {
        $estado = new Estado();
        $estado->setNombre("Primer estado");

        //Entity manager
        $em = $this->getDoctrine()->getManager();

        $em->persist($estado);
        $em->flush();

        return new Response('Estado creado. Id: '.$estado->getId());
    }

    /**
     * @Route("/detalle/{id}")
     */
    public function showAction($id)
    {
        $estado = $this->getDoctrine()
            ->getRepository('AppBundle:estado')
            ->find($id);

        if (!$estado) {
            throw $this->createNotFoundException(
                'No state found for id ' . $id
            );
        }


    }

    /**
     * @Route("/listar")
     */
    public function showAllAction()
    {

    }

}
