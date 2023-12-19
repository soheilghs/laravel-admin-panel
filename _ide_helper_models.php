<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\RatedIP
 *
 * @property int $id
 * @property string $ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RatedIP newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RatedIP newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RatedIP query()
 * @method static \Illuminate\Database\Eloquent\Builder|RatedIP whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatedIP whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatedIP whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RatedIP whereUpdatedAt($value)
 */
	class RatedIP extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Site
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $admin_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Site newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Site newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Site query()
 * @method static \Illuminate\Database\Eloquent\Builder|Site whereAdminUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Site whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Site whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Site whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Site whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Site whereUrl($value)
 */
	class Site extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $role
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Site> $sites
 * @property-read int|null $sites_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserSite
 *
 * @property int $id
 * @property int $user_id
 * @property int $site_id
 * @property string $role
 * @property string $ips
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserSite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSite query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSite whereIps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSite whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSite whereSiteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSite whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSite whereUserId($value)
 */
	class UserSite extends \Eloquent {}
}

