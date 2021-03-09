<?php

namespace App\Repositories;

use App\Models\SeriesModel;
use Carbon\Carbon;

class SeriesRepository
{

    /**
     * @var SeriesModel $seriesModel
     */
    private $_seriesModel;

    /**
     * SeriesRepository constructor.s
     */
    public function __construct(SeriesModel $seriesModel)
    {
        $this->_seriesModel = $seriesModel;
    }

    public function list()
    {
        return $this->_seriesModel->all();
    }

    public function insert(string $seriesName)
    {
        $series = app(SeriesModel::class);

        return $series->create([
            'name' => $seriesName,
            'created_at' => Carbon::now()
        ]);
    }

    public function delete(int $id)
    {
        $series = app(SeriesModel::class);

        return $series->destroy($id);
    }
}
