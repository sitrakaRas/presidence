<?php
add_action('init', 'configuration_post_type', 0);
function configuration_post_type() {
	// Post type actu
	$labels = array(
			'name' => 'revues',
			'singular_name' => 'revue',
			'add_new' => 'Ajouter',
			'all_items' => 'Tous les revues',
			'add_new_item' => 'Ajouter revue',
			'edit_item' => 'Editer revue',
			'new_item' => 'Nouvel revue',
			'view_item' => 'Voir revue',
			'search_items' => 'Chercher',
			'not_found'           => 'Aucun résultat trouvé',
			'not_found_in_trash'  => 'Aucun résultat trouvé dans la corbeille',
			'parent_item_colon' => 'Parent revue'
			//'menu_name' => default to 'name'
		);
	
	$args = array(
		'label'               => 'Revues',
		 'description'         => 'revues',
		'labels'              => $labels,
		'supports' => array(
			'title',
			'revisions',
			'thumbnail'
		),
		'public'              => true,
		'has_archive'         => true,
		'menu_icon' 		  => 'dashicons-groups'
    );
	register_post_type( 'revue', $args );

}



