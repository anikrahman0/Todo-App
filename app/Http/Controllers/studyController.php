<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;
class studyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $study=Study::all();
         $p=Study::count();

    return view('todoliststudy')->with(
        [
            'study'=>$study,
             'p'=>$p,
        ]
 );}

  public function addStudyView()
    {
         
    return view('addstudy');


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
            'title' => 'required|unique:studies',
            'status' => 'required',
            'url' =>'url|nullable'
        ]);
    
        $study = new Study;
        $study->title = $request->input('title'); 
        $study->status = $request->input('status');   
        $study->url = $request->input('url'); 
        $study->save(); 
        return redirect('/todostudy')->with('success','Study has been added succesfully.');
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

    public function deleteAllStudyConfirm(){
    $p_count=Study::count();
    if($p_count>0)
    {

 return redirect('/todostudy')->with('success2','Do You really want to delete all study?');
    }
    else{

         return redirect('/todostudy')->with('warning','Study List Is Already Empty');
    }

  }

    public function deleteAllStudy(){

        $del_all_project=Study::query()->delete();
        return redirect('/todostudy')->with('success','All Study has been removed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $study=Study::findOrfail($id);
     
     return view('editstudy')->with('study',$study);
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
             'url' =>'url|nullable'
        ]);
    
        $p =Study::find($id);
        $p->title = $request->get('title'); 
        $p->status = $request->get('status');
        $p->url = $request->input('url');    
        $p->save(); 
        return redirect('/todostudy')->with('success','Study has been updated succesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Study::destroy($id);
        return redirect()->route('todostudy.show')-> with('success', 'Study has been removed successfully.');
    }
}
