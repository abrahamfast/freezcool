<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdviserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $packages = $user->package()->get();

        return view('pages.profile.adviser', [
            'packages' => $packages,
        ]);
    }

    public function show($id)
    {
        $package = Package::findOrfail($id);

        return view('pages.profile.adviser_package_show', [
            'package' => $package
        ]);
    }
}
