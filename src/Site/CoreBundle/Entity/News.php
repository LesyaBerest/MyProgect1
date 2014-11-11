<?php

namespace Site\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * News
 */
class News
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \Date
     */
    private $date;

    /**
     * @var string
     */
    private $article;

    /**
     * @var \stdClass
     */
    private $tagInf;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return News
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date
     *
     * @param \string
     * @return News
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set article
     *
     * @param string $article
     * @return News
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return string 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set tagInf
     *
     * @param \stdClass $tagInf
     * @return News
     */
    public function setTagInf($tagInf)
    {
        $this->tagInf = $tagInf;

        return $this;
    }

    /**
     * Get tagInf
     *
     * @return \stdClass 
     */
    public function getTagInf()
    {
        return $this->tagInf;
    }

    public function getTagInfSlug()
    {
        return $this->tagInf->slug;
    }



    public function __ToString(){
        return $this->title?$this->title:'New';
    }

    function __construct(){
        $this->tagInf = new ArrayCollection;
    }

    /**
     * Add tagInf
     *
     * @param \Site\CoreBundle\Entity\Tags $tagInf
     * @return News
     */
    public function addTagInf(\Site\CoreBundle\Entity\Tags $tagInf)
    {
        $this->tagInf[] = $tagInf;

        return $this;
    }

    /**
     * Remove tagInf
     *
     * @param \Site\CoreBundle\Entity\Tags $tagInf
     */
    public function removeTagInf(\Site\CoreBundle\Entity\Tags $tagInf)
    {
        $this->tagInf->removeElement($tagInf);
    }
}
