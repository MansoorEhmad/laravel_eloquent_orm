<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

use function Symfony\Component\Clock\now;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::get();
        return view('photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('photos.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'file_upload' => 'required|mimes:png,jpg,jpeg|max:3000'
        ]);

        $file = $request->file('file_upload');

        // store with public
        // it will save image in storage/app/public/images/ folder but, the name
        // of the image will take randomly key base like; 'images/qusxBWZ7IrkI7oPIK1RByzEjIrqZavdM93dnEz4b.jpg'.
        $path = $request->file('file_upload')->store('images', 'public');

        // store with local
        // note we can pass local instead of public but by default it auto takes local if we
        // do not pass any local or public argument and in if we pass local it will save images in
        // storage/app/private/images/
        //$path = $request->file('file_upload')->store('images');

        // storeAs
        // same as store but we can rename file/image.
        // $fileName = time() . '_' . $file->getClientOriginalName();
        // $path = $request->file('file_upload')->storeAs('images', $fileName, 'public');
        // return $path;

        Photo::create([
            'file_name' => $path,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('photo.index')->with('success', 'Image added successfully!');
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
        $photo = Photo::find($id);
        return view('photos.update', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $photo = Photo::find($id);

        if($request->hasFile('file_upload')){
            // remove old image from storage
            $file_path = public_path('storage/') . $photo->file_name;
            if(file_exists($file_path)){
                @unlink($file_path);
            }

            // upload new image in storage
            $path = $request->file('file_upload')->store('images', 'public');

            // update in db
            $photo->file_name = $path;
            $photo->save();
            
            return redirect()->route('photo.index')->with('success', 'Image updated successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $photo = Photo::find($id);
        $photo->delete();

        // remove from storage
        $file_path = public_path('storage/') . $photo->file_name;
        if(file_exists($file_path)){
            @unlink($file_path);
        }
        return redirect()->route('photo.index')->with('success', 'Image deleted successfully!');
    }
}
