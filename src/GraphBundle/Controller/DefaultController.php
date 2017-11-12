<?php

namespace GraphBundle\Controller;

use AppBundle\Manager\ExpenseByCategoryInYearManager;
use AppBundle\Manager\OperationByMonthInYearManager;
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
        $manager = new OperationByMonthInYearManager($this->getDoctrine());

        $allColumns = $manager->getColumnsCategories();

        $allData = $manager->getExpenseGroupByCategory();

        $option = $manager->getOptionForGraphExpenseByCategory($allColumns, $allData);

        return $this->render('GraphBundle:Default:byYear.html.twig', [
            'option' => $option
        ]);
    }

    /**
     * @Route("/by-categories", name="by-categories")
     */
    public function byCategoriesAction()
    {
        $manager = new ExpenseByCategoryInYearManager($this->getDoctrine());

        $allColumns = $manager->getColumnsCategories();

        $allData = $manager->getExpenseGroupByCategory();

        $option = $manager->getOptionForGraphExpenseByCategory($allColumns, $allData);


        return $this->render('GraphBundle:Default:byCategories.html.twig', [
            'option' => $option
        ]);
    }

}
