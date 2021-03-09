<?php

namespace App\Models;

use App\SeasonsModel;
use Illuminate\Database\Eloquent\Model;

class SeriesModel extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    protected $table = 'series';

    protected $fillable = ['id', 'name', 'created_at', 'updated_at'];

    public $timestamps = false;

    public function seasons()
    {
        return $this->hasMany(SeasonsModel::class);
    }
}
