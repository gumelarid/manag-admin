<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\NavModel;
use App\Models\UserAccessModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class NavController extends Controller
{
    public function index(){
        $title = 'List Navigation';

        $data = NavModel::all();

        return view('dashboard.navigation.index', compact('title','data'));
    }

    public function store(Request $request){
        $valid = Validator::make($request->all(),[
            'name'  => 'required',
            'url'   => 'required',
            'icon'  => 'required',
        ]);

        if ($valid->fails()) {
            return redirect('/dashboard/navigation')->withErrors($valid)->withInput();
        };

        NavModel::create([
            'nav_id'    => Str::uuid(),
            'name'      => $request->name,
            'url'       => $request->url,
            'icon'      => str_replace('_',' ', strtolower($request->icon)),
            'is_active' => 1
        ]);


        $notification = array(
            'message'       => 'Success Add Navigation',
            'alert-type'    => 'success'
        );

        return Redirect::to('/dashboard/navigation')->with($notification);
    }

    public function update(Request $request,$id = null){
        if ($id !== null) {
            $check = NavModel::where('nav_id', $id);

            if(count($check->get()) <= 0){
                $notification = array(
                    'message' => 'Oops Navigation not found',
                    'alert-type' => 'warning'
                );
        
                return Redirect::to('dashboard/navigation')->with($notification);
            };

            $valid = Validator::make($request->all(),[
                'name'  => 'required',
                'url'   => 'required',
                'icon'  => 'required',
            ]);
    
            if ($valid->fails()) {
                return redirect('dashboard/navigation')->withErrors($valid)->withInput();
            };

            $check->update([
                'name'      => $request->name,
                'url'       => $request->url,
                'icon'      => str_replace('_',' ', strtolower($request->icon)),
            ]);

            $notification = array(
                'message' => 'Success Update Navigation',
                'alert-type' => 'success'
            );
    
            return Redirect::to('dashboard/navigation')->with($notification);
        };

        return Redirect::to('dashboard/navigation');
    }

    public function change(Request $request){
        $check = NavModel::where('nav_id', $request->query('id'));

        if (count($check->get()) <= 0) {
            $notification = array(
                'message' => 'Oopps Navigation not found',
                'alert-type' => 'warning'
            );
            
            return Redirect::to('dashboard/navigation')->with($notification);
        };

        $access = UserAccessModel::where('nav_id', $request->query('id'));

        if (count($check->get()) >= 1) {
            $notification = array(
                'message' => 'Oopps Please disable access first in role menu!',
                'alert-type' => 'warning'
            );
            
            return Redirect::to('dashboard/navigation')->with($notification);
        };


        $check->update([
            'is_active' => $request->query('status') == 1 ? 0 : 1
        ]);

        $notification = array(
            'message'       => 'Success update status Navigation',
            'alert-type'    => 'success'
        );

        return Redirect::to('dashboard/navigation')->with($notification);
    }

    public function destroy($id = null){

        if ($id !== null) {
            $check = NavModel::where('nav_id', $id);

            if (count($check->get()) <= 0) {
                $notification = array(
                    'message' => 'Oopps Navigation not found',
                    'alert-type' => 'warning'
                );
                
                return Redirect::to('/dashboard/navigation')->with($notification);
            };

            $check->delete();
            $notification = array(
                'message' => 'Success Delete Navigation',
                'alert-type' => 'success'
            );
            
            return Redirect::to('/dashboard/navigation')->with($notification);

        };

        return Redirect::to('/dashboard/navigation');
    }
}
