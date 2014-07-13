<?php

/**
 * Malls model config
 */

return array(

  'title' => 'Malls',

  'single' => 'mall',

  'model' => 'Mall',

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
      'output' => '<img src="/uploads/mall_logos/small/(:value)" />',
    ),
    'location' => array(
      'title' => 'Location',
      'select' => "CONCAT((:table).latitude, ', ', (:table).longitude)",
      'output' => '<a href="https://www.google.com/maps?q=(:value)" target="_blank">(:value)</a>'
    ),
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
    'address_line1' => array(
      'title'      => 'Address (Line 1)'
    ),
    'address_line2' => array(
      'title'      => 'Address (Line 2)'
    ),
    'address_city' => array(
      'title'      => 'City'
    ),
    'address_state' => array(
      'title'      => 'State'
    ),
    'address_pin' => array(
      'title'      => 'PIN',
      'type'       => 'number'
    ),
    'latitude' => array(
      'title'      => 'Latitude'
    ),
    'longitude' => array(
      'title'      => 'Longitude'
    ),
    'logo' => array(
      'title'       => 'Logo',
      'type'        => 'image',
      'naming'      => 'random',
      'location'    => public_path() . '/uploads/mall_logos/originals/',
      'size_limit'  => 2,
      'sizes'       => array(
        array(100, 100, 'auto', public_path() . '/uploads/mall_logos/small/', 100),
        array(250, 250, 'auto', public_path() . '/uploads/mall_logos/medium/', 100),
        array(500, 500, 'auto', public_path() . '/uploads/mall_logos/large/', 100),
      )
    ),
    'url' => array(
      'title' => 'Site URL'
    ),
  ),

);