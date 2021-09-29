<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgenceController extends Controller
{

    public function allAgences(){
        //$posts = Post::all()->where('post_type', 'agence');
        $posts = DB::table('posts')
                ->join('postmeta as pm', 'pm.post_id', '=', 'posts.ID')
                ->join('postmeta as pma', 'pma.post_id', '=', 'posts.ID')
                ->join('postmeta as pmit', 'pmit.post_id', '=', 'posts.ID')
                ->where([
                    ['pm.meta_key', '=', 'telephone'],
                    ['pma.meta_key', '=', 'lieu'],
                    ['post_type', '=', 'agence'],
                    ['pmit.meta_key', '=', 'itineraire_google_maps']
                ])
            ->select('posts.*', 'pm.meta_value as telephone', 'pma.meta_value as lieu', 'pmit.meta_value as itineraire')
            ->orderBy('post_title')->get();
            //dd($posts);
        return view('home', [
            'posts' => $posts,
        ]);
    }

    public function allAgencesForAbidjan(){
        //$posts = Post::all()->where('post_type', 'agence');
        $posts = DB::table('posts')
            ->join('postmeta as pm', 'pm.post_id', '=', 'posts.ID')
            ->join('postmeta as pma', 'pma.post_id', '=', 'posts.ID')
            ->join('postmeta as pmit', 'pmit.post_id', '=', 'posts.ID')
            ->join('postmeta as pmville', 'pmville.post_id', '=', 'posts.ID')
            ->where([
                ['pm.meta_key', '=', 'telephone'],
                ['pma.meta_key', '=', 'lieu'],
                ['post_type', '=', 'agence'],
                ['pmit.meta_key', '=', 'itineraire_google_maps'],
                ['pmville.meta_key', '=', 'ville']
            ])
            ->select('posts.*', 'pm.meta_value as telephone', 'pma.meta_value as lieu', 'pmit.meta_value as itineraire', 'pmville.meta_value as ville')
            ->orderBy('post_title')->get();
        //dd($posts);
        return view('home', [
            'posts' => $posts,
        ]);
    }

    public function agence($postname){

        $post = DB::table('posts')
            ->join('postmeta as pm', 'pm.post_id', '=', 'posts.ID')
            ->join('postmeta as pma', 'pma.post_id', '=', 'posts.ID')
            ->join('postmeta as pmit', 'pmit.post_id', '=', 'posts.ID')
            ->where([
                ['post_name', '=', $postname],
                ['pm.meta_key', '=', 'telephone'],
                ['pma.meta_key', '=', 'lieu'],
                ['pmit.meta_key', '=', 'itineraire_google_maps'],
                ['post_type', '=', 'agence']
            ])
            ->select('posts.*', 'pm.meta_value as telephone', 'pma.meta_value as lieu', 'pmit.meta_value as itineraire')
            ->first();
        //dd($post);
        return view('agence', [
            'post' => $post
        ]);
    }

}
