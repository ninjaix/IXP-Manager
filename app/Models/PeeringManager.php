<?php

namespace IXP\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * IXP\Models\PeeringManager
 *
 * @property int $id
 * @property int|null $custid
 * @property int|null $peerid
 * @property string|null $email_last_sent
 * @property int|null $emails_sent
 * @property int|null $peered
 * @property int|null $rejected
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \IXP\Models\Customer|null $customer
 * @property-read \IXP\Models\Customer|null $peer
 * @method static \Illuminate\Database\Eloquent\Builder|PeeringManager newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeeringManager newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeeringManager query()
 * @method static \Illuminate\Database\Eloquent\Builder|PeeringManager whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeeringManager whereCustid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeeringManager whereEmailLastSent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeeringManager whereEmailsSent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeeringManager whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeeringManager whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeeringManager wherePeered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeeringManager wherePeerid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeeringManager whereRejected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeeringManager whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PeeringManager extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'peering_manager';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email_last_sent',
        'emails_sent',
        'peered',
        'rejected',
        'notes',
    ];

    /**
     * Get the customer that owns the peering manager
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'custid');
    }

    /**
     * Get the peer that owns the peering manager
     */
    public function peer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'peerid');
    }
}
