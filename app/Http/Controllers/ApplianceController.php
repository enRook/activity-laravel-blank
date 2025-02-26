<?php

namespace App\Http\Controllers;

use App\Models\Appliance;
use Illuminate\Http\Request;

class ApplianceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appliances = Appliance::all(); // Get all appliances
        return view('appliances.index', compact('appliances')); // Pass to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appliances.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required|numeric',
            'warranty' => 'required|integer',
        ]);

        // Create a new appliance record
        Appliance::create($request->all());

        // Redirect to index with a success message
        return redirect()->route('appliances.index')->with('success', 'Appliance created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Fetch the appliance from the database
        $appliance = Appliance::findOrFail($id); // This will automatically throw a 404 if the appliance isn't found

        // Pass the appliance to the view
        return view('appliances.show', compact('appliance')); // Note: use 'appliances.show', not 'appliance.show'
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fetch the appliance from the database
        $appliance = Appliance::findOrFail($id);

        // Pass the appliance to the view
        return view('appliances.edit', compact('appliance')); // Ensure 'appliance' is defined
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required|numeric',
            'warranty' => 'required|integer',
        ]);

        // Fetch the appliance from the database
        $appliance = Appliance::findOrFail($id);

        // Update the appliance with new data
        $appliance->update($request->all());

        // Redirect to index with a success message
        return redirect()->route('appliances.index')->with('success', 'Appliance updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Fetch the appliance from the database
        $appliance = Appliance::findOrFail($id);

        // Delete the appliance
        $appliance->delete();

        // Redirect to index with a success message
        return redirect()->route('appliances.index')->with('success', 'Appliance deleted successfully.');
    }
}
