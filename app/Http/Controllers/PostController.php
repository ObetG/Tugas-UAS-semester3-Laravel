<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' di ' . $category->name . ' Kategori';
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' oleh ' . $author->name;
        }
        $posts = Post::latest();

        return view('posts', [
            "title" => "Blog" . $title,
            "active" => 'posts',
            "posts" => Post::join('users', 'users.id', '=', 'posts.user_id')->select('posts.*', 'users.username')->latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Detail Blog",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
