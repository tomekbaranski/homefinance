<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Accounts
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Accounts
{
    /**
     * @ORM\OneToMany(targetEntity="Data", mappedBy="account")
     */
    private $data;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255)
     * @Assert\NotBlank(message = "Type a acount name")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     * @Assert\NotBlank(message = "Type a acount description")
     */
    private $description;

    
    public function __construct() {
        $this->data = new arrayCollection();
    }
    
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
     * @return Accounts
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
     * Set description
     *
     * @param string $description
     * @return Accounts
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add data
     *
     * @param \AppBundle\Entity\Data $data
     * @return Accounts
     */
    public function addDatum(\AppBundle\Entity\Data $data)
    {
        $this->data[] = $data;

        return $this;
    }

    /**
     * Remove data
     *
     * @param \AppBundle\Entity\Data $data
     */
    public function removeDatum(\AppBundle\Entity\Data $data)
    {
        $this->data->removeElement($data);
    }

    /**
     * Get data
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getData()
    {
        return $this->data;
    }
}
