<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $r) {
        $user = User::find(1);
        return [
            'user' => $user,
            'tasks' => $user->tasks,
            'categories' => $user->categories
        ];
    }
}
