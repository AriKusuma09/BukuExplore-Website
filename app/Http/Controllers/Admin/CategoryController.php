<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('dashboard.category.category-dashboard', compact('category'));
    }

    // Add Category
    public function add()
    {
        
        return view('dashboard.category.add');
    }

    public function insert(Request $request)
    {
        $category = new Category();
        $validatedData = $request->validate([
            'name' => 'required|max:55|unique:categories',
            'slug' => 'required|unique:categories',
            'description' => 'required',
            'image' => 'required|image|file|max:2048'
        ]);


        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/upload/category/',$filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE?'1':'0';
        $category->popular = $request->input('popular') == TRUE?'1':'0';
        $category->save($validatedData);
        return redirect('/categories')->with('success', 'Category Success Added');
    }

    // Edit Category
    public function edit($id)
    {
        $category = Category::find($id); 
        return view('dashboard.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if($request->hasFile('image'))
        {
            $path = 'assets/upload/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/upload/category/',$filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE?'1':'0';
        $category->popular = $request->input('popular') == TRUE?'1':'0';
        $category->update();
        return redirect('/categories')->with('success', 'Category Success Updated');
    }


    // Delete Category
    public function delete($id)
    {
       $category = Category::find($id);
       if($category->image)
       {
           $path = 'assets/upload/category/'.$category->image;
           if(File::exists($path))
           {
               File::delete($path);
           }
       }
       $category->delete();
       return redirect('categories')->with('success', 'Category Success Deleted');
    }
}
