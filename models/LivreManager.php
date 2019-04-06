<?php

namespace Laetitia_Bernardi\projet5\Model;

require_once("models/Manager.php");
use \DateTime;
use \PDO;


class LivreManager extends Manager
{

   private $_id, $_author, $_comment, $_comment_date;


   public function __construct()
    {
        $this->_comment_date = new DateTime('now');
        
    }

    public function getIdComment()
    {
        return $this->_id_comment;
    }


    public function getAuthor()
    {
        return $this->_author;
    }

 
    public function getComment()
    {
        return $this->_comment;
    }

   
    public function getCommentDate()
    {
        return $this->_comment_date;
    }


    public function setIdComment($id_comment)
    {
        $id_comment = (int) $id_comment;

        if ($id_comment > 0) {
            $this->_id_comment = $id_comment;
        }
    }

    public function setAuthor($author)
    {
        if(is_string($author)) {
            $this->_author = $author;
        }
    }
   
    public function setComment($comment)
    {
        if(is_string($comment)) {
            $this->_comment = $comment;
        }
    }
  
    public function setCommentDate(DateTime $comment_date)
    {
        $this->_comment_date = $comment_date;
    }

    /********************************************* GETTERS/ SETTERS *************************************************/


//tous les messages
    public function getAllComments()
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %H:%i\') AS comment_date_fr FROM livre ORDER BY comment_date ');
        return $comments;
    }


//nombre de messages
    public function countComments()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT COUNT(*) AS total_comments FROM livre');
        $req->execute();
        $commentsTotal = $req->fetch();
        return $commentsTotal;
    }



//envoi d'un message
    public function createComment( $author, $comment)
    {
       
        $this->setAuthor($author);
        $this->setComment($comment);
        $db = $this->dbConnect();
        $set_timezone = $db->query('SET time_zone = "+02:00"');
        $comments = $db->prepare('INSERT INTO livre (author, comment, comment_date) VALUES(  ?, ?, NOW())');
        $createComment = $comments->execute(array(
            $this->getAuthor(),
            $this->getComment()
        ));
        return $createComment;
    }

//suppression message
    public function deleteComment($id_comment)
    {
        $this->setIdComment($id_comment);

        $db = $this->dbConnect();
        $comment = $db->prepare('DELETE FROM livre WHERE id= ?');
        $deleteComment = $comment->execute(array($this->getIdComment()));

        return $deleteComment;
    }


//suppression de tous les messages
    public function deleteAllComments()
    {
        
        $db = $this->dbConnect();
        $comments = $db->prepare('DELETE FROM livre ');
        $deleteComments = $comments->execute();

        return $deleteComments;
    }


    
}
