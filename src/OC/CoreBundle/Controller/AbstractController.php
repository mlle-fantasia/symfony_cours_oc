<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


abstract class AbstractController extends Controller
{

    /**
     * Gets the repository for a class.
     *
     * @param string $className
     *
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    protected function getRepository($className)
    {
        return $this->getDoctrine()->getManager()->getRepository($className);
    }
}
