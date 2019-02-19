<?php
namespace App\Users;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersManager
{
    protected static $validationRules = [
        'name' => 'required|min:3|max:50',
        'email' => 'required|email',
        'password' => 'confirmed',
    ];

    /**
     * @return User|null
     */
    public function getCurrentUser(): ?User
    {
        return Auth::user();
    }

    /**
     * @param User $user
     * @param array $data
     * @return User
     */
    public function update(User $user, array $data): User
    {
        $user = $this->populate($user, $data);
        $user->save();

        return $user;
    }

    /**
     * @param Request $request
     * @return array
     */
    public function extractDataFromRequest(Request $request): array
    {
        return $request->validate(self::$validationRules);
    }

    /**
     * @param User $user
     * @param array $data
     * @return User
     */
    protected function populate(User $user, array $data): User
    {
        $user->name = $data['name'];
        $user->email = $data['email'];

        if (isset($user['password'])) {
            $user->password = bcrypt($user['password']);
        }

        return $user;
    }
}
