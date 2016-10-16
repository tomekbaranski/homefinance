<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Users_groups
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Users_groups
{
    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="users_group")
     */
    private $users;
    
    /**
     * @ORM\OneToMany(targetEntity="Data", mappedBy="users_group")
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
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank(message = "Type the group name")
     */
    private $name;
    
    public function __construct()
    {
        $this->data = new arrayCollection();
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
     * @return Users_groups
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
     * Add users
     *
     * @param \AppBundle\Entity\User $users
     * @return Users_groups
     */
    public function addUser(\AppBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \AppBundle\Entity\User $users
     */
    public function removeUser(\AppBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add data
     *
     * @param \AppBundle\Entity\Data $data
     * @return Users_groups
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
