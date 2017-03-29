<!-- footer -->
<footer>
  <div class="revue-part">
    <div class="container">
      <table width="100%">
        <tr>
          <td width="75%">
            <p><?php _e('Télécharger la dernière revue','presidence') ?></p>          
          </td>
          <td width="25%" class="text-center">
          	<?php 
          		$args =  array(
          					'numberposts' => 1 , 
          					'post_type' => 'revue'
          				);

          		$revue = wp_get_recent_posts( $args );
          	?>
            <a href="<?php echo get_field('pdf_uploader',$revue[0]['ID']); ?>"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($revue[0]['ID']); ?>" alt="revue"></a>
          </td>
        </tr>
      </table>
    </div>        
  </div>

  <div class="institution">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="titre"><?php _e('Les institutions','presidence'); ?></div>
          <ul>
            <li><a href="#">www.hcc.gov.mg</a></li>
            <li><a href="#">www.hcc.gov.mg</a></li>
            <li><a href="#">www.hcc.gov.mg</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <div class="titre"><?php _e('Nous suivre','presidence') ?></div>
          <ul class="social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
      
    </div>
  </div>

  <div class="copyright">
    <div class="container">
      <p>© 2014 Présidence de la République de Madagascar</p>
    </div>
  </div>
</footer>
<!-- ./footer -->
<?php wp_footer(); ?>
</body>
</html>