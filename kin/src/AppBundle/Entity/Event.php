<?php
/**
 * Created by PhpStorm.
 * User: ifham
 * Date: 2/12/17
 * Time: 7:57 PM
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
 */

class Event
{
    /**
     * @var int
     *
     * @ORM\Column(name="event_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $eventId;

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
     * @var float
     *
     * @ORM\Column(name="location_lat", type="float", precision=10, scale=0, nullable=true)
     */
    private $locationLat;

    /**
     * @var float
     *
     * @ORM\Column(name="location_lng", type="float", precision=10, scale=0, nullable=true)
     */
    private $locationLng;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    //private $userKey;
    /**
     * @var Boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="event_description", type="string", length=255)
     */
    private $eventDescription;

    /**
     * Get eventId
     *
     * @return integer 
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Event
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
     * @return Event
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
     * Set locationLat
     *
     * @param float $locationLat
     * @return Event
     */
    public function setLocationLat($locationLat)
    {
        $this->locationLat = $locationLat;

        return $this;
    }

    /**
     * Get locationLat
     *
     * @return float 
     */
    public function getLocationLat()
    {
        return $this->locationLat;
    }

    /**
     * Set locationLng
     *
     * @param float $locationLng
     * @return Event
     */
    public function setLocationLng($locationLng)
    {
        $this->locationLng = $locationLng;

        return $this;
    }

    /**
     * Get locationLng
     *
     * @return float 
     */
    public function getLocationLng()
    {
        return $this->locationLng;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Event
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Event
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
     * Set eventDescription
     *
     * @param string $eventDescription
     * @return Event
     */
    public function setEventDescription($eventDescription)
    {
        $this->eventDescription = $eventDescription;

        return $this;
    }

    /**
     * Get eventDescription
     *
     * @return string 
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }
}
