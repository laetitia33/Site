<?php
namespace Laetitia_Bernardi\projet5\Controller;


class ViewController{

    private $_user;
    private $_comment;
    private $_post;


    public function __construct()
    {
        $this->_user = new \Laetitia_Bernardi\projet5\Model\UserManager();
        $this->_post = new \Laetitia_Bernardi\projet5\Model\PostManager();
        $this->_comment = new \Laetitia_Bernardi\projet5\Model\CommentManager();
       
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


    // Page livre d'or                 
    public function gold()
    {
        $usersTotal =$this->_user->countUsers();//connaitre le nombre total d'inscrits
        $commentsReportTotal = $this->_comment->countCommentsReport();//connaitre le nombre total de commentaires signalés
        $postsTotal = $this->_post->countPosts();//connaitre le nombre total de services
        $commentsTotal  =$this ->_comment ->countComments();//connaitre le nombre total de commentaires
        require('views/livre.php');
    }     
}
