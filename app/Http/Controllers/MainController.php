<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Menu;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function __construct(Menu $menu){
        $this->data =[];
        $this->data['menus'] = $menu->getMenu();
	}

}
