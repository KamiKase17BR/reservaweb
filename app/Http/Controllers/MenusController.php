<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public  function store(Request $request)
    {
        $menu = $this->repository;

        $id_restaurante = Restaurant::first('id');
        $menu->id_restaurante = $id_restaurante['id'];
        $menu->nome = $request->name;
        $menu->descricao = $request->particulars;
        $menu->valor = $request->valor;

        $requestImage = $request->imagem;
        $request->validate(['image' => 'mimes:jpeg,jpg,png']);
        $imageName = md5($id_restaurante . $request->name);
        $menu->imagem = $imageName;
        $requestImage->move(public_path('store/menus/' . $id_restaurante), $imageName);

        $menu->save();
        return redirect()->route('menu.insert')->with('message', 'Salvo com sucesso');
    }

    public function list(){

        $id = Auth::user()->id;
        print_r($id); //1
        echo "\n \n \n";

        $id_restaurante = Restaurant::first('id'); // 4
        $id_restaurante = $id_restaurante['id'];
        print_r($id_restaurante); // =3

        echo "\n \n \n";

        $menu = Menu::list($id_restaurante);
        print_r($menu);
        die();
        return view('menu.list', [
            'table' => $menu
        ]);

    }


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
