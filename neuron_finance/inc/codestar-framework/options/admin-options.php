<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_framework';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'My Framework',
    'menu_slug'  => 'my-framework',
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Homepage Content',
    'fields' => array(
        array(
            'id'     => 'opt-fieldset-1',
            'type'   => 'fieldset',
            'title'  => 'About Section',
            'fields' => array(
                //
                // A text field
                array(
                    'id'    => 'about-title',
                    'type'  => 'text',
                    'title' => 'About Title',
                ),
                //
                // A text field
                array(
                    'id'    => 'about-content',
                    'type'  => 'textarea',
                    'title' => 'About Content',
                ),
            ),
        ),

        array(
            'id'     => 'opt-fieldset-2',
            'type'   => 'fieldset',
            'title'  => 'Main Section',
            'fields' => array(
                //
                // A text field
                array(
                    'id'    => 'main-title',
                    'type'  => 'text',
                    'title' => 'Main Title',
                ),
                //
                // A text field
                array(
                    'id'    => 'main-content',
                    'type'  => 'textarea',
                    'title' => 'Main Content',
                ),

                array(
                    'id'           => 'opt-upload-2',
                    'type'         => 'upload',
                    'title'        => 'Upload',
                    'preview'      =>  true,
                    'library'      => 'image',
                    'placeholder'  => 'http://',
                    'button_title' => 'Add Image',
                    'remove_title' => 'Remove Image',
                  ),                                    
            ),
        ),

        array(
            'id'     => 'opt-fieldset-3',
            'type'   => 'fieldset',
            'title'  => 'Service Section',
            'fields' => array(
                //
                // A text field
                array(
                    'id'    => 'service-title',
                    'type'  => 'text',
                    'title' => 'Service Title',
                ),
                //
                // A text field
                array(
                    'id'    => 'service-content',
                    'type'  => 'textarea',
                    'title' => 'Service Content',
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
