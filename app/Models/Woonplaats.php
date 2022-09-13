<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Woonplaats extends Model
{
    protected $table = 'Woonplaatsen';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'surname', 'home', 'travel'];
}