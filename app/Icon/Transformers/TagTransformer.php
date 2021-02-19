<?php

namespace App\Icon\Transformers;

class TagTransformer extends Transformer
{
    protected $resourceName = 'tag';

    public function transform($data)
    {
        return $data;
    }
}