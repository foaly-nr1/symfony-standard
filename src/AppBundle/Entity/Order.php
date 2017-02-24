<?php

namespace AppBundle\Entity;

class Order
{
    /**
     * @var string
     */
    private $name = 'My test order';

    /**
     * @var float
     */
    private $discount = 37.36;

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount(float $discount)
    {
        $this->discount = $discount;

        return $this;
    }
}
