<?php

require 'vendor/autoload.php';

use App\Controller\NewsController;
use App\Controller\CommentController;

/**
 * Main entry point for the application.
 * 
 * Displays news with associated comments.
 */

$newsController = new NewsController();
$newsController->displayNewsWithComments();