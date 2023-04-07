<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts =  Post::orderBy('title','desc')->get();
        $posts =  Post::orderBy('created_at','desc')->paginate(5);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
            
        ]);
        //Handle File Upload
        if ($request->hasFile('cover_image')) {
            # code...
        
        // Get file name With Extention
        $filenameWithExtention = $request->file('cover_image')->getClientOriginalName();

        //Get file name With Extention
        $filenameWithoutExtention = pathinfo($filenameWithExtention, PATHINFO_FILENAME);

        //Get the Extention
        $extention = $request->file('cover_image')->getClientOriginalExtension();

        // file name to store
        $fileNameToStore = $filenameWithoutExtention.'_'.time().'.'.$extention;
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        //Upload image
        if ($request != null) {
            $file = $request->file('cover_image');
            
            $filePath = '/storage/cover_image';
            $file->storeAs($filePath, $fileNameToStore);

           // $request->file('cover_image')->storeAs('/public/cover_image',$fileNameToStore);

        } else {
            return 'gg' ;
        }
        
        // $path = 


        $post = new Post();
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;

        $post->save();

        return redirect('/posts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        
        $post = Post::find($id);
        
        if (auth()->user()->id !== $post->user_id) {
             return redirect('/posts')->with('error','Unauthorized Page');
        }

        return view('posts.edit')->with('post',$post);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'body' => 'required',
            
        ]);

        //Handle File Upload
        if ($request->hasFile('cover_image')) {
            
            $filenameWithExtention = $request->file('cover_image')->getClientOriginalName();

            //Get file name With Extention
            $filenameWithoutExtention = pathinfo($filenameWithExtention, PATHINFO_FILENAME);

            //Get the Extention
            $extention = $request->file('cover_image')->getClientOriginalExtension();

            // file name to store
            $fileNameToStore = $filenameWithoutExtention.'_'.time().'.'.$extention;
        }
        //Upload image

        if ($request != null) {
            $file = $request->file('cover_image');
            
            $filePath = '/storage/cover_image';
            $file->storeAs($filePath, $fileNameToStore);

           // $request->file('cover_image')->storeAs('/public/cover_image',$fileNameToStore);

        } else {
            return 'ydk fih' ;
        }
        
        $path = $request->file('cover_image')->storeAs('/public/cover_image',$fileNameToStore);


        $post = Post::find($id);
        
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('body');

        if ($request->hasFile('cover_image')) {
            $post->cover_image = $fileNameToStore;
        }
        
        $post->save();

        return redirect('/posts')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $post = Post::find($id);
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error','Unauthorized Page');
       }
       if($post->cover_image != 'noimage.jpg'){
        Storage::delete('storage/cover_images/'.$post->cover_image);
       }
        $post->delete();

        return redirect('/posts')->with('success','Post Deleted');

    }
}
