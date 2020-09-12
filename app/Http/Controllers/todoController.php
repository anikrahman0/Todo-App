<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Study;
use App\Others;

class todoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function home()
    {
        
         $p=Todo::count();
         $p_r_count = Todo::where('status','=','active')->count();
         $p_rm_count = Todo::where('status','=','inactive')->count();

        $s=Study::count();
        $s_r_count = Study::where('status','=','active')->count();
        $s_rm_count = Study::where('status','=','inactive')->count();


        $o=Others::count();
        $o_r_count = Others::where('status','=','active')->count();
        $o_rm_count = Others::where('status','=','inactive')->count();
        
        $total_rm= $p_rm_count + $s_rm_count + $o_rm_count;
        $total_r= $p_r_count + $s_r_count + $o_r_count;
        $total_task= $p + $s + $o;

    return view('home')->with(
        [
             
             'p'=>$p,
             'p_r_count' => $p_r_count ,
             'p_rm_count' => $p_rm_count ,
             's'=>$s,
             's_r_count' => $s_r_count ,
             's_rm_count' => $s_rm_count ,
             'o'=>$o,
             'o_r_count' => $o_r_count ,
             'o_rm_count' => $o_rm_count ,
              
             'total_rm'=>$total_rm,
             'total_r'=>$total_r,
             'total_task'=>$total_task,
        ]
    );}       

        
    

    public function index()
    {
         $projects=Todo::all();
         $p=Todo::count();

    return view('todolist')->with(
        [
            'projects'=>$projects,
             'p'=>$p,
        ]
    );}

    public function addProjectView()
    {
         
    return view('addproject');


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

  public function deleteAllProjectConfirm(){
    $p_count=Todo::count();
    if($p_count>0)
    {
     
    
 return redirect('/todo')->with('success2','Do You really want to delete all project?');
    }
    else{

         return redirect('/todo')->with('warning','Project List Is Already Empty');
    }

  }

    public function deleteAllProject(){

        $del_all_project=Todo::query()->delete();
        return redirect('/todo')->with('success','All Project has been removed successfully');
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
            'title' => 'required|unique:todos',
            'status' => 'required',
            'url'   => 'url|nullable',
     
        ]);
    
        $project = new Todo;
        $project->title = $request->input('title'); 
        $project->status = $request->input('status');   
        $project->url = $request->input('url');
        $project->save(); 
        return redirect('/todo')->with('success','Project has been added succesfully.');
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
     $projects=Todo::findOrFail($id);
   
     
     return view('editproject')->with('projects',$projects);
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
            'url'     =>'url|nullable'
        ]);
    
        $p =Todo::find($id);
        $p->title = $request->get('title'); 
        $p->status = $request->get('status');   
        $p->url = $request->get('url');   
        $p->save(); 
        return redirect('/todo')->with('success','Project has been updated succesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function destroy($id)
    {

        Todo::destroy($id);
       
        
        return redirect()->route('todo.show')-> with('success', 'Project has been removed successfully.');
    }
}
