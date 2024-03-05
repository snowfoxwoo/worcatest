<?php

// Start a session to store data to run scripts locally

session_start();

// Process a post, if any

if (!empty($_POST['title']))
{
    echo $_POST['title'];
}

if (!empty($_POST['content']))
{
    echo $_POST['content'];
}



// To test, lets insert a dictionary (as suggested by the instructions) into sessions

$_SESSION['posts'][0] = "{title: Hello World, content: This is test post number 1}";
$_SESSION['posts'][1] = "{title: Hello World, content: This is test post number 2}";

// Include necessary files and configuration

// Fetch blog posts from the database

foreach ($_SESSION['posts'] as $post) {
    echo $post;
    echo "<hr>";
}
?>

<form method="post" action="blog.php">
    <input type="text" name="title" placeholder="Title"><br>
    <textarea name="content" placeholder="Content"></textarea><br>
    <button type="submit">Submit</button>
</form>