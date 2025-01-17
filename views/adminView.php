<?php $title = 'Bienvenue Laetitia'; ?>
<?php ob_start(); ?>
<div id="adminView"></div>
<!--////////////////////// DERNIER SERVICE EN LIGNE /////////////////////////////-->
<?php while ($data = $post->fetch()):?>
<h2 class='pageList'>Dernier service en
    ligne:
</h2>
<div class="adminPost">
    <h2>
        <?= htmlspecialchars($data['title']) ?>
    </h2>
    <div id="affiche3">
        <?php echo "
        <img src='".$data['image']."' />";?>
    </div>
    <div class="news">
        <p>
            <?= htmlspecialchars_decode(nl2br(substr(html_entity_decode($data['content']), 0, 500).'...'));?>
        </p>
    </div>
</div>
<?php endwhile;$post->
    closeCursor();?>
<!--////////////////////// DERNIER COMMENTAIRE EN LIGNE ///////////////////////////-->
<?php while ($data = $comment->fetch()): ?>
<h2 class='pageList'>Dernier
    Commentaire:
</h2>
<div class="adminPost">
    <p>
        <strong>
            <?= htmlspecialchars($data['author']); ?>
        </strong> le
                            
        <?= htmlspecialchars($data['comment_date_fr']); ?>
    </p>
    <div class="news">
        <p>
            <?= nl2br(preg_replace('#^
            <br/>$#','',htmlspecialchars(substr($data['comment'], 0, 400).'...')));?>
        </p>
    </div>
</div>
<?php endwhile;$comment->
    closeCursor(); ?>
<!--/////////////////////////LIENS INFORMATIONS ////////////////////////////////////-->
<h2 class='pageList'>Informations</h2>
<div class="adminPost">
    <div class="admin">
        <a href="index.php?action=listPosts#episodes">
            <p>Vous avez actuellement
                                        
                <?= htmlspecialchars($postsTotal['total_posts'])?>
                                            services sur ce site.
                                    
            </p>
        </a>
    </div>
    <div class="admin">
        <a class="nav-link" href="index.php?action=adminListComments#com">
            <p>Vous avez actuellement
                                        
                <?= htmlspecialchars($commentsTotal['total_comments'])?>
                                            commentaires .
                                    
            </p>
        </a>
    </div>
    <div class="admin">
        <a href="index.php?action=adminCommentsReport#reportcom">
            <?php if(htmlspecialchars($commentsReportTotal['total_comments_report']== 0)):?>
                <p> Vous n'avez aucun commentaire de signalé.<p>
                <?php else : ?>
                    <p>
                Vous avez actuellement
                
                        <?= htmlspecialchars($commentsReportTotal['total_comments_report'])?>
                commentaire(s)
                signalé(s).
            
                    </p>
                    <?php 
                endif; ?>
                </a>
            </div>
        </div>
        <?php $content = ob_get_clean(); ?>
        <!--///////////////////////////// retourne vers template //////////////////////////-->
        <?php require('views/template.php'); ?>