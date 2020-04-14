<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\Http\Requests\createClientsRequest;
use App\Http\Requests\updateClientsRequest;

use Illuminate\Foundation\Validation\ValidatesRequests;

class clientsController extends Controller
{
  public function index()
  {
    $clients = Clients::all();
    return view('clients.index' , ['clients' => $clients]);
  }

  public function destroy($client_id)
  {
    Clients::find($client_id)->delete();

    return redirect()->route('clients.index');
  }

  // отправка в clients/create.blade.php
  public function create()
  {
    return view('clients.create');
  }

  //функция редактирования
  public function edit($client_id)
  {
    $selectedClient = Clients::find($client_id);

    return view('clients.edit', ['client' => $selectedClient]);
  }

  //обновление записи
  public function update(updateClientsRequest $request, $client_id)
  {

    $selectedClient = Clients::find($client_id);

    $selectedClient->fill($request->all());
    $selectedClient->save();

    return redirect()->route('clients.index');
  }


  // Функция сохранения записи в БД
  public function store(createClientsRequest $request)
  {

    Clients::create($request->all());

    return redirect()->route('clients.index');

  }

  // Функция для показа полной информации о клиенте
  public function show($client_id)
  {
    $selectedClient = Clients::find($client_id);

    return view('clients.show', ['client' => $selectedClient]);
  }
}
