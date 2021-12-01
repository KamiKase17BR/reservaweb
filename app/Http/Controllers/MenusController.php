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
        $menu->comida = !isset($request->comida["comida"]) ? 0 : 1;
        $menu->bebida = !isset($request->bebiba["bebida"]) ? 0 : 1;
        $menu->sobremesa = !isset($request->sobremesa["sobremesa"]) ? 0 : 1;

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
        $id_restaurante = Restaurant::first('id');
        $id_restaurante = $id_restaurante['id'];
        $menu = Menu::list($id_restaurante);
        return view('menu.list', [
            'menu' => $menu
        ]);

    }


    public function show($id)
    {
        $menu = $this->repository->find($id);

        return view ('menu.show', [
            'menu'=>$menu
        ]);
    }

    public function edit($id)
    {
        //
    }

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
