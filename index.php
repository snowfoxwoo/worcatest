
<?php

session_start();

//echo sizeof($_SESSION['posts']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <div id="posts-container"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
    <strong>You can add content below!</strong>


    <br>
    <input type="text" id="title" placeholder="Title"><br>
    <textarea id="content" placeholder="Content"></textarea><br>
    <button onclick="addPost()" type="submit">Submit</button>
    
</body>
</html>