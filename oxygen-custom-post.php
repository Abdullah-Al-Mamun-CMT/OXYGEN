<?php

if( !function_exists ( 'custom_post' ) ):

	function custom_post() {

		register_post_type( 'header_slider', array(

				'label'		=>		'Sliders',
				'labels'	=>		array(

						'name'			=>	__( 'Header Slides', 'aamn_oxygen' ),
						'singular_name'		=>	__( 'Header Slide', 'aamn_oxygen' ),
						'add_new'		=>	__( 'Add Slide', 'aamn_oxygen' ),
						'add_new_item'		=>	__( 'Add New Slide', 'aamn_oxygen' ),
						'edit_item'		=>	__( 'Edit Slide', 'aamn_oxygen' ),
						'new_item'		=>	__( 'New Slide', 'aamn_oxygen' ),
						'view_item'		=>	__( 'View Slide', 'aamn_oxygen' ),
						'view_items'		=>	__( 'View Slides', 'aamn_oxygen' ),
						'search_items'		=>	__( 'Search Slides', 'aamn_oxygen' ),
						'not_found'		=>	__( 'No Slides Found', 'aamn_oxygen' ),
						'not_found_in_trash'	=>	__( 'No Slides Found On Trash', 'aamn_oxygen' ),
						'all_items'		=>	__( 'All Slides', 'aamn_oxygen' ),
						'all_items'		=>	__( 'All Slides', 'aamn_oxygen' ),
						'insert_into_item'	=>	__( 'Insert Into Slide', 'aamn_oxygen' ),
						'uploaded_to_this_item'	=>	__( 'Uploaded To This Slide', 'aamn_oxygen' ),
						'featured_image'	=>	__( 'Featured Slide', 'aamn_oxygen' ),
						'set_featured_image'	=>	__( 'Set Featured Slide', 'aamn_oxygen' ),
						'remove_featured_image'	=>	__( 'Remove Featured Slide', 'aamn_oxygen' ),
						'use_featured_image'	=>	__( 'Use As Fatured Slide', 'aamn_oxygen' ),
						
					),

				'public'	=>		true,
				'menu_icon'	=>		'dashicons-images-alt2',
				'supports'	=>		array( 'title', 'editor', 'author', 'custom-fields', 'revisions', 'thumbnail' )

			)

		);

	}

add_action( 'init', 'custom_post' );

endif;
