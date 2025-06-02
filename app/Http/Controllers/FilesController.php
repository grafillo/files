<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    function index () {
        return view('index');
    }

    function directory ($dir = null) {

        if(!$dir){
            $dirs = Storage::disk('view')->directories();
            $files = Storage::disk('view')->files();

            $dirs = $this->explode($dirs);
            $files = $this->explode($files);
            $dir = '';

        } else {
            $dirs = Storage::disk('view')->directories('/' . $dir);
            $files = Storage::disk('view')->files('/' . $dir);

            $dirs = $this->explode($dirs);
            $files = $this->explode($files);

        }

        return view('directory',compact('dirs','files','dir'));
    }

    private function explode($arr){

        $result = [];
        foreach ($arr as $item) {
            $str = explode('/', $item);
            $result[$item] = end($str);
        }
        return $result;
    }


}
