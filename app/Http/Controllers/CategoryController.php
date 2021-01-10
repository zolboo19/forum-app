<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return  CategoryResource::collection(Category::latest()->get());
    }
    public function store(Request $request)
    {
        // Category::create($request->all());
        $category = new Category;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();
        return response('Категорыг амжилттай үүсгэлээ.', Response::HTTP_CREATED);
    }
    public function show(Category $category)
    {
        return new CategoryResource($category);
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return response('Категорын мэдээллийг амжилттай шинэчиллээ.', Response::HTTP_ACCEPTED);
    }
}
