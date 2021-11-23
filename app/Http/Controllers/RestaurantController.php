<?php

namespace App\Http\Controllers;

use Dotenv\Result\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    protected $request;
    private $repository;


    public function __construct(Request $request, Restaurant $restaurant)
    {

        $this->request = $request;
        $this->repository = $restaurant;

    }


    public function index()
    {
        $teste = Restaurant::first();
        return view('restaurant.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurant.insert');
    }

    public function store(Request $request)
    {

        $id = Auth::user()->id;
        $restaurant = $this->repository;
        $restaurant->id_parceiro = $id;
        $restaurant->nomerestaurante = $request->name;
        $restaurant->descricao = $request->particulars;
        $restaurant->cnpj = $request->cnpj;
        $restaurant->ie = $request->ie;
        $restaurant->cep = $request->zip;
        $restaurant->endereco = $request->address;
        $restaurant->bairro = $request->district;
        $restaurant->cidade = $request->inputCity;
        $restaurant->estado = $request->inputState;
        $restaurant->representante = $request->inputname;
        $restaurant->rg = $request->rg;
        $restaurant->cpf = $request->cpf;
        $restaurant->email = $request->email;

        $requestImage = $request->image;
        $request->validate(['image' => 'mimes:jpeg,jpg,png']);
        $imageName = md5($id . $request->name . $request->image->extension());
        $restaurant->imagem = $imageName;
        $requestImage->move(public_path('store/restaurant/' . $id), $imageName);

        $restaurant->save();
        return redirect()->route('restaurant.insert')->with('message', 'Salvo com sucesso!');

    }


    public function show()
    {
        $restaurant = $this->repository->all();

        return view('restaurant.show', [
            'restaurant' => $restaurant
        ]);
    }

    public function list()
    {
       $restaurant = $this->repository->first();
        if($restaurant == null){
            return redirect()->back()->with('message', 'Não há restaurante cadastrado! ');
        }

        return view('restaurant.list', [
            'restaurant' => $restaurant
        ]);
    }

    public function edit($id)
    {
        $restaurant = $this->repository->find($id);
        return view ('restaurant.edit', [
            'restaurant'=>$restaurant
        ]);
    }

    public function update(Request $request, $id)
    {
        $restaurant = $this->repository;

        $restaurant->find($id);

        $restaurant->save($request->all());

        return redirect()->route('restaurant.list')->with('message', 'Atualizado o estabelecimento '. $id);
    }


    public function destroy($id)
    {

        $restaurant = $this->repository->where('id',$id)->first();
        $restaurant->delete();

        return redirect()->route('restaurant.list')->with('message', 'Deletado o estabelecimento '. $id);
    }
}
