<?php

namespace AppBundle\Entity;

class Inquiry
{
    private $id;

    private $comment = '';

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
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment)
    {
        $this->comment = $comment;

        return $this;
    }
}
