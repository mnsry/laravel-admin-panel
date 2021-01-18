<?php

namespace App\Models\User;

use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

class PersonalAccessToken extends SanctumPersonalAccessToken
{
    /**
     * @note This Model Relation Many Token With One { @see User::tokens }
     */

    // Table Name For Create Token
    protected $table = 'user_personal_access_tokens';
}
