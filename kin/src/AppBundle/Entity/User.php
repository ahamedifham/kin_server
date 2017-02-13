<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
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
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_no", type="string", length=12)
     */
    private $contactNo;

    /**
     * @var Date
     *
     * @ORM\Column(name="date_of_birth", type="date",  nullable=true)
     */
    private $dateOfBirth;
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=100)
     */
    private $username;
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100)
     */
    private $password;
    /**
     * @var string
     *
     * @ORM\Column(name="user_key", type="string", length=100, nullable=true)
     */
    private $userKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="family_status", type="boolean", nullable=true)
     */
    private $familyStatus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="FamilyRole")
     * @ORM\JoinColumn(name="family_role_id", referencedColumnName="family_role_id")
     */
    private $familyRole;

    /**
     * @ORM\ManyToOne(targetEntity="Family")
     * @ORM\JoinColumn(name="family_id", referencedColumnName="family_id")
     */
    private $familyKey;

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
     * @return User
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
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contactNo
     *
     * @param string $contactNo
     * @return User
     */
    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;

        return $this;
    }

    /**
     * Get contactNo
     *
     * @return string 
     */
    public function getContactNo()
    {
        return $this->contactNo;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     * @return User
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime 
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set userKey
     *
     * @param string $userKey
     * @return User
     */
    public function setUserKey($userKey)
    {
        $this->userKey = $userKey;

        return $this;
    }

    /**
     * Get userKey
     *
     * @return string 
     */
    public function getUserKey()
    {
        return $this->userKey;
    }

    /**
     * Set familyStatus
     *
     * @param boolean $familyStatus
     * @return User
     */
    public function setFamilyStatus($familyStatus)
    {
        $this->familyStatus = $familyStatus;

        return $this;
    }

    /**
     * Get familyStatus
     *
     * @return boolean 
     */
    public function getFamilyStatus()
    {
        return $this->familyStatus;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return User
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
     * Set familyRole
     *
     * @param \AppBundle\Entity\FamilyRole $familyRole
     * @return User
     */
    public function setFamilyRole($familyRole)
    {
        $this->familyRole = $familyRole;

        return $this;
    }

    /**
     * Get familyRole
     *
     * @return \AppBundle\Entity\FamilyRole 
     */
    public function getFamilyRole()
    {
        return $this->familyRole;
    }

    /**
     * Set familyKey
     *
     * @param \AppBundle\Entity\Family $familyKey
     * @return User
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
}
