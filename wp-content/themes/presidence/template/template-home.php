<?php /* Template Name: Accueil */ ?>
<?php get_header(); ?>

<!-- content -->
<div class="content">
  <div class="container">
    <!-- slider-top -->
    <div class="slider-top">

    <?php 
    	$actu_id = icl_object_id(8 , 'category', true , ICL_LANGUAGE_CODE);
    	$arg = array('cat' => $actu_id,'posts_per_page' => 4);
    	$query = new WP_query($arg);
    	if ( $query->have_posts() ) :
    		while ($query->have_posts()) : $query->the_post();
    ?>

      <div class="item" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
        <div class="block-txt">
          <div class="titre"><?php echo get_the_title(); ?></div>
          <div class="read-more"><a href="#"><?php _e('lire la suite','presidence'); ?></a></div>           
        </div>
      </div>

  	<?php endwhile; endif;?>

    </div>
    <!-- ./slider-top -->
    <!-- article en avant -->
    <?php wp_reset_query(); ?>

    <?php 
    	$args = array( 'numberposts' => 2,'cat' => 12 );
        $lastposts = get_posts( $args );       
    ?>
    <div class="featured-article">
      <div class="col-md-12">
        <div class="row">
          <div class="line-row">
          	<?php  foreach($lastposts as $post) : setup_postdata($post); ?>
            <div class="col-sm-6">
              <!-- bloc-article -->
              <div class="bloc-article">
                <!-- titre -->
                <div class="titre">
                  <h2>
                    <a href="<?php echo get_the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                  </h2>
                </div>
                <!-- ./titre -->

                <div class="illustration">
                  <a href="<?php echo get_the_permalink(); ?>" title="illustration"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive" alt="illustration"></a>
                </div>

                <div class="contenu">
                  <p><?php echo wp_trim_excerpt(content(20)); ?></p>
                </div>

                <div class="read-more text-right">
                	<a href="#" class="green-btn"><?php _e("Lire la suite","presidence"); ?></a>
                </div>
              </div>
              <!-- ./bloc-article -->
            </div>
        	<?php endforeach; ?>
          </div>              
        </div>
      </div>
    </div>
    <!-- ./article en avant -->
    
    <!-- newsletter -->
    <div class="newsletter">
      <table width="100%">
        <tr>
          <td width="75%">
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <?php _e('inscrivez votre e-mail pour recevoir nos newsletters et revues mensuelles','presidence'); ?>
            </p>
            
            
          </td>
          <td width="25%">
            <form>
              <div class="input-group">
                <input type="text" class="form-control" aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2"><button type="submit">ok</button></span>
              </div>
            </form>
          </td>
        </tr>
      </table>
    </div>
    <!-- ./newsletter -->

    <div class="actualite">
      <h2><?php _e('Actualités','presidence') ?></h2>
      <div class="row">
        <div class="col-md-9">
          	<div class="row">
          	<?php 
          		$actu_id = icl_object_id(8 , 'category', true , ICL_LANGUAGE_CODE);
          		$audience_id = icl_object_id(6 , 'category', true , ICL_LANGUAGE_CODE);
          		
          		$args = array(
          					'numberposts' => 6 , 
          					'tax_query' => array(
          						'relation' => 'OR',
      							array(
									'taxonomy' => 'category',
									'field' => 'term_id',
									'terms' => array($actu_id),
									'operator' => 'IN'
								),
								array(
									'taxonomy' => 'category',
									'field' => 'term_id',
									'terms' => array($audience_id),
									'operator' => 'IN'
								)
      						)
          				);

          		$query = wp_get_recent_posts( $args );

          		foreach ($query as $actu) :

           ?>
            <div class="col-md-4 col-sm-6">
              <a class="bloc-actus" href="#">
                <div class="img-box" style="background-image: url('<?php echo get_the_post_thumbnail_url($actu['ID']); ?>')">
                	<?php $date = explode(" ", $actu['post_date']); ?>
                  <span class="date"><?php echo str_replace('-', '/', $date[0]); ?></span>
                </div>
                <p><?php echo $actu['post_title']; ?></p>
              </a>  
            </div>
			
			<?php endforeach ?>
           
          </div>
          <div class="link text-center">
            <a href="#" class="btn-green"><?php _e("Voir toutes les actualités",'presidence') ?></a>
          </div>
        </div>
        <aside class="col-md-3">
          
        </aside>
      </div>

    </div>

  </div>
</div>
<!-- ./content -->

<?php get_footer();
