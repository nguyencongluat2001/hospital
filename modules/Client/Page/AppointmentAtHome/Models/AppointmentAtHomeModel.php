<?php

namespace Modules\Client\Page\AppointmentAtHome\Models;

use Illuminate\Database\Eloquent\Model;

class AppointmentAtHomeModel extends Model
{
    protected $table = 'service_at_home';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
            'id',
            'code',
            'code_patient',
            'name',
            'phone',
            'money',
            'type',
            'type_at_home',
            'sex',
            'date_sampling',
            'hour_sampling',
            'address',
            'reason',
            'type_payment',
            'code_ctv',
            'status',
            'created_at',
            'updates_at'
    ];

    public function filter($query, $param, $value)
    {
        switch ($param) {
            case 'search':
                $this->value = $value;
                // dd($this->value);
                return $query->where(function ($query) {
                    $query->where('name_hospital', 'like', '%' . $this->value . '%');
                });
                return $query;
            // case 'cate':
            //     $query->where('category_Hospital', $value);
            //     return $query;
            default:
                return $query;
        }
    }
}
