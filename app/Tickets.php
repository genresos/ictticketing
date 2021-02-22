<?php

namespace App;

use App\Icon\Slug\HasSlug;
use App\Icon\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;


class Tickets extends Model
{
    use Filterable, HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'assigned_to',
        'category_id',
        'status_id',
        'priority_id'

    ];
    public function scopeLoadRelations($query)
    {}
    /**
     * Get the user that owns the article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

     /**
     * Get all the comments for the tickets.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(TicketsComment::class)->latest();
    }
    /**
    *Get the key name for route model binding.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the attribute name to slugify.
     *
     * @return string
     */
    public function getSlugSourceColumn()
    {
        return 'title';
    }

    /**
     * Get list of values which are not allowed for this resource
     *
     * @return array
     */
    // public function getBannedSlugValues()
    // {    
    //     return ['feed'];
    // }
    /**
     * Get all the tags that belong to the article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
        public function category()
        {
            return $this->belongsToMany(TicketCategory::class);
        }

        public function priority()
        {
            return $this->belongsToMany(TicketPriority::class);
        }
        public function status()
        {
            return $this->belongsToMany(TicketStatus::class);
        }
}
