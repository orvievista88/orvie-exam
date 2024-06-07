<?php

namespace App\Repository;

use App\Service\DB;
use App\Model\Comment;
use PDO;

/**
 * Class CommentRepository
 *
 * Handles data operations for comments.
 */
class CommentRepository
{
    private $db;

    /**
     * CommentRepository constructor.
     * Initializes the database connection.
     */
    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    /**
     * Finds comments by news ID.
     *
     * @param int $newsId ID of the news.
     * @return array Array of Comment objects.
     */
    public function findByNewsId($newsId): array
    {
        $sql = 'SELECT * FROM `comment` WHERE `news_id` = :newsId';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['newsId' => $newsId]);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $comments = [];
        foreach ($rows as $row) {
            $comment = new Comment();
            $comment->setId($row['id'])
                ->setBody($row['body'])
                ->setCreatedAt($row['created_at'])
                ->setNewsId($row['news_id']);
            $comments[] = $comment;
        }
        return $comments;
    }
}
