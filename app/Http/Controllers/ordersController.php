<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\Clients;
use App\Http\Requests\createOrdersRequest;
use App\Http\Requests\updateOrdersRequest;

use Illuminate\Foundation\Validation\ValidatesRequests;

class ordersController extends Controller
{
  public function index()
  {
    $orders = Orders::all();
    return view('orders.index' , ['orders' => $orders]);
  }

  public function destroy($order_id)
  {
    Orders::find($order_id)->delete();

    return redirect()->route('orders.index');
  }

  // отправка в orders/create.blade.php
  public function create()
  {
    return view('orders.create');
  }

  //функция редактирования
  public function edit($order_id)
  {
    $selectedOrder = Orders::find($order_id);

    return view('orders.edit', ['order' => $selectedOrder]);
  }

  //обновление записи
  public function update(updateOrdersRequest $request, $order_id)
  {

    $selectedOrder = Orders::find($order_id);

    $selectedOrder->fill($request->all());
    $selectedOrder->save();

    return redirect()->route('orders.index');
  }


  // Функция сохранения записи в БД
  public function store(createOrdersRequest $request)
  {

    Orders::create($request->all());

    return redirect()->route('orders.index');

  }

  // Функция для показа полной информации о клиенте
  public function show($order_id)
  {
    $selectedOrder = Orders::find($order_id);

    return view('orders.show', ['order' => $selectedOrder]);
  }

  public function info($order_id)
  {
    $selectedOrder = Orders::find($order_id);
    $clients = Clients::find($selectedOrder->client_id);

    return view('orders.info', ['order' => $selectedOrder , 'clients' => $clients]);
  }
}
