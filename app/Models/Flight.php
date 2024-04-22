<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table='my-flight';
    protected $guarded=['id'];
    protected $fillable= [
        'name',
        'email',
        'password',
    ];
    protected $primarykey= 'flight-id';
    public $incrementing= false;
    public $timestamps= false;
    const CREATED_AT= 'creation-date';

    protected $attribute= [
        'name'=>'null',
    ];
}
