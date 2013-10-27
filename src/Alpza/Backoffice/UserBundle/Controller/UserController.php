<?php

namespace Alpza\Backoffice\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function loginAction($name = 'Ni idea')
    {
        return $this->render('UserBundle:User:index.html.twig', array('name' => $name));
    }
}
