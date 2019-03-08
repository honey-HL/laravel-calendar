<?php

namespace App\Http\Controllers\EventsList;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventsListController extends Controller
{

     // 关联表
     protected $table = 'event_table';

    public function events_add(Request $request) 
    {
        $type = $request::get('type');
        $location = $request::get('location');
        $start_time = $request::get('startTime');
        // $start_time = date('Y-m-d H:i:s', $start_time);
        $end_time = $request::get('endTime');
        // $end_time = date('Y-m-d H:i:s', $end_time);
        $cost =  $request::get('cost');
        $content =  $request::get('content');

        $events = $this;
        $events -> type = $type;
        $events -> location = $location;
        $events -> start_time = $start_time;
        $events -> end_time = $end_time;
        $events -> cost = $cost;
        $events -> content = $content;
        if ($events->save())
            return ['status'=>200,'id'=> $events -> id];
        else return['status'=>0,'msg'=>' insert failed'];

        return 1;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
