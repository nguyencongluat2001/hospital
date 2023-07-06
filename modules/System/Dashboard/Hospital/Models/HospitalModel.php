<?php

namespace Modules\System\Dashboard\Hospital\Models;

use Illuminate\Database\Eloquent\Model;

class HospitalModel extends Model
{
    protected $table = 'hospitals';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name_hospital',
        'code',
        'decision',
        'avatar',
        'current_status'
    ];

    public function filter($query, $param, $value)
    {
        switch ($param) {
            // case 'search':
            //     $this->value = $value;
            //     // dd($this->value);
            //     return $query->where(function ($query) {
            //         $query->where('name_Hospital', 'like', '%' . $this->value . '%')
            //               ->orWhere('decision', 'like', '%' . $this->value . '%');
            //     });
            //     return $query;
            // case 'cate':
            //     $query->where('category_Hospital', $value);
            //     return $query;
            default:
                return $query;
        }
    }
}
