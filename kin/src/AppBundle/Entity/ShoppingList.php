<?php
/**
 * Created by PhpStorm.
 * User: ifham
 * Date: 2/12/17
 * Time: 8:06 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ShoppingList
 *
 * @ORM\Table(name="shopping_list")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ShoppingListRepository")
 */

class ShoppingList
{
    /**
     * @var int
     *
     * @ORM\Column(name="shopping_list_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $shoppingListId;

    /**
     * @var string
     *
     * @ORM\Column(name="shopping_list_item", type="string", length=150)
     */

    private $shoppingListItem;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=100)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var Boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

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
     * Get shoppingListId
     *
     * @return integer 
     */
    public function getShoppingListId()
    {
        return $this->shoppingListId;
    }

    /**
     * Set shoppingListItem
     *
     * @param string $shoppingListItem
     * @return ShoppingList
     */
    public function setShoppingListItem($shoppingListItem)
    {
        $this->shoppingListItem = $shoppingListItem;

        return $this;
    }

    /**
     * Get shoppingListItem
     *
     * @return string 
     */
    public function getShoppingListItem()
    {
        return $this->shoppingListItem;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return ShoppingList
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return ShoppingList
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return ShoppingList
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
     * Set date
     *
     * @param \DateTime $date
     * @return ShoppingList
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
     * @return ShoppingList
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
