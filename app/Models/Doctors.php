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
        'information',
        'specialist_area',
        'dob',
        'gender_id',
        'contact_1',
        'contact_2',
        'title',
        'degree',
        'kin_name',
        'kin_phone',
        'kin_email',
        'address',
    ];

    protected $dates = [
        'dob'
    ];

    /**
     * 
     */
    public function Genders() {
        return $this->hasMany(Genders::class, 'gender_id', 'id');
    }
   
    /**
     * The departments that belong to the doctor
     */
    public function departments()
    {
      //  return $this->belongsToMany(Departments::class, 'departments_doctors', 'departments_id', 'doctors_id');

      return $this->belongsToMany(Departments::class);
    }

    /**
     * The department that belong to the doctor
     */
    public function doctor()
    {
        return $this->belongsTo(Doctors::class, 'doctor_id');
    }



  

    
}


