<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffProfile extends Model
{
    protected $fillable = [
        'user_id', 'staff_number', 'job_title', 'grade', 'department', 'bank_name', 'bank_account', 'bank_sort_code'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
