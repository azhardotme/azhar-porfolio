<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('backend.admin.portfolio.index', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        $portfolio = new Portfolio;
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        //$portfolio->image = $request->file('image')->store('portfolioimages');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extensions = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extensions;
            $file->move('portfolioimage', $filename);
            $portfolio->image = $filename;
        }
        $portfolio->save();


        return redirect(url('portfolio'))->with('message', "Portfolio created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('backend.admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $portfolio)
    {

        //$portfolio =  Portfolio::findOrFail($id);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $portfolio->update($input);



        // $portfolio->title = $request->title;
        // $portfolio->description = $request->description;

        // $image = $request->image;
        // $imagename = time() . '.' . $image->getClientOriginalExtension();
        // $request->image->move('portfolioimage', $imagename);
        // $portfolio->image = $imagename;

        // $portfolio->save();

        return redirect()->route('backend.admin.portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();
        return redirect()->back();
    }
}
