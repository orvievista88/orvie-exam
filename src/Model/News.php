<?php

namespace App\Model;

/**
 * Class News
 *
 * Represents a news entity.
 */
class News
{
    protected $id, $title, $body, $createdAt;

    /**
     * Sets the ID of the news.
     *
     * @param int $id The ID of the news.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets the ID of the news.
     *
     * @return int The ID of the news.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the title of the news.
     *
     * @param string $title The title of the news.
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets the title of the news.
     *
     * @return string The title of the news.
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the body of the news.
     *
     * @param string $body The body of the news.
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets the body of the news.
     *
     * @return string The body of the news.
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets the creation date of the news.
     *
     * @param string $createdAt The creation date of the news.
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Gets the creation date of the news.
     *
     * @return string The creation date of the news.
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
