<?php

namespace Site\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class NewsController extends Controller
{
    /**
    * @Route("/news", name="all_news")
    * @Template("SiteFrontBundle:News:index.html.twig")
    */
    public function indexAction()
    {
        $news = $this->getDoctrine()->getManager()->getRepository('Site\CoreBundle\Entity\News')->findAll();
        
        if (is_null($news) || empty($news)) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        } else {
            return $this->render('SiteFrontEndBundle:News:index.html.twig', array('news' => $news));
        }
    }

    /**
    * @Route("/new/{id}", name="article_page")
    * @Template("SiteFrontBundle:News:newsById.html.twig")
    */
    public function newsByIdAction($id) {
        $news = $this->getDoctrine()->getManager()->getRepository('Site\CoreBundle\Entity\News')->findOneBy(array('id' => $id));
        
        if (is_null($news) || empty($news)) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        } else {
            return $this->render('SiteFrontEndBundle:News:newsById.html.twig', array('news' => $news));
        }
    }

    /**
    * @Route("/news/{slug}", name="news_by_slug")
    * @Template("SiteFrontBundle:News:newsBySlug.html.twig")
    */
    public function newsBySlugAction($slug) {
        $tag = $this->getDoctrine()->getManager()->getRepository('Site\CoreBundle\Entity\Tags')->findOneBy(array('slug' => $slug));
        $news = $this->getDoctrine()->getManager()->getRepository('Site\CoreBundle\Entity\News')->getNewsByTag($tag->getId());

        if (is_null($news) || empty($news)) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        } else {
            return $this->render('SiteFrontEndBundle:News:newsBySlug.html.twig', array('news' => $news, 'tag' => $tag->getName()));
        }
    }

}
