<?php

namespace App\Manager;

use App\Repository\NewsRepository;

/**
 * Class NewsManager
 *
 * Manages news-related operations.
 */
class NewsManager
{
    private $newsRepository;

    /**
     * NewsManager constructor.
     * Initializes the news repository.
     */
    public function __construct()
    {
        $this->newsRepository = new NewsRepository();
    }

    /**
     * Lists all news.
     *
     * @return array Array of News objects.
     */
    public function listAllNews(): array
    {
        return $this->newsRepository->findAll();
    }
}
