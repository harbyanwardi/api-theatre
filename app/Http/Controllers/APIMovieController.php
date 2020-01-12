<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use Validator;
use DB;

class APIMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = Movies::all();
        return response()->json(['data'=>$movie]);
    }

   
    public function getmovies(Request $request)
    {

    $validate = $this->validate($request, [
            'title'      => 'required',
            'date'       => 'required',
        ]);

       

    $getData = DB::table('table_movies')
        ->leftJoin('schedules', 'table_movies.id', '=', 'schedules.id_film')
        ->leftJoin('studio', 'studio.id', '=', 'schedules.id_studio')
        ->select('table_movies.title','table_movies.categories','table_movies.duration','schedules.date', 'schedules.start_time','schedules.end_time','studio.studio_name')
        ->where('table_movies.title',$request->title)
        ->where('schedules.date', $request->date)
        ->get();

        if($getData ){
                return response()->json($getData,200);
            }
            else{
                
                return response()->json([
                    'error' => ['message' => 'Data Not Found']
                ], 404);  
        }

    }

   

    public function getMoviesToday()
    {

    
       
    $today = date('Y-m-d');
    $getData = DB::table('table_movies')
        ->leftJoin('schedules', 'table_movies.id', '=', 'schedules.id_film')
        ->leftJoin('studio', 'studio.id', '=', 'schedules.id_studio')
        ->leftJoin('ticket', 'schedules.id', '=', 'ticket.id_schedule')
        ->select('table_movies.title','table_movies.categories','table_movies.duration','schedules.date', 'schedules.start_time','ticket.price')
        
        ->where('schedules.date', $today)
        ->groupBy('schedules.id')
        ->get();

        if($getData ){
                if((sizeof($getData) == 0)){
                    return response()->json([
                        'error' => ['message' => 'Data is empty']
                    ], 404); 
                }   
                else{
                    return response()->json($getData,200);
                }         
                
            }
            else{
                
                return response()->json([
                    'error' => ['message' => 'Data Not Found']
                ], 404);  
        }

    }

    public function getseat(Request $request)
    {

    $validate = $this->validate($request, [
            'title'      => 'required',
            'date'       => 'required',
            'start_time' => 'required',
        ]);

       

    $getData = DB::table('table_movies')
        ->leftJoin('schedules', 'table_movies.id', '=', 'schedules.id_film')
        ->leftJoin('studio', 'studio.id', '=', 'schedules.id_studio')
        ->leftJoin('seat', 'studio.id', '=', 'seat.id_studio')
        ->select('table_movies.title','schedules.date', 'schedules.start_time','schedules.end_time','studio.studio_name','seat.seat_no','seat.status')
        ->where('table_movies.title',$request->title)
        ->where('schedules.date', $request->date)
        ->where('schedules.start_time', $request->start_time)
        ->get();

        if($getData ){
                return response()->json($getData,200);
            }
            else{
                
                return response()->json([
                    'error' => ['message' => 'Data Not Found']
                ], 404);  
        }

    }

    public function getPriceTicket(Request $request)
    {

    $validate = $this->validate($request, [
            'date'       => 'required',
        ]);

       

    $getData = DB::table('table_movies')
        ->leftJoin('schedules', 'table_movies.id', '=', 'schedules.id_film')
        ->leftJoin('studio', 'studio.id', '=', 'schedules.id_studio')
        ->leftJoin('ticket', 'schedules.id', '=', 'ticket.id_schedule')
        ->select('table_movies.title','table_movies.categories','schedules.date','ticket.price')
        ->where('schedules.date', $request->date)
        ->groupBy('table_movies.id')
        ->get();

        if($getData ){
                return response()->json($getData,200);
            }
            else{
                
                return response()->json([
                    'error' => ['message' => 'Data Not Found']
                ], 404);  
        }

    }

    public function getPriceTicketToday(Request $request)
    {

    $today = date('Y-m-d');

    $getData = DB::table('table_movies')
        ->leftJoin('schedules', 'table_movies.id', '=', 'schedules.id_film')
        ->leftJoin('studio', 'studio.id', '=', 'schedules.id_studio')
        ->leftJoin('ticket', 'schedules.id', '=', 'ticket.id_schedule')
        ->select('table_movies.title','table_movies.categories','schedules.date','ticket.price')
        ->where('schedules.date', $today)
        ->groupBy('table_movies.id')
        ->get();

        if($getData ){
                if((sizeof($getData) == 0)){
                    return response()->json([
                        'error' => ['message' => 'Data is empty']
                    ], 404); 
                }   
                else{
                    return response()->json($getData,200);
                }      
            }
            else{
                
                return response()->json([
                    'error' => ['message' => 'Data Not Found']
                ], 404);  
        }

    }



  
    public function store(Request $request)
    {
        try{
           $movie = Movies::create($request->all());
           return response()->json(['success'=>true]);
        }catch(\Exception $e){
           return response()->json(['success'=>false,'eror'=>'eror'.$e]);
        }
    }

   
    public function update(Request $request, $id)
    {
       try{
           $movie = Movies::find($id);
           $data['title'] = $request->title;
           $data['categories'] = $request->categories;
           $data['duration'] = $request->duration;
           $movie->update($data);
           return response()->json(['success'=>true]);
        }catch(\Exception $e){
           return response()->json(['success'=>false,'eror'=>'eror'.$e]);
        }
    }

    
    public function destroy($id)
    {
        try{
           $movie = Movies::find($id);
           $movie->delete();
           return response()->json(['success'=>true]);
       }catch(\Exception $e){
           return response()->json(['success'=>false,'eror'=>'eror'.$e]);
       }
    }
}
