<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Formation
 *
 * @package App
 * @property string $title
 * @property string $description
*/
class Formation extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['title', 'description'];
    

    public static function storeValidation($request)
    {
        return [
            'title' => 'max:191|required',
            'description' => 'max:191|nullable'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'title' => 'max:191|required',
            'description' => 'max:191|nullable'
        ];
    }

    

    
    
    
}
