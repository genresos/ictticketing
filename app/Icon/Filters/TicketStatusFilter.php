<?php

namespace App\Icon\Filters;

use App\Tag;
use App\User;

class TicketCategoryFilter extends Filter
{
    /**
     * Filter by author username.
     * Get all the ticket category by the user with given username.
     *
     * @param $username
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function author($username)
    {
        $user = User::whereUsername($username)->first();

        $userId = $user ? $user->id : null;

        return $this->builder->whereUserId($userId);
    }

    /**
     * Filter by favorited username.
     * Get all the ticket category favorited by the user with given username.
     *
     * @param $username
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function favorited($username)
    {
        $user = User::whereUsername($username)->first();

        $statuseIds = $user ? $user->favorites()->pluck('id')->toArray() : [];

        return $this->builder->whereIn('id', $statuseIds);
    }

    /**
     * Filter by tag name.
     * Get all the ticket category tagged by the given tag name.
     *
     * @param $name
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function tag($name)
    {
        $tag = Tag::whereName($name)->first();

        $statuseIds = $tag ? $tag->statuses()->pluck('status_id')->toArray() : [];

        return $this->builder->whereIn('id', $statuseIds);
    }
}