<?php

namespace tranber\controllers;

use tranber\services\Client;
use tranber\structures\Controller;
use tranber\views\SignIn as SignInView;
use tranber\functions as fn;

class SignIn extends Controller implements SignInInterface
{
	public function run()
	{
		if ($model = $this->app->getModel('Users'))
		{
			$login    = $_POST['login']    ?? null;
			$password = $_POST['password'] ?? null;

			if ($login && $password)
			{
				$user = $model->getUserByLoginOrEmail($login);

				if ($user && ($user['password'] ?? false) && \password_verify($password, $user['password']))
				{
					$client = Client::getInstance();
					$client->logIn($user);
					$conf    = $this->app->getConf();
					$data    = $conf->getData();
					$siteUrl = $data['site-url'];
					header('Location: '.$siteUrl);
				}
				else 
				{
					echo fn\htmlError('Mauvais identifiant et/ou mot de passe !');
				}

			}
		}

		$view = new SignInView;
		$view->stringify();
	}
}