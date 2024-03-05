<?php

    session_start();

    //$post_count = count($_SESSION['posts']);

    //echo $post_count;

    $dict = "{\"title\": \"" . $_POST['title'] . "\"," . "\"content\": \"" . $_POST['content'] . "\"}";

    if (!empty($_POST))
    {
        array_push($_SESSION['posts'], $dict);
    }
?>