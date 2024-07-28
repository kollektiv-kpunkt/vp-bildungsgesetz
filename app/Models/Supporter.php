<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Notifications\Notifiable;

class Supporter extends Model
{
    use HasFactory, SoftDeletes, LogsActivity, Notifiable;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'configuration_id' => 'integer',
        'customFields' => 'array',
    ];

    public function configuration(): BelongsTo
    {
        return $this->belongsTo(Configuration::class);
    }


    /**
     * Define what to log into actrivitiy log
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logAll();
    }

    /**
     * Get customField value from customField name
     */
    public function getCustomField($name)
    {
        $fieldId = CustomField::where('name', $name)->first()->id;
        return collect($this->customFields)->where('customField_id', $fieldId)->first()['value'];
    }

    /**
     * Set customField value from customField name
     */
    public function setCustomField($name, $value, $store = false)
    {
        $fieldId = CustomField::where('name', $name)->first()->id;
        $customFields = $this->customFields;
        $customFields[] = ['customField_id' => $fieldId, 'value' => $value];
        $this->customFields = $customFields;
        if ($store) {
            $this->save();
        }
    }

    /**
     * Set customFields through array of values
     */
    public function setCustomFields(array $customFields, bool $store = false)
    {
        foreach ($customFields as $name => $value) {
            $this->setCustomField($name, $value, false);
        }
        if ($store) {
            $this->save();
        }
    }
}
