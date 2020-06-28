<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class boloConttroler extends Controller
{
     public function writePost()
     {
         $category=DB::table('categories')->get();
         return view('writePost',compact('category'));
     }
     public function addCategory()
     {
         return view('addCategory');
     }
     public function storeCategory(Request $request)
     {
         $data=array();
         $data['name']=$request->name;
         $data['slug']=$request->slug;
         $category=DB::table('categories')->insert($data);
        // return response()->json($data);
        //echo "<pre>";
        //print_r ($data);
        return view('addCategory');
     }
     public function allCategory()
     {
         $category=DB::table('categories')->get();
         return view('allCategory',compact('category'));
     }
     public function deleteCategory($id)
     {
      $delete=DB::table('categories')->where('id',$id)->delete();
      return Redirect()->back();
        
     }
     public function editCategory($id)
     {
        $category=DB::table('categories')->where('id',$id)->first();
        return view('editCategory',compact('category'));
     }
     public function updateCategory(Request $request,$id)
     {
        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        $category=DB::table('categories')->where('id',$id)->update($data);
        return Redirect()->route('all.category');

     }
     public function storePost(Request $request)
     {
        $data=array();
        $data['title']=$request->title;
        $data['category_id']=$request->category_id;
        $data['details']=$request->details;
        $image=$request->file('image');
        if($image){
            $image_name=str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path.$image_full_name);
            $data['image']=$image_url;
            DB::table('posts')->insert($data);
            return Redirect()->route('all.category');
            
        }
        else{
            DB::table('posts')->insert($data);
            return Redirect()->route('all.category');
        }
       
     }
}
