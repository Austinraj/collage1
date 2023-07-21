<?php
class collage extends CI_Controller{
	public function staff(){
		$mes['msg']="Your Registration From";
		$this->load->view('staff_details.php',$mes);
	}

	public function editForm(){
		extract($_POST);
		$gender = null;

		if(isset($Male)){
			$gender="male";

		}
		else{
			$gender="female";
		}

		$data["details"]=[
			'name'=>$stname,
			'email'=>$stemail,
			'date'=>$stdate,
          	'address'=>$staddress,
          	'department'=>$stdept,
          	'mobile'=>$stmobile,
          	'gender'=>$stgender,
          	'bloodgroup'=>$stblood
		];
		$this->load->view("result",$data);


}
	public function saveData(){
		extract($_POST);
		$gender = null;

		if(isset($Male)){
			$gender="male";

		}
		else{
			$gender="female";
		}

		$data=[
			'name'=>$stname,
			'email'=>$stemail,
			'date'=>$stdate,
          	'address'=>$staddress,
          	'department'=>$stdept,
          	'mobile'=>$stmobile,
          	'gender'=>$stgender,
          	'bloodgroup'=>$stblood
		];
		$this->load->model('detailmodel');
		$result=$this->detailmodel->insertdata($data);

		if($result){
			$res['status']='successfully inserted';
			$res['test']=" ";
			$this->load->view('staff_details',$res);
			//redirect('http://localhost/ci3_project/collage/staff');
		}else{
			$res['status']='error wile inserting data';
			$this->load->view('staff_details',$res);
		}
	}
	public function fetchdata(){
			$this->load->model('detailmodel');
			$result['table']=$this->detailmodel->getRecord();
			$this->load->view('displayreords',$result);
	}

	public function edit($id){

		$id=$this->uri->segment(3);
		$this->load->model('detailmodel');
		$result['data']=$this->detailmodel->editData($id);
		$this->load->view('displayreords',$result);
	}


	public function update(){
		
		extract($_POST);
		$id=$id;
		$editdata=[
			'name'=>$stname,
			'email'=>$stemail,
			'date'=>$stdate,
			'address'=>$staddress,
			'department'=>$stdept,
			'mobile'=>$stmobile,
			'gender'=>$stgender,
			'bloodgroup'=>$stblood
		];

		$this->load->model('detailmodel');	
		$result=$this->detailmodel->updateData($id,$editdata);
		if($result){
			$this->fetchdata();
		}
		
	}

	public function delete(){
		$id=$this->uri->segment(3);
		$this->load->model("detailmodel");
		$result=$this->detailmodel->deleteData($id);
		if(isset($result)){
			$this->fetchdata();
		}
	}

}