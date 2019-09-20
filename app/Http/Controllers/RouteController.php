<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Route;

class RouteController extends Controller{

    public function getRouteIndex(){
        $routes = Route::orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.blog.routes', ['routes' => $routes]);
    }


    public function postCreateRoute(Request $request){
        $this->validate($request,[
            'route_name' => 'required|max:10|unique:routes',
            'courier_name' => 'required'
        ]);

        //header
        $headings = [];
        $headings['en'] = $request['route_name'];

        $route = new Route();
        $route-> route_name = $request['route_name'];
        // $route->author = $request['author'];
        $route->courier_name = $request['courier_name'];
        $route->save();



        return redirect()->route('blog.routes');
}


}
