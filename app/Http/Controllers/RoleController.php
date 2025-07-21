<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        // it will give role id 1 record
        $role = Role::find(3);
        // it will return role id 1, members and pivot 'user_roles' records
        return $role->members;
    }

    // attach() add new records
    // detach() delete records
    // sync() add, update, delete
    public function store(){
        // 1: 1 and 2 member assign to role 3
        // 2: if want to update just changes member id [1,2] to [1,3]
        // 3: if want to delete just remove member id from array like [1,2] to [2]

        $role = Role::find(3);
        $members = [1,2];
        $role->members()->sync($members);
        // check these for sync
        // 1: if member ids [1,2,3] not exist then sync will add
        // 2: if member ids [1,2,3] exist already and u pass again same nothing will do sync
        // 3: if member ids [1,2,3] exist already and u pass [1,2] it will delete id 3
        // eg if already [1,2] exists and u pass [1,3]
        // 1 stays and 3 will add and 2 will remove.
    }
}