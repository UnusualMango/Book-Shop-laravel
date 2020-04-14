@extends('layout')

@section('content')
<div class="container">
  <h2>Suppliers
    <a href="{{ route('suppliers.create')}}" class="btn btn-success">Create</a>
  </h2>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
      </tr>

      <tbody>
        <?php foreach ($suppliers as $supplier): ?>

        <tr>
          <td>{{$supplier->supplier_id}}</td>
          <td>{{$supplier->name}}</td>
          <td>
            <a href="{{ route('suppliers.show', $supplier->supplier_id)}}" class="btn btn-info" role="button">show</a>
            <a href="{{ route('suppliers.edit', $supplier->supplier_id)}}" class="btn btn-success" role="button">edit</a>

            {!! Form::open(["method"=>"DELETE", 'route' => ['suppliers.destroy', $supplier->supplier_id]]) !!}
            <button onclick="return confirm('Delete this supplier?')" class="btn btn-danger" role="button">delete</button>
            {!! Form::close() !!}
          </td>
        </tr>

        <?php endforeach; ?>

      </tbody>
    </thead>
</div>
@endsection
