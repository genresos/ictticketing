<?php

namespace App\Icon\Transformers;

class TicketPriorityTransformer extends Transformer
{
    protected $resourceName = 'priority';

    public function transform($data)
    {
        return $data;
    }
}