<?php

namespace App\Controller;

use App\Manager\NewsManager;
use App\Manager\CommentManager;

/**
 * Class NewsController
 *
 * Responsible for handling the display logic of news and associated comments.
 */
class NewsController
{
    private $newsManager;
    private $commentManager;

    /**
     * NewsController constructor.
     * Initializes the news and comment managers.
     */
    public function __construct()
    {
        $this->newsManager = new NewsManager();
        $this->commentManager = new CommentManager();
    }

    /**
     * Displays news with their associated comments.
     */
    public function displayNewsWithComments()
    {
        $newsList = $this->newsManager->listAllNews();
        echo "This is the new one";
        foreach ($newsList as $news) {
            echo "############ NEWS " . $news->getTitle() . " ############\n";
            echo $news->getBody() . "\n";
            $comments = $this->commentManager->getCommentsByNewsId($news->getId());
            foreach ($comments as $comment) {
                echo "Comment " . $comment->getId() . " : " . $comment->getBody() . "\n";
            }
        }
    }
}