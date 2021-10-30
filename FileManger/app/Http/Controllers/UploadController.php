<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;
class UploadController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
    public function Uploadpage()
    {
        return view('files');
    }
    public function store(Request $request)
    {
        $file = new File();
        $file->name = request('name');
        $file->description = request('description');
        $filename=time().'-'.$request->name.'.'.$request->file->extension().'-';
        $path=public_path('files');
        $test=$request->file->move($path,$filename);
        $file->file=$filename;


        $file->save();


        return redirect('/viewfiles');
    }

    public function show(){
        $files=file::all();
         return view('viewfiles',['files'=>$files]);
    }
    public function download($id){
        $file=file::findOrFail($id);
      return response()->download(public_path('files'.'/'.$file->file));
    }

    public function view($id){
        $file=file::findOrFail($id);
        //$filename=$file->name;
        $filename = substr(strstr($file->file, '-'), 1, -1);
        return view('view',['file'=>$file,'filename'=>$filename]);
    }
    public function destroy($id){
        $file=file::findOrFail($id);
        $file->delete();
        return redirect('/viewfiles');
    }

}
