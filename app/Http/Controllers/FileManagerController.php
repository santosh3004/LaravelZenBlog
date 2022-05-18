<?php

namespace App\Http\Controllers;

use App\Models\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FileManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filemanager = new Filemanager;
        $filemanager = $filemanager->get();
        return view('admin.filemanager.index',compact('filemanager'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.filemanager.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filemanager = new Filemanager;
        $filemanager->title = $request->title;

        $filename = str_replace(' ','',request('title'));
        $ext = $request->file->extension();
        $finalname = $filename.'_'.time().'.'.$ext;
        $request->file->move(public_path('uploads/files/'),$finalname);

        $filemanager->link = $finalname;
        $filemanager->ext = $ext;

        $filemanager->save();

        return redirect('filemanager');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FileManager  $fileManager
     * @return \Illuminate\Http\Response
     */
    public function show(FileManager $fileManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FileManager  $fileManager
     * @return \Illuminate\Http\Response
     */
    public function edit($fileManager)
    {
        $filemanager = new Filemanager;
        $filemanager = $filemanager->where('id',$fileManager)->first();
        return view('admin.filemanager.edit',compact('filemanager'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FileManager  $fileManager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$fileManager)
    {
        $filemanager = new Filemanager;
        $filemanager = $filemanager->where('id',$fileManager)->first();

        $filemanager->title = $request->title;

        if ($request->file('file')!=null)
        {
            //Deleting previously uploaded file
            $last_file_link = $filemanager->link;
            $last_file_name_array = explode('.',$last_file_link);
            $last_file_name = $last_file_name_array[0];
            $last_file_link_full = public_path().'/uploads/files/'.$last_file_link;
            if($last_file_link!="")
            {
                File::delete($last_file_link_full);
            }

            //File Uploading
            $ext = $request->file->extension();
            $finalname = $last_file_name.'.'.$ext;
            $request->file->move(public_path('uploads/files/'),$finalname);

            $filemanager->link = $finalname;
            $filemanager->ext = $ext;
        }

        $filemanager->update();

        return redirect('filemanager');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FileManager  $fileManager
     * @return \Illuminate\Http\Response
     */
    public function destroy($fileManager)
    {
        $filemanager = new Filemanager;
        $filemanager = $filemanager->where('id',$fileManager)->first();

        $last_file = public_path().'/uploads/files/'.$filemanager->link;
        File::delete($last_file);
        $filemanager->delete();

        return redirect('filemanager');
    }
}
