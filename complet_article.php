<?php 
require_once("header.inc.php") ;
require_once("classes/mysql.php");
$id=$_GET['id'];
$q= "SELECT * FROM `article` WHERE `id` = $id";
$m=new Mysql();
$res = $m->get_cnx()->query($q);
$tab=$res->fetch(PDO::FETCH_ASSOC);


?>
        
    		<div class="row" id="content">
    			<div class="col-md-9" id="content_text">
    			
	    			          <div class="post col-xs-11 text-center">
                         <a href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                            <div class="post-image">
                              <div class="post-overlay"></div> 
                              <div class="post-category">
                               <a href="#"><p class="blog_cat">02 feb 2016</p></a>
                              </div>  
                              <img src="upload/<?php echo $row=$tab['image']; ?>" alt="Image" class="img-responsive">
                            </div>
                            <div class="post-text">
                             <h3><a href="#"><?php $row=$tab['titre']; ; ?></a></h3>
                              <p class=""><?php echo $row=$tab['texte'];; ?></p>
                            </div>
                            <div class="post-meta">
                            <div class="icon">
                              <a href="#"><span class="glyphicon glyphicon-pencil"></span>by admin</a>
                              <a href="#"><span class=" glyphicon glyphicon-time"></span><?php echo $row=$tab['d_ajout']; ?></a>

                            </div>
                          
                             
                            </div>
                     </div>

                     
                   
                </div>
    			<div class="col-md-3 hidden-xs" id="sidebar">
					Sidebar Lorem ipsum, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
    			</div>
    		</div>

<?php require_once("footer.inc.php"); ?>
