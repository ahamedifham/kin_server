<?php
/**
 * Created by PhpStorm.
 * User: ifham
 * Date: 2/12/17
 * Time: 8:14 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Location
 *
 * @ORM\Table(name="location")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LocationRepository")
 */
class Location
{
    /**
     * @var int
     *
     * @ORM\Column(name="location_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $locationId;

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
     * Get locationId
     *
     * @return integer 
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set locationLat
     *
     * @param float $locationLat
     * @return Location
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
     * @return Location
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
     * Set date
     *
     * @param \DateTime $date
     * @return Location
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
     * @return Location
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
}
