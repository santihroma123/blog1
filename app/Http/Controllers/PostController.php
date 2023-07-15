<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Qualify;
use App\Models\Publicity;
use Illuminate\Support\Facades\Validator;
use App\Models\History;

class PostController extends Controller
{
    public function listarPosts(){
        return Post::paginate(3);
    }

    public function createPost(){
        $TituloPost = request('title');
        $CuerpoPost = request('cuerpo');
        $IdUser = request('id_user');
        $IdPublicidad = request('id_publicity');

        $Post = new Post();
        $Post -> titulo = $TituloPost;
        $Post -> cuerpo = $CuerpoPost;
        $Post -> id_user = $IdUser;
        $Post -> id_publicities = $IdPublicidad;

        $Post->save();

        return redirect('/');
    }

    public function modificarPost(){
        $History = new History();
        $IdPost = request('id_post');
        $Post = Post::findOrFail($IdPost);

        $TituloPost = request('title');
        $CuerpoPost = request('cuerpo');
        $IdPublicidad = request('id_publicity');

        $Post -> titulo = $TituloPost;
        $Post -> cuerpo = $CuerpoPost;
        $Post -> id_publicities = $IdPublicidad;

        $Post->save();

        $History-> id_post = $IdPost;
        $History-> id_user = $Post->user;

        $History->save();

        return $Post;
    }


    public function calificarPost(){
        $Qualify = new Qualify();

        $TituloPost = request('title');
        $CuerpoPost = request('cuerpo');
        $IdPublicidad = request('id_publicity');
        $IdPost = request('id_post');
        $CalificacionPost = request('calificacion');

        $Post -> titulo = $TituloPost;
        $Post -> cuerpo = $CuerpoPost;
        $Post -> id_publicities = $IdPublicidad;
        $IdPost = request('id_post');

        $Post = Post::findOrFail($IdPost);

        $Qualify-> id_post = $IdPost;
        $Qualify-> calificacion = $CalificacionPost;
        $Qualify-> id_user = $Post->user;

        $Qualify->save();

        return $Qualify;
    }

    public function eliminarPost(){
        $IdPost = request('id_post');
        $Post = Post::findOrFail($IdPost);

        $Post->delete();

        return $Post;
    }
}
