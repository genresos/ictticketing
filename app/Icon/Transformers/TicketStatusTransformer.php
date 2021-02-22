<?php

namespace App\Icon\Transformers;

class TicketStatusTransformer extends Transformer
{
    protected $resourceName = 'status';

    public function transform($data)
    {
        return $data;
    }
}