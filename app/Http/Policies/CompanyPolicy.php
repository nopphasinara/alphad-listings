<?php

namespace App\Policies;

use App\Models\Company;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return ! $user->isCompany();
    }

    public function update(User $user, Company $company)
    {
        return  $user->id == $company->manger_id;
    }
}
