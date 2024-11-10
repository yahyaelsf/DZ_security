<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TContact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $pageTitle = trans('navigation.dashboard');
        $pageDescription = trans('navigation.dashboard');
        $contacts = TContact::where('b_seen',0)->count();
        return view('admin.home', compact('pageTitle', 'pageDescription','contacts'));
    }
}
