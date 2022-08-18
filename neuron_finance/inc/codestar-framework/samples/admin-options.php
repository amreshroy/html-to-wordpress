<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_neuron';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'Neuron Options',
    'menu_slug'  => 'neuron-options',
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Homepage Contents',
    'id'     => 'home-content',
    'fields' => array(
      array(
        'id'        => 'about-section',
        'type'      => 'group',
        'title'     => 'About Section',
        'fields'    => array(
          array(
            'id'    => 'about-title',
            'type'  => 'text',
            'title' => 'Title',
          ),
          array(
            'id'    => 'about-content',
            'type'  => 'textarea',
            'title' => 'Content',
          ),
        ),
      ),

    )
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'About Page Contents',
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
