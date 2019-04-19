<?php

namespace Laetitia_Bernardi\site\Model;

require_once("models/Manager.php");
use \DateTime;
use \PDO;


class PostManager extends Manager
{

    private $_id, $_title, $_author, $_content, $_date_creation, $_image;


    public function __construct()
    {
        $this->_date_creation = new \DateTime('now');
    }


    public function getId()
    {
        return $this->_post_id;
    }

    public function getTitle()
    {
        return $this->_title;
    }


    public function getImage()
    {
        return $this->_image;
    }


    public function getAuthor()
    {
        return $this->_author;
    }

    public function getContent()
    {
        return $this->_content;
    }

    public function getDateCreation()
    {
        return $this->_date_creation;
    }

    public function setId($post_id)
    {
        $post_id = (int) $post_id;
        if($post_id > 0){
            $this->_post_id = $post_id;
        }
    }

    public function setTitle($title)
    {
        if(is_string($title)) {
            $this->_title = $title;
        }
    }

    public function setImage($image)
    {
        if(is_string($image)) {
            $this->_image = $image;
        }
    }


    public function setAuthor($author)
    {
        if(is_string($author)) {
            $this->_author = $author;
        }
    }

    public function setContent($content)
    {
        if(is_string($content)) {
            $this->_content = $content;
        }
    }

    public function setCreationDate(DateTime $date_creation)
    {
        $this->_date_creation= $date_creation;
    }
    /********************************************* GETTERS/ SETTERS *************************************************/


//récupère le dernier service
    public function getLastPost()
    {
        $db = $this->dbConnect();

        $post = $db->query('SELECT id, title, image,content,author, DATE_FORMAT(date_creation, \'%d/%m/%Y à %H:%i\') AS date_creation_fr FROM posts ORDER BY date_creation DESC LIMIT 0, 1');
        return $post;
    }


//récupère tous les services
    public function getAllPosts()
    {
        $db = $this->dbConnect();

        $req = $db->query('SELECT  b.id, b.title, b.content, b.author, b.image, DATE_FORMAT(b.date_creation, \'%d/%m/%Y à %Hh%imin\') AS date_creation_fr, (SELECT count(*) FROM comments c ) AS nbCommentaires FROM posts b ORDER BY date_creation DESC ');

        return $req;
    }


//nombre le nombre de services
    public function countPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT COUNT(*) AS total_posts FROM posts');
        $req->execute();
        $postsTotal = $req->fetch();
        return $postsTotal;
    }

//recupere un service
    public function getPost($post_id)
    {
        $this->setId($post_id);
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, image,content,author, DATE_FORMAT(date_creation, \'%d/%m/%Y à %H:%i\') AS date_creation_fr FROM posts WHERE id = ?');
        $req->execute(array($this->getId()));
        $post = $req->fetch();

        return $post;
    }

//creation d'un service
    public function createPost($author, $title, $image, $content)
    {
        $this->setAuthor($author);
        $this->setTitle($title);  
        $this->setImage($image);
        $this->setContent($content);
        $db = $this->dbConnect();

        $post = $db->prepare('INSERT INTO posts (author, title,image, content, date_creation) VALUES ( ?,?,?,?, NOW())');
        $createPost = $post->execute(array(
            $this->getAuthor(),
            $this->getTitle(),
            $this->getImage(),
            $this->getContent()
            ));

        return $createPost;
    }

//modification du service
  public function updatePost($post_id, $author, $title, $image, $content )
    {
        $this->setId($post_id);
        $this->setAuthor($author);
        $this->setTitle($title);
        $this->setImage($image);
        $this->setContent($content);           
        $db = $this->dbConnect();

        $post = $db->prepare('UPDATE posts SET  title= :title, author= :author,image= :image,content= :content WHERE id= :post_id');
        $post->bindValue('author', $this->getAuthor(), PDO::PARAM_STR);
        $post->bindValue('title',$this->getTitle(), PDO::PARAM_STR);
        $post->bindValue('image', $this->getImage(), PDO::PARAM_INT);
        $post->bindValue('content',$this->getContent(), PDO::PARAM_STR);
        $post->bindValue('post_id', $this->getId(), PDO::PARAM_INT);
      
        $updatePost = $post->execute();

        return $updatePost;
    }


//suppression d'un srvice
    public function deletePost($post_id)
    {
        $this->setId($post_id);

        $db = $this->dbConnect();
        $post = $db->prepare('DELETE FROM posts WHERE id= ?');
        $deletePost = $post->execute(array($this->getId()));

        return $deletePost;
    }
}