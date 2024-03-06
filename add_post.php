<?php

    if (session_status() == PHP_SESSION_ACTIVE) {
        echo 'Session is active';
    }else{
        session_start();
    }

    //$post_count = count($_SESSION['posts']);

    //echo $post_count;

    $dict = "{\"title\": \"" . $_POST['title'] . "\"," . "\"content\": \"" . $_POST['content'] . "\"}";

    preg_replace('/[^\PCc^\PCn^\PCs]/u', '', $dict);

    if (!empty($_POST))
    {
        array_push($_SESSION['posts'], $dict);
    }
?>