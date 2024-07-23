<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $Addres = Category::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $Addres
        ]);
    }

    public function index()
    {
        $Category = Category::all();
        return $this->SuccessResponse([
            "data" => $Category
        ]);
    }

    public function store(Request $request)
    {
        $Category = Category::create($request->toArray());
        return $this->SuccessResponse($Category, '', "Created Successfuly");
    }

    public function update(Request $request, $id)
    {
        Category::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
