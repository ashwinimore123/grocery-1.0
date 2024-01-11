<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Models\LeadProject;
use App\Models\Lead;
use App\Models\LeadSite;
use App\Models\LeadFollowUp;


use View;
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
        

        view()->composer('*', function ($view) 
        {
            $user = Auth::User();
            
            if($user!="")
               {
               $project=LeadProject::all(); 
               $count=count($project);
               View::share('count',$count);
               }
               else
               {
               View::share('count',"");
               }
            
            if($user!="")
               {
                    $user=Auth::User();
 $id=$user->id;

 $role_id=$user->role_id;

 if($role_id=="2"){
$lead=Lead::all(); 
$prize=count($lead);

          }

          else{
            $lead=Lead::where('id',$id)->get(); 
$prize=count($lead);
          } 
               // $prize=count($lead);
               View::share('prize',$prize);
               }
               else
               {
               View::share('prize',"");
               }

               if($user!="")
               {
               $followup=LeadFollowUp::all(); 
   
               $value=count($followup);
               View::share('value',$value);
               }
               else
               {
               View::share('value',"");
               }
             
             if($user!="")
               {
               $site=LeadSite::all(); 
               $size=count($site);
               View::share('size',$size);
               }
               else
               {
               View::share('size',"");
               }
               
               
              
         });
            
    }
}
