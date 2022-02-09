<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function index()
    {
        $vaccines = Vaccine::paginate(5);
        return view('vaccine.index', ['vaccines' => $vaccines]);
    }

    public function create()
    {
        return view('vaccine.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vaccine_name' => 'required|unique:vaccines|max:50',
            'is_special' => 'required',
        ]);

        Vaccine::create([
            'vaccine_name' => $request->vaccine_name, 
            'is_special' => $request->is_special
        ]);

        return redirect(route('vaccination.index'));
    }

    public function edit(Vaccine $vaccine)
    {
        return view('vaccine.edit', ['vaccine' => $vaccine]);
    }

    public function update(Vaccine $vaccine, Request $request)
    {
        $request->validate([
            'vaccine_name' => 'required|unique:vaccines|max:50',
            'is_special' => 'required',
        ]);

        $vaccine->update([
            'vaccine_name' => $request->vaccine_name, 
            'is_special' => $request->is_special
        ]);

        return redirect(route('vaccination.index'));
    }

    public function destroy(Vaccine $vaccine)
    {
        $vaccine->delete();
        return redirect()->back();
    }
}
