<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;

class HomeController extends Controller
{
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        // dd($this->repository->all()->toArray());
        return view('layouts.master');
    }
}
