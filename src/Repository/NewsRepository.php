<?php

namespace App\Repository;

use App\Service\DB;
use App\Model\News;
use PDO;

/**
 * Class NewsRepository
 *
 * Handles data operations for news.
 */
class NewsRepository
{
    private $db;

    /**
     * NewsRepository constructor.
     * Initializes the database connection.
     */
    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    /**
     * Finds all news records.
     *
     * @return array Array of News objects.
     */
    public function findAll(): array
    {
        $sql = 'SELECT * FROM `news`';
        $stmt = $this->db->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $newsList = [];
        foreach ($rows as $row) {
            $news = new News();
            $news->setId($row['id'])
                ->setTitle($row['title'])
                ->setBody($row['body'])
                ->setCreatedAt($row['created_at']);
            $newsList[] = $news;
        }
        return $newsList;
    }
}
