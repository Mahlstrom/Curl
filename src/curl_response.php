<?php
/**
 * @author Magnus Ahlstrom <magnus@atuin.se>
 * @time 2014-06-28 23:03
 */
namespace mahlstrom\curl;

class curl_response {

	public $data;
	public $request;
	public $info;
	public $status_code;
	public $header_list;

	public function __construct() {
		$this->data = '';
		$this->info = array();
		$this->status_code = 0;
		$this->request = null;
		$this->header_list = array();
	}
}