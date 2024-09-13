<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LaguDaerah;
use Illuminate\Http\Request;

class LaguController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('pulau_id')) {
            $laguDaerah = LaguDaerah::where('pulau_id', $request->pulau_id)->paginate(10);
        } else {
            $laguDaerah = LaguDaerah::orderBy('id', 'DESC')->paginate(50);
        }
        // //pagination
        // $laguDaerah = LaguDaerah::orderBy('id', 'DESC')
        //     ->paginate(50);
        return response()->json([
            'status' => 'success',
            'data' => $laguDaerah
        ]);
    }

    //create
    public function store(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'provinsi' => 'required',
            'ibukota' => 'required',
            'pulau_id' => 'required',
            'lyrics' => 'required',
            'image_url' => 'required',


        ]);
        $laguDaerah = new LaguDaerah;
        $laguDaerah->judul = $request->judul;
        $laguDaerah->provinsi = $request->provinsi;
        $laguDaerah->ibukota = $request->ibukota;
        $laguDaerah->lyrics = $request->lyrics;

        $laguDaerah->pulau_id = $request->pulau_id;
        // //image
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $fileName = time() . '.' . $request->image_url->extension();
            $image->storeAs('public/images', $fileName);
            $laguDaerah->image_url = $fileName;
        } else {
            $laguDaerah->image_url = $request->image_url;
        }

        $laguDaerah->save();

        return response()->json([
            'status' => 'success',
            'data' => $laguDaerah
        ], 201);
    }

    //update
    public function update(Request $request, $id)
    {
        //validate
        $request->validate([
            'judul' => 'required',
            'lagu' => 'required',
            'daerah' => 'required'
        ]);
        $laguDaerah = LaguDaerah::find($id);
        $laguDaerah->judul = $request->judul;
        $laguDaerah->lagu = $request->lagu;
        $laguDaerah->daerah = $request->daerah;
        $laguDaerah->lyrics = $request->lyrics;

        $laguDaerah->pulau_id = $request->pulau_id;
        //image
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $fileName = time() . '.' . $request->image_url->extension();
            $image->storeAs('public/images', $fileName);
            $laguDaerah->image_url = $fileName;
        } else {
            $laguDaerah->image_url = $request->image_url;
        }
        $laguDaerah->save();

        return response()->json([
            'status' => 'success',
            'data' => $laguDaerah
        ], 200);
    }

    //delete
    public function destroy($id)
    {
        $laguDaerah = LaguDaerah::find($id);
        $laguDaerah->delete();

        return response()->json([
            'status' => 'success',
            'messages' => 'Lagu Daerah deleted successfully'
        ], 204);
    }
}
