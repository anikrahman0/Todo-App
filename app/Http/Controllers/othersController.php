<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Others;
class othersController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $others=Others::all();
         $p=Others::count();

    return view('todolistothers')->with(
        [
            'others'=>$others,
             'p'=>$p,
        ]
    );}

 public function addOtherView()
    {
         
    return view('addother');


  }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'title' => 'required|unique:others',
            'status' => 'required',
            'url' => 'url|nullable',
        ]);
    
        $others = new Others;
        $others->title = $request->input('title'); 
        $others->status = $request->input('status');   
        $others->url = $request->input('url');
        $others->save(); 
        return redirect('/todoothers')->with('success','Other Tasks has been added succesfully.');
     }

 public function deleteAllOtherConfirm(){
    $p_count=Others::count();
    if($p_count>0)
    {   
       return redirect('/todoothers')->with('success2','Do You really want to delete all other task?');
    }
    else{
         return redirect('/todoothers')->with('warning','Other Task List Is Already Empty');
    }

  }

    public function deleteAllOther(){

        $del_all_project=Others::query()->delete();
        return redirect('/todoothers')->with('success','All other task has been removed successfully');
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
     $others=Others::findOrFail($id);
     
     return view('editothers')->with('others',$others);
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
        $validatedData = $request->validate([
            'title' => 'required',
            'status' => 'required',
            'url' => 'url|nullable',
        ]);
    
        $p =Others::find($id);
        $p->title = $request->get('title'); 
        $p->status = $request->get('status');
        $p->url = $request->get('url');   
        $p->save(); 
        return redirect('/todoothers')->with('success','Other Tasks has been updated succesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function destroy($id)
    {

        Others::destroy($id);
       
        
        return redirect()->route('todoothers.show')-> with('success', 'Other Tasks has been removed successfully.');
    }
}
