<?php

namespace App\Icon\Filters;

use App\TicketCategory;
use App\TicketsComment;
use App\TicketPriority;
use App\TicketStatus;
use App\User;

class TicketsFilter extends Filter
{
    
// /**
//      * Filter by author username.
//      * Get all the articles by the user with given username.
//      *
//      * @param $username
//      * @return \Illuminate\Database\Eloquent\Builder
//      */
//     protected function author($username)
//     {
//         $user = User::whereUsername($username)->first();

//         $userId = $user ? $user->id : null;

//         return $this->builder->whereUserId($userId);
//     }

//     /**
//      * Filter by tag name.
//      * Get all the articles tagged by the given tag name.
//      *
//      * @param $name
//      * @return \Illuminate\Database\Eloquent\Builder
//      */
//     protected function tag($name)
//     {
//         $tag = Tag::whereName($name)->first();

//         // $articleIds = $tag ? $tag->articles()->pluck('article_id')->toArray() : [];

//         return $this->builder->whereIn('id', $articleIds);
//     }
}