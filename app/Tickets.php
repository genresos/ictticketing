<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $table = "tickets";
    protected $primaryKey = "ticket_id";

    protected $fillable = [
        'ticket_id',
        'title',
        'description',
        'assigned_to',
        'category_id',
        'status_id',
        'priority_id',
        'user_id',

    ];
}
