<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        // it will give member id 1 record
        //$member = Member::find(1);
        // it will return member id 1, role and pivot 'user_roles' record
        //return $member->roles;
        // it will give all members
        $members = Member::get();

        foreach($members as $member){
            // it will give member name & email from member
            echo $member->member_name."<br>";
            echo $member->email."<br>";

            foreach($member->roles as $role){
                // it will give role name from roles
                echo $role->role_name."/";
            }

            echo "<hr>";
        }
    }

    // attach() add new records
    // detach() delete records
    // sync() add, update, delete

    public function store(){
        // 5 is id in members
        $member = Member::find(5);
        
        // 1 is id in roles
        //$member->roles()->attach(1);

        // if u want to add multiple roles then,
        // 1 and 2 roles id
        //$roles = [1,2];
        //$member->roles()->attach($roles);

        // 1 is id in roles
        //$member->roles()->detach(3);

        // 1: 1 and 2 role assign to member 5
        // 2: if want to update just changes role id [1,2] to [1,3]
        // 3: if want to delete just remove role id from array like [1,2] to [2]
        $roles = [1,2,3];
        $member->roles()->sync($roles);
        // check these for sync
        // 1: if role ids [1,2,3] not exist then sync will add
        // 2: if role ids [1,2,3] exist already and u pass again same nothing will do sync
        // 3: if role ids [1,2,3] exist already and u pass [1,2] it will delete id 3
        // eg if already [1,2] exists and u pass [1,3]
        // 1 stays and 3 will add and 2 will remove.
    }
}
