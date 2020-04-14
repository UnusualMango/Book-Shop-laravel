<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publishers;
use App\Http\Requests\createPublishersRequest;
use App\Http\Requests\updatePublishersRequest;

use Illuminate\Foundation\Validation\ValidatesRequests;

class publishersController extends Controller
{
  public function index()
  {
    $publishers = Publishers::all();
    return view('publishers.index' , ['publishers' => $publishers]);
  }

  public function destroy($publisher_id)
  {
    Publishers::find($publisher_id)->delete();

    return redirect()->route('publishers.index');
  }

  // функция создания
  public function create()
  {
    return view('publishers.create');
  }

  //функция редактирования
  public function edit($publisher_id)
  {
    $selectedPublisher = Publishers::find($publisher_id);

    return view('publishers.edit', ['publisher' => $selectedPublisher]);
  }

  //обновление записи
  public function update(updatePublishersRequest $request, $publisher_id)
  {

    $selectedPublisher = Publishers::find($publisher_id);

    $selectedPublisher->fill($request->all());
    $selectedPublisher->save();

    return redirect()->route('publishers.index');
  }


  // Функция сохранения записи в БД
  public function store(createPublishersRequest $request)
  {

    Publishers::create($request->all());

    return redirect()->route('publishers.index');

  }
}
