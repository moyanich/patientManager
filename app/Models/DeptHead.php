<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeptHead extends Model
{
    use HasFactory;

    /**
     * Table Name
     */
    protected $table = 'dept_heads';

    /**
     * Primary Key
     */
    protected $primaryKey = 'id';
 
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
