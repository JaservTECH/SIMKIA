<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gatelogin extends Authenticateparent{
	private $lock;
	function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->lock = false;
	}
	//karyawan session
	function setKaryawanSession($data){
		if($this->isKaryawanLogin())
			return false;
		$this->lockOn();
		return $this->setDefaultSession(array('true',$this->encryptUser('karyawan'),$data['namakaryawan'],$data['idkaryawan']));
	}
	function isKaryawanLogin(){
		return $this->isSetDefaultSession($this->encryptUser('karyawan'));
	}
	function destroyKaryawaanSession(){
		if(!$this->isKaryawanLogin())
			return false;
		$this->lockOn();
		return $this->deactivateDefaultSession();
	}
	//Admin session
	function setAdminSession($data){
		if($this->isAdminLogin())
			return false;
		$this->lockOn();
		return $this->setDefaultSession(array('true',$this->encryptUser('administrator'),$data['namaadmin'],$data['idadmin']));
	}
	function isAdminLogin(){
		return $this->isSetDefaultSession($this->encryptUser('administrator'));
	}
	function destroyAdminSession(){
		if(!$this->isAdminLogin())
			return false;
		$this->lockOn();
		return $this->deactivateDefaultSession();
	}
	//Ibu dan Anak / pasien session
	function setPasienSession($data){
		if($this->isPasienLogin())
			return false;
		$this->lockOn();
		return $this->setDefaultSession(array('true',$this->encryptUser('pasien'),$data['namapasien'],$data['idpasien']));
	}
	function isPasienLogin(){
		return $this->isSetDefaultSession($this->encryptUser('pasien'));
	}
	function destroyPasienSession(){
		if(!$this->isPasienLogin())
			return false;
		$this->lockOn();
		return $this->deactivateDefaultSession();
	}
	//control session login
	private function lockOn(){
		$this->lock = true;
	}
	private function lockOff(){
		$this->lock = false;
	}
	private function lockStatus(){
		return $this->lock;
	}
	protected function setDefaultSession($data){
		if(!$this->lockStatus())
			return false;
		$this->setSession('login',$data[0]);
		$this->setSession('user',$data[1]);
		$this->setSession('nama',$data[2]);
		$this->setSession('id',$data[3]);
		$this->lockOff();
		return true;
	}
	protected function isSetDefaultSession($data){
		$error=0;
		if(!$this->hasSession('login'))
			$error+=1;
		if(!$this->hasSession('user'))
			$error+=1;
		else if($this->session('user') != $data)
			$error+=1;
		if(!$this->hasSession('nama'))
			$error+=1;
		if(!$this->hasSession('id'))
			$error+=1;
		if($error == 0)
			return true;
		else
			return false;
	}
	protected function deactivateDefaultSession(){
		if(!$this->lockStatus())
			return false;
		$this->unSetSession('login');
		$this->unSetSession('user');
		$this->unSetSession('nama');
		$this->unSetSession('id');
		$this->lockOff();
		return true;
	}
}