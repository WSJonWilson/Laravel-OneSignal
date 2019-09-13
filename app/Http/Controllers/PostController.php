<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use OneSignal;

class PostController extends Controller{

    public function getIndex(){


        return view('frontend.blog.index');
    }

    public function postCreatePost(Request $request){
        $this->validate($request,[
            'title' => 'required|max:120|unique:posts',
            'body' => 'required'
        ]);

        //header
        $headings = [];
        $headings['en'] = $request['title'];


        OneSignal::setParam('headings', $headings)->sendNotificationTo(
            $request['body'],
            $url = null,
            $data = null,
            $buttons = null,
            $schedule = null
        );

        $post = new Post();
        $post-> title = $request['title'];
        // $post->author = $request['author'];
        $post->body = $request['body'];
        $post->save();



        return redirect()->route('blog.index')->with(['success' => 'Post successfully created!']);
}

}
