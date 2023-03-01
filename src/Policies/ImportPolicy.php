<?php

namespace Corals\Modules\Places\Policies;

use Corals\Foundation\Policies\BasePolicy;
use Corals\User\Models\User;
use Corals\Modules\Places\Models\Import;

class ImportPolicy extends BasePolicy
{

    /**
     * @param User $user
     * @return bool
     */
    public function view(User $user)
    {
        if ($user->can('Places::import.view')) {
            return true;
        }
        return false;
    }

    /**
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        return $user->can('Places::import.create');
    }

    /**
     * @param User $user
     * @param Import $import
     * @return bool
     */
    public function update(User $user, Import $import)
    {
        if ($user->can('Places::import.update')) {
            return true;
        }
        return false;
    }

    /**
     * @param User $user
     * @param Import $import
     * @return bool
     */
    public function destroy(User $user, Import $import)
    {
        if ($user->can('Places::import.delete')) {
            return true;
        }
        return false;
    }

}
