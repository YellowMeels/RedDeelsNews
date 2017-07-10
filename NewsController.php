<?php

namespace Rfd\WwwBundle\Controller;

use Rfd\WwwBundle\Controller\Base\BaseController;

class NewsController extends BaseController {

    /** @var string */
    protected $page = 1;

    /**
    * Show the most recently published news articles. Each page should contain 20 articles.
    */
    public function indexAction() {

        $request = $this->container->get('request');

        $sql = 'SELECT *
                FROM NewsArticles';

        $em = $this->container->get('doctrine.orm.rfd_dcr_entity_manager');

        /** @var \Doctrine\DBAL\Connection $conn */
        $conn = $em->getConnection();
        $query = $conn->prepare($sql);
        $query->execute();

        $result = $query->fetchAll();

        $init = $this->page * 20;
        for ($i = $init; $i < (20 * $this->page); $i++)
        {
            $article[] = $result[$i];
        }

        return $this->render('WwwBundle:Homepage:base.html.twig');
    }
}