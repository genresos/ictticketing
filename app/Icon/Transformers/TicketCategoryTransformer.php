<?php

namespace App\Icon\Transformers;

class TicketCategoryTransformer extends Transformer
{
    protected $resourceName = 'category';

    public function transform($data)
    {
        return $data;
    }
}