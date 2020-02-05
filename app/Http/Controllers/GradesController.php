<?php

namespace App\Http\Controllers;

use App\Post;
use DB;

class GradesController
{
    public function show($grade)
    {
        $post = Post::where('grades', $grade)->firstOrFail();

        return view('posts', [
        'post' => $grade
    ]);
    }

}
