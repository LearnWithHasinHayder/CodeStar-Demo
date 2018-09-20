<?php

function csdemo_sample_metabox( $metaboxes ) {

	$metaboxes[] = array(
		'id'        => 'csdemo-book-info',
		'title'     => __( 'Book Info', 'codestar-demo' ),
		'post_type' => array( 'book' ),
		'context'   => 'normal',
		'priority'  => 'default',
		'sections'  => array(
			array(
				'name'   => 'csdemo-bookinfo-section',
				'icon'   => 'fa fa-image',
//				'title'=>__( 'Section One', 'codestar-demo' ),
				'fields' => array(
					array(
						'id'    => 'author',
						'title' => __( 'Book Author', 'codestar-demo' ),
						'type'  => 'text',
					),
					array(
						'id'    => 'year',
						'title' => __( 'Book Year', 'codestar-demo' ),
						'type'  => 'text',
					),
					array(
						'id'    => 'isbn',
						'title' => __( 'ISBN', 'codestar-demo' ),
						'type'  => 'text',
					)
				)
			)
		)
	);

	return $metaboxes;
}

add_filter( "cs_metabox_options", "csdemo_sample_metabox" );