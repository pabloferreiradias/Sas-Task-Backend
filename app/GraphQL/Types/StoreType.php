<?php

namespace App\GraphQL\Types;

use App\Models\Store;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class StoreType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Store',
        'description' => 'Collection of stores',
        'model' => Store::class
    ];

    public function fields(): array
    {
        return [
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Name of store'
            ],
            'address' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Address of the store'
            ],
            'active' => [
                'type' => Type::nonNull(Type::boolean()),
                'description' => 'Value for active status'
            ],
            'books' => [
                'type' => Type::listOf(GraphQL::type('Book')),
                'description' => 'List of books in the store'
            ]
        ];
    }
}
