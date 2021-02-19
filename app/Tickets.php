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

     /**
     * Load all required relationships with only necessary content.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLoadRelations($query)
    {
        // return 
        // function($query) {
        //     $query->where('user_id', auth()->id());
        // }
    }
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
     * Get all the ticketscategory that belong to the article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */

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
    
}
