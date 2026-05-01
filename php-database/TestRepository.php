<?php

$dir = str_replace('\\', '/', __DIR__);
require_once $dir . "/GetConnection.php";
require_once $dir . "/Model/Comment.php";
require_once $dir . "/Repository/CommentRepository.php";

use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();
$repository = new \Repository\CommentRepositoryImpl($connection);

// $comment = new Comment(email: "iffat@gmail.com", comment: "hi");
// $newComment = $repository->insert($comment);
// var_dump($newComment->getId());

// $comment = $repository->findById(6);
// var_dump($comment);

$comments = $repository->findAll();
var_dump($comments);

$connection = null;