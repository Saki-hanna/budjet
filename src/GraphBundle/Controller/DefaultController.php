<?php

namespace GraphBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/by-month", name="by-month")
     */
    public function byMonthAction()
    {
        return $this->render('GraphBundle:Default:byMonth.html.twig');
    }

    /**
     * @Route("/by-year", name="by-year")
     */
    public function byYearAction()
    {
        return $this->render('GraphBundle:Default:byYear.html.twig');
    }
    /**
     * @Route("/by-categories", name="by-categories")
     */
    public function byCategoriesAction()
    {
        return $this->render('GraphBundle:Default:byCategories.html.twig');
    }
}
