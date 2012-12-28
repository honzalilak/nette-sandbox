<?php

use Nette\Security,
	Nette\Utils\Strings;


/*
CREATE TABLE users (
	id int(11) NOT NULL AUTO_INCREMENT,
	username varchar(50) NOT NULL,
	password char(60) NOT NULL,
	role varchar(20) NOT NULL,
	PRIMARY KEY (id)
);
*/

/**
 * Users authenticator.
 */
class Authenticator extends Nette\Object implements Security\IAuthenticator
{
	/** @var Nette\Database\Connection */
	private $database;


	public function __construct(\Nette\DI\Container $container)
	{
		$this->database = $container->$database;
	}



	/**
	 * Performs an authentication.
	 * @return Nette\Security\Identity
	 * @throws Nette\Security\AuthenticationException
	 */
	public function authenticate(array $credentials)
	{
		list($username, $password) = $credentials;
		$row = $this->database->select("*")->where('username', $username)->from('users')->fetch();

		if (!$row) {
			throw new Security\AuthenticationException("U6ivatel '$username' nebyl nalezen.", self::IDENTITY_NOT_FOUND);
		}

		if ($row->password !== $this->calculateHash($password, $row->password)) {
			throw new Security\AuthenticationException('Zadali jste 3patn0 heslo.', self::INVALID_CREDENTIAL);
		}

		unset($row->password);
		return new Security\Identity($row->id, $row->role, $row->toArray());
	}



	/**
	 * Computes salted password hash.
	 * @param  string
	 * @return string
	 */
	public static function calculateHash($password, $salt = NULL)
	{
		if ($password === Strings::upper($password)) { // perhaps caps lock is on
			$password = Strings::lower($password);
		}
		return crypt($password, $salt ?: '$2a$07$' . Strings::random(22));
	}

}
