<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/usuarios", name="usuarios")
 */
class UsuarioController extends Controller
{
    /**
     * @Route("/")
     */
    public function signInAction(Request $request)
    {
        return $this->render('usuario/signin.html.twig');
    }
    /**
     * @Route("/signUp")
     */
    public function signUpAction(Request $request)
    {
        return $this->render('usuario/signup.html.twig');
    }
    /**
     * @Route("/login")
     */
    public function loginAction(Request $request)
    {
        return new Response('HELLO USER');
    }
    /**
     * @Route("/guardar")
     */
    public function createAction(Request $request)
    {

    }

    /**
     * @Route("/detalle/{id}")
     */
    public function showAction($id)
    {

    }

    /**
     * @Route("/listar")
     */
    public function showAllAction()
    {

    }

    /**
     * @Route("/eliminar/{id}")
     */
    public function deleteAction($id)
    {

    }
}
