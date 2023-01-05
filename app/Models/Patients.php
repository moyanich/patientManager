<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Patients extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'patients';

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
        'patient_no',
        'name',
        'middle_name',
        'last_name',
        'email',
        'gender_id',
        'dob',
        'registration_date',
        'home_phone',
        'cell_number',
        'work_phone',
        'nis',
        'trn',

       /* 


        'emergency_number',
       
        'current_address',
        'permanent_address',
        'city',
        'parish_id',
        'notes',
        'photo',
        'department_id',
        'status_id' */
    ];

    protected $dates = [
       'registration_date',
        'dob'
    ];

    /**
     * Get the Patient's full name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
   /* protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => "{$this->name} {$this->last_name}",
        );
    } */

    /**
     * Get the parish associated with the employee.
     */
    public function parish()
    {
        return $this->hasOne(Parish::class, 'parish_id');
    }

    /**
     * The roles that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function addresses()
    {
        return $this->belongsTo(Address::class, 'address1', 'patient_id');
    }


    
}
