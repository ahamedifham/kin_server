<?php
/**
 * Created by PhpStorm.
 * User: ifham
 * Date: 2/12/17
 * Time: 8:30 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * FamilyRole
 *
 * @ORM\Table(name="family_role")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FamilyRoleRepository")
 */

class FamilyRole
{
    /**
     * @var int
     *
     * @ORM\Column(name="family_role_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $familyRoleId;

    /**
     * @var string
     *
     * @ORM\Column(name="family_role", type="string", length=50)
     */
    private $familyRole;


    /**
     * Get familyRoleId
     *
     * @return integer 
     */
    public function getFamilyRoleId()
    {
        return $this->familyRoleId;
    }

    /**
     * Set familyRole
     *
     * @param string $familyRole
     * @return FamilyRole
     */
    public function setFamilyRole($familyRole)
    {
        $this->familyRole = $familyRole;

        return $this;
    }

    /**
     * Get familyRole
     *
     * @return string 
     */
    public function getFamilyRole()
    {
        return $this->familyRole;
    }
}
