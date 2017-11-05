<?php

namespace GiapHiep\Admin\Controllers;

use Illuminate\Http\Request;
use GiapHiep\Admin\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard() {
    	return view('giaphiep::admin.dashboard');
    }
}
