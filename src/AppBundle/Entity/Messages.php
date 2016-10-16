<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Messages
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Messages
{
    /**
     * @ORM\ManyToOne(targetEntity="user", inversedBy="sentMessages")
     * @ORM\JoinColumn(name="sender_id", referencedColumnName="id")
     */
    private $sender;
    
    /**
     * @ORM\ManyToOne(targetEntity="user", inversedBy="receivedMessages")
     * @ORM\JoinColumn(name="receiver_id", referencedColumnName="id")
     */
    private $receiver;
    
    
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
     * @ORM\Column(name="Title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Text", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $text;

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
     * @return Messages
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
     * Set text
     *
     * @param string $text
     * @return Messages
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set sender
     *
     * @param \AppBundle\Entity\user $sender
     * @return Messages
     */
    public function setSender(\AppBundle\Entity\user $sender = null)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return \AppBundle\Entity\user 
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set receiver
     *
     * @param \AppBundle\Entity\user $receiver
     * @return Messages
     */
    public function setReceiver(\AppBundle\Entity\user $receiver = null)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return \AppBundle\Entity\user 
     */
    public function getReceiver()
    {
        return $this->receiver;
    }
}
