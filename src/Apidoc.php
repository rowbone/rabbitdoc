<?php
namespace Rowbone\Apidoc;
use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;
class Rabbitapidoc{

	protected $session;
	protected $config;
	protected $notifications = [];
	protected $mysite;


	public function __construct($site){
		$this->mysite = $site;
	}

	public function render(){
		$notifications = $this->session->get('apidoc:notifications');
		if(!$notifications){
			return '';
		}
		return $notifications;
	}

	public function getMysite(){
		return $this->mysite;
	}

}
