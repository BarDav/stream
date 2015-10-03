<?php
namespace App\Http\Controllers;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{

    /**
     * Rend a default home page
     *
     * @return \Illuminate\View\View
     */
    public function getHome()
    {
        return view('welcome');
    }

}