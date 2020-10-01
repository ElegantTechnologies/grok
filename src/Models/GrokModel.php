<?php

namespace ElegantTechnologies\Grok\Models;

use Illuminate\Database\Eloquent\Model;

class GrokModel extends Model
{
    public $gaurded = [];// Defualt to no mass assignements
    public $fillable = ['name'];
    public $table = 'grok';

    public function getUpperCasedName() : string
    {
        return strtoupper($this->name);
    }
}
