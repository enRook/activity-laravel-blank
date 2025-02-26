@extends('layouts.app')
 @section('content')
 <h1>Edit Appliance</h1>
 <form action="{{ route('appliances.update', $appliance) }}" method="POST">
 @csrf
 @method('PUT')
 <label>Name:</label>
 <input type="text" name="name" value="{{ $appliance->name }}" required>
 <label>Brand:</label>
 <input type="text" name="brand" value="{{ $appliance->brand }}" required>
 <label>Price:</label>
 <input type="number" name="price" value="{{ $appliance->price }}" step="0.01" required>
 <label>Warranty (months):</label>
 <input type="number" name="warranty" value="{{ $appliance->warranty }}" required>
 <button type="submit">Update</button>
 </form>
 @endsection