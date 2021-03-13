<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PotUser;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('pot_users')->pluck('User');
        foreach ($user as $post) {
            if ($post == Auth::user()->name) {
                return view('home');
                // foreach ($post as $childPost) {
                //     if ($childPost == Auth::user()->name) {
                //         echo $childPost;
                //         return view('regispot');
                //     }
                // }
            }
        }
        return view('regispot');

        // foreach ($user as $value) {
        //     $name = $value;
        // if (Auth::user()->name != $name) {
        //     return view('regispot');
        // } else {
        //     return view('home');
        // };
        // }




        //return view('home', compact('data'));
        // $data = DB::table('rawdata')->paginate(10);
        // return view('home', ['data' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function not()
    {
        return view('regispot');
    }
    public function dashboard()
    {
        //$data = DB::table('rawdata')->where('mac','30:AE:A4:99:A6:6C')->get();
        // return view('dashboard',['data'=>$data]);
        //return response()->json(['data'=> $data]);
        return view('dashboard');
    }
    public function chart()
    {
        return view('chart');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function light()
    // {
    //     $data = DB::table('rawdata')->where('mac', '30:AE:A4:99:A6:6C')->get();
    //     return view('dashboard.light', compact('data'));
    // }

    // public function DHT()
    // {
    //     return view('dashboard.DHT');
    // }

    // public function EC()
    // {
    //     return view('dashboard.EC');
    // }
    // public function Temp()
    // {
    //     return view('dashboard.Temp');
    // }

    public function create()
    {
        return view('potconfig.potcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Potname' => 'required',
            'Mac' => 'required',

        ]);
        PotUser::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('plant_data.plantshow');
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
    public function url_rawdata()
    {
        $n = Auth::user()->name;
        $y = DB::table('pot_users')->where('User' , $n )->get();
        foreach ($y as $post) {
           $i = $post->Mac;
        }
        $data = DB::table('rawdata')->where('mac', $i)->get();
        return response()->json($data);
        // $data = DB::table('rawdata')->where('mac', '30:AE:A4:99:8F:D8')->get();
        // return response()->json($data);
    }
    public function potuser()
    {
        $n = Auth::user()->name;
        $y = DB::table('pot_users')->where('User' , $n )->get();
        foreach ($y as $post) {
           $i = $post->Mac;
        }
        $data = DB::table('rawdata')->where('mac', $i)->get();

        
        return response()->json($data);
        //return view('potconfig.potcreate');


       
        // $light_time = DB::table('rawdata')->where('mac','30:AE:A4:99:A6:6C')->select('rawdata.light', 'rawdata.time_stamp')->get();
        // return response()->json($light_time);
    }
}
