<?php
 
class PhotoTableSeeder extends Seeder {
 
  public function run()
  {
    $brand = Photo::create(array(
      'caption_title' => 'Who\'s that \'mon?',
      'caption_description' => 'It\'s Greninja!',
      'file' => '2gZBmtUdtGlRxnaWJEcLKvE80KbVDRHy.jpg'
    ));
  }
 
}