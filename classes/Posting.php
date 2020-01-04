<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Posting extends Eloquent
{
   protected $table = 'posting_kerjaan';
   protected $fillable = [
       'title', 'content', 'id_user',
   ];
}