<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Data
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Data
{
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="data")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="Data_types", inversedBy="data")
     * @ORM\JoinColumn(name="dataType_id", referencedColumnName="id")
     */
    private $dataType;
    
    /**
     * @ORM\ManyToOne(targetEntity="Accounts", inversedBy="data")
     * @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     */
    private $account;
    
    /**
     * @ORM\ManyToOne(targetEntity="Groups", inversedBy="data")
     * @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     */
    private $group;
    
     /**
     * @ORM\ManyToOne(targetEntity="Users_groups", inversedBy="data")
     * @ORM\JoinColumn(name="users_group_id", referencedColumnName="id")
     */
    private $usersGroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime")
     * @Assert\Date()
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     * @Assert\NotBlank(message = "Type a acount description")
     */
    private $description;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer")
     * @Assert\Type(type="integer")
     */
    private $amount;

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
     * Set date
     *
     * @param \DateTime $date
     * @return Data
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Data
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
     * Set amount
     *
     * @param integer $amount
     * @return Data
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Data
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set dataType
     *
     * @param \AppBundle\Entity\Data_types $dataType
     * @return Data
     */
    public function setDataType(\AppBundle\Entity\Data_types $dataType = null)
    {
        $this->dataType = $dataType;

        return $this;
    }

    /**
     * Get dataType
     *
     * @return \AppBundle\Entity\Data_types 
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * Set account
     *
     * @param \AppBundle\Entity\Accounts $account
     * @return Data
     */
    public function setAccount(\AppBundle\Entity\Accounts $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \AppBundle\Entity\Accounts 
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set group
     *
     * @param \AppBundle\Entity\Groups $group
     * @return Data
     */
    public function setGroup(\AppBundle\Entity\Groups $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \AppBundle\Entity\Groups 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set usersGroup
     *
     * @param \AppBundle\Entity\Users_groups $usersGroup
     * @return Data
     */
    public function setUsersGroup(\AppBundle\Entity\Users_groups $usersGroup = null)
    {
        $this->usersGroup = $usersGroup;

        return $this;
    }

    /**
     * Get usersGroup
     *
     * @return \AppBundle\Entity\Users_groups 
     */
    public function getUsersGroup()
    {
        return $this->usersGroup;
    }
}
