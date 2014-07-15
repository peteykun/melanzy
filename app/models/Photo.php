<?php

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Photo extends \Eloquent implements StaplerableInterface
{
  use EloquentTrait;

  protected $fillable = ['file'];

  public function __construct(array $attributes = array())
  {
    $this->hasAttachedFile('file', ['styles' => [
      'small'   => '250x250',
      'medium'  => '512x512',
      'large'   => '1024x1024'
    ]]);

    parent::__construct($attributes);
  }
  
  public function imageable()
  {
    return $this->morphTo();
  }
}