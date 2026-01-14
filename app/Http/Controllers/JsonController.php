<?php

namespace App\Http\Controllers;
use App\Models\Json;
use Illuminate\Http\Request;

class JsonController extends Controller
{

    public function index(){
        // show one
        // $json = Json::find(1);
        // return $json->meta_data;

        // show all
        // u can search also
        $json = Json::get();
        return $json;
    }


    public function update(){
        // 1 change data
        // $json = Json::where('id', 1)->update([
        //     'meta_data->name' => 'Khalid'
        // ]);

        // 2 change data
        // for this 2 chnage data method we will,
        // use in json model,
        // "meta_data" => 'json' to "meta_data" => AsArrayObject::class,
        // $json = Json::find(1);
        // $json->meta_data['name'] = 'Ahmad';
        // $json->save();

        // remove key
        $json = Json::find(1);
        $json->meta_data = collect($json->meta_data)->forget('mobile_number');
        $json->save();
    }


    public function store(){
        // 1st way to save data as json
        // $json = new Json;
        // $json->meta_data =[
        //     'name' => 'Mansoor',
        //     'email' => 'se.km@gmail.com',
        //     'mobile_number' => '1234567890'
        // ];
        // $json->save();

        // 2nd way to save data as json
        // u can also save nested json
        $json = Json::create([
            'meta_data' => [
                'name' => 'Ahmad',
                'email' => 'en.km@gmail.com',
                'mobile_number' => '0034567890'
            ]
        ]);
    }
}
