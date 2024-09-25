<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Containers\AppSection\Authorization\Models{
/**
 * App\Containers\AppSection\Authorization\Models\Permission
 *
 * @property-read \App\Containers\AppSection\Authorization\Data\Collections\PermissionCollection<int, Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \App\Containers\AppSection\Authorization\Data\Collections\RoleCollection<int, \App\Containers\AppSection\Authorization\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \App\Containers\AppSection\User\Data\Collections\UserCollection<int, \App\Containers\AppSection\User\Models\User> $users
 * @property-read int|null $users_count
 * @method static \App\Containers\AppSection\Authorization\Data\Collections\PermissionCollection<int, static> all($columns = ['*'])
 * @method static \App\Containers\AppSection\Authorization\Data\Factories\PermissionFactory factory($count = null, $state = [])
 * @method static \App\Containers\AppSection\Authorization\Data\Collections\PermissionCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission role($roles, $guard = null)
 */
	class Permission extends \Eloquent implements \Apiato\Core\Contracts\HasResourceKey {}
}

namespace App\Containers\AppSection\Authorization\Models{
/**
 * App\Containers\AppSection\Authorization\Models\Role
 *
 * @property-read \App\Containers\AppSection\Authorization\Data\Collections\PermissionCollection<int, \App\Containers\AppSection\Authorization\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \App\Containers\AppSection\User\Data\Collections\UserCollection<int, \App\Containers\AppSection\User\Models\User> $users
 * @property-read int|null $users_count
 * @method static \App\Containers\AppSection\Authorization\Data\Collections\RoleCollection<int, static> all($columns = ['*'])
 * @method static \App\Containers\AppSection\Authorization\Data\Factories\RoleFactory factory($count = null, $state = [])
 * @method static \App\Containers\AppSection\Authorization\Data\Collections\RoleCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 */
	class Role extends \Eloquent implements \Apiato\Core\Contracts\HasResourceKey {}
}

namespace App\Containers\AppSection\User\Models{
/**
 * App\Containers\AppSection\User\Models\User
 *
 * @property mixed $password
 * @property \App\Containers\AppSection\User\Enums\Gender $gender
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Passport\Client> $clients
 * @property-read int|null $clients_count
 * @property-read string|null $email
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Containers\AppSection\Authorization\Data\Collections\PermissionCollection<int, \App\Containers\AppSection\Authorization\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \App\Containers\AppSection\Authorization\Data\Collections\RoleCollection<int, \App\Containers\AppSection\Authorization\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Passport\Token> $tokens
 * @property-read int|null $tokens_count
 * @method static \App\Containers\AppSection\User\Data\Collections\UserCollection<int, static> all($columns = ['*'])
 * @method static \App\Containers\AppSection\User\Data\Factories\UserFactory factory($count = null, $state = [])
 * @method static \App\Containers\AppSection\User\Data\Collections\UserCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel role($roles, $guard = null)
 */
	class User extends \Eloquent implements \App\Ship\Contracts\MustVerifyEmail, \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

namespace App\Containers\UniSection\Installment\Models{
/**
 * App\Containers\UniSection\Installment\Models\Installment
 *
 * @method static \App\Containers\UniSection\Installment\Data\Factories\InstallmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Installment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Installment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Installment query()
 */
	class Installment extends \Eloquent {}
}

namespace App\Containers\UniSection\Payment\Models{
/**
 * App\Containers\UniSection\Payment\Models\Payment
 *
 * @method static \App\Containers\UniSection\Payment\Data\Factories\PaymentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 */
	class Payment extends \Eloquent {}
}

namespace App\Containers\UniSection\Student\Models{
/**
 * App\Containers\UniSection\Student\Models\Student
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $cellphone
 * @property string $birth_date
 * @property string $cpf
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \App\Containers\UniSection\Student\Data\Factories\StudentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCellphone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCpf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUpdatedAt($value)
 */
	class Student extends \Eloquent {}
}

