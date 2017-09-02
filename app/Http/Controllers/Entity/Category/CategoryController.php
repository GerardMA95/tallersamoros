<?php

namespace App\Http\Controllers\Entity\Category;

use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  string  $patent
     * @param  string  $category
     * @return Response
     */
    public function list($patent = null, $category = null)
    {
        // @if (request()->route('category') === 'none')
        // $user = DB::table('users')->where('name', 'John')->first();
        if($category !== 'none' && !is_null($category)){
            if($category !== 'all'){
                $category = DB::table('category')->where('short_name', $category)->first();
            }else{
                $category = DB::table('category')->get();
            }
            // var_dump("category");
            //
            // var_dump($category);
        }else if($patent !== 'none' && !is_null($patent)){
            if($patent !== 'all'){
                $patent = DB::table('patent')->where('short_name', $patent)->first();
            }else{
                $patent = DB::table('patent')->get();
            }
        }
        return view('item.itemSearch', ['patents' => $patent, 'categories' => $category]);
    }
}