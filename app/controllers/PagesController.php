<?php

namespace App\Controllers;

class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        return view('index');
    }

    /**
     * Show the furniture page.
     */
    public function furniture()
    {
        $company = 'Laracasts';

        return view('furniture');
    }

    /**
     * Show the disk page.
     */
    public function disk()
    {
        return view('disk');
    }

    /**
     * show book page
     */
    public function book()
    {
        return view('book');
    }

    /**
     * show building page
     */
    public function buildings()
    {
        return view('buildings');
    }

    /**
     * show car page
     */
    public function cars()
    {
        return view('cars');
    }

    /**
     * show recently viewed page
     */
    public function recently()
    {
        return view('recently');
    }
}
