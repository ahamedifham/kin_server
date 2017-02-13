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

    /**
     * Set familyKey
     *
     * @param \AppBundle\Entity\Family $familyKey
     * @return Location
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
     * @return Location
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
}
