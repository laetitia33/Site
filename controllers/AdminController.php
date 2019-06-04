<?php

namespace Laetitia_Bernardi\site\Controller;

require_once ('models/PostManager.php');
require_once ('models/CommentManager.php');
require_once ('models/UserManager.php');

use \models\PostManager;
use \models\CommentManager;
use \models\UserManager;


class AdministrationController
{
    private $_post;
    private $_comment;
    private $_user;


    public function __construct()
    {
        $this->_post = new \Laetitia_Bernardi\site\Model\PostManager();
        $this->_comment = new \Laetitia_Bernardi\site\Model\CommentManager();
        $this->_user = new \Laetitia_Bernardi\site\Model\UserManager();
       
    }

/////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////COMMENTAIRES///////////////////////////////////////////



//page d'accueil de l'administrateur
    public function administration()
    {
        $usersTotal =$this->_user->countUsers();//connaitre le nombre total d'inscrits
        $post = $this->_post->getLastPost();// affichage dernier service
        $comment = $this->_comment->getLastComment();//affichage dernier commentaire
        $postsTotal = $this->_post->countPosts();//connaitre le nombre total de service
        $commentsTotal = $this->_comment->countComments();//connaitre le nombre total de commentaires
        $commentsReportTotal = $this->_comment->countCommentsReport();//connaitre le nombre total de commentaires signalés
        
        require('views/adminView.php');
    }

//page pour éditer un service
    public function adminNewPost(){

        $usersTotal =$this->_user->countUsers();//connaitre le nombre total d'inscrits
        $commentsReportTotal = $this->_comment->countCommentsReport();//connaitre le nombre total de commentaires signalés
        $postsTotal = $this->_post->countPosts();//connaitre le nombre total de services
        $commentsTotal  =$this ->_comment ->countComments();//connaitre le nombre total de commentaires
        require('views/newPostView.php');
    }
   
// Liste des commentaires (page de liste des commentaires admin)
    public function adminListComments()

    {
        $usersTotal =$this->_user->countUsers();//connaitre le nombre total d'inscrits
        $postsTotal = $this->_post->countPosts();//connaitre le nombre total de services
        $commentsReportTotal = $this->_comment->countCommentsReport();//connaitre le nombre total de commentaires signalés
        $commentsTotal  =$this ->_comment ->countComments();//connaitre le nombre total de commentaires
        $comments = $this->_comment->getAllComments();//recupere tous les commentaires
       require('views/listCommentsView.php');
    
    }


// Approuver un commentaire en  retirerant le signalement (page du detail de chaque services)
    public function approvedComment()
    {
        $post = $this->_post->getPost($_GET['post_id']);//récuperer le service selectionné
        $reportComment = $this->_comment->approvedComment($_GET['id']);//approuver un commentaire en fonction de son id
        echo '<script>document.location.href="index.php?action=adminCommentsReport";</script>';
    }


//approuver tous les commentaires signalés (page des commentaires signalés admin)

