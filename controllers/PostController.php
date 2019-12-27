<?php
namespace app\controllers;
// Инициализируем наше приложение
require_once __DIR__ . '/../models/Post.php';
require_once __DIR__ . '/../models/service/PostService.php';
$postService = new PostService;
// Получаем список объявлений
$posts = $postService->getAllPosts();
// Вызываем вид, чтобы отобразить их
require __DIR__ . '/../views/post/index.phtml';