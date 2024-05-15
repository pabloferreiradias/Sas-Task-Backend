<?php

namespace App\GraphQL\Queries\Store;

use App\Models\Store;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class StoresQuery extends Query
{
    protected $attributes = [
        'name' => 'stores',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Store'));
    }

    public function resolve($root, $args)
    {
        return Store::all();
    }
}
