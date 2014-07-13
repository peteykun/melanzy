<?php

/**
 * Photos model config
 */

return array(

  'title' => 'Photos',

  'single' => 'photo',

  'model' => 'Photo',

  /**
   * The display columns
   */
  'columns' => array(
    'id',
    'caption_title' => array(
      'title' => 'Caption (Title)'
    ),
    'file' => array(
      'title' => 'Image File',
      'output' => '<img src="/uploads/photos/small/(:value)" />',
    ),
  ),

  /**
   * The filter set
   */
  'filters' => array(
    'id',
    'caption_title' => array(
      'title' => 'Caption (Title)'
    ),
  ),

  /**
   * The editable fields
   */
  'edit_fields' => array(
    'caption_title' => array(
      'title' => 'Caption (Title)'
    ),
    'caption_description' => array(
      'title' => 'Caption (Description)',
      'type' => 'textarea'
    ),
    'file' => array(
      'title'       => 'Image File',
      'type'        => 'image',
      'naming'      => 'random',
      'location'    => public_path() . '/uploads/photos/originals/',
      'size_limit'  => 2,
      'sizes'       => array(
        array(256, 256, 'auto', public_path() . '/uploads/photos/small/', 100),
        array(512, 512, 'auto', public_path() . '/uploads/photos/medium/', 100),
        array(1024, 1024, 'auto', public_path() . '/uploads/photos/large/', 100),
      )
    ),
  ),

);