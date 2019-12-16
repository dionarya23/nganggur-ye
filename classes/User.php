<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
  
   protected $fillable = [
       'nama', 'email', 'jenis_kelamin', 'fb_id', 'foto', 'type_user'
   ];
}