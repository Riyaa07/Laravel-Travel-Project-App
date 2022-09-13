<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_Feedback extends Model
{
    protected $fillable = [
        "u_name",
        "mobile",
        "email_id",
        "feedback_info"
    ];

    protected $feed = 'customer_feedbacks';
}
