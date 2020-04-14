<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suppliers;
use App\Http\Requests\createSuppliersRequest;
use App\Http\Requests\updateSuppliersRequest;

use Illuminate\Foundation\Validation\ValidatesRequests;

class suppliersController extends Controller
{
  public function index()
  {
    $suppliers = Suppliers::all();
    return view('suppliers.index' , ['suppliers' => $suppliers]);
  }

  public function destroy($supplier_id)
  {
    Suppliers::find($supplier_id)->delete();

    return redirect()->route('suppliers.index');
  }

  // отправка в suppliers/create.blade.php
  public function create()
  {
    return view('suppliers.create');
  }

  //функция редактирования
  public function edit($supplier_id)
  {
    $selectedSupplier = Suppliers::find($supplier_id);

    return view('suppliers.edit', ['supplier' => $selectedSupplier]);
  }

  //обновление записи
  public function update(updateSuppliersRequest $request, $supplier_id)
  {

    $selectedSupplier = Suppliers::find($supplier_id);

    $selectedSupplier->fill($request->all());
    $selectedSupplier->save();

    return redirect()->route('suppliers.index');
  }


  // Функция сохранения записи в БД
  public function store(createSuppliersRequest $request)
  {

    Suppliers::create($request->all());

    return redirect()->route('suppliers.index');

  }

  // Функция для показа полной информации о клиенте
  public function show($supplier_id)
  {
    $selectedSupplier = Suppliers::find($supplier_id);

    return view('suppliers.show', ['supplier' => $selectedSupplier]);
  }
}
