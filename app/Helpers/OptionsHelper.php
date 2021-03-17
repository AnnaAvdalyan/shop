<?php


use App\Movies_category;
use App\User;
use Illuminate\Support\Facades\DB;

function customHasFiles($files)
{
    $arrayFiles = [];
    foreach ($files as $key => $file) {
        if ($file != 'default.png') {
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/' . $key, $fileName);
            $arrayFiles[] = 'assets/' . $key . $fileName;
        } else {
            $arrayFiles[] = 'assets/' . $key . $file;

        }
    }
    return $arrayFiles;
}

