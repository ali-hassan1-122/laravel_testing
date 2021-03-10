<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;



class FileController extends Controller
{

    public function index()
    {
        return view('file-upload');
    }

    public function fileSave(Request $request)
    {
        request()->validate([
            'fileName' => 'required',
            'fileName.*' => 'mimes:doc,docx,pdf,txt,jpeg,png,jpg,gif,svg'
        ]);

        if ($files = $request->file('fileName')) {
            $destinationPath = 'public/document/'; // upload path
            $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $fileName);
            $insert['file_name'] = "$fileName";
        }

        $check = Document::insertGetId($insert);


        return redirect()->route('file')->withSuccess('File has been uploaded.');
    }
}
