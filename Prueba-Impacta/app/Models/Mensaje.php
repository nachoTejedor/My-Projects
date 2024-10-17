<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mensaje
 *
 * @property $id
 * @property $name
 * @property $phone
 * @property $email
 * @property $planet
 * @property $message
 * @property $result
 * @property $privacy
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mensaje extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'phone', 'email', 'planet', 'message', 'result', 'privacy'];


}
