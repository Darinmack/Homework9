<?php

namespace app\models;


use app\core\Database;


class Post
{
    //todo make methods here
    use Database;



    // Save a new post
    public function savePost($inputData)
    {
        $query = "INSERT INTO posts (title, content) VALUES (:title, :content)";
        $statement = $this->pdo->prepare($query);
        $statement->execute(array(':title' =>  $postData['title'] ,  ':content' => $postData['description']));
        return $this->pdo->lastInsertId();
    }

    // Get all Posts
    public function getAllPosts()
    {
    
        $query = "SELECT * FROM posts";
        return $this->fetchAll($query);
    }

    // Get post by id
    public function getPostById($id)
    {
        
        $statement = $this->pdo->prepare("SELECT * FROM posts WHERE id = :id");
        $statement->execute(array(':id' => $id));
        return $statement->fetch(PDO::FETCH_ASSOC);
        
        
    }

    


    public function updatePost($id, $title, $content)
    {
        $statement = $this->pdo->prepare("UPDATE posts SET title = :title, content = :content WHERE id = :id");
       $success= $statement->execute(array(':id' => $id, ':title' => $title, ':content' => $content));
        return $success;
    }

    // Delete Post By Id
    public function deletePostById($id)
    {
        $statement = $this->pdo->prepare("DELETE FROM posts WHERE id = :id");
       $success= $statement->execute([':id'=>$id]);
   
       return $success;
    }



}