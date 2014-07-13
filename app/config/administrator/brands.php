<?php

/**
 * Brands model config
 */

return array(

  'title' => 'Brands',

  'single' => 'brand',

  'model' => 'Brand',

  /**
   * The display columns
   */
  'columns' => array(
    'id',
    'name' => array(
      'title' => 'Name'
    ),
    'url' => array(
      'title' => 'Site URL',
      'output' => '<a href="(:value)" target="_blank">(:value)</a>'
    ),
    'logo' => array(
      'title' => 'Logo',
      'output' => '<img src="/uploads/brand_logos/small/(:value)" />',
    )
  ),

  /**
   * The filter set
   */
  'filters' => array(
    'id',
    'name' => array(
      'title' => 'Name'
    ),
    'url' => array(
      'title' => 'Site URL'
    ),
  ),

  /**
   * The editable fields
   */
  'edit_fields' => array(
    'name' => array(
      'title' => 'Name'
    ),
    'url' => array(
      'title' => 'Site URL'
    ),
    'logo' => array(
      'title'       => 'Logo',
      'type'        => 'image',
      'naming'      => 'random',
      'location'    => public_path() . '/uploads/brand_logos/originals/',
      'size_limit'  => 2,
      'sizes'       => array(
        array(100, 100, 'auto', public_path() . '/uploads/brand_logos/small/', 100),
        array(250, 250, 'auto', public_path() . '/uploads/brand_logos/medium/', 100),
        array(500, 500, 'auto', public_path() . '/uploads/brand_logos/large/', 100),
      )
    ),
  ),

);