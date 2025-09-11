<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Achement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AchementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achementQuery = Achement::with('created_user');
        $achements = $achementQuery->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.achements.achement_index', compact('achements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
            $data = $request->validate([
            'achement_title'                => 'required',
            'achement_title_mm'             => 'required',
            'achement_description'          => 'required',
            'achement_description_mm'       => 'required',
            'achement_location'             => 'required',
            'achement_location_mm'          => 'required',
            'achement_year'                 => 'required',
            'achement_year_mm'              => 'required',
            'achement_start_date'           => 'required',
            'achement_end_date'             => 'required',
        ]);
        // dd($request->all());
        $user_id = Auth::user()->id;
        $data['achement_created_user_id'] = $user_id;
        $data['achement_updated_user_id'] = $user_id;
        Achement::create($data);
        return to_route('admin.achements.index')->with('success', 'Achement Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
                $achement = Achement::find($id);

        if($achement){
            return view('partial_view.admin.achements.achement_edit',compact('achement'));
        }else{
            return response()->json(['message'=>'Error! No achement Found']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
               // dd($request->all());
            $data = $request->validate([
            'achement_title'                => 'required',
            'achement_title_mm'             => 'required',
            'achement_description'          => 'required',
            'achement_description_mm'       => 'required',
            'achement_location'             => 'required',
            'achement_location_mm'          => 'required',
            'achement_year'                 => 'required',
            'achement_year_mm'              => 'required',
            'achement_start_date'           => 'required',
            'achement_end_date'             => 'required',
        ]);
         $achement = Achement::find($id);
        // dd($request->all());
        $user_id = Auth::user()->id;
        $data['achement_created_user_id'] = $user_id;
        $data['achement_updated_user_id'] = $user_id;
       $achement->update($data);
        return to_route('admin.achements.index')->with('success', 'Achement Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $achement = Achement::find($id);
        
        if($achement){
            $achement->delete();
        return to_route('admin.achements.index')->with('success', 'Achement Deleted Successfully!');
        }else{
            return response()->json(['message'=>'Error! No achement Found']);
        }
    }
}
