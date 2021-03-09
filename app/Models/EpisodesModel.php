<?php

namespace App\Models;

use App\SeasonsModel;
use Illuminate\Database\Eloquent\Model;

class EpisodesModel extends Model
{
    public function season()
    {
        return $this->belongsTo(SeasonsModel::class);
    }
}
