<?php

namespace App;

use App\Models\EpisodesModel;
use App\Models\SeriesModel;
use Illuminate\Database\Eloquent\Model;

class SeasonsModel extends Model
{
    public function episodes()
    {
        return $this->hasMany(EpisodesModel::class);
    }

    public function serie()
    {
        return $this->belongsTo(SeriesModel::class);
    }
}
