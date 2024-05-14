<?php

namespace App\GraphQL\Types;

use App\Models\Book;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class BookType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Book',
        'description' => 'Collection of books',
        'model' => Book::class
    ];

    public function fields(): array
    {
        return [
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Name of book'
            ],
            'isbn' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ISBN code of the book'
            ],
            'value' => [
                'type' => Type::nonNull(Type::float()),
                'description' => 'Value of the book'
            ],
            'stores' => [
                'type' => Type::listOf(GraphQL::type('Store')),
                'description' => 'List of stores'
            ]
        ];
    }
}
