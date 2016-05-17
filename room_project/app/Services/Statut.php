<?php namespace App\Services;


class Statut  {

	/**
	 * Set the login user statut
	 * 
	 * @param  Illuminate\Auth\Events\Login $login
	 * @return void
	 */
	public function setLoginStatut($login)
	{
		session()->put('statut', $login->user->admin);
	}

	/**
	 * Set the visitor user statut
	 * 
	 * @return void
	 */
	public function setVisitorStatut()
	{
		session()->put('statut', 0);
	}

	/**
	 * Set the statut
	 * 
	 * @return void
	 */
	public function setStatut()
	{
		if(!session()->has('statut')) 
		{
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

}