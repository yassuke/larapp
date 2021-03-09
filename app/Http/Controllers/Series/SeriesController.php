<?php

namespace App\Http\Controllers\Series;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SeriesFormRequest;
use App\Repositories\SeriesRepository;

class SeriesController extends Controller
{

    /**
     * Get instance of Series Repository
     *
     * @var SeriesRepository $seriesRepo
     */
    private $_seriesRepo;

    public function __construct(SeriesRepository $seriesRepository)
    {
        $this->_seriesRepo = $seriesRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $series = $this->_seriesRepo->list();

        $message = $request->session()->get('message');

        return view(
            'series.index',
            [
                'series' => $series,
                'message' => $message
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SeriesFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeriesFormRequest $request)
    {
        $seriesName = filter_var($request->seriesName, FILTER_SANITIZE_STRING);

        $series = $this->_seriesRepo->insert($seriesName);

        $request->session()->flash(
            'message',
            "Series {$seriesName} was created"
        );

        return redirect()->route('list_series');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $serieId = filter_var($request->id, FILTER_VALIDATE_INT);

        if ($serieId !== false)
        {
            $this->_seriesRepo->delete($serieId);
            $request->session()
                ->flash(
                    'message',
                    "Serie was removed!"
                );

            return redirect()->route('list_series');
        }
    }
}
