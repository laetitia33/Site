<?php
namespace Laetitia_Bernardi\site\Controller;


class ViewController{

    private $_user;
    private $_comment;
    private $_post;


    public function __construct()
    {
        $this->_user = new \Laetitia_Bernardi\site\Model\UserManager();
        $this->_post = new \Laetitia_Bernardi\site\Model\PostManager();
        $this->_comment = new \Laetitia_Bernardi\site\Model\CommentManager();
       
    }

	
    //page informations
  	public function rdv()
    {   
       $usersTotal =$this->_user->countUsers();//connaitre le nombre total d'inscrits
        $commentsReportTotal = $this->_comment->countCommentsReport();//connaitre le nombre total de commentaires signalés
        $postsTotal = $this->_post->countPosts();//connaitre le nombre total de services
        $commentsTotal  =$this ->_comment ->countComments();//connaitre le nombre total de commentaires
        require('views/rdv.php');
    }

	//page contact
    public function mailView(){   

        $usersTotal =$this->_user->countUsers();//connaitre le nombre total d'inscrits
        $commentsReportTotal = $this->_comment->countCommentsReport();//connaitre le nombre total de commentaires signalés
        $postsTotal = $this->_post->countPosts();//connaitre le nombre total de services
        $commentsTotal  =$this ->_comment ->countComments();//connaitre le nombre total de commentaires

       require ('views/contactView.php');
    }

    //page de connexion
 	public function login()
    {
        $usersTotal =$this->_user->countUsers();//connaitre le nombre total d'inscrits
        $commentsReportTotal = $this->_comment->countCommentsReport();//connaitre le nombre total de commentaires signalés
        $postsTotal = $this->_post->countPosts();//connaitre le nombre total de services
        $commentsTotal  =$this ->_comment ->countComments();//connaitre le nombre total de commentaires
        require('views/loginView.php');
    }

    //Controle à distance
    public function vpn()
    {
        require('views/vpn.php');
    }
  

    public function gold($commentReport)
      {

        $commentReport=$commentReport;//affichage message confirmation signalé
        $usersTotal =$this->_user->countUsers();//connaitre le nombre total d'inscrits
        $postsTotal = $this->_post->countPosts();//connaitre le nombre total de services
        $commentsReportTotal = $this->_comment->countCommentsReport();//connaitre le nombre total de commentaires signalés
        $commentsTotal  =$this ->_comment ->countComments();//connaitre le nombre total de commentaires
        $comments = $this->_comment->getAllComments();//recupere tous les commentaires
        require('views/livre.php');
      }
    //ouverture des sites réalisés
    public function site()
    {
        require('views/serviceDetail.php');
    }
  
}
