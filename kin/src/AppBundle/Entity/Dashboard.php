<?php
/**
 * Created by PhpStorm.
 * User: ifham
 * Date: 2/12/17
 * Time: 7:48 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Config\Definition\BooleanNode;

/**
 * Dashboard
 *
 * @ORM\Table(name="dashboard")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DashboardRepository")
 */

class Dashboard
{
    /**
     * @var int
     *
     * @ORM\Column(name="dashboard_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $dashboardId;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;

    /**
     * @var Date
     *
     * @ORM\Column(name="date", type="date",  nullable=true)
     */
    private $date;

    /**
     * @var Time
     *
     * @ORM\Column(name="time", type="time",  nullable=true)
     */
    private $time;

    /**
     * @var Boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer", nullable=true)
     */
    private $rating;

    /**
     * @ORM\ManyToOne(targetEntity="Family")
     * @ORM\JoinColumn(name="family_id", referencedColumnName="family_id")
     */
    private $familyKey;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */

    private $userKey;

    /**
     * @ORM\ManyToOne(targetEntity="MessageType")
     * @ORM\JoinColumn(name="message_type_id", referencedColumnName="message_type_id")
     */
    private $messageType;

    /**
     * Get dashboardId
     *
     * @return integer 
     */
    public function getDashboardId()
    {
        return $this->dashboardId;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Dashboard
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Dashboard
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
     * Set time
     *
     * @param \DateTime $time
     * @return Dashboard
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Dashboard
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     * @return Dashboard
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set familyKey
     *
     * @param \AppBundle\Entity\Family $familyKey
     * @return Dashboard
     */
    public function setFamilyKey($familyKey)
    {
        $this->familyKey = $familyKey;

        return $this;
    }

    /**
     * Get familyKey
     *
     * @return \AppBundle\Entity\Family 
     */
    public function getFamilyKey()
    {
        return $this->familyKey;
    }

    /**
     * Set userKey
     *
     * @param \AppBundle\Entity\User $userKey
     * @return Dashboard
     */
    public function setUserKey($userKey)
    {
        $this->userKey = $userKey;

        return $this;
    }

    /**
     * Get userKey
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUserKey()
    {
        return $this->userKey;
    }

    /**
     * Set messageType
     *
     * @param \AppBundle\Entity\MessageType $messageType
     * @return Dashboard
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;

        return $this;
    }

    /**
     * Get messageType
     *
     * @return \AppBundle\Entity\MessageType 
     */
    public function getMessageType()
    {
        return $this->messageType;
    }
}
