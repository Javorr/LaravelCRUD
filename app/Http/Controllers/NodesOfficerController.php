<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NodesOfficer;

class NodesOfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //This will be the main page, our index where we retrieve our data from the table
        $nodesofficer = NodesOfficer::offset(0)->limit(10)->get(); //all()->toArray(); Right now we are limiting it to 10 just as an example due to the large quantity of rows in the table we are using
        return view('nodes_officer.index', compact('nodesofficer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nodes_officer.create');
    }

     /**
      * Search the specified resource and display those that meet the criteria.
      *
      * @return \Illuminate\Http\Response
      */
     public function search(Request $request)
     {
       $search = $request->get('search');
       $nodesofficer = NodesOfficer::where('name', 'like', '%'.$search.'%')->get();
       return view('nodes_officer.index', compact('nodesofficer'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'node_id'  => 'required',
          'name'  => 'required',
          'country_codes'  => 'required',
          'countries'  => 'required',
          'sourceID'  => 'required',
          'valid_until'  => 'required',
          'note'  => 'required'
        ]);
        $nodesofficer = new NodesOfficer([
          'node_id'  => $request->get('node_id'),
          'name'  => $request->get('name'),
          'country_codes'  => $request->get('country_codes'),
          'countries'  => $request->get('countries'),
          'sourceID'  => $request->get('sourceID'),
          'valid_until'  => $request->get('valid_until'),
          'note'  => $request->get('note')
        ]);
        $nodesofficer->save();
        return redirect()->route('nodes_officer.index')->with('success', 'Data Added Successfully');
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
        $nodesofficer = NodesOfficer::where('node_id', $id)->first(); // NodesOfficer::find('node_id') Find asume que tienes en tu tabla una variable id que es la primary key, se puede cambiar el nombre en el model
        return view('nodes_officer.edit', compact('nodesofficer', 'id'));
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
      $this->validate($request, [
        'name'  => 'required',
        'country_codes'  => 'required',
        'countries'  => 'required',
        'sourceID'  => 'required'
      ]);
      $nodesofficer = NodesOfficer::where('node_id', $id)->first(); // NodesOfficer::find('node_id')

      $nodesofficer->name = $request->get('name');
      $nodesofficer->country_codes = $request->get('country_codes');
      $nodesofficer->countries = $request->get('countries');
      $nodesofficer->sourceID = $request->get('sourceID');

      $nodesofficer->save();
      return redirect()->route('nodes_officer.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nodesofficer = NodesOfficer::where('node_id', $id)->first();
        $nodesofficer->delete();
        return redirect()->route('nodes_officer.index')->with('success', 'Data Deleted Successfully');
    }
}
