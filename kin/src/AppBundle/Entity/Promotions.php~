<?php
/**
 * Created by PhpStorm.
 * User: ifham
 * Date: 2/12/17
 * Time: 10:33 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Promotions
 *
 * @ORM\Table(name="promotions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PromotionsRepository")
 */

class Promotions
{
    /**
     * @var int
     *
     * @ORM\Column(name="promotions_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $promotionsId;


    /**
     * @var string
     *
     * @ORM\Column(name="promotion_code", type="string", length=100)
     */

    private $promotionCode;


    /**
     * @var string
     *
     * @ORM\Column(name="promotion_product", type="string", length=100)
     */

    private $promotionProduct;


    /**
     * @var string
     *
     * @ORM\Column(name="promotion_price", type="string", length=100)
     */

    private $promotionPrice;

    /**
     * @var Date
     *
     * @ORM\Column(name="date", type="date",  nullable=true)
     */

    private $date;

    /**
     * @var Boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="company_id")
     */
    private $company;






    /**
     * Get promotionsId
     *
     * @return integer 
     */
    public function getPromotionsId()
    {
        return $this->promotionsId;
    }

    /**
     * Set promotionCode
     *
     * @param string $promotionCode
     * @return Promotions
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;

        return $this;
    }

    /**
     * Get promotionCode
     *
     * @return string 
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Set promotionProduct
     *
     * @param string $promotionProduct
     * @return Promotions
     */
    public function setPromotionProduct($promotionProduct)
    {
        $this->promotionProduct = $promotionProduct;

        return $this;
    }

    /**
     * Get promotionProduct
     *
     * @return string 
     */
    public function getPromotionProduct()
    {
        return $this->promotionProduct;
    }

    /**
     * Set promotionPrice
     *
     * @param string $promotionPrice
     * @return Promotions
     */
    public function setPromotionPrice($promotionPrice)
    {
        $this->promotionPrice = $promotionPrice;

        return $this;
    }

    /**
     * Get promotionPrice
     *
     * @return string 
     */
    public function getPromotionPrice()
    {
        return $this->promotionPrice;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Promotions
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
     * Set status
     *
     * @param boolean $status
     * @return Promotions
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
     * Set company
     *
     * @param \AppBundle\Entity\Company $company
     * @return Promotions
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \AppBundle\Entity\Company 
     */
    public function getCompany()
    {
        return $this->company;
    }
}
