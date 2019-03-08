<?php

namespace App;
use Request;
use Hash;
use DB;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    // 关联表
    protected $table = 'event_table';

    public function events_update ()
    {   
        $id = Request::get('id');
        $type = Request::get('type');
        $location = Request::get('location');
        $start_time = Request::get('startTime');
        $end_time = Request::get('endTime');
        $cost =  Request::get('cost');
        $content =  Request::get('content');
        $date = Request::get('date');
        $is_range = Request::get('is_range');
        $isok = Events::where('id',$id)
            ->update([
            'type'=>$type,
            'location'=>$location,
            'start_time'=>$start_time,
            'end_time'=>$end_time,
            'cost'=>$cost,
            'content'=>$content,
            'date'=>$date,
            'is_range'=>$is_range
        ]);
        if ($isok)
            return ['status'=>200];
        else return['status'=>0,'msg'=>'update success!'];

        return 1;
    }

    public function events_add() 
    {
        $type = Request::get('type');
        $location = Request::get('location');
        $start_time = Request::get('startTime');
        // $start_time = date('Y-m-d H:i:s', $start_time);
        $end_time = Request::get('endTime');
        // $end_time = date('Y-m-d H:i:s', $end_time);
        $cost =  Request::get('cost');
        $content =  Request::get('content');
        $date = Request::get('date');
        $is_range = Request::get('is_range');

        $events = $this;
        $events -> type = $type;
        $events -> location = $location;
        $events -> start_time = $start_time;
        $events -> end_time = $end_time;
        $events -> content = $content;
        $events -> cost = $cost;
        $events -> date = $date;
        $events -> is_range = $is_range;
        if ($events->save())
            return ['status'=>200,'id'=> $events -> id];
        else return['status'=>0,'msg'=>' insert failed'];

        return 1;
    }

    public function events_list ()
    {
        $data = DB::select('select * from event_table');
        return response()->json(['data'=>$data]);
    }

    public function events_list_reverse ()
    {
        $data = DB::table("event_table")
                ->orderBy('date')
                ->get();
        return response()->json(['data'=>$data]);
    }

    public function events_search ()
    {
        $date = Request::get('date');
        $res = DB::table('event_table')->where('date', $date)->get();
        return response()->json(['data'=>$res]);
    }

    public function events_batch_addition ()
    {
        $list = Request::get('list');
        foreach($list as $item) {
            $data[] = [
                'type' => $item['type'],
                'start_time' => $item['start_time'],
                'end_time' => $item['end_time'],
                'location' => $item['location'],
                'content' => $item['content'],
                'date' => $item['date']
            ];
        }
        $result = Events::insert($data);
        if ($result)
            return ['status'=>200];
        else return['status'=>0,'msg'=>' insert failed'];

        return 1;
    }

    public function events_delete()
    {
        $id = Request::get('id');
        $result = Events::where('id', $id)->delete();
        if ($result)
            return ['status'=>200];
        else return['status'=>0,'msg'=>' delete failed'];

        return 1;
    }


}
