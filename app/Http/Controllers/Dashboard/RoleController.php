<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\RoleModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function index(){
        $title = 'Role';


        $data = RoleModel::all();

        return view('dashboard.role.index', compact('title','data'));
    }

    public function store(Request $request){
        $valid = Validator::make($request->all(),[
            'role_name' => 'required|unique:user_role,role'
        ]);

        if ($valid->fails()) {
            return redirect('dashboard/role')->withErrors($valid)->withInput();
        };

        RoleModel::create([
            'role' => $request->role_name
        ]);

        $notification = array(
            'message' => 'Success Add New Role',
            'alert-type' => 'success'
        );

        return Redirect::to('dashboard/role')->with($notification);
    }

    public function update(Request $request,$id = null){
        if ($id !== null) {
            $check = RoleModel::where('role_id', $id);

            if(count($check->get()) <= 0){
                $notification = array(
                    'message' => 'Oops role not found',
                    'alert-type' => 'warning'
                );
        
                return Redirect::to('dashboard/role')->with($notification);
            };

            $valid = Validator::make($request->all(),[
                'role_name' => 'required|unique:user_role,role'
            ]);
    
            if ($valid->fails()) {
                return redirect('dashboard/role')->withErrors($valid)->withInput();
            };

            $check->update([
                'role' => $request->role_name
            ]);

            $notification = array(
                'message' => 'Success Update Role',
                'alert-type' => 'success'
            );
    
            return Redirect::to('dashboard/role')->with($notification);
        };

        return Redirect::to('dashboard/role');
    }

    public function destroy($id = null){

        if ($id !== null) {
            $check = RoleModel::where('role_id', $id);

            if (count($check->get()) <= 0) {
                $notification = array(
                    'message' => 'Oopps Role not found',
                    'alert-type' => 'warning'
                );
                
                return Redirect::to('/dashboard/role')->with($notification);
            };

            $availableUser = UserModel::where('role_id', $id);
            if (count($availableUser->get()) >= 1) {
                $notification = array(
                    'message' => 'Oopps Role has been taken, please change role in user first',
                    'alert-type' => 'warning'
                );
                
                return Redirect::to('/dashboard/role')->with($notification);
            };

            $check->delete();
            $notification = array(
                'message' => 'Success Delete Role',
                'alert-type' => 'success'
            );
            
            return Redirect::to('/dashboard/role')->with($notification);

        };

        return Redirect::to('/dashboard/role');
    }
}
