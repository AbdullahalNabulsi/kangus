<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function show($id)
    {
        $Quotation = Quotation::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $Quotation
        ]);
    }

    public function index()
    {
        $Quotation = Quotation::all();
        return $this->SuccessResponse([
            "data" => $Quotation
        ]);
    }

    public function store(Request $request)
    {
        $Quotation = Quotation::create($request->toArray());
        return $this->SuccessResponse($Quotation, '', "Created Successfuly");
    }

    public function update(Request $request, $id)
    {
        Quotation::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        Quotation::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
