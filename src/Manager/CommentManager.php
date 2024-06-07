<?php

namespace App\Manager;

use App\Repository\CommentRepository;

/**
 * Class CommentManager
 *
 * Manages comment-related operations.
 */
class CommentManager
{
    private $commentRepository;

    /**
     * CommentManager constructor.
     * Initializes the comment repository.
     */
    public function __construct()
    {
        $this->commentRepository = new CommentRepository();
    }

    /**
     * Gets comments by news ID.
     *
     * @param int $newsId ID of the news.
     * @return array Array of Comment objects.
     */
    public function getCommentsByNewsId($newsId): array
    {
        return $this->commentRepository->findByNewsId($newsId);
    }
}
