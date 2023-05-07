<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function all()
    {
        return $this->user->all();
    }

    public function find($id)
    {
        return $this->user->find($id);
    }

    public function create($data)
    {
        return $this->user->create($data);
    }

    public function update($id, $data)
    {
        $user = $this->user->find($id);
        $user->fill($data);
        $user->save();
        return $user;
    }

    public function delete($id)
    {
        $user = $this->user->find($id);
        $user->delete();
        return true;
    }
}
