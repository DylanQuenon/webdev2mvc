<?php
    require("model/frontend.php");
    function listPosts()
    {
        $posts = getPosts();
        require "view/frontend/listPostsView.php";
    }

    function post($id)
    {
        $safeId = htmlspecialchars($id);
        $post = getPost($safeId);
        $comments = getComments($safeId);

        require "view/frontend/postView.php";
    }

    function addComment($id, $author, $comment)
    {
        $safeAuthor = htmlspecialchars($author);
        $safeComment = htmlspecialchars($comment);
        $add = addComments($id, $safeAuthor, $safeComment);

        
    }
?>