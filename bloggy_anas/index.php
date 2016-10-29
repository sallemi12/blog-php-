<?php 
require_once("header.inc.php") ;
require_once("classes/article.php");
$a=new article();
$liste= $a-> liste();

?>
    		<div class="row" id="content">
    			<div class="col-md-9" id="content_text">
    				<?php foreach ($liste as $item) { ?>
	    			 <div class="post col-xs-11 text-center">
                            <div class="post-image">
                              <div class="post-overlay"></div> 
                              <div class="post-category">
                               <a href="#"><p class="blog_cat"><?php echo $item->_id; ?></p></a>
                              </div>  
                              <img src="upload/<?php echo $item->_image; ?>" alt="Image" class="img-responsive">
                            </div>
                            <div class="post-text">
                             <h3><a href="#"><?php echo $item -> _titre ; ?></a></h3> 
                              <p class="text_post"><?php echo $item ->_texte; ?></p><a href="complet_article.php?id=<?php echo $item ->_id ;?>">Lire la suite</a>
                            </div>
                            <div class="post-meta">
                            <div class="icon">
                              <a href="#"><span class="glyphicon glyphicon-pencil"></span>by admin</a>
                              <a href="#"><span class=" glyphicon glyphicon-time"></span><?php echo $item -> _d_ajout; ?></a>

                            </div>
                          
                             
                            </div>
                     </div>
                     <?php } ?>
                </div>
    			<div class="col-md-3 hidden-xs" id="sidebar">
					Sidebar Lorem ipsum, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
    			</div>
    		</div>

<?php require_once("footer.inc.php"); ?>
