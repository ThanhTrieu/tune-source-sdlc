<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostSongRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    public function index()
    {
        $allSong = DB::table('song')->get();
        return view("song.index",['songs' => $allSong]);
    }

    public function create()
    {
        $categories = Category::all();
        return view("song.add", ['categories' => $categories]);
    }

    public function handleCreate(StorePostSongRequest $request)
    {
        // tien hanh upload file
        $nameFile = null;
        $upload = null;
        if($request->hasFile('source')){
            $nameFile = $request->source->getClientOriginalName();
            if($request->file('source')->isValid()){
                // file ko co loi
                $upload = $request->file('source')->move('uploads/songs',$nameFile);
            }
        }
        $namePoster = null;
        if($request->hasFile('poster_music')){
            $namePoster = $request->poster_music->getClientOriginalName();
            if($request->file('poster_music')->isValid()){
                // file ko co loi
                $request->file('poster_music')->move('uploads/images',$namePoster);
            }
        }

        $insert = DB::table('song')->insert([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'lyric' => $request->lyric,
            'poster_music' => $namePoster,
            'source' => $nameFile,
            'type' => 1,
            'quality' => null,
            'duration' => null,
            'price' => $request->price,
            'status' => $request->status,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null,
            'deleted_at' => null
        ]);
        if($insert){
            return redirect()->route('admin.song')->with('add-song', 'add song successfully');
        } else {
            return redirect()->back()->with('add-song', 'add song failure');
        }
    }
}

