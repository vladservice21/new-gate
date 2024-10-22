<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class ApiRequest extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'counterweight_type',
        'material',
        'gate_opening',
        'gate_height',
        'internal_frame_tubes_width',
        'internal_frame_tubes_height',
        'clearance_under_gate',
        'guide',
        'total_length',
        'pages',
        'pipe_angle',
        'frame',
        'wicket',
        'wicket_left',
        'created_at'
    ];
}
