<?php

namespace Site\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Couple
 */
class Couple
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $manName;

    /**
     * @var string
     */
    private $ladyName;


    private $category;


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
     * Set manName
     *
     * @param string $manName
     * @return Couple
     */
    public function setManName($manName)
    {
        $this->manName = $manName;

        return $this;
    }

    /**
     * Get manName
     *
     * @return string 
     */
    public function getManName()
    {
        return $this->manName;
    }

    /**
     * Set ladyName
     *
     * @param string $ladyName
     * @return Couple
     */
    public function setLadyName($ladyName)
    {
        $this->ladyName = $ladyName;

        return $this;
    }

    /**
     * Get ladyName
     *
     * @return string 
     */
    public function getLadyName()
    {
        return $this->ladyName;
    }

    /**
     * Set category
     *
     * @param integer $category
     * @return Couple
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer 
     */
    public function getCategory()
    {
        return $this->category;
    }

    public function __ToString(){
        return $this->manName.' '.$this->ladyName;
    }

    function __construct(){
        $this->category = new ArrayCollection;
    }


}
