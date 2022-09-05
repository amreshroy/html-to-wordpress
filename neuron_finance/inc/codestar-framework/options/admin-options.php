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
    'title'  => 'Home Page Content',
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

        array(
            'id'     => 'opt-fieldset-about-page',
            'type'   => 'fieldset',
            'title'  => 'About Section',
            'fields' => array(

                array(
                    'id'      => 'opt-switcher-about-page',
                    'type'    => 'switcher',
                    'title'   => 'Hide Section',
                    'label'   => 'Do you want to hide this section ?',
                    'default' => false
                ),
            ),
        ),

        array(
          'id'     => 'opt-fieldset-about-faqs',
          'type'   => 'fieldset',
          'title'  => 'FAQs Section',
          'fields' => array(

            array(
              'id'        => 'faqs',
              'type'      => 'group',
              'title'     => 'All FAQs',
              'fields'    => array(
                    array(
                      'id'    => 'faq-title-text',
                      'type'  => 'text',
                      'title' => 'Faqs Title',
                    ),
                    array(
                      'id'    => 'faq-content-text',
                      'type'  => 'textarea',
                      'title' => 'Faqs Content',
                    ),
                  ),
                ),
              ),
          ),

        array(
          'id'     => 'opt-fieldset-about-faqs-right',
          'type'   => 'fieldset',
          'title'  => 'FAQs Right Section',
          'fields' => array(

                array(
                  'id'    => 'faq-right-title-text',
                  'type'  => 'text',
                  'title' => 'Title',
                ),
                array(
                  'id'    => 'faq-right-content-text',
                  'type'  => 'textarea',
                  'title' => 'Content',
                ),
            ),
        )
      ),
  ));

    //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Client Logos',
    'fields' => array(
      array(
        'id'          => 'opt-client-brand',
        'type'        => 'gallery',
        'title'       => 'Gallery',
        'add_title'   => 'Add Images',
        'edit_title'  => 'Edit Images',
        'clear_title' => 'Remove Images',
      ),
    ),
  )); 

  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Header Top Bar',
    'fields' => array(

      array(
        'id'     => 'opt-fieldset-top-bar-mobile',
        'type'   => 'fieldset',
        'title'  => 'Mobile',
        'fields' => array(

          array(
            'id'    => 'opt-icon-mobile',
            'type'  => 'icon',
            'title' => 'Icon',
          ),

          array(
            'id'      => 'opt-top-bar-mobile-no',
            'type'    => 'text',
            'title'   => 'Mobile No',
          ),

          array(
            'id'    => 'opt-mobile-link',
            'type'  => 'link',
            'title' => 'Link',
          ),
        ),
      ),
      
      array(
        'id'     => 'opt-fieldset-top-bar-email',
        'type'   => 'fieldset',
        'title'  => 'Email',
        'fields' => array(

          array(
            'id'    => 'opt-icon-email',
            'type'  => 'icon',
            'title' => 'Icon',
          ),

          array(
            'id'      => 'opt-top-bar-email',
            'type'    => 'text',
            'title'   => 'Email',
          ),

          array(
            'id'    => 'opt-email-link',
            'type'  => 'link',
            'title' => 'Link',
          ),
        ),
      ),
      
      array(
        'id'     => 'opt-fieldset-social-icon',
        'type'   => 'fieldset',
        'title'  => 'Social Profile',
        'fields' => array(

          array(
            'id'        => 'opt-group-top-bar',
            'type'      => 'group',
            'title'     => 'Add Profile',
            'fields'    => array(
              array(
                'id'    => 'opt-icon',
                'type'  => 'icon',
                'title' => 'Icon',
              ),

              array(
                'id'    => 'opt-link',
                'type'  => 'link',
                'title' => 'Link',
              ),
            ),
          ),
        ),
      ),
    ),
  ));
}
