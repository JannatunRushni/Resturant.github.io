<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();

        return view('menus.index',compact('menus'));
    }

    public function menusearch(Request $request)
    {
        if($request->search)
        {
            $menus = Menu::where('name','LIKE','%'.$request->search.'%')->latest()->paginate(3);

            return view('menus.search',compact('menus'));
        }

        else
        {
            return  redirect()->back()->with('message','Empty Search');
        }
    }

}
