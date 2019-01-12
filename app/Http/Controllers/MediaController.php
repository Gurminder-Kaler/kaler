<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        //
        //$page = Photo::paginate(2);
        $photos= Photo::paginate(3);
        return view('admin.media.index',compact('photos'));
    }
    public function create()
    {
           //

        return view('admin.media.create');
    }
    public function store(Request $request)
    {

        //

        $file=$request->file('file');
        $name = time().$file->getClientOriginalName();
        $file->move('image',$name);
        Photo::create(['file'=>$name]);
        return redirect('admin/media');

    }

    public function destroy($id)
    {
        //

        $photo = Photo::findOrFail($id);


        unlink(public_path() . $photo->file);


        $photo->delete();


        return redirect('/admin/media');

    }
}
