<?php
 
class MallTableSeeder extends Seeder {
 
  public function run()
  {
    $mall = Mall::create(array(
      'name' => 'South City',
      'address_line1' => '375, Prince Anwar Shah Road',
      'address_line2' => 'South City, South City Complex, Tollygunge',
      'address_city' => 'Kolkata',
      'address_state' => 'West Bengal',
      'address_pin' => '700032',
      'latitude' => '22.500623',
      'longitude' => '88.361094',
      'url' => 'http://southcitymall.in/'
    ));
  }
 
}