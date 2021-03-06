<?php

namespace App\Console;

use \Memcached;

class Cache {
	private $m;

	public function __construct(){
		$this->m = new Memcached();
		$this->m->addServer( getenv('MEMCACHED_HOST') , 11211);
	}
	public function get($key){
		return $this->m->get($key);
	}
	public function set($key, $value){
		return $this->m->set($key, $value);
	}
	public function delete($key){
	}
}