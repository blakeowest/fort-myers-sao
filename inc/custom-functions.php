<?php

add_filter( 'rwmb_meta_boxes', 'our_register_meta_boxes' );
function our_register_meta_boxes( $meta_boxes ) {
    $prefix = 'our_';


    /**
     * Home Page Slider 
    **/
    $meta_boxes[] = array(
    	'id'         => 'hp-slider-options',
    	'title'      => __( 'Home Slider', 'textdomain' ),
    	'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
    	'include' => array(
            // With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
    		'relation'        => 'AND',
            // List of page templates. Can be array or comma separated. Optional.
    		'template'        => array( 'page-home.php' ),
    	),
    	'context'    => 'normal',
    	'priority'   => 'high',
    	'fields' => array(
    		array(
    			'name' => __( 'Home Page Slider', 'textdomain' ),
    			'id'   => $prefix . 'hp-slider',
    			'type' => 'group',
                        // Clone whole group?
    			'clone'  => true,
                        //Limit
    			'max_clone' => 20,
                        // Drag and drop clones to reorder them?
    			'sort_clone' => true,
                        //List of fields
    			'fields' => array(
    				array(
    					'name' => __( 'Slider Image', 'textdomain' ),
    					'id'   => $prefix . 'hp-slide-image',
    					'type' => 'image_advanced',
    					'desc' => 'Upload image for this slide.',
    				),
    			),
    		),
    		array(
				'name'     => __( 'Slider Text', 'textdomain' ),
				'id'       => $prefix . 'hp-slide-text',
                'desc'  => 'Input slider text.',
				'type'     => 'text',
			),
    	)
    );
    
    /**
     * Home Quick Links Options 
    **/
    $meta_boxes[] = array(
        'id'         => 'home-quick-links-options',
        'title'      => __( 'Home Quick Links', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
		'include' => array(
			// With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
			'relation'        => 'AND',
			// List of page templates. Can be array or comma separated. Optional.
			'template'        => array( 'page-home.php' ),
		),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
				'name'     => __( 'Quick Links Tile 1 Title', 'textdomain' ),
				'id'       => $prefix . 'ql-t1-title',
                'desc'  => 'Input quick links tile 1 title',
				'type'     => 'text',
			),
			array(
				'name'     => __( 'Quick Links Tile 1 URL', 'textdomain' ),
				'id'       => $prefix . 'ql-t1-url',
                'desc'  => 'Input quick links tile 1 url',
				'type'     => 'text',
			),
			array(
				'name'     => __( 'Quick Links Tile 2 Title', 'textdomain' ),
				'id'       => $prefix . 'ql-t2-title',
                'desc'  => 'Input quick links tile 2 title',
				'type'     => 'text',
			),
			array(
				'name'     => __( 'Quick Links Tile 2 URL', 'textdomain' ),
				'id'       => $prefix . 'ql-t2-url',
                'desc'  => 'Input quick links tile 2 url',
				'type'     => 'text',
			),
			array(
				'name'     => __( 'Quick Links Tile 3 Title', 'textdomain' ),
				'id'       => $prefix . 'ql-t3-title',
                'desc'  => 'Input quick links tile 3 title',
				'type'     => 'text',
			),
			array(
				'name'     => __( 'Quick Links Tile 3 URL', 'textdomain' ),
				'id'       => $prefix . 'ql-t3-url',
                'desc'  => 'Input quick links tile 3 url',
				'type'     => 'text',
			),
			array(
				'name'     => __( 'Quick Links Tile 4 Title', 'textdomain' ),
				'id'       => $prefix . 'ql-t4-title',
                'desc'  => 'Input quick links tile 4 title',
				'type'     => 'text',
			),
			array(
				'name'     => __( 'Quick Links Tile 4 URL', 'textdomain' ),
				'id'       => $prefix . 'ql-t4-url',
                'desc'  => 'Input quick links tile 4 url',
				'type'     => 'text',
			),
			array(
				'name'     => __( 'Quick Links Tile 5 Title', 'textdomain' ),
				'id'       => $prefix . 'ql-t5-title',
                'desc'  => 'Input quick links tile 5 title',
				'type'     => 'text',
			),
			array(
				'name'     => __( 'Quick Links Tile 5 URL', 'textdomain' ),
				'id'       => $prefix . 'ql-t5-url',
                'desc'  => 'Input quick links tile 5 url',
				'type'     => 'text',
			),
			array(
				'name'     => __( 'Quick Links Tile 6 Title', 'textdomain' ),
				'id'       => $prefix . 'ql-t6-title',
                'desc'  => 'Input quick links tile 6 title',
				'type'     => 'text',
			),
			array(
				'name'     => __( 'Quick Links Tile 6 URL', 'textdomain' ),
				'id'       => $prefix . 'ql-t6-url',
                'desc'  => 'Input quick links tile 6 url',
				'type'     => 'text',
			),
        )
    );


    /**
     * Home Office Locations Options 
    **/
    $meta_boxes[] = array(
        'id'         => 'home-office-locations-options',
        'title'      => __( 'Home Office Locations', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
		'include' => array(
			// With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
			'relation'        => 'AND',
			// List of page templates. Can be array or comma separated. Optional.
			'template'        => array( 'page-home.php' ),
		),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
				'name'     => __( 'Home Office 1 Image', 'textdomain' ),
				'id'       => $prefix . 'hp-office1-img',
                'desc'  => 'Input image for Office 1.',
				'type'     => 'file_advanced',
			),
			array(
				'name'     => __( 'Home Office 1 Text', 'textdomain' ),
				'id'       => $prefix . 'hp-office1-text',
                'desc'  => 'Input text for Office 1.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Home Office 2 Image', 'textdomain' ),
				'id'       => $prefix . 'hp-office2-img',
                'desc'  => 'Input image for Office 2.',
				'type'     => 'file_advanced',
			),
			array(
				'name'     => __( 'Home Office 2 Text', 'textdomain' ),
				'id'       => $prefix . 'hp-office2-text',
                'desc'  => 'Input text for Office 2.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Home Office 3 Image', 'textdomain' ),
				'id'       => $prefix . 'hp-office3-img',
                'desc'  => 'Input image for Office 3.',
				'type'     => 'file_advanced',
			),
			array(
				'name'     => __( 'Home Office 3 Text', 'textdomain' ),
				'id'       => $prefix . 'hp-office3-text',
                'desc'  => 'Input text for Office 3.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Home Office 4 Image', 'textdomain' ),
				'id'       => $prefix . 'hp-office4-img',
                'desc'  => 'Input image for Office 4.',
				'type'     => 'file_advanced',
			),
			array(
				'name'     => __( 'Home Office 4 Text', 'textdomain' ),
				'id'       => $prefix . 'hp-office4-text',
                'desc'  => 'Input text for Office 4.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Home Office 5 Image', 'textdomain' ),
				'id'       => $prefix . 'hp-office5-img',
                'desc'  => 'Input image for Office 5.',
				'type'     => 'file_advanced',
			),
			array(
				'name'     => __( 'Home Office 5 Text', 'textdomain' ),
				'id'       => $prefix . 'hp-office5-text',
                'desc'  => 'Input text for Office 5.',
				'type'     => 'wysiwyg',
			),
        )
    );

    /**
     * Footer Options 
    **/
    $meta_boxes[] = array(
        'id'         => 'footer-options',
        'title'      => __( 'Footer Options', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
		'include' => array(
			// With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
			'relation'        => 'AND',
			// List of page templates. Can be array or comma separated. Optional.
			'template'        => array( 'page-home.php' ),
		),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
				'name'     => __( 'About Us Links', 'textdomain' ),
				'id'       => $prefix . 'foot-about-us',
                'desc'  => 'Input links for About Us menu.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Services Links', 'textdomain' ),
				'id'       => $prefix . 'foot-services',
                'desc'  => 'Input links for Services menu.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Resources Links', 'textdomain' ),
				'id'       => $prefix . 'foot-resources',
                'desc'  => 'Input links for Resources menu.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Media Links', 'textdomain' ),
				'id'       => $prefix . 'foot-media',
                'desc'  => 'Input links for Media menu.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Community Links', 'textdomain' ),
				'id'       => $prefix . 'foot-community',
                'desc'  => 'Input links for Community menu.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Careers Links', 'textdomain' ),
				'id'       => $prefix . 'foot-careers',
                'desc'  => 'Input links for Careers menu.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Copyright Text', 'textdomain' ),
				'id'       => $prefix . 'foot-copyright',
                'desc'  => 'Input copyright text.',
				'type'     => 'text',
			),
        )
    );

    /**
     * Victim Assistance Options 
    **/
    $meta_boxes[] = array(
        'id'         => 'victim-assistance-options',
        'title'      => __( 'Victim Assistance', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
		'include' => array(
			// With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
			'relation'        => 'AND',
			// List of page templates. Can be array or comma separated. Optional.
			'template'        => array( 'page-agency-contact.php' ),
		),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
				'name'     => __( 'Charlotte County Text', 'textdomain' ),
				'id'       => $prefix . 'va-charlotte',
                'desc'  => 'Input text for Charlotte County tab.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Collier County Text', 'textdomain' ),
				'id'       => $prefix . 'va-collier',
                'desc'  => 'Input text for Collier County tab.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Hendry & Glades County Text', 'textdomain' ),
				'id'       => $prefix . 'va-hendry',
                'desc'  => 'Input text for Hendry & Glades County tab.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Lee County Text', 'textdomain' ),
				'id'       => $prefix . 'va-lee',
                'desc'  => 'Input text for Lee County tab.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Statewide Text', 'textdomain' ),
				'id'       => $prefix . 'va-statewide',
                'desc'  => 'Input text for Statewide tab.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Indian Reservation Text', 'textdomain' ),
				'id'       => $prefix . 'va-indian',
                'desc'  => 'Input text for Indian Reservation tab.',
				'type'     => 'wysiwyg',
			),
        )
    );

    /**
     * Worthless Check Program 
    **/
    $meta_boxes[] = array(
        'id'         => 'worthless-check-options',
        'title'      => __( 'Worthless Check Program', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
		'include' => array(
			// With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
			'relation'        => 'AND',
			// List of page templates. Can be array or comma separated. Optional.
			'template'        => array( 'page-worhtless-check-program.php' ),
		),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
				'name'     => __( 'Accordion 1 Title', 'textdomain' ),
				'id'       => $prefix . 'wc-accordion1-title',
                'desc'  => 'Input title for first accordion.',
				'type'     => 'text',
			),
			array(
				'name'     => __( 'Accordion 1 Text', 'textdomain' ),
				'id'       => $prefix . 'wc-accordion1-text',
                'desc'  => 'Input text for first accordion.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Accordion 2 Title', 'textdomain' ),
				'id'       => $prefix . 'wc-accordion2-title',
                'desc'  => 'Input title for second accordion.',
				'type'     => 'text',
			),
			array(
				'name'     => __( 'Accordion 2 Text', 'textdomain' ),
				'id'       => $prefix . 'wc-accordion2-text',
                'desc'  => 'Input text for second accordion.',
				'type'     => 'wysiwyg',
			),
        )
    );

    /**
     * Assistant State Attorney 
    **/
    $meta_boxes[] = array(
        'id'         => 'asst-state-attorney-options',
        'title'      => __( 'Assistant State Attorney', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
		'include' => array(
			// With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
			'relation'        => 'AND',
			// List of page templates. Can be array or comma separated. Optional.
			'template'        => array( 'page-asst-attorney.php' ),
		),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
				'name'     => __( 'Requirements Text', 'textdomain' ),
				'id'       => $prefix . 'asa-requirements',
                'desc'  => 'Input text for the requirements tab.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'How To Apply Text', 'textdomain' ),
				'id'       => $prefix . 'asa-apply',
                'desc'  => 'Input text for the how to apply tab.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Interview Text', 'textdomain' ),
				'id'       => $prefix . 'asa-interview',
                'desc'  => 'Input text for the interview tab.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Interview Dates', 'textdomain' ),
				'id'       => $prefix . 'asa-interview-dates',
                'desc'  => 'Input interview dates.',
				'type'     => 'wysiwyg',
			),
        )
    );

    /**
     * Non-Legal Volunteers 
    **/
    $meta_boxes[] = array(
        'id'         => 'nonLegal-volunteers-options',
        'title'      => __( 'Assistant State Attorney', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
		'include' => array(
			// With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
			'relation'        => 'AND',
			// List of page templates. Can be array or comma separated. Optional.
			'template'        => array( 'page-non-legal-volunteers.php' ),
		),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
				'name'     => __( 'Requirements Text', 'textdomain' ),
				'id'       => $prefix . 'nlv-requirements',
                'desc'  => 'Input text for the requirements tab.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'How To Apply Text', 'textdomain' ),
				'id'       => $prefix . 'nlv-apply',
                'desc'  => 'Input text for the how to apply tab.',
				'type'     => 'wysiwyg',
			),
        )
    );

    /**
     * Law Students 
    **/
    $meta_boxes[] = array(
        'id'         => 'law-students-options',
        'title'      => __( 'Law Students', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
		'include' => array(
			// With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
			'relation'        => 'AND',
			// List of page templates. Can be array or comma separated. Optional.
			'template'        => array( 'page-law-students.php' ),
		),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
        	array(
				'name'     => __( 'Certified Legal Interns Tab Text', 'textdomain' ),
				'id'       => $prefix . 'cli-text',
                'desc'  => 'Input text for the certified legal interns tab.',
				'type'     => 'wysiwyg',
			),
            array(
				'name'     => __( 'Certified Legal Interns Requirements Tab Text', 'textdomain' ),
				'id'       => $prefix . 'clir-requirements',
                'desc'  => 'Input text for the certified legal interns requirements tab.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Certified Legal Interns How To Apply Text', 'textdomain' ),
				'id'       => $prefix . 'clir-apply',
                'desc'  => 'Input text for the certified legal interns how to apply tab.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Externs Requirements Tab Text', 'textdomain' ),
				'id'       => $prefix . 'externs-requirements',
                'desc'  => 'Input text for the externs requirements tab.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Externs How To Apply Text', 'textdomain' ),
				'id'       => $prefix . 'externs-apply',
                'desc'  => 'Input text for the Externs how to apply tab.',
				'type'     => 'wysiwyg',
			),
        )
    );

    /**
     * Law Students Sidebar
    **/
    $meta_boxes[] = array(
        'id'         => 'law-students-sidebar',
        'title'      => __( 'Law Students Sidebar', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
		'include' => array(
			// With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
			'relation'        => 'AND',
			// List of page templates. Can be array or comma separated. Optional.
			'template'        => array( 'page-law-students.php' ),
		),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
        	array(
				'name'     => __( 'Sidebar Part 1', 'textdomain' ),
				'id'       => $prefix . 'law-sb-p1',
                'desc'  => 'Input text for part 1 of sidebar.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Sidebar Part 2', 'textdomain' ),
				'id'       => $prefix . 'law-sb-p2',
                'desc'  => 'Input text for part 2 of sidebar.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Sidebar Part 3', 'textdomain' ),
				'id'       => $prefix . 'law-sb-p3',
                'desc'  => 'Input text for part 3 of sidebar.',
				'type'     => 'wysiwyg',
			),
			array(
				'name'     => __( 'Sidebar Part 4', 'textdomain' ),
				'id'       => $prefix . 'law-sb-p4',
                'desc'  => 'Input text for part 4 of sidebar.',
				'type'     => 'wysiwyg',
			),
        )
    );
    
    /**
     * Events 
    **/
    $meta_boxes[] = array(
        'id'         => 'event-options',
        'title'      => __( 'Event Options', 'textdomain' ),
        'post_types' => array( 'event' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
				'name'     => __( 'Short Description', 'textdomain' ),
				'id'       => $prefix . 'event-sd',
                'desc'  => 'Input short description for the event. Limit 215 characters.',
				'type'     => 'textarea',
                'limit'      => 215,
                'limit_type' => 'character',
			),
            array(
                'name'     => __( 'Event Date', 'textdomain' ),
                'id'       => $prefix . 'event-date',
                'desc'  => 'Select date for event',
                'type'     => 'date',
                'timestamp' => true,
                array(
				    'js_options' => array(
				        'dateFormat'      => 'dd-mm-yy',
				    ),
				    'save_format' => 'Y-m-d',
				),
            ),
        )
    );
    
    return $meta_boxes;
}