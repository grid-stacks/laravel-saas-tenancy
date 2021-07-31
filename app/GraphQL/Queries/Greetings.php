<?php

namespace App\GraphQL\Queries;

class Greetings
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return "Hello, {$args['name']}!";
    }
}
