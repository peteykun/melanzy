<?php

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Mall extends \Eloquent implements StaplerableInterface
{
  use EloquentTrait;

	protected $fillable = ['logo'];

  public function __construct(array $attributes = array())
  {
    $this->hasAttachedFile('logo', ['styles' => [
      'small'   => '100x100',
      'medium'  => '250x250',
      'large'   => '512x512'
    ]]);

    parent::__construct($attributes);
  }

  public function stores()
  {
    return $this->hasMany('Store');
  }
}