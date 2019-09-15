<?php

namespace tranber\controllers;

use tranber\services\Client;
use tranber\structures\Controller;
use tranber\views\SignOut as SignOutView;

class SignOut extends Controller implements SignOutInterface
{
	public function run()
	{
		$client  = Client::getInstance();
		$client->logOut();

		$conf    = $this->app->getConf();
		$data    = $conf->getData();
		$siteUrl = $data['site-url'];
		header('Location: '.$siteUrl);
	}
}