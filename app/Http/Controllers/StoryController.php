<?php

namespace App\Http\Controllers;

use App\Models\Short_story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        return view('library.index');
    }

    public function viewStory()
    {
        session()->flash('page',  $page = (object)[
            'page' => 'story',
        ]);

        $stories = Short_story::all();
        
        if(session('id_user') !== null){
            $histories = Short_story::where('user_id', session('id_user'))->get();
            return view('components.library.stories', compact('stories', 'histories'));
        }
        else{
            return view('components.library.stories', compact('stories'));
        }
    }

    public function storeShortStory(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Short_story::create([
            'title' => $request->title,
            'sinopsis' => $request->synopsis,
            'description' => $request->description,
            'user_id' => session('id_user'),
        ]);

        return redirect()->back()->with('success');
    }

    public function editShortStory(Request $request)
    {
        Short_story::where('id', $request->id)->update([
            'title' => $request->title,
            'sinopsis' => $request->sinopsis,
            'description' => $request->description,
        ]);

        session()->flash('success_update');
        return redirect()->back();
    }

    public function deleteShortStory($id)
    {
        Short_story::where('id', $id)->delete();
        return response()->json('success');
    }

}
