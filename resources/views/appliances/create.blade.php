@extends('layouts.app')
 @section('content')
 <h1>Add Appliance</h1>
 <form action="{{ route('appliances.store') }}" method="POST">
 @csrf
 <label>Name:</label>
 <input type="text" name="name" required>
 <label>Brand:</label>
 <input type="text" name="brand" required>
 <label>Price:</label>
 <input type="number" name="price" step="0.01" required>
 <label>Warranty (months):</label>
 <input type="number" name="warranty" required>
 <button type="submit">Add</button>
 </form>
 @endsection