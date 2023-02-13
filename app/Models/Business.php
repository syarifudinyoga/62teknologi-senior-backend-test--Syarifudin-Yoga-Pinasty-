<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Business extends Model
{
    use HasFactory;

    protected $table = 'business';
    protected $fillable = ['location',
                            'latitude',
                            'longitude',
                            'term',
                            'radius',
                            'categories',
                            'locale',
                            'price',
                            'review_count',
                            'rating',
                            'open_now',
                            'open_at',
                            'attributes',
                            'device_platform',
                            'reservation_date',
                            'reservation_time',
                            'reservation_covers'];

    protected $casts = [
        'categories' => 'array',
        'attributes' => 'array'
    ];

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot(){
        parent::boot();

        static::creating(function($model){
            if(empty($model->id)){
                $model->id = Str::uuid();
            }
        });
    }
}
