<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // Fare in modo tale che l'indirizzo corrispondente al post singolo termini con lo Slug
  // del post stesso
    public function getRouteKeyName()
    {
      return 'slug';
    }
}
