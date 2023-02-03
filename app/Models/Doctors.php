<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'doctors';

    // Primary Key
    public $primaryKey = 'id';
 
    // Timestamps
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'employee_no',
        'first_name',
        'last_name',
        'email',
        'designation',
        'degrees',



        'contact_1',
        'contact_2',
        'title',
        'degree',
    ];
}
