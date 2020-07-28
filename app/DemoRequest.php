<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemoRequest extends Model
{
    protected $fillable =[
        'demo_category','agency_name','contact_person','phone_number','email','appointment_date',
        'suitable_time'
    ];
}
