<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get all that belong to the tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class)->latest();
    }
	public function categorys()
    {
        return $this->belongsToMany(Category::class)->latest();
    }
	public function statuses()
    {
        return $this->belongsToMany(Status::class)->latest();
    }
    public function prioritys()
    {
        return $this->belongsToMany(Priority::class)->latest();
    }
    public function ticketss()
    {
        return $this->belongsToMany(Tickets::class)->latest();
    }
    public function comments()
    {
        return $this->belongsToMany(Comment::class)->latest();
    }
}
