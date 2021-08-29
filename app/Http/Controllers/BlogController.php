<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Blog;
use  App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    public function blog(){

        $blogs = Blog::orderBy('id', 'desc')->paginate();

        return view('paginas.blog', compact('blogs'));
    }

    public function create(){
        return view('paginas.create');
    }



    public function store(BlogRequest $request){

       /* $blog= new Blog;

        $blog->autor= $request->autor;
        $blog->titulo= $request->titulo;
        $blog->contenido= $request->contenido;
        $blog->resumen= $request->resumen;

        $blog->save();*/

/*Asignacion masiva*/
        $blog=Blog::create($request->all());

        return redirect()->route('blog.show', $blog);

    }

    public function show(Blog $blog){
       return view('paginas.show', compact('blog'));
   }

   


   public function edit(Blog $blog){

     return view('paginas.edit', compact('blog'));
 }


 public function update(BlogRequest $request, Blog $blog){

    $blog->update($request->all());
    return redirect()->route('blog.show', $blog);

}

public function destroy(Blog $blog){
    $blog->delete();

    return redirect()->route('blog');
}

}
