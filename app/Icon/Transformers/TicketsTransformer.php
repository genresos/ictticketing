<?php

namespace App\Icon\Transformers;

class TicketsTransformer extends Transformer
{
    protected $resourceName = 'tickets';

    public function transform($data)
    {
        return [
            'slug'              => $data['slug'],
            'title'             => $data['title'],
            'description'       => $data['description'],
            'assigned_to'       => $data['assigned_to'],
            'category_id'       => $data['category_id'],
            'status_id'         => $data['status_id'],
            'priority_id'       => $data['priority_id'],        
            'createdAt'         => $data['created_at']->toAtomString(),
            'updatedAt'         => $data['updated_at']->toAtomString(),
            'penulis' => [
                'username'  => $data['user']['username'],
                // 'bio'       => $data['user']['bio'],
                // 'image'     => $data['user']['image'],
                // 'following' => $data['user']['following'],
            ]
        ];
            
    }
}