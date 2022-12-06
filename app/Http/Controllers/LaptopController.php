<?php

namespace App\Http\Controllers;

use App\Models\laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptops = laptop::all();
        return view('laptops.index',compact ('laptops'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laptops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'merk'  => 'required',
            'prosesor'  => 'required',
            'penyimpanan'  => 'required',
            'ram'  => 'required',
        ]);
        laptop::create($request->all());
        return redirect()->route('laptops.index')
                        ->with('success','Laptop berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function show(laptop $laptop)
    {
        return view('laptops.show',compact('laptop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function edit(laptop $laptop)
    {
        $laptop = laptop::find($laptop);
        return view('laptops.edit',compact('laptop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, laptop $laptop)
    {
        request()->validate([
            'merk'  => 'required',
            'prosesor'  => 'required',
            'penyimpanan'  => 'required',
            'ram'  => 'required',
        ]);
        $laptop->fill($request->post())->save();
        return redirect()->route('laptops.index')
                        ->with('success','Laptop berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laptop = laptop::find($id);
        $laptop->delete();
        return redirect()->route('laptops.index')
                        ->with('success','Laptop berhasil dihapus');;
    }
}
