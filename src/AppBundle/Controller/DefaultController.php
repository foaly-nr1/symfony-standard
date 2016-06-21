<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\InquiryType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(InquiryType::class, null, [
            'method' => 'POST',
        ]);

        if($request->isMethod('POST')) {
            $form->handleRequest($request);
        }

        return $this->render('AppBundle::form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