  public function approvedComments()
    {
        
        $reportComments = $this->_comment->approvedComments();
            
        echo '<script>document.location.href="index.php?action=adminCommentsReport#reportcom";</script>';
       
    }


// Liste des commentaires signalés (page des commentaires signalés admin)
    public function adminCommentsReport()
    {
        
        $usersTotal =$this->_user->countUsers();//connaitre le nombre total d'inscrits
        $commentsReportTotal = $this->_comment->countCommentsReport();//connaitre le nombre total de commentaires signalés
        $postsTotal = $this->_post->countPosts();//connaitre le nombre total de films
        $commentsTotal  =$this ->_comment ->countComments();//connaitre le nombre total de commentaires
        $reportComments = $this->_comment->getReportComments();//récuperer les commentaires signalés
   

        require ('views/reportCommentsView.php');
    }

 
 //supprime tous les commentaires(page de detail de la liste des commentaires)
    public function deleteComments()
    {
        $deleteComments = $this->_comment->deleteAllComments();

        echo '<script>document.location.href="index.php?action=adminListComments#deleteCom";</script>';
  
    }


//supprime tous les commentaires(page de detail de la liste des commentaires)
    public function deleteCommentsLivreGold()
    {
        $deleteComments = $this->_comment->deleteAllComments();
         
        echo '<script>document.location.href="index.php?action=gold";</script>';
   
    }

//supprime tous les commentaires signalés
    public function deleteAllCommentReport()
    {
        $deleteAllCommentReport = $this->_comment->deleteCommentsReport();
       
        echo '<script>document.location.href="index.php?action=adminCommentsReport#reportcom";</script>';
   
    }

// Supprimer un commentaire dans la liste des commentaires
    public function deleteComment($id_comment)
    {
        $deleteComment = $this->_comment->deleteComment($id_comment);

        if($deleteComment === false)
        {
            throw new Exception('Impossible de supprimer le commentaire' );
        }
        else
        {
            echo '<script>document.location.href="index.php?action=adminListComments#deleteCom";</script>';
  
        }
    }


// Supprimer un commentaire dans le livre d'or
    public function deleteCommentGold($id_comment)
    {
        $deleteComment = $this->_comment->deleteComment($id_comment);

        if($deleteComment === false)
        {
            throw new Exception('Impossible de supprimer le commentaire' );
        }
        else
        {
            echo '<script>document.location.href="index.php?action=gold";</script>';     
        }
    }

// Supprimer un commentaire dans la page services details
    public function deleteOneComment($id_comment)
    {
        $deleteComment = $this->_comment->deleteComment($id_comment);

        if($deleteComment === false)
        {
            throw new Exception('Impossible de supprimer le commentaire' );
        }
        else
        {
         
            echo '<script>document.location.href="index.php?action=listpost";</script>';     
           
        }
    }

//supprimer le commentaire signalé dans la page commentaire report
      public function deleteOneCommentInReport($id_comment)
    {
        $deleteComment = $this->_comment->deleteComment($id_comment);

        if($deleteComment === false)
        {
            throw new Exception('Impossible de supprimer le commentaire' );
        }
        else
        {
         
            echo '<script>document.location.href="index.php?action=adminCommentsReport#reportcom";</script>';                 
        }
    }

//////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////SERVICES//////////////////////////////////////////////



// Ajouter un service (page de creation d'un service)
    public function postAdd($author, $title,$image , $content )
    {
        $createPost = $this->_post->createPost($author, $title,$image, $content);
 
        echo '<script>document.location.href="index.php?action=listPosts#episodes";</script>';                 

    }


// Page de modification d'un service
    public function adminUpdatePost()
    {
        $commentsReportTotal = $this->_comment->countCommentsReport();//nombre de commentaires signalés
        $postsTotal = $this->_post->countPosts();//nombre de services
        $commentsTotal  =$this ->_comment ->countComments();//nombre de commentaires
        $post = $this->_post->getPost($_GET['post_id']);//récupere un service selectionné
        $usersTotal =$this->_user->countUsers();//connaitre le nombre total d'inscrits

        require ('views/updatePostView.php');
    }


// Modification d'un service (page de modification d'un service)
      public function updatePost($post_id, $author, $title, $content,$image)
    {
        $updatePost = $this->_post->updatePost($post_id, $author, $title, $content,$image);

        if ($updatePost === false) {
            throw new Exception('Impossible de mettre à jour le service');
        } else {

            echo '<script>document.location.href="index.php?action=listPosts";</script>';                 

        }
    }


// Supprimer un service (page de la liste des services admin , page du detail du service )
    public function deletePost($post_id)
    {
        $deletePost = $this->_post->deletePost($post_id);//supprimé un service selectionné

        if ($deletePost === false) {
            throw new Exception('Impossible de supprimer le service');
        } elseif ($deleteComments === false) {
            throw new Exception('Impossible de supprimer les commentaire du service');
        } else {
         
            echo '<script>document.location.href="index.php?action=listPosts";</script>';                 
        
        }
    }
}