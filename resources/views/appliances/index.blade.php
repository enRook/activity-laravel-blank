@extends('layouts.adminlte')
 @section('content')
 <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Appliances Table</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
 @if(session('success'))
 <p>{{ session('success') }}</p>
 @endif
 <table class="table table-striped table-success">
                      <thead>
                        <tr>
 <th>Name</th>
 <th>Brand</th>
 <th>Price</th>
 <th>Warranty</th>
 <th>Actions</th>
 </tr>
                      </thead>
                      <tbody>
 @foreach($appliances as $appliance)
 <tr>
 <td>{{ $appliance->name }}</td>
 <td>{{ $appliance->brand }}</td>
 <td>{{ $appliance->price }}</td>
 <td>{{ $appliance->warranty }} months</td>
 <td>
 <a href="{{ route('appliances.edit', $appliance) }}" class= "btn btn-success">Edit</a>
 <form action="{{ route('appliances.destroy', $appliance) }}" method="POST" style="display:inline;">
 @csrf
 @method('DELETE')
 <button type="submit" class="btn btn-danger">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </table>
 </div>
                  <!-- /.card-body -->
                </div>
 @endsection
 