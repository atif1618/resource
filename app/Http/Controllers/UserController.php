<?php

namespace App\Http\Controllers;
use App\Models\Info;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = Info::all();
        return view ('pages.index', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($req->all());
      $data = $request->validate([

            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',

      ]);
          $data = Info::create([
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
            ]);
            // dd($data);
            return redirect('data')->with('status','Info Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $info = Info::where('id', $id)->get();
        return view ('pages.show', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $info = Info::find($id);
        // dd($info);
        return view('pages.edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validation = $request->validate([

            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',

      ]);
      $data = Info::find($id);
    //   dd($data);
          $data->update([
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
            ]);
            // dd($data);
            return redirect('data')->with('status', 'Info Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $data = Info::find($id);
        $data->delete();
        return redirect ('/data')->with('status','Info Deleted Successfully');
    }
}
