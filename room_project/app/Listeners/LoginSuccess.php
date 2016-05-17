<?php

namespace App\Listeners;

use DB;
use Illuminate\Auth\Events\Login;

class LoginSuccess extends ListenerBase
{
    /**
     * Handle the event.
     *
     * @param  Login  $login
     * @return void
     */
    public function handle(Login $login)
    {
       // $this->statut->setLoginStatut($login);
        if (auth()->check()) 
{

    if(auth()->user()->admin === 1)
    {
        session()->put('statut', 1);
    }
    else  
    {
        $est_employe = 0;
        $id_user = DB::table("employe")->select('id_user')->get();
        foreach($id_user as $id_user)
        {
            if($id_user -> id_user == auth()->user()->id)
            {
                $est_employe = 1;
            }
        }                   
        if($est_employe == 1)
        {
            session()->put('statut', 2);
        }
        else
        {
            session()->put('statut', 0);
        }

    }
}
else
{
    session()->put('statut', 0);
}
    }
}
