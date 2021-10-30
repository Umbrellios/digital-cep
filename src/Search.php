<?php

namespace Wead\DigitalCep;

class Search{
	private $url = "https://viacep.com.br/ws/";

	public function getAddresFromZipcode(string $zipcode): array{

		$zipcode = preg_replace('/[^0-9]/', '',$zipcode);

		$get = file_get_contents($this->url . $zipcode . "/json");

		return (array) json_decode($get);
	}

}
