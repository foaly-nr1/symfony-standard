<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tag;
use Doctrine\Common\Collections\Criteria;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $tag = new Tag(1);

        $criteria = new Criteria();

        // throws exception via PersisterException::matchingAssocationFieldRequiresObject()
        $criteria
            ->where($criteria->expr()->contains('tags', $tag->getId()))
        ;

        // Throws exception: Object of class AppBundle\Entity\Tag could not be converted to string
        $criteria
            ->where($criteria->expr()->contains('tags', $tag))
        ;

        $result = $this->getDoctrine()->getRepository('AppBundle:Post')->matching($criteria);

        return $result->count();
    }
}
