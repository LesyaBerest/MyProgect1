<?php

namespace Site\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
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
    private $age;

    /**
     * @var string
     */
    private $class;

    /**
     * @var \stdClass
     */
    private $couple;


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
     * @return Category
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
     * Set age
     *
     * @param string $age
     * @return Category
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set class
     *
     * @param string $class
     * @return Category
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set couple
     *
     * @param \stdClass $couple
     * @return Category
     */
    public function setCouple($couple)
    {
        $this->couple = $couple;

        return $this;
    }

    /**
     * Get couple
     *
     * @return \stdClass 
     */
    public function getCouple()
    {
        return $this->couple;
    }

    public function __ToString(){
        return $this->name.' '.$this->age.' '.$this->class;    
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->couple = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add couple
     *
     * @param \Site\CoreBundle\Entity\Couple $couple
     * @return Category
     */
    public function addCouple(\Site\CoreBundle\Entity\Couple $couple)
    {
        $this->couple[] = $couple;

        return $this;
    }

    /**
     * Remove couple
     *
     * @param \Site\CoreBundle\Entity\Couple $couple
     */
    public function removeCouple(\Site\CoreBundle\Entity\Couple $couple)
    {
        $this->couple->removeElement($couple);
    }
}
