<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Table;
use Facade\Ignition\Tabs\Tab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TablesController extends Controller
{
    protected $request;
    private $repository;

    public function __construct(Request $request, Table $table)
    {
        $this->request = $request;
        $this->repository = $table;
    }

    public function index()
    {

        $teste = Table::first();
        //dd($teste->restaurant);

       return view('table.home');
    }

    public function create()
    {
        return view('table.insert');
    }

    public function store(Request $request)
    {
        $table = $this->repository;
        $id = Auth::user()->id;
        $table->lugares = $request->place;

        $table->descricao = $request->particulars;
        if (isset($request->placesany)) {
            $table->lugares = $request->placesany;
        }elseif ($request->place == 'radio2') {
            $table->lugares = '2';
        }else{
            $table->lugares = '4';
        }

        $table->id_parceiro = $id;
        //$table->id_restaurante =
        $request->checkhour;
        $table->hour08 = !isset($request->checkhour["08:00"]) ? 0 : 1;
        $table->hour09 = !isset($request->checkhour["09:00"]) ? 0 : 1;
        $table->hour10 = !isset($request->checkhour["10:00"]) ? 0 : 1;
        $table->hour11 = !isset($request->checkhour["11:00"]) ? 0 : 1;
        $table->hour12 = !isset($request->checkhour["12:00"]) ? 0 : 1;
        $table->hour13 = !isset($request->checkhour["13:00"]) ? 0 : 1;
        $table->hour14 = !isset($request->checkhour["14:00"]) ? 0 : 1;
        $table->hour15 = !isset($request->checkhour["15:00"]) ? 0 : 1;
        $table->hour16 = !isset($request->checkhour["16:00"]) ? 0 : 1;
        $table->hour17 = !isset($request->checkhour["17:00"]) ? 0 : 1;
        $table->hour18 = !isset($request->checkhour["18:00"]) ? 0 : 1;
        $table->hour19 = !isset($request->checkhour["19:00"]) ? 0 : 1;
        $table->hour20 = !isset($request->checkhour["20:00"]) ? 0 : 1;
        $table->hour21 = !isset($request->checkhour["21:00"]) ? 0 : 1;
        $table->hour22 = !isset($request->checkhour["22:00"]) ? 0 : 1;

        $requestImage = $request->image;
        $request->validate(['image' => 'mimes:jpeg,jpg,png']);
        $imageName = md5($id . $request->name . $request->image->extension());
        $table->image = $imageName;
        $requestImage->move(public_path('store/table/' . $id), $imageName);

        //$qrcode = QrCoder::QrCoder($imageName);

        $table->save();
        return redirect()->route('table.insert')->with('message', 'Salvo com sucesso!');
    }


    public function list()
    {

        $table = $this->repository->all();

        return view('table.list', [
            'table' => $table
        ]);
    }

    public function edit($id)
    {
        $table = $this->repository->find($id);
        return view ('table.edit', [
            'table'=>$table
        ]);

    }

    public function show($id)
    {
        $table = $this->repository->find($id);

        return view ('table.show', [
            'table'=>$table
        ]);

    }

    public function update( Request $request ,$id)
    {
        $table = $this->repository;

        $table->find($id);

       // $table->id = $id;

        $table->id_parceiro = Auth::user()->id;
        $table->save($request->all());

        return redirect()->route('table.list')->with('message', 'Atualizada a mesa '. $id);
    }

    public function destroy($id)
    {
        $table = $this->repository->where('id',$id)->first();
        $table->delete();

        return redirect()->route('table.list')->with('message', 'Deletada a mesa '. $id);
    }

}
