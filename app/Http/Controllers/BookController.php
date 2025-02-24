<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use App\Http\Requests\BookRequest;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
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
     * 
     * - Adds a new book to book collection
     * - validator to check if published year are in are from 1000 to current year
     * - if validation fails, return validation error 
     * - if validation passes, adds a new book to the collection
     */
    public function store(BookRequest $request)
    {
        $bookValidated = $request->validated();

        $book = Book::create($bookValidated);
        return response()->json([
            'status' =>  true,
            'message' => 'Book created successfully',
            'data' => $book
        ], 201);
       
    }

    /**
     * Display the specified resource.
     * - If book doesn't found, I use findOrFail instead of find so that Laravel will 
     * automatically throw an 404 error if the book is not found
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
     * - Same with add I first check if book credentials are all making sense before saving it
     * - I use findOrFail instead of find so that Laravel will automatically throw an 404 error if the book is not found
     * 
     */
    public function update(BookRequest $request, $id)
    {
        //
        $bookValidated = $request->validated();

        $book = Book::findOrFail($id);
        $book->update($bookValidated);
        return response()->json([
            'status' =>  true,
            'message' => 'Book updated successfully',
            'data' => $book
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * - It removes the book in the collection completely
     * -  It finds the book by id and if succesfull, it removes it from the collection
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
