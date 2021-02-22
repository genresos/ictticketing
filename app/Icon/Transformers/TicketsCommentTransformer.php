<?php

namespace App\Icon\Transformers;

class TicketsCommentTransformer extends Transformer
{
    protected $resourceName = 'tickets_comment';

    public function transform($data)
    {
        return [
            'id'        => $data['id'],
            'comment_text'      => $data['comment_text'],
            'createdAt' => $data['created_at']->toAtomString(),
            'updatedAt' => $data['updated_at']->toAtomString(),
            'author' => [
                'username'  => $data['user']['username'],
            ]
        ];
    }
}