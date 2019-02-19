<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Users\UsersManager;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * @var UsersManager
     */
    protected $usersManager;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UsersManager $usersManager)
    {
        $this->usersManager = $usersManager;

        $this->middleware('auth');
    }

    public function show()
    {
        $user = $this->usersManager->getCurrentUser();

        $data = [
            'user' => $user,
            'panelTitle' => 'Uređivanje profila',
        ];

        return view('admin.profile.show', $data);
    }

    public function update(Request $request)
    {
        $user = $this->usersManager->getCurrentUser();
        $data = $this->usersManager->extractDataFromRequest($request);
        $this->usersManager->update($user, $data);

        return redirect()->route('profile.show');
    }
}
