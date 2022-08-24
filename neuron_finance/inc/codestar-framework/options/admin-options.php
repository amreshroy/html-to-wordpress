<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_neuron';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'My Neuron',
    'menu_slug'  => 'my-neuron',
    'framework_title'    => 'Theme Options'
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Homepage Content',
    'fields' => array(

        array(
            'id'     => 'opt-fieldset-about',
            'type'   => 'fieldset',
            'title'  => 'About Section',
            'fields' => array(

                array(
                    'id'      => 'opt-switcher-about',
                    'type'    => 'switcher',
                    'title'   => 'Hide Section',
                    'label'   => 'Do you want to hide this section ?',
                    'default' => false
                  ), 
                //
                // A text field with dependency
                array(
                    'id'    => 'about-title',
                    'type'  => 'text',
                    'title' => 'About Title',
                    'dependency' => array( 'opt-switcher-about', '==', 'false' ) // check for true/false by field id
                ),

                array(
                    'id'    => 'about-content',
                    'type'  => 'wp_editor',
                    'title' => 'About Content',
                    'height'        => '150px',
                    'tinymce'       => true,
                    'quicktags'     => true,
                    'media_buttons' => false,
                    'dependency' => array( 'opt-switcher-about', '==', 'false' ) // check for true/false by field id
                  ),                 
            ),
        ),

        array(
            'id'     => 'opt-fieldset-main',
            'type'   => 'fieldset',
            'title'  => 'Main Section',
            'fields' => array(

                array(
                    'id'      => 'opt-switcher-main',
                    'type'    => 'switcher',
                    'title'   => 'Hide Section',
                    'label'   => 'Do you want to hide this section ?',
                    'default' => false
                  ),
                //
                // A text field
                array(
                    'id'    => 'main-title',
                    'type'  => 'text',
                    'title' => 'Main Title',
                    'dependency' => array( 'opt-switcher-main', '==', 'false' ) // check for true/false by field id
                ),

                array(
                    'id'    => 'main-content',
                    'type'  => 'wp_editor',
                    'title' => 'Main Content',
                    'height'        => '150px',
                    'tinymce'       => true,
                    'quicktags'     => true,
                    'media_buttons' => false,
                    'dependency' => array( 'opt-switcher-main', '==', 'false' ) // check for true/false by field id
                  ),

                array(
                    'id'           => 'opt-upload-main',
                    'type'         => 'upload',
                    'title'        => 'Upload',
                    'preview'      =>  true,
                    'library'      => 'image',
                    'placeholder'  => 'http://',
                    'button_title' => 'Add Image',
                    'remove_title' => 'Remove Image',
                    'dependency' => array( 'opt-switcher-main', '==', 'false' ) // check for true/false by field id
                  ),                                    
            ),
        ),

        array(
            'id'     => 'opt-fieldset-service',
            'type'   => 'fieldset',
            'title'  => 'Service Section',
            'fields' => array(
                
                array(
                    'id'      => 'opt-switcher-service',
                    'type'    => 'switcher',
                    'title'   => 'Hide Section',
                    'label'   => 'Do you want to hide this section ?',
                    'default' => false
                  ),
                //
                // A text field
                array(
                    'id'    => 'service-title',
                    'type'  => 'text',
                    'title' => 'Service Title',
                    'dependency' => array( 'opt-switcher-service', '==', 'false' ) // check for true/false by field id
                 ),

                array(
                    'id'    => 'service-content',
                    'type'  => 'wp_editor',
                    'title' => 'Service Content',
                    'height'        => '150px',
                    'tinymce'       => true,
                    'quicktags'     => true,
                    'media_buttons' => false,
                    'dependency' => array( 'opt-switcher-service', '==', 'false' ) // check for true/false by field id
                 ),                  
            ),
        ),
    ),
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'About Page Content',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}
