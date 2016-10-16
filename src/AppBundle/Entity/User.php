<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{   
    /**
     * @ORM\OneToMany(targetEntity="Data", mappedBy="user")
     */
    private $data;
    
    /**
     * @ORM\OneToMany(targetEntity="Messages", mappedBy="sender")
     */
    private $sentMessages;

    /**
     * @ORM\OneToMany(targetEntity="Messages", mappedBy="receiver")
     */
    private $receivedMessages;
    
    /**
     * @ORM\ManyToOne(targetEntity="Users_groups", inversedBy="users")
     * @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     */
    private $usersGroup;
    

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_owner", type="integer", options={"default":1})
     */
    private $groupOwner;

    public function __construct()
    {
        parent::__construct();
        $this->data = new ArrayCollection();
        $this->sent_messages = new ArrayCollection();
        $this->received_messages = new ArrayCollection();
    }
    
    /**
     * Set groupOwner
     *
     * @param integer $groupOwner
     * @return User
     */
    public function setGroupOwner($groupOwner)
    {
        $this->groupOwner = $groupOwner;

        return $this;
    }

    /**
     * Get groupOwner
     *
     * @return integer 
     */
    public function getGroupOwner()
    {
        return $this->groupOwner;
    }

    /**
     * Add data
     *
     * @param \AppBundle\Entity\Data $data
     * @return User
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

    /**
     * Add sentMessages
     *
     * @param \AppBundle\Entity\Messages $sentMessages
     * @return User
     */
    public function addSentMessage(\AppBundle\Entity\Messages $sentMessages)
    {
        $this->sentMessages[] = $sentMessages;

        return $this;
    }

    /**
     * Remove sentMessages
     *
     * @param \AppBundle\Entity\Messages $sentMessages
     */
    public function removeSentMessage(\AppBundle\Entity\Messages $sentMessages)
    {
        $this->sentMessages->removeElement($sentMessages);
    }

    /**
     * Get sentMessages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSentMessages()
    {
        return $this->sentMessages;
    }

    /**
     * Add receivedMessages
     *
     * @param \AppBundle\Entity\Messages $receivedMessages
     * @return User
     */
    public function addReceivedMessage(\AppBundle\Entity\Messages $receivedMessages)
    {
        $this->receivedMessages[] = $receivedMessages;

        return $this;
    }

    /**
     * Remove receivedMessages
     *
     * @param \AppBundle\Entity\Messages $receivedMessages
     */
    public function removeReceivedMessage(\AppBundle\Entity\Messages $receivedMessages)
    {
        $this->receivedMessages->removeElement($receivedMessages);
    }

    /**
     * Get receivedMessages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReceivedMessages()
    {
        return $this->receivedMessages;
    }

    /**
     * Set usersGroup
     *
     * @param \AppBundle\Entity\Users_groups $usersGroup
     * @return User
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
