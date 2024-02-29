<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
class HomeController extends Controller
{
    public function index(){
        $users = Cache::remember('users', 60, function () {
            return User::get()->toArray();
        });
        return  collect($users)->toArray();
        return "Radis Test";
    }
}
