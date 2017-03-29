<?php /* Template Name: Listing Conseil*/ ?>
<?php get_header(); ?>
 <!-- content -->
<div class="content">
  <div class="container">
    <div class="ctnr-intro">
      <h1>Titre de la page</h1>
    </div>

    <?php 
      $com_id = icl_object_id(9 , 'category', true , ICL_LANGUAGE_CODE);
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $arg = array('post_type' => 'post','category__in' => $com_id,'paged' => $paged,'posts_per_page' => 10);

      $query = new WP_query($arg);
    ?>
    <div class="listing">
      <?php if($query->have_posts()): ?>
      <?php while($query->have_posts()): $query->the_post();?>
      <div class="row-list">
        <div class="icon-block">
          <img src="<?php echo get_bloginfo("template_url") ?>/images/pdf-ico.png" alt="pdf icon">
        </div>
        <div class="titre-block">
          <p><?php echo get_the_title(); ?></p>
        </div>
        <div class="button-block">
          <div class="btn-read">
            <a href="<?php echo get_the_permalink(); ?>"><?php _e("Lire","presidence"); ?></a>
          </div>
          <?php if(get_field('pdf_uploader') != "") :?>
          <div class="btn-down">
            <a href="<?php echo get_field('pdf_uploader'); ?>"><?php _e('Telecharger','presidence'); ?></a>
          </div>
          <?php endif; ?>

        </div>
      </div>
      <?php endwhile;endif; ?>
      <?php
        if (function_exists(custom_pagination)) {
          custom_pagination($query->max_num_pages,"",$paged);
        }
      ?>

      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</div>
<!-- ./content -->

<?php get_footer();
