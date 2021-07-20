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
                $dataPot = PotUser::where([['User', Auth::user()->name], ['status', 2]])->first();
                if (isset($dataPot)) {
                    //return response()->json('no');
                    return view('Payment');

                }
                return view('home');
            }
        }
         if (auth::user()->hasRole('developer')) {
            $pot_data = PotUser::all();
            return view('admin.admin', compact('pot_data'));
        }
        return view('regispot');

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
        return view('dashboard');
    }
    public function chart()
    {
        return view('chart');
    }
    public function admin()
    {
        $pot_data = PotUser::all();
        // return response()->json($pot_data);
        return view('admin.admin', compact('pot_data'));
    }
    public function avata()
    {
        $n = Auth::user()->name;
        $y = DB::table('pot_users')->where('User', $n)->get();
        foreach ($y as $post) {
            $i = $post->avata;
            return response()->json($i);
        } 
    }
    public function date_avata()
    {
        $n = Auth::user()->name;
        $y = DB::table('pot_users')->where('User', $n)->get();
        foreach ($y as $post) {
            $i = $post->created_at;
            return response()->json($i);
        } 
    }
    public function user_pot()
    {
        $n = Auth::user()->name;
        $y = DB::table('pot_users')->where('User', $n)->get();
        foreach ($y as $post) {
            $i = $post->PotName;
            return response()->json($i);
        } 
    }
    
    public function Payment()
    {
        return view('Payment');
    }

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
            'avata' => 'required',
        ]);
        PotUser::create($request->all());
        return redirect('home');
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
        $data_edit = PotUser::find($id);
        // dd($data);
        return view('admin.edit', compact(['data_edit']));
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
        $request->validate([
            'Potname' => 'required',
            'Mac' => 'required',

        ]);
        PotUser::find($id)->update($request->all());
        return redirect('/admin');
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
        $y = DB::table('pot_users')->where('User', $n)->get();
        foreach ($y as $post) {
            $i = $post->Mac;
        }
        $data = DB::table('rawdata')->where('mac', $i)->get();
        return response()->json($data);
    }
    public function potuser()
    {
        $n = Auth::user()->name;
        $y = DB::table('pot_users')->where('User', $n)->get();
        foreach ($y as $post) {
            $i = $post->Mac;
        }
        $data = DB::table('rawdata')->where('mac', $i)->get();
        return response()->json($data);
    }
}
