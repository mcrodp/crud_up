<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelo extends Model
{
   protected $fillable =["title","content"]; //nilalagay to para hindi magkaError yung pagcreate natin ng associative array natin sa modeloController natin.
   
}
