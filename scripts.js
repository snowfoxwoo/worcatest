$(document).ready(
    function() {
    $.ajax({
        url: 'get_posts.php',
        type: 'GET',
        dataType: 'json',
        success: function(posts) {
            const postsContainer = $('#posts-container');

            console.log(posts)

            if (Object.keys(posts).length > 0){
                Object.keys(posts).forEach(key => {
                    console.log(key, posts[key]);
                    data = JSON.parse(posts[key]);
                    console.log(data)
                    const postElement = $('<div>');
                    postElement.html(`<h1>${data.title}</h1><p>${data.content}</p><hr>`);
                    postsContainer.append(postElement);
                }
            );
        }},
        error: function(error) {
            console.error('Error fetching posts:', error);
        }
    });

}
);


function addPost(){
    var title = document.getElementById("title").value;
    var content = document.getElementById("content").value;
    
    console.log(title)
    console.log(content)
    $.ajax({
        type : "POST",
        url  : "add_post.php",
        data : { 'title': title, 'content': content},
        success: function(res){
            console.log("Successfully posted!")
        }
    })



    $.ajax({
        type : "GET",
        url : "get_posts.php",
        dataType: 'json',
        success: function(posts) {

        $('#posts-container').empty();

        const postsContainer = $('#posts-container');

        console.log(posts)

        

        Object.keys(posts).forEach(key => {
            console.log(key, posts[key]);
            temp = posts[key].replaceAll('\n', '<br>');
            console.log(temp)
            data = JSON.parse(temp);
            console.log(data)
            const postElement = $('<div>');
            postElement.html(`<h1>${data.title}</h1><p>${data.content}</p><hr>`);
            postsContainer.append(postElement);
        })
    }
    
    })
}