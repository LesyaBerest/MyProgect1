<?php

namespace Site\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class MainController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SiteFrontEndBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
    * @Route("/{slug}.html", name="static_page")
    * @Template("SiteFrontBundle:Main:static.html.twig")
    */
    public function staticPageAction($slug) {
        $page = $this->getDoctrine()->getManager()->getRepository('Site\CoreBundle\Entity\StaticPage')->findOneBy(array('slug' => $slug));
        
        if (is_null($page) || empty($page)) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        } else {
            return $this->render('SiteFrontEndBundle:Main:staticPage.html.twig', array('page' => $page));
        }
    }

}
