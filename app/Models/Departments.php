<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'departments';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    protected $fillable = ['name', 'description', 'status'];

    /**
     * The The doctors that belong to the departments
     */
    public function doctors()
    {
        return $this->belongsToMany(Doctors::class, 'departments_doctors', 'doctors_id', 'departments_id');
    }

   
    /**
     * 
     * 
     */
   /* public function department()
    {
        return $this->belongsTo(Departments::class, 'doctor_id');
    } */

   
  


    
}

