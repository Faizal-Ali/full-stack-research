<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creport extends CI_Controller {

	public function __construct(){
		parent::__construct();
		Header('Access-Control-Allow-Origin: *');
		Header('Access-Control-Allow-Headers: *');
		header("Access-Control-Allow-Headers: *");
		$this->load->model('mo_res');
	}

	public function get_report(){
		$data = $this->mo_res->getAll('tb_link');

		$arr_data_set = array();
		$arr_labels = array();
		
		foreach($data['data'] as $d){
			$arr_data = array();
			for ($i=1; $i < date('t'); $i++) {
				$tgl = $i < 10 ? '0'.$i:$i;
				$get_data = $this->mo_res->getWhere('tb_data_link',array(
					'id_link' => $d['id'],
					'terjual_sebelumnya >' => 0,
					'updated_at like' => date('%Y-m-').$tgl.'%'
				));
				
				$penjualan = empty($get_data['data'][0]['terjual_sebelumnya'])?0:$get_data['data'][0]['total_terjual']-$get_data['data'][0]['terjual_sebelumnya'];
				array_push($arr_data,$penjualan);
			}

			$arr_temp = array(
				'label' => $d['nama_produk'],
				'data' => $arr_data,
				'borderColor' => sprintf ( "#%06X\n", mt_rand( 0, 0xFFFFFF ))
			);

			array_push($arr_labels,$d['nama_produk']);
			array_push($arr_data_set,$arr_temp);
		}

		$data = array(
			'labels' => $arr_labels,
			'arr_data' => $arr_data_set
		);

		echo json_encode($data);
	}
}
