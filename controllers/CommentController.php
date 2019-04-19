<?php
namespace Laetitia_Bernardi\site\Controller;
require_once ('models/PostManager.php');
require_once ('models/CommentManager.php');
class CommentController 
{
    private $_comment;
    private $_post;
    public function __construct()
    {
        $this->_comment = new \Laetitia_Bernardi\site\Model\CommentManager();
        $this->_post = new \Laetitia_Bernardi\site\Model\PostManager();
    }
// Ajouter un commentaire(page du detail de chaque service)
    public function addComment($author, $comment)
    {
        $postComment = $this->_comment->createComment( $author, $comment);
        if($postComment === false)
        {
            throw new Exception('Impossible d\'ajouter le commentaire');
        }
        else{
            
            header('Location: index.php?action=gold#ancrecom');
        }
    }
// Signaler un commentaire
    public function reportingComment()
    {         
        $reportComment = $this->_comment->reportComment($_GET['id']);//signale un commentaire grace à son id
                       
        header('Location: index.php?action=gold'.'&commentReport');
    }
}