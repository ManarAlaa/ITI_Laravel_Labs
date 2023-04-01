<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        $allPosts=[
            [ 'id'=>1,
            'title'=>'javascript',
            'description'=>'hello javascript',
            'posted_by'=>'manar',
            'created_at'=>'2023-4-1']
            ,
            [ 'id'=>2,
            'title'=>'Laravel',
            'description'=>'hello laravel',
            'posted_by'=>'manar',
            'created_at'=>'2023-4-1']
            ,
            [ 'id'=>3,
            'title'=>'angular',
            'description'=>'hello angular',
            'posted_by'=>'manar',
            'created_at'=>'2023-4-1']

        ];
        return view('posts.index', [
            'posts' => $allPosts
        ]);
    }
    public function show()
    {
       $post=[
         'id'=>1,
            'title'=>'javascript',
            'description'=>'hello javascript',
            'posted_by'=>'manar',
            'email'=>'manaralaa@gmail.com',
            'created_at'=>'2023-4-1'
       ];
        return view('posts.show', [
            'post' => $post
        ]);
        
    }

    public function Create()
    {
      
        
        return view('posts.create');
        
        
    }
    public function	store(Request $request)
    {

        //saving

        return redirect('posts')->with('success', 'Record created successfully');

        
    }
    public function Edit(Request $id)
    {
        $post=['id' =>$id];
        return view('posts.edit',$post); 
    }

    public function Update (Request $request)
    {

        //updating

        return redirect('posts')->with('success', 'Record updated successfully');

        
    }
    public function destroy($id)
    {
        //delete the record
        return redirect('posts')->with('success', 'Record Deleted successfully');
    }
}
