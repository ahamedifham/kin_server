<?php
/**
 * Created by PhpStorm.
 * User: ifham
 * Date: 2/12/17
 * Time: 8:34 PM
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * MessageType
 *
 * @ORM\Table(name="message_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MessageTypeRepository")
 */


class MessageType
{
    /**
     * @var int
     *
     * @ORM\Column(name="message_type_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $messageTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="message_type", type="string", length=100)
     */
    private $messageType;


    /**
     * Get messageTypeId
     *
     * @return integer 
     */
    public function getMessageTypeId()
    {
        return $this->messageTypeId;
    }

    /**
     * Set messageType
     *
     * @param string $messageType
     * @return MessageType
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;

        return $this;
    }

    /**
     * Get messageType
     *
     * @return string 
     */
    public function getMessageType()
    {
        return $this->messageType;
    }
}
