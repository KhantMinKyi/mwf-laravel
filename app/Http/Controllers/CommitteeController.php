<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Committee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $committeeQuery = Committee::with('created_user');
        $committees = $committeeQuery->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.committees.committee_index', compact('committees'));
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
               $data = $request->validate([
            'committee_image'               => 'required|file',
            'committee_name'                => 'required',
            'committee_job_title'           => 'required',
            'committee_name_mm'             => 'required',
            'committee_job_title_mm'        => 'required',
            'committee_is_show_front'       => 'nullable',
        ]);
        // dd($request->all());
        $user_id = Auth::user()->id;
        $committeeUid = uniqid('', true);
        if (isset($data['committee_image'])) {
            $filePath = "img/committee_data/"  . $committeeUid;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['committee_image'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/committee_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/committee_" . $imageUid . "." . $extension);
            $data['committee_image'] = "/" . $photoName;
        }

        $data['committee_created_user_id'] = $user_id;
        $data['committee_updated_user_id'] = $user_id;
        $data['committee_is_show_front'] = $data['committee_is_show_front'] ?? 0;
        Committee::create($data);
        return to_route('admin.committees.index')->with('success', 'Committee Created Successfully!');
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
               $committee = Committee::find($id);

        if($committee){
            return view('partial_view.admin.committees.committee_edit',compact('committee'));
        }else{
            return response()->json(['message'=>'Error! No committee Found']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'committee_image'               => 'nullable|file',
            'committee_name'                => 'required',
            'committee_job_title'           => 'required',
            'committee_name_mm'             => 'required',
            'committee_job_title_mm'        => 'required',
            'committee_is_show_front'       => 'nullable',
        ]);
        $committee = Committee::find($id);
        // dd($data);
        // Explode the path into parts
        $user_id = Auth::user()->id;
        $parts = explode('/', $committee->committee_image);

        // Get the second-to-last part (the folder name)
        $folderName = $parts[count($parts) - 1];
        // dd($folderName);
        $committeeUid = $folderName;

                if (isset($data['committee_image'])) {
            if (File::exists(public_path($committee->committee_image))) {
                File::delete(public_path($committee->committee_image));
            }
            $filePath = "img/committee_data/"  . $committeeUid;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['committee_image'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/committee_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/committee_" . $imageUid . "." . $extension);
            $data['committee_image'] = "/" . $photoName;
        }
        $data['committee_updated_user_id'] = $user_id;
        $data['committee_is_show_front'] = isset($data['committee_is_show_front'])  ? 1 : 0;
        $committee->update($data);

        // Clean up Empty Folder
        $basePath = public_path('img/committee_data'); // or storage_path('app/img/committee_data')

        $directories = File::directories($basePath);

        foreach ($directories as $dir) {
            if (count(File::files($dir)) === 0 && count(File::directories($dir)) === 0) {
                File::deleteDirectory($dir);
            }
        }
        return to_route('admin.committees.index')->with('success', 'Committee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
             $committee = Committee::find($id);
        if (!$committee) {
            return to_route('admin.committees.index')->with('error', 'User not Found');
        }
        if (File::exists(public_path($committee->committee_image))) {
            File::delete(public_path($committee->committee_image));
        }
        $basePath = public_path('img/committee_data');
        $directories = File::directories($basePath);

        foreach ($directories as $dir) {
            if (count(File::files($dir)) === 0 && count(File::directories($dir)) === 0) {
                File::deleteDirectory($dir);
            }
        }
        $committee->delete();
        return to_route('admin.committees.index')->with('success', 'Deleted Successfully');
    }
}
