<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;


class MenusController extends Controller
{

    public function __construct(Request $request, Menu $menu)
    {
        $this->request = $request;
        $this->repository = $menu;
        //$this->resturant = $restaurant;
    }

    public function index()
    {
        return view('menu.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('menu.insert');
    }

    public function store(Request $request)
    {
        $id_restaurante = Menu::restaurant();
    dd($id_restaurante);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
