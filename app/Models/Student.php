<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [ 'key', 'name', 'mail', 'password', 'status', 'group_id' ];

    protected $attributes = [
        'status' => true
    ];

    public function group(){
        return $this->belongsTo( Group::class );
    }

}