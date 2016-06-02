<?php

namespace AppBundle\Entity;

class Country
{
    private $id;

    private $countryCode;

    private $capacity;

    /**
     * Returns the id of this country.
     *
     * @return int|null Id of country or null if not persisted
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string|null ISO Alpha-2 country code
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $country ISO Alpha-2 country code
     */
    public function setCountryCode(string $countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity(int $capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }
}
