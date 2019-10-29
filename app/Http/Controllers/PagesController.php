<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return View("pages/index");
    }

    public function about(){
        return View('pages/about');
    }

    public function services(){
        $id = request('id');
        $cost = request('cost');
        $params = array(
            'id' => $id,
            'cost' => $cost
        );
        $data = ['Web Design', 'Programming', 'SEO', 'Marketing'];
        //return 'Service with id = ' . $id . ' and cost = ' . $costo;
        return View('pages/services', [
            'id' => $id,
            'cost' => $cost,
            'services' => $data
        ]);
    }
}
