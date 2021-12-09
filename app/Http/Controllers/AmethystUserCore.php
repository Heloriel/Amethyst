<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Rank;

use App\Models\User;

class AmethystUserCore extends Controller
{
    private $user_rank;

    public function view_login()
    {
        return view('login');
    }

    public function auth_user(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $this->user_rank = Rank::where('id', auth()->user()->rank)->first();
            $request->session()->put('rank_name', $this->user_rank['name']);
            return redirect()->intended('');
        }

        return back()->withErrors([
            'name' => 'Usuário não encontrado.'
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function delete_user($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('/config/user/list')->with('alert', 'Usuário ' . $user->name . ' deletado com sucesso!')->with('type', 'danger')->with('aicon', 'trash');
    }
}
