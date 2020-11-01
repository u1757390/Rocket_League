<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rarity',
        'colour'
    ];

    protected $guarded = [];

    public function getPathAttribute () {
        return $this -> path ();
    }

    public function path ()
    {
        return '/cars/' . $this -> id;
    }

    public function img ()
    {
        return '/images/' . $this -> name . ".jpg";
    }

}
