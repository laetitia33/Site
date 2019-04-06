<?php

namespace Laetitia_Bernardi\projet5\Controller;

require_once ('models/PostManager.php');
require_once ('models/CommentManager.php');
require_once ('models/LivreManager.php');
require_once ('models/UserManager.php');


use \models\PostManager;
use \models\CommentManager;
use \models\LivreManager;
use \models\UserManager;


class LivreController{

    private $_comment;
    private $_comments;
    private $_post;
    private $_user;



  public function __construct()
    {
        $this->_comment = new \Laetitia_Bernardi\projet5\Model\LivreManager();
  		$this->_post = new \Laetitia_Bernardi\projet5\Model\PostManager();
        $this->_comments = new \Laetitia_Bernardi\projet5\Model\CommentManager();
       	$this->_user = new \Laetitia_Bernardi\projet5\Model\UserManager();
    }


    // Page livre d'or                 
    public function gold()
    {
    	$usersTotal =$this->_user->countUsers();//connaitre le nombre total d'inscrits
        $commentsReportTotal = $this->_comments->countCommentsReport();//connaitre le nombre total de commentaires signalés
        $postsTotal = $this->_post->countPosts();//connaitre le nombre total de services
        $commentsTotal  =$this ->_comments ->countComments();//connaitre le nombre total de commentaires
       header('Location: index.php?action=adminListMessages');
    }   


	// Liste des messages livre d 'or
    public function adminListMessages()

    {
        $usersTotal =$this->_user->countUsers();//connaitre le nombre total d'inscrits
        $postsTotal = $this->_post->countPosts();//connaitre le nombre total de services
        $commentsReportTotal = $this->_comments->countCommentsReport();//connaitre le nombre total de commentaires signalés
        $commentsTotal  =$this ->_comments ->countComments();//connaitre le nombre total de commentaires
        $comments = $this->_comment->getAllComments();//recupere tous les messages
        $commentsTotal  =$this ->_comment ->countComments();//connaitre le nombre total de commentaires
     	require('views/livre.php');
    
    }

    // supprime tous les messages du livre d'or

    public function deleteMessages()
    {
        $deleteComments = $this->_comment->deleteAllComments();
          echo "<h1 style='color:#9A97A5;text-align:center;padding:35px;'>Tous les messages supprimés avec succès</h1>";     
        header('Refresh: 1; url=index.php?action=adminListMessages#deleteCom' );
        
   
    }

	// Ajouter un message
    public function addMessage($author, $comment)
    {
        $postComment = $this->_comment->createComment($author, $comment);           
       header('Location: index.php?action=adminListMessages');
        
    }

	// Supprimer un message
    public function deleteOneMessage($id_comment)
    {
        $deleteComment = $this->_comment->deleteComment($id_comment);

        if($deleteComment === false)
        {
            throw new Exception('Impossible de supprimer le commentaire' );
        }
        else
        {
         
             header('Location: index.php?action=adminListMessages');
            
        }
    }



}