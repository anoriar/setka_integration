<?php

namespace Aero\SetkaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ApiController
 * @package Aero\SetkaBundle\Controller
 * @author Alexey Borisov
 */
class ApiController extends AbstractController
{
    /**
     * @Route("/api/v1/setka/images", name="aero_setka")
     *
     * @Method("GET")
     *
     * @return Response
     */
    public function list()
    {
        return $this->render('bundle/list.html.twig', [
            'number' => 'test bundle'
        ]);
    }
}