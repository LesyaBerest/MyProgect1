<?php

namespace Site\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags
 */
class Tags
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var \stdClass
     */
    private $newsInf;


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
     * Set name
     *
     * @param string $name
     * @return Tags
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Tags
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set newsInf
     *
     * @param \stdClass $newsInf
     * @return Tags
     */
    public function setNewsInf($newsInf)
    {
        $this->newsInf = $newsInf;

        return $this;
    }

    /**
     * Get newsInf
     *
     * @return \stdClass 
     */
    public function getNewsInf()
    {
        return $this->newsInf;
    }

    public function __ToString(){
        return $this->name?$this->name:'New';
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->newsInf = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add newsInf
     *
     * @param \Site\CoreBundle\Entity\News $newsInf
     * @return Tags
     */
    public function addNewsInf(\Site\CoreBundle\Entity\News $newsInf)
    {
        $this->newsInf[] = $newsInf;

        return $this;
    }

    /**
     * Remove newsInf
     *
     * @param \Site\CoreBundle\Entity\News $newsInf
     */
    public function removeNewsInf(\Site\CoreBundle\Entity\News $newsInf)
    {
        $this->newsInf->removeElement($newsInf);
    }

}
