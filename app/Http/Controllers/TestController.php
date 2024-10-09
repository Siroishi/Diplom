<?php

namespace App\Http\Controllers;

use App\Models\Testuser;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
class TestController extends Controller
{
    public function index(): View
    {
        $user = [];
        $TU = Testuser::query()->find(1,"name")->ToArray();
        dump($TU);

        return view('welcome',compact('user'));
    }
}
