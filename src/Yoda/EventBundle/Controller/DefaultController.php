<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name, $count)
    {
        $data = array(  
            'count' => $count,
            'firstName' => $name,
            'ackbar' => 'It\'s a Trap!'

        );
        $json = json_encode($data);
        return $this->render('EventBundle:Default:index.html.twig', array('name' => $name));
        $response = new Response($json);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
