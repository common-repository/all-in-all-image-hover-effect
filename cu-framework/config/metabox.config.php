<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Image hover Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'aaihe_options',
  'title'     => 'Hover Effect Options <a href="http://coderunions.net/image-hover/">Check all Effects demo</a>',
  'post_type' => 'aaihe_images_hovers',
  'context'   => 'normal',
  'priority'  => 'default',
  
  'sections'  => array(

 
  // begin: a section
    array(
      'name'  => 'add_your_content',
      'title' => 'Content',
      'icon'  => 'fa fa-tint',
	  
	  
      'fields' => array(

	   array(
          'id'              => 'option',
          'type'            => 'group',
          'title'           => '',
          //'dependency'   => array( 'style_circle', '==', 'true' ),
          'button_title'    => 'Add New Hover Item',
          'accordion_title' => 'Hover Item',
          'fields'          => array(
          
	  
	    array(
          'id'      => 'add_hover_image',
          'type'    => 'image',
          'title'   => 'Add hover image',
         ),
		array(
          'id'      => 'add_heading_text',
          'type'    => 'text',
          'title'   => 'Add heading text',
		),
       array(
          'id'      => 'add_button_text',
          'type'    => 'text',
          'title'   => 'Add button text',
        ),
      array(
          'id'      => 'add_button_link',
          'type'    => 'text',
          'title'   => 'Add button link',
        ),		
      ),
    ),
  ),
  ),
    // end: a section

  
    // begin: a section
    array(
      'name'  => 'background',
      'title' => 'Background',
      'icon'  => 'fa fa-cog',

      // begin: fields
      'fields' => array(

        // begin: a field
        array(
          'id'    => 'image_background_color',
          'type'  => 'color_picker',
          'title' => 'Background Color', 
        ),

      ), // end: fields
    ), // end: a section
	
	
	
	/*    // begin: a section
    array(
      'name'  => 'button',
      'title' => ' Button',
      'icon'  => 'fa fa-cog',

      // begin: fields
      'fields' => array(

        // begin: a field
        array(
          'id'    => 'button_size',
          'type'  => 'number',
          'title' => 'Button Size', 
        ),

      ), // end: fields
    ), // end: a section */
	
	
	
	// begin: a section
    array(
      'name'  => 'heading_options',
      'title' => 'Heading Typography',
      'icon'  => 'fa fa-tint',
      'fields' => array(

	  
        array(
          'id'      => 'heading_font_size',
          'type'    => 'number',
          'title'   => 'Heading Font Size',
        ),
		
        array(
          'id'      => 'heading_color',
          'type'    => 'color_picker',
          'title'   => 'Heading Color',
          'default' => '#2ecc71',
        ),

		
        array(
          'id'      => 'heading_font_family',
          'type'    => 'text',
          'title'   => 'Heading Font Family',

          
        ),
 		
        array(
          'id'      => 'heading_letter_spacing',
          'type'    => 'text',
          'title'   => 'Heading Letter Spacing',

          
        ),
 

        array(
		  'id'       => 'heading_font_weight',
		  'type'     => 'select',
		  'title'    => 'Heading Font Weight',
		  'options'  => array(
    '100'     => '100',
    '200'     => '200',
    '300'     => '300',
    '400'     => '400',
    '500'     => '500',
    '600'     => '600',
    '700'     => '700',
    '800'     => '800',
    '900'     => '900',
		  ),
		  'default'  => '700',
		),
		
		



      ),
    ),
    // end: a section
	
		// begin: a section
    array(
      'name'  => 'Button_options',
      'title' => 'Button Typography',
      'icon'  => 'fa fa-tint',
      'fields' => array(

	  
        array(
          'id'      => 'button_font_size',
          'type'    => 'number',
          'title'   => 'Button Font Size',
        ),
		
        array(
          'id'      => 'button_color',
          'type'    => 'color_picker',
          'title'   => 'Button Color',
          'default' => '#2ecc71',
        ),

		
        array(
          'id'      => 'button_font_family',
          'type'    => 'text',
          'title'   => 'Button Font Family',

          
        ),
 		
        array(
          'id'      => 'button_letter_spacing',
          'type'    => 'text',
          'title'   => 'Button Letter Spacing',

          
        ),
 

        array(
		  'id'       => 'button_font_weight',
		  'type'     => 'select',
		  'title'    => 'Font Weight',
		  'options'  => array(
    '100'     => '100',
    '200'     => '200',
    '300'     => '300',
    '400'     => '400',
    '500'     => '500',
    '600'     => '600',
    '700'     => '700',
    '800'     => '800',
    '900'     => '900',
		  ),
		  'default'  => '700',
		),
		
		       array(
          'id'      => 'button_text_spacing',
          'type'    => 'text',
          'title'   => 'Button text Spacing',

        ),
		
				       array(
          'id'      => 'button_border_size',
          'type'     => 'select',
          'title'   => 'Button Border',
		  		  'options'  => array(
    '1'     => '1',
    '2'     => '2',
    '3'     => '3',
    '4'     => '4',
    '5'     => '5',
    '6'     => '6',
    '7'     => '7',
    '8'     => '8',
    '9'     => '9',
    '10'     => '10',
		  ),
		  'default'  => '1',

        ),
		

				       array(
          'id'      => 'button_border_style',
          'type'     => 'select',
          'title'   => 'Button Border',
		  		  'options'  => array(
    'none'     => 'none',
    'solid'     => 'solid',
    'double'     => 'double',
    'dotted'     => 'dotted',
    'dashed'     => 'dashed',
		  ),
		  'default'  => 'none',

        ),
		
		        array(
          'id'      => 'button_border_color',
          'type'    => 'color_picker',
          'title'   => 'Button Border Color',
          'default' => '#2ecc71',
        ),



      ),
    ),
    // end: a section
	
// begin: a section
    array(
      'name'  => 'effects',
      'title' => 'Effects',
      'icon'  => 'fa fa-tint',
      'fields' => array(

	array(
		'id'       => 'effects_id',
		'type'     => 'select',
		'title'    => 'Select Effect',
		'options'  => array(
			'lily'  => 'lily',
			'sadie'   => 'sadie',
			'honey' => 'honey',
			'layla' => 'layla',
			'zoe' => 'zoe',
			'oscar' => 'oscar',
			'marley' => 'marley',
			'ruby' => 'ruby',
			'roxy' => 'roxy',
			'bubba' => 'bubba',
			'Romeo' => 'Romeo',
			'roxy' => 'roxy',
			'dexter' => 'dexter',
			'sarah' => 'sarah',
			'chico' => 'chico',
			'milo' => 'milo',
			'chico' => 'chico',
			'julia' => 'julia',
			'goliath' => 'goliath',
			'hera' => 'hera',
			'winston' => 'winston',
			'selena' => 'selena',
			'terry' => 'terry',
			'phoebe' => 'phoebe',
			'apollo' => 'apollo',
			'kira' => 'kira',
			'steve' => 'steve',
			'moses' => 'moses',
			'jazz' => 'jazz',
			'ming' => 'ming',
			'lexi' => 'lexi',
			'duke' => 'duke',
			'washington' => 'washington',
			'vanBuren' => 'vanBuren',
			'jackson' => 'jackson',
			'cobbles' => 'cobbles',
			'madison' => 'madison',
			'adams' => 'adams',
			'jefferson' => 'jefferson',
			'carter' => 'carter',
			'monroe' => 'monroe',
			'wilbert' => 'wilbert',
			'praia' => 'praia',
			'brasilia' => 'brasilia',
			'oslo' => 'oslo',
			'caracas' => 'caracas',
			'male' => 'male',
			'camberra' => 'camberra',
			'malabo' => 'malabo',

			

		),
		'default'  => 'lily',
),

array(
  'type'    => 'notice',
  'class'   => 'success',
  'content' => '<a href="http://coderunions.net/image-hover/">Check all Effects demo</a>',
),


      ),
    ),
    // end: a section
	

	
	
	
	
	// begin: a section
    array(
      'name'  => 'image',
      'title' => 'Image Options',
      'icon'  => 'fa fa-tint',
      'fields' => array(

        array(
          'id'      => 'image_width',
          'type'    => 'number',
          'title'   => 'Image Width',

        ),
		
		
        array(
          'id'      => 'image_height',
          'type'    => 'number',
          'title'   => 'Image Height',

        ),

      ),
    ),
    // end: a section
  ),
);





CSFramework_Metabox::instance( $options );
