<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function show($id)
    {
        $Image = Image::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $Image
        ]);
    }

    public function index()
    {
        $Image = Image::all();
        return $this->SuccessResponse([
            "data" => $Image
        ]);
    }

    public function store(Request $request)
    {
        try {
            $Image = Image::create($request->toArray());
            return $this->SuccessResponse($Image, '', "Created Successfuly");
            //code...
        } catch (\Throwable $th) {
            return $th;
            //throw $th;
        }
      
    }

    public function update(Request $request, $id)
    {
        Image::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        Image::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
