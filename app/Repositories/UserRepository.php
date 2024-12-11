<?php



namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public function findByEmail(string $email)
    {
        return User::where('email', $email)->first();
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function update(array $data, int $id)
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }
}
