<?php

namespace IXP\Models;

/*
 * Copyright (C) 2009 - 2020 Internet Neutral Exchange Association Company Limited By Guarantee.
 * All Rights Reserved.
 *
 * This file is part of IXP Manager.
 *
 * IXP Manager is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation, version v2.0 of the License.
 *
 * IXP Manager is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for
 * more details.
 *
 * You should have received a copy of the GNU General Public License v2.0
 * along with IXP Manager.  If not, see:
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */
use Illuminate\Database\Eloquent\{
    Builder,
    Model,
    Relations\BelongsTo,
    Relations\HasMany
};

/**
 * IXP\Models\Vlan
 *
 * @property int $id
 * @property int $infrastructureid
 * @property string|null $name
 * @property int|null $number
 * @property int $private
 * @property string|null $notes
 * @property int $peering_matrix
 * @property int $peering_manager
 * @property string|null $config_name
 * @property-read \IXP\Models\Infrastructure $infrastructure
 * @property-read \Illuminate\Database\Eloquent\Collection|\IXP\Models\IPv4Address[] $ipv4Addresses
 * @property-read int|null $ipv4_addresses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\IXP\Models\IPv6Address[] $ipv6Addresses
 * @property-read int|null $ipv6_addresses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\IXP\Models\RouteServerFilter[] $routeServerFilters
 * @property-read int|null $route_server_filters_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\IXP\Models\Router[] $routers
 * @property-read int|null $routers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\IXP\Models\VlanInterface[] $vlanInterfaces
 * @property-read int|null $vlan_interfaces_count
 * @method static Builder|Vlan newModelQuery()
 * @method static Builder|Vlan newQuery()
 * @method static Builder|Vlan privateOnly()
 * @method static Builder|Vlan publicOnly()
 * @method static Builder|Vlan query()
 * @method static Builder|Vlan whereConfigName($value)
 * @method static Builder|Vlan whereId($value)
 * @method static Builder|Vlan whereInfrastructureid($value)
 * @method static Builder|Vlan whereName($value)
 * @method static Builder|Vlan whereNotes($value)
 * @method static Builder|Vlan whereNumber($value)
 * @method static Builder|Vlan wherePeeringManager($value)
 * @method static Builder|Vlan wherePeeringMatrix($value)
 * @method static Builder|Vlan wherePrivate($value)
 * @mixin \Eloquent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\IXP\Models\Vlan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\IXP\Models\Vlan whereUpdatedAt($value)
 */
class Vlan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vlan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'number',
        'notes',
        'private',
        'infrastructureid',
        'peering_matrix',
        'peering_manager',
        'config_name',
    ];

    /**
     * Get the vlan interfaces that are in this vlan
     */
    public function vlanInterfaces(): HasMany
    {
        return $this->hasMany(VlanInterface::class, 'vlanid');
    }

    /**
     * Get the vlan interfaces that are in this vlan
     */
    public function routers(): HasMany
    {
        return $this->hasMany(Router::class );
    }

    /**
     * Get the ipv4addresses for the vlan
     */
    public function ipv4Addresses(): HasMany
    {
        return $this->hasMany(IPv4Address::class, 'vlanid' );
    }

    /**
     * Get the ipv6addresses for the vlan
     */
    public function ipv6Addresses(): HasMany
    {
        return $this->hasMany(IPv6Address::class, 'vlanid' );
    }

    /**
     * Get the route server filters for the cabinet
     */
    public function routeServerFilters(): HasMany
    {
        return $this->hasMany(RouteServerFilter::class, 'vlan_id' );
    }

    /**
     * Get the infrastructure that own the vlan
     */
    public function infrastructure(): BelongsTo
    {
        return $this->belongsTo(Infrastructure::class, 'infrastructureid' );
    }

    /**
     * Scope a query to only include private VLANs
     *
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopePrivateOnly( Builder $query ): Builder
    {
        return $query->where( 'private', 1 );
    }

    /**
     * Scope a query to only include public / non-private VLANs
     *
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopePublicOnly( Builder $query ): Builder
    {
        return $query->where( 'private', 0 );
    }
}