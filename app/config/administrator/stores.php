<?php

/**
 * Stores model config
 */

return array(

  'title' => 'Stores',

  'single' => 'store',

  'model' => 'Store',

  /**
   * The display columns
   */
  'columns' => array(
    'id',
    'name' => array(
      'title' => 'Name'
    ),
    'mall' => array(
      'title'        => 'Mall',
      'relationship' => 'mall',
      'select'       => '(:table).name'
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
    'mall' => array(
      'title'       => 'Mall',
      'type'        => 'relationship',
      'name_field'  => 'name'
    ),
  ),

  /**
   * The editable fields
   */
  'edit_fields' => array(
    'name' => array(
      'title' => 'Name'
    ),
    'shop_number' => array(
      'title' => 'Shop Number'
    ),
    'floor' => array(
      'title' => 'Floor'
    ),
    'mall' => array(
      'title'       => 'Mall',
      'type'        => 'relationship',
      'name_field'  => 'name'
    ),
    'brands' => array(
      'title'       => 'Brands',
      'type'        => 'relationship',
      'name_field'  => 'name'
    ),
    'photos' => array(
      'title'       => 'Photos',
      'type'        => 'relationship',
      'name_field'  => 'caption_title'
    ),
  ),

);