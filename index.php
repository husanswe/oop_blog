<?php 
    require_once "config/bootstrap.php";
    
    $posts = Post::getAll();

    // var_dump($posts);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>OOP Blog</title>
    </head>

    <body>
        <div class="hdr-container">
            <h1>PHP OOP Blog</h1>
        </div>
        <div class="create-post">
            <a href="create.php">
                <h3>Create Post</h3>
            </a>
        </div>
        <ul>
            <?php foreach($posts as $post) : ?>
            <li class="posts">
                <a href="post.php?id=<?= $post->id ?>">
                    <h3><?= $post->id . ". " . $post->title ?></h3>
                </a>
                <p><?= $post->body ?></p>
            </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>