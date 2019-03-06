<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @package App
 * @property string $title
*/
class Role extends Model
{
    protected $fillable = ['title'];
    protected $hidden = [];
    
    const ADMIN = 1;
    const SIMPLE_USER = 2;     
    
    public function permission()
    {
        return $this->belongsToMany(Permission::class, 'permission_role');
    }
    
}
