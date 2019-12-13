<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Route;
use OneSignal;

class PostController extends Controller{

    public function getIndex(){

        $posts = Post::paginate(5);
        foreach ($posts as $post){
            $post->body = $this->shortenText($post->body, 20);
        }
        return view('frontend.blog.index', ['posts' => $posts]);
    }

    public function getRouteData(){

        $routes = Route::all();

        return view('frontend.blog.create', ['routes' => $routes]);
    }

    public function getData(){
        $posts = Post::with('routes')->get();
        return $posts;
    }

    public function postCreatePost(Request $request){

        $this->validate($request,[
            'title' => 'required|max:120|unique:posts',
            'body' => 'required',
            'route_id' => 'required',
        ]);
        // $join = $routeList = '';

        $routeList = $request->route_id;

        // foreach($request->route_id AS $id)
        // {
        //     $routeList .= $join . '' . $id . '';
        //     $join = ', ';

        // }

        //header
        $headings = [];
        $headings['en'] = $request['title'];


        OneSignal::setParam('headings', $headings)->sendNotificationToAll(
            $request['body'],
            $url = null,
            $data = null,
            $buttons = null,
            $schedule = null
        );

        $post = new Post();
        $post-> title = $request['title'];
        $post->body = $request['body'];
        $post->save();

        $route = Route::find($routeList);
        $post->routes()->attach($route);



        return redirect()->route('blog.index')->with(['success' => 'Post successfully created!']);
}

private function shortenText($text, $words_count){
    if (str_word_count($text, 0) > $words_count){
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $text= substr($text, 0, $pos[$words_count]) . '...';
    }
    return $text;
}

}
