<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends MainController {

	public function index(){
        return view('pages.index', $this->data);
    }

    public function about(){
        $this->data['about'] = json_decode(file_get_contents(storage_path().'/administrator_settings/about.json'));
        return view('pages.about', $this->data);
    }

    public function contact(){
        return view('pages.contact', $this->data);
    }


}
