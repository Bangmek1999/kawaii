<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\rank;

class RankController extends Controller
{
    public function index()
    {
        $users = rank::all();
        $n = Auth::user()->name;
        $userpot = DB::table('ranks')->pluck('username');
        foreach ($userpot as $post) {
            if ($post == Auth::user()->name) {
                $dataPot = rank::where([['username', Auth::user()->name], ['status', 2]])->first();
                $users = rank::all();
                $n = Auth::user()->name;
                $userpot = DB::table('ranks')->where('username', $n)->get();
                $posts = rank::orderBy('rank_point', 'DESC')->get();

                return view('rank.rank', compact('userpot', 'users','posts'));
            }
        }
        $posts = rank::orderBy('rank_point', 'DESC')->get();
        return view('rank.register', compact('users','posts'));
    }

    public function pot_user()
    {
        $userpot = DB::table('ranks')->pluck('username');
        foreach ($userpot as $post) {
            if ($post == Auth::user()->name) {
                $dataPot = rank::where([['username', Auth::user()->name], ['status', 2]])->first();
                $users = rank::all();
                $n = Auth::user()->name;
                $userpot = DB::table('ranks')->where('username', $n)->get();
                $posts = rank::orderBy('rank_point', 'DESC')->get();
                return view('rank.rank', compact('userpot', 'users','posts'));
                // return view('regis_rank');
            }
        }
    }

    public function edit($id)
    {
        $data_edit = rank::find($id);
        return view('rank.edit', compact(['data_edit']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required',
            'rank_point' => 'required',
            'potname' => 'required',
            'username' => 'required',
            'status' => 'required',

        ]);
        rank::find($id)->update($request->all());
        return redirect('/rank');
    }

    public function save(Request $request)
    {
        // print_r($request->input());
        $rank = new rank;
        $rank->text = $request->text;
        $rank->rank_point = $request->rank_point;
        $rank->potname = $request->potname;
        $rank->username = $request->username;
        $rank->status = $request->status;
        $rank->save();
        return redirect('rank');
    }
}
