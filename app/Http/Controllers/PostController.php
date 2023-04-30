<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return "List of Posts";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Creat from for Post";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Store post in DB";

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Single Post";

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Edit from for Post";

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Update post in DB";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Delete post from DB";
    }
}
