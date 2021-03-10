<?php

namespace App\Http\Controllers;

use App\Dislike;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeDislikeController extends Controller
{
    public function like($post_id)
    {
        $logedin_user = Auth::user()->id;
        $like_user = Like::where(['user_id' => $logedin_user, 'post_id' => $post_id])->first();


        if (empty($like_user)) {
            $user_id = Auth::user()->id;
            $post_id = $post_id;
            $like = new like();
            $like->user_id = $user_id;
            $like->post_id = $post_id;
            $like->save();
        }
        return back();
    }


    public function dislike($post_id)
    {
        $logedin_user = Auth::user()->id;

        $like_user = Dislike::where(['user_id' => $logedin_user, 'post_id' => $post_id])->first();


        if (empty($like_user)) {
            $user_id = Auth::user()->id;
            $post_id = $post_id;
            $dislike = new Dislike();
            $dislike->user_id = $user_id;
            $dislike->post_id = $post_id;
            $dislike->save();
        }
        return back();
    }
}
