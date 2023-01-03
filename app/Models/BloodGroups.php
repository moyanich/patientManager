<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodGroups extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'blood_groups';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    protected $fillable = ['bloodtype', 'subtype'];
}
