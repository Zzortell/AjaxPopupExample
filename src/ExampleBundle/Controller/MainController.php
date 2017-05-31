<?php

namespace ExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('ExampleBundle:Index:index.html.twig');
    }

    /**
     * Ajax
     * @Route("/simple", name="simple")
     */
    public function simplePopupAction()
    {
        return $this->render('ExampleBundle:Popup:simple.html.twig');
    }


    /**
     * Ajax
     * @Route("/opening", name="opening")
     */
    public function openingAction()
    {
        return $this->render('ExampleBundle:Popup:opening.html.twig');
    }

    /**
     * Ajax
     * @Route("/links", name="links")
     */
    public function linksPopupAction()
    {
        return $this->render('ExampleBundle:Popup:links.html.twig');
    }

    /**
     * Ajax
     * @Route("/link_followed", name="link_followed")
     */
    public function linkFollowedAction()
    {
        return $this->render('ExampleBundle:Popup:link_followed.html.twig');
    }

    /**
     * Ajax
     * @Route("/buttons", name="buttons")
     */
    public function buttonsAction()
    {
        return $this->render('ExampleBundle:Popup:buttons.html.twig');
    }

    /**
     * Ajax
     * @Route("/popup2", name="popup2")
     */
    public function popup2Action()
    {
        return $this->render('ExampleBundle:Popup:popup2.html.twig');
    }

    /**
     * Ajax
     * @Route("/form", name="form")
     */
    public function formAction(Request $request)
    {
        if ($request->getMethod() === 'POST') {
            return new Response('<p>Logged in!</p>');
        }
        return $this->render('ExampleBundle:Popup:form.html.twig');
    }

    /**
     * Ajax
     * @Route("/no_password", name="no_password")
     */
    public function no_passwordAction()
    {
        return $this->render('ExampleBundle:Popup:no_password.html.twig');
    }

    /**
     * Ajax
     * @Route("/register", name="register")
     */
    public function registerAction()
    {
        return $this->render('ExampleBundle:Popup:register.html.twig');
    }
}
