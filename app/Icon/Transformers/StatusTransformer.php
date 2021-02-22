<?php

namespace App\Icon\Transformers;

class StatusTransformer extends Transformer
{
    protected $resourceName = 'status';

    public function transform($data)
    {
        return $data;
    }
}