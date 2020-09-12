<?php

namespace App\Providers;
use App\Todo;
use App\Study;
use App\Others;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
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
        
   return view('master_layout.header')->with(
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
    );
    }
}
