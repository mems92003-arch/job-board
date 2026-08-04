<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     protected $primaryKey = 'id';

    protected $KeyType = 'string';

    public $incremernting = false ;
    protected $table = 'tag';
    
    protected $fillable = ['title'];

    protected $guarded = ['id'];


    public function posts () {
        return $this->belongsToMany(Post::class);
    }
    
}
