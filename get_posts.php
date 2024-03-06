<?php


    if (session_status() == PHP_SESSION_ACTIVE) {
        echo 'Session is active';
    }else{
        session_start();
        $_SESSION['posts'][0] = "{\"title\": \"Sample Blog Post 1\", \"content\": \"This is a sample blog post content. It can contain a more detailed description of the topic or any related information.\"}";

        $_SESSION['posts'][1] = "{\"title\": \"Sample Blog Post 2\", \"content\": \"This is a sample blog post content. It can contain a more detailed description of the topic or any related information.\"}";
    
        $_SESSION['posts'][2] = "{\"title\": \"Sample Blog Post 3\", \"content\": \"This is a sample blog post content. It can contain a more detailed description of the topic or any related information.\"}";
    
    }

    //$post_count = count($_SESSION['posts']);

    //$_SESSION['postcnt'] = $post_count;

  
// if(!empty($_POST['posts'])){
//     array_push($_SESSION['posts'],"{title: " + $_POST['title'] + "," + "'content': " + $_POST['content'] + "}");
// }

// echo "{
//     \"post\": [
//         {\"title\": \"Sample Blog Post 1\",
//             \"content\": \"This is a sample blog post content. It can contain a more detailed description of the topic or any related information.\"},
//         {\"title\": \"Sample Blog Post 2\",
//             \"content\": \"This is a sample blog post content. It can contain a more detailed description of the topic or any related information.\"},
//         {\"title\": \"Sample Blog Post 3\",
//             \"content\": \"This is a sample blog post content. It can contain a more detailed description of the topic or any related information.\"}
//     ]
// }";

echo json_encode($_SESSION['posts']);

?>