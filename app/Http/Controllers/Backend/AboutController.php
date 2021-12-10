<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('backend.admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new About;
        $about->id = $request->about;
        $about->name = $request->name;
        $about->designation = $request->designation;
        $about->description = $request->description;
        $about->present_address = $request->present_address;
        $about->parmanent_address = $request->parmanent_address;
        // $about->image = $request->file('image')->store('images');

        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            $about->file = $filename;
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extensions = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extensions;
            $file->move('image', $filename);
            $about->image = $filename;
        }
        $about->save();

        return redirect()->back()->with('message', 'About created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }
    public function download($file)
    {
        return response()->download('storage/' . $file);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {

        return view('backend.admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('image', $imagename);
        $about->image = $imagename;

        // $file = $request->file;
        // $filename = time() . '.' . $file->getClientOriginalExtension();
        // $request->file->move('storage/', $filename);
        // $about->file = $filename;

        $about->name = $request->name;
        $about->description = $request->description;
        $about->designation = $request->designation;
        $about->present_address = $request->present_address;
        $about->parmanent_address = $request->parmanent_address;

        $about->save();

        return redirect('/about')->with('message', 'About Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $delete = $about->delete();
        return redirect()->back()->with('message', 'About Successfully Deleted!!');
    }
}
