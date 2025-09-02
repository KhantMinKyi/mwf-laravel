<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postQuery = Post::with('created_user')->where('post_is_active', 1);
        $posts = $postQuery->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.posts.post_index', compact('posts'));
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
            'post_banner' => 'required|file',
            'post_title' => 'required',
            'post_body' => 'required',
            'post_title_mm' => 'required',
            'post_body_mm' => 'required',
            'post_category' => 'required',
            'post_image' => 'nullable|array',
            'post_is_show_front' => 'nullable',
        ]);
        // dd($request->all());
        $user_id = Auth::user()->id;
        $postUid = uniqid('', true);
        if (isset($data['post_banner'])) {
            $filePath = "img/post_data/"  . $postUid;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['post_banner'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/post_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/post_" . $imageUid . "." . $extension);
            $data['post_banner'] = "/" . $photoName;
        }

        if (isset($data['post_image'])) {
            $images = '';
            foreach ($data['post_image'] as $post_image) {
                $filePath = "img/post_data/"  . $postUid;
                if (!File::exists($filePath)) {
                    $result = File::makeDirectory($filePath, 0755, true);
                }
                $photo = $post_image;
                $extension = $photo->getClientOriginalExtension();
                $imageUid = uniqid('', true);
                $name = $photo->getClientOriginalName();
                $singlePhotoName = $filePath . "/post_" . $imageUid . "." . $extension;
                $photo->move($filePath, "/post_" . $imageUid . "." . $extension);
                $imagePaths[] = $singlePhotoName;
            }
            $images = implode(',', $imagePaths);
            $data['post_image'] = $images;
        }
        $data['post_created_date'] = Carbon::now();
        $data['post_created_user_id'] = $user_id;
        $data['post_updated_user_id'] = $user_id;
        $data['post_is_show_front'] = $data['post_is_show_front'] ?? 0;
        Post::create($data);
        return to_route('admin.posts.index')->with('success', 'Post Created Successfully!');
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
        $post = Post::find($id);

        if($post){
            return view('partial_view.admin.posts.post_edit',compact('post'));
        }else{
            return response()->json(['message'=>'Error! No Post Found']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'post_banner' => 'nullable|file',
            'post_title' => 'required',
            'post_body' => 'required',
            'post_title_mm' => 'required',
            'post_body_mm' => 'required',
            'post_category' => 'required',
            'post_image' => 'nullable|array',
            'post_is_show_front' => 'nullable',
        ]);
        $post = Post::find($id);
        // dd($data);
        // Explode the path into parts
        $user_id = Auth::user()->id;
        $parts = explode('/', $post->post_banner);

        // Get the second-to-last part (the folder name)
        $folderName = $parts[count($parts) - 1];
        // dd($folderName);
        $postUid = $folderName;

                if (isset($data['post_banner'])) {
            if (File::exists(public_path($post->post_banner))) {
                File::delete(public_path($post->post_banner));
            }
            $filePath = "img/post_data/"  . $postUid;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['post_banner'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/post_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/post_" . $imageUid . "." . $extension);
            $data['post_banner'] = "/" . $photoName;
        }

        if (isset($data['post_image'])) {
            $images = '';
            $old_post_images = explode(',', $post->post_image);
            foreach ($old_post_images as $opm) {
                if (File::exists(public_path($opm))) {
                    File::delete(public_path($opm));
                }
            }
            foreach ($data['post_image'] as $post_image) {
                $filePath = "img/post_data/" . $postUid;
                if (!File::exists($filePath)) {
                    $result = File::makeDirectory($filePath, 0755, true);
                }
                $photo = $post_image;
                $extension = $photo->getClientOriginalExtension();
                $imageUid = uniqid('', true);
                $name = $photo->getClientOriginalName();
                $singlePhotoName = $filePath . "/post_" . $imageUid . "." . $extension;
                $photo->move($filePath, "/post_" . $imageUid . "." . $extension);
                $imagePaths[] = $singlePhotoName;
            }
            $images = implode(',', $imagePaths);
            $data['post_image'] = $images;
        }
                $data['post_updated_user_id'] = $user_id;
        $data['post_is_show_front'] = isset($data['post_is_show_front'])  ? 1 : 0;
        $post->update($data);

        // Clean up Empty Folder
        $basePath = public_path('img/post_data'); // or storage_path('app/img/post_data')

        $directories = File::directories($basePath);

        foreach ($directories as $dir) {
            if (count(File::files($dir)) === 0 && count(File::directories($dir)) === 0) {
                File::deleteDirectory($dir);
            }
        }
        return to_route('admin.posts.index')->with('success', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function archivedPost(string $id)
    {
        
        $post = Post::find($id);
        // dd($post);
        if ($post) {
            $post->update(['post_is_active' => 0]);
            return to_route('admin.posts.index')->with('success', 'Updated Successfully!');
            // dd($user);
        } else {
            return response()->json([
                'message' => 'Cannot Find a Post'
            ]);
        }
    }
}
