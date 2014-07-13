<?php
 
class StoreTableSeeder extends Seeder {
 
  public function run()
  {
    $mall = Store::create(array(
      'name' => 'Nike',
      'shop_number' => 'S 116',
      'floor' => '1st Floor',
      'mall_id' => Mall::where('name', '=', 'South City')->firstOrFail()->id,
    ));
  }
 
}