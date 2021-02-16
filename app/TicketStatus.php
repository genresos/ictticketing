<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketStatus extends Model
{
    protected $table = "ticket_status";
    protected $primaryKey = "status_id";

    protected $fillable = [
        'status_id',
        'name',
    ];
}
