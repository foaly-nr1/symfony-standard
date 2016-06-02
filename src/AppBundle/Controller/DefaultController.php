<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\Type\CountryType;
use AppBundle\Form\Type\CountryWorkingType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('AppBundle::form.html.twig', [
            'formNotWorking' => $this->createForm(CountryType::class)->createView(),
            'formWorking' => $this->createForm(CountryWorkingType::class)->createView(),
        ]);
    }
}
