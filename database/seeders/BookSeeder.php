<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $books = [
            [
                'title' => 'The Phoenix Project: A Novel About IT, DevOps, and Helping Your Business Win',
                'author' => 'Gene Kim, Kevin Behr, and George Spafford',
                'published_year' => 2018,
                'genre' => 'DevOps',
                'description' => 'A novel that illustrates the principles of DevOps.'
            ],

            [
                'title' => 'Java: A Beginner\'s Guide',
                'author' => 'Herbert Schildt',
                'published_year' => 2014,
                'genre' => 'Java',
                'description' => 'An accessible introduction to Java programming.'
            ],

            [
                'title' => 'Fluent Python: Clear, Concise, and Effective Programming',
                'author' => 'Luciano Ramalho',
                'published_year' => 2015,
                'genre' => 'Python',
                'description' => 'An in-depth look at Python’s best features and idioms.'
            ],

            [
                'title' => 'Kubernetes Up & Running: Dive into the Future of Infrastructure',
                'author' => 'Kelsey Hightower, Brendan Burns, and Joe Beda',
                'published_year' => 2017,
                'genre' => 'Cloud Computing',
                'description' => 'A guide to deploying and managing applications with Kubernetes.'
            ],

            [
                'title' => 'The Art of Computer Programming',
                'author' => 'Donald E. Knuth',
                'published_year' => 2011,
                'genre' => 'Computer Science',
                'description' => 'A comprehensive series on algorithms and programming.'
            ],

            [
                'title' => 'Head First Design Patterns',
                'author' => 'Eric Freeman and Bert Bates',
                'published_year' => 2004,
                'genre' => 'Software Development',
                'description' => 'A fun and engaging guide to design patterns in software.'
            ],

            [
                'title' => 'Deep Learning',
                'author' => 'Ian Goodfellow, Yoshua Bengio, and Aaron Courville',
                'published_year' => 2016,
                'genre' => 'Machine Learning',
                'description' => 'An introduction to deep learning and its applications.'
            ],

            [
                'title' => 'Programming in Go: Creating Applications for the 21st Century',
                'author' => 'Mark Summerfield',
                'published_year' => 2016,
                'genre' => 'Go',
                'description' => 'A comprehensive guide to programming in Go.'
            ],

            [
                'title' => 'Designing Data-Intensive Applications',
                'author' => 'Martin Kleppmann',
                'published_year' => 2017,
                'genre' => 'Data Engineering',
                'description' => 'Fundamentals of data systems and their design.'
            ],

            [
                'title' => 'The Ruby Programming Language',
                'author' => 'David Flanagan and Yukihiro Matsumoto',
                'published_year' => 2008,
                'genre' => 'Ruby',
                'description' => 'An in-depth guide to the Ruby programming language.'
            ],

            [
                'title' => 'Learning Python',
                'author' => 'Mark Lutz',
                'published_year' => 2013,
                'genre' => 'Python',
                'description' => 'Comprehensive coverage of Python programming.'
            ],

            [
                'title' => 'JavaScript: The Good Parts',
                'author' => 'Douglas Crockford',
                'published_year' => 2008,
                'genre' => 'JavaScript',
                'description' => 'A deep dive into the core features of JavaScript.'
            ],

            [
                'title' => 'Introduction to the Theory of Computation',
                'author' => 'Michael Sipser',
                'published_year' => 2013,
                'genre' => 'Computer Science',
                'description' => 'A comprehensive introduction to computational theory.'
            ],

            [
                'title' => 'The Clean Coder: A Code of Conduct for Professional Programmers',
                'author' => 'Robert C. Martin',
                'published_year' => 2011,
                'genre' => 'Software Development',
                'description' => 'Guidelines and best practices for professional software developers.'
            ],

            [
                'title' => 'Eloquent JavaScript: A Modern Introduction to Programming',
                'author' => 'Marijn Haverbeke',
                'published_year' => 2018,
                'genre' => 'JavaScript',
                'description' => 'A deep dive into JavaScript and programming concepts.'
            ],

            [
                'title' => 'Python Crash Course: A Hands-On, Project-Based Introduction to Programming',
                'author' => 'Eric Matthes',
                'published_year' => 2015,
                'genre' => 'Python',
                'description' => 'A fast-paced introduction to Python programming.'
            ],

            [
                'title' => 'You Don\'t Know JS (book series)',
                'author' => 'Kyle Simpson',
                'published_year' => 2014,
                'genre' => 'JavaScript',
                'description' => 'An in-depth exploration of the JavaScript language.'
            ],

            [
                'title' => 'The Pragmatic Programmer: Your Journey To Mastery',
                'author' => 'Andrew Hunt and David Thomas',
                'published_year' => 2019,
                'genre' => 'Software Development',
                'description' => 'Practical advice and techniques for software development.'
            ],

            [
                'title' => 'Clean Code: A Handbook of Agile Software Craftsmanship',
                'author' => 'Robert C. Martin',
                'published_year' => 2008,
                'genre' => 'Software Development',
                'description' => 'A guide to writing clean and maintainable code.'
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
