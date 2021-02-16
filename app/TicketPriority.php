<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketPriority extends Model
{
    protected $table = "ticket_priority";
    protected $primaryKey = "priority_id";

    protected $fillable = [
        'priority_id',
        'name',
    ];
}
