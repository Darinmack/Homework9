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
        $query = "insert into posts (title, description) values (:title, :description)";
        return $this->queryWithParams($query, $inputData);
    }

    // Get all Posts
    public function getAllPosts()
    {
    
        $query = "select * from posts";
        return $this->fetchAll($query);
    }

    // Get post by id
    public function getPostById($id)
    {
        $query = "select * from posts where id = :id";
       return $this-> queryWithParams($query, ['id'=>$id]); 
        
    }

    


    public function updatePost($inputData)
    {
        $query = "update posts set title = :title, description = :description where id= :id"; 
   
        return $this->queryWithParams($query, $inputData);
    }

    // Delete Post By Id
    public function deletePost($inputData)
    {
        $query = "DELETE FROM posts where id = :id";
   
       return $this->queryWithParams($query, $inputData);
    }



}