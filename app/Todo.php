<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todo';
    protected $primaryKey = 'id';
    protected $fillable = ['judul', 'isi'];
    public $timestamps = true;
}
