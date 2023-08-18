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
            'code_indications',
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
                    $query->where('name', 'like', '%' . $this->value . '%')
                    ->orWhere('code', 'like', '%' . $this->value . '%')
                    ->orWhere('phone', 'like', '%' . $this->value . '%')
                    ->orWhere('code_patient', 'like', '%' . $this->value . '%');
                });
                return $query;
            case 'code':
                $query->where('code_ctv', $value);
                return $query;
            default:
                return $query;
        }
    }
}
