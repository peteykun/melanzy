<?php
 
class BrandTableSeeder extends Seeder {
 
  public function run()
  {
    $brand = Brand::create(array(
      'name' => 'Nike',
      'url' => 'http://nike.com/',
      'logo' => 'cb8Qk2WMlaZofbjpR0nTZ491eHG7QwZU.jpg'
    ));
  }
 
}