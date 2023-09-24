<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MusicPlayerModel;

class MusicController extends BaseController
{
    public function index()
    {
        $main = new MusicPlayerModel();
        $data['main'] = $main->findAll();
        $data['mus'] = [];
        return view('main', $data);
    }
}
