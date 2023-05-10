<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('beritaadmin', compact('blogs'));
    }

    public function index2()
    {
        $blogs = Blog::all();

        return view('berita', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'img_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'desc' => 'required',
        ]);

        $image = $request->file('img_url');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/'), $imageName);

        $blog = new Blog();
        $blog->author_id = 1;
        $blog->title = $validatedData['title'];
        $blog->img_url = '/upload/' . $imageName;
        $blog->desc = $validatedData['desc'];
        $blog->save();

        $blogs = Blog::all();

        return redirect()->route('blogs.index')->with('success', 'Blog added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);

        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        // dd($blog);
        return view('beritaedit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'nullable',
            'img_url' => 'nullable',
            'desc' => 'nullable',
        ]);

        if ($request->hasFile('img_url')) {
            $image = $request->file('img_url');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/'), $imageName);

            $destination = public_path($blog->img_url);
            if(File::exists($destination)) {
                File::delete($destination);
            }

            $blog->img_url = '/upload/' . $imageName;
        }


        $blog->title = $validatedData['title'];
        $blog->desc = $validatedData['desc'];

        $blog->update();

        return redirect()->route('blogs.index')->with('success', 'Blogs berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Hapus file gambar terkait
        $destination = public_path($blog->img_url);
        if(File::exists($destination)) {
            File::delete($destination);
        }

        // Update data title dan desc menjadi kosong
        $blog->title = '';
        $blog->desc = '';
        $blog->update();

        // Hapus data dari database
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blogs berhasil dihapus.');
    }
}
