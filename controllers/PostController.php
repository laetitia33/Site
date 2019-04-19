<?php
namespace Laetitia_Bernardi\site\Controller;
require_once ('models/PostManager.php');
require_once ('models/CommentManager.php');
require_once ('models/UserManager.php');
use \models\PostManager;
use \models\CommentManager;
use \models\UserManager;
class PostController 
{
    private $_post;
    private $_comment;    
    private $_posts;
    private $_user;
    public function __construct()
    {
        $this->_post = new \Laetitia_Bernardi\site\Model\PostManager();
        $this->_posts = new \Laetitia_Bernardi\site\Model\PostManager();
        $this->_comment = new \Laetitia_Bernardi\site\Model\CommentManager();
        $this->_user = new \Laetitia_Bernardi\site\Model\UserManager();
    }

// Liste des services( page d'accueil)
    public function listPosts()
    {
        $usersTotal =$this->_user->countUsers();//connaitre le nombre total d'inscrits      
        $posts = $this->_posts->getAllPosts();//recupère tous les services
        $postsTotal = $this->_posts->countPosts();  //connaitre le nombre de total de services   
        $commentsTotal  =$this ->_comment ->countComments();//connaitre le nombre de com 
        $commentsReportTotal = $this->_comment->countCommentsReport();//connaitre nombre total de coms signalés
        require('views/serviceList.php');
     
    }
}