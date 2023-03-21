<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentHead extends Model
{
    use HasFactory;

    /**
     * Table Name
     */
    protected $table = 'department_head';

    /**
     * Primary Key
     */
    protected $primaryKey = 'department_id';

    public $incrementing = false;
 
    /**
     * Timestamps
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['doctor_id', 'department_id'];


}
