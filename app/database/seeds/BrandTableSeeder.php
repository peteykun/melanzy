<?php
 
class BrandTableSeeder extends Seeder {
 
  public function run()
  {
    $brand = Brand::create(array(
      'name' => 'Nike',
      'url' => 'http://nike.com/',
    ));
  }
 
}