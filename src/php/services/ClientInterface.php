<?php

namespace tranber\services;

interface ClientInterface
{
	public function isLogged() :bool;

	public function logIn(iterable $user) :ClientInterface;

	public function logOut() :ClientInterface;
}