<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return response()->json([
            'status' =>  true,
            'message' => 'Books retrieved successfully',
            'data' => $books
        ], 200);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'published_year' => 'required|integer|min:1000|max:' .date('Y'),
            'genre' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($validator->fails()) 
        {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $book = Book::create($request->all());
        return response()->json([
            'status' =>  true,
            'message' => 'Book created successfully',
            'data' => $book
        ], 201);
       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $book = Book::findOrFail($id);
        return response()->json([
            'status' =>  true,
            'message' => 'Book found successfully',
            'data' => $book
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'published_year' => 'required|integer|min:1000|max:' .date('Y'),
            'genre' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($validator->fails()) 
        {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $book = Book::findOrFail($id);
        $book->update($request->all());
        return response()->json([
            'status' =>  true,
            'message' => 'Book updated successfully',
            'data' => $book
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $book = Book::findOrFail($id);
        $book->delete();
        return response()->json ([
            'status' =>  true,
            'message' => 'Book deleted successfully'
        ], 204);
    }
}
