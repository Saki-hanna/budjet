<?php

namespace AppBundle\Manager;


use AppBundle\Entity\Category;
use AppBundle\Entity\Operation;
use AppBundle\Repository\CategoryRepository;
use AppBundle\Repository\OperationRepository;
use Doctrine\ORM\EntityManager;

class ExpenseByCategoryInYearManager
{
    /** @var  EntityManager */
    private $em;

    public function __construct($em)
    {
        $this->em = $em;
    }

    /**
     * @param $allCategory
     *
     * @return array
     */
    public function getColumnsCategories(): array
    {
        /** @var CategoryRepository $repositoryCategory */
        $repositoryCategory = $this->em->getRepository('AppBundle:Category');
        $allCategory = $repositoryCategory->findAllByParent();

        $allColumns = [];
        /** @var Category $category */
        foreach ($allCategory as $category) {
            $allColumns[] = $category->getTitle();
        }

        return $allColumns;
    }

    public function getExpenseGroupByCategory()
    {
        /** @var OperationRepository $repositoryOperation */
        $repositoryOperation = $this->em->getRepository('AppBundle:Operation');
        $allOperations = $repositoryOperation->findAllExpenseGroupByCategory();

        $allData = [];

        foreach ($allOperations as $operation) {
            if ($category = $this->getParentCategory($operation['idCategory'])) {
                $allData[] = [
                    'value' => $operation['amound'],
                    'name' => $category->getTitle()
                ];
            }
        }

        return $allData;
    }

    public function getOptionForGraphExpenseByCategory($allColumns, $allData)
    {
        return [
            'title' => [
                'text' => 'Dépences par catégories',
                'subtext' => '2014',
                'x' => 'center'
            ],
            'tooltip' => [
                'trigger' => 'item',
                'formatter' => "{a} <br/>{b} : {c} ({d}%)"
            ],
            'legend' => [
                'orient' => 'vertical',
                'left' => 'left',
                'data' => $allColumns
            ],
            'series' => [
                [
                    'name' => 'lala',
                    'type' => 'pie',
                    'radius' => '55%',
                    'center' => [
                        '50%',
                        '60%'
                    ],
                    'data' => $allData,
                ]
            ]
        ];
    }

    /**
     * @param $idCategory
     *
     * @return Category
     */
    private function getParentCategory($idCategory): Category
    {
        /** @var CategoryRepository $repositoryCategory */
        $repositoryCategory = $this->em->getRepository('AppBundle:Category');

        /** @var Category $currentCategory */
        $currentCategory = $repositoryCategory->find($idCategory);
        //on recherche sa catégory parente
        /** @var Category $category */

        //catégory en cours est elle la parente
        if ($currentCategory->getParentId() == NULL) {
            return $currentCategory;
        }
        else {
            return $this->getParentCategory($currentCategory->getParentId());
        }
    }
}
