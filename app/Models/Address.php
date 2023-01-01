<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    /**
     * Table Name
     */
    protected $table = 'address';

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
    protected $fillable = ['patient_id', 'address1', 'address2', 'city'];

   /**
     * The roles that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
   /* public function patients()
    {
        return $this->belongsTo(Address::class, 'address', 'patient_id');
    } */


}
