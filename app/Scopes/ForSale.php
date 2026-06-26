<?php

namespace App\Scopes;

use Statamic\Query\Scopes\Scope;

class ForSale extends Scope
{
    public function apply($query, $values)
    {
        $query->where('for_sale', true);
    }
}
