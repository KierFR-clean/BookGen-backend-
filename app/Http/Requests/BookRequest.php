<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => [
                'required',
                'integer',
                'min:1000',
                'max:' . date('Y')
            ],
            'genre' => 'required|string|max:255',
            'description' => 'required|string|max:255',

            //
        ];
    }

    public function messages() {
        return [
            'title.required' => 'The book title is required',
            'title.max' => 'The book title cannot exceed 255 characters.',
            'author.required' => 'The author name is required',
            'author.max' => 'The author name cannot exceed 255 characters.',
            'published_year.required' => 'The published year is required',
            'published_year.integer' => 'The published year must be a valid year',
            'published_year.min' => 'The published year must be at least 1000',
            'published_year.max' => 'The published year cannot exceed the current year or cannot be in future',
            'genre.required' => 'The book genre is required',
            'genre.max' => 'The book genre cannot exceed 255 characters.',
            'description.required' => 'The book description is required',
            'description.max' => 'The book description cannot exceed 255 characters.',
        ];
    }
}
