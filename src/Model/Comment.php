<?php

namespace App\Model;

/**
 * Class Comment
 *
 * Represents a comment entity.
 */
class Comment
{
    protected $id, $body, $createdAt, $newsId;

    /**
     * Sets the ID of the comment.
     *
     * @param int $id The ID of the comment.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets the ID of the comment.
     *
     * @return int The ID of the comment.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the body of the comment.
     *
     * @param string $body The body of the comment.
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets the body of the comment.
     *
     * @return string The body of the comment.
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets the creation date of the comment.
     *
     * @param string $createdAt The creation date of the comment.
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Gets the creation date of the comment.
     *
     * @return string The creation date of the comment.
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Sets the news ID the comment is associated with.
     *
     * @param int $newsId The ID of the news.
     * @return $this
     */
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;
        return $this;
    }

    /**
     * Gets the news ID the comment is associated with.
     *
     * @return int The ID of the news.
     */
    public function getNewsId()
    {
        return $this->newsId;
    }
}
