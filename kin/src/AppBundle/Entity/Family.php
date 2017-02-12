<?php
/**
 * Created by PhpStorm.
 * User: ifham
 * Date: 2/12/17
 * Time: 7:37 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Family
 *
 * @ORM\Table(name="family")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FamilyRepository")
 */
class Family
{
    /**
     * @var int
     *
     * @ORM\Column(name="family_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $familyId;

    /**
     * @var string
     *
     * @ORM\Column(name="family_name", type="string", length=100)
     */
    private $familyName;

    /**
     * @var string
     *
     * @ORM\Column(name="family_username", type="string", length=100)
     */
    private $familyUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="family_password", type="string", length=100)
     */
    private $familyPassword;


    /**
     * @var string
     *
     * @ORM\Column(name="family_key", type="string", length=255)
     */
    private $familyKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="no_of_members", type="integer", nullable=true)
     */
    private $noOfMembers;

    /**
     * Get familyId
     *
     * @return integer 
     */
    public function getFamilyId()
    {
        return $this->familyId;
    }

    /**
     * Set familyName
     *
     * @param string $familyName
     * @return Family
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;

        return $this;
    }

    /**
     * Get familyName
     *
     * @return string 
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Set familyUsername
     *
     * @param string $familyUsername
     * @return Family
     */
    public function setFamilyUsername($familyUsername)
    {
        $this->familyUsername = $familyUsername;

        return $this;
    }

    /**
     * Get familyUsername
     *
     * @return string 
     */
    public function getFamilyUsername()
    {
        return $this->familyUsername;
    }

    /**
     * Set familyPassword
     *
     * @param string $familyPassword
     * @return Family
     */
    public function setFamilyPassword($familyPassword)
    {
        $this->familyPassword = $familyPassword;

        return $this;
    }

    /**
     * Get familyPassword
     *
     * @return string 
     */
    public function getFamilyPassword()
    {
        return $this->familyPassword;
    }

    /**
     * Set familyKey
     *
     * @param string $familyKey
     * @return Family
     */
    public function setFamilyKey($familyKey)
    {
        $this->familyKey = $familyKey;

        return $this;
    }

    /**
     * Get familyKey
     *
     * @return string 
     */
    public function getFamilyKey()
    {
        return $this->familyKey;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Family
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
     * Set noOfMembers
     *
     * @param integer $noOfMembers
     * @return Family
     */
    public function setNoOfMembers($noOfMembers)
    {
        $this->noOfMembers = $noOfMembers;

        return $this;
    }

    /**
     * Get noOfMembers
     *
     * @return integer 
     */
    public function getNoOfMembers()
    {
        return $this->noOfMembers;
    }
}
