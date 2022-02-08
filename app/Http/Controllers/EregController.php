<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmRegistration;
use Illuminate\Http\Request;

use Validator;
use Auth;
use Session;
use Input;

class EregController extends Controller {

	public $attempts = 0;

	public function index(){

		$event = \App\Event::where('event_active', 1)->first();
		if (!$event){
			$msg = 'No active events are taking place.';
			Session::put('errmsg', $msg);
			return view('ereg.noevent')->with(['msg' => $msg]);
		}

		$code = ['serial' => '0000' , 'batch' => '0000']; // VisitorsController::getNewBarcode();
		$batch = str_pad($code['batch'].'',4,'0', STR_PAD_LEFT);
		$serial = str_pad($code['serial'].'',4,'0', STR_PAD_LEFT);

		$barcode = $batch.$serial;
		$msg = Session::pull('errmsg', '');

		$row = new \App\Visitor;
		$row->region_id = 5;
		$row->event_id = $event->event_id;

		// $row->vis_code = addZero($endCode,6);
		$row->vis_batch = $code['batch'];
		$row->vis_serial = $code['serial'];
		return view('ereg.form')->with(['row' => $row, 'msg' => $msg, 'barcode' => $barcode, 'event' => $event]);
	}

	public function save(Request $request){

		$event = \App\Event::where('event_active', 1)->first();
		if (!$event){
			$msg = 'No active events are taking place.';
			Session::put('errmsg', $msg);
			return view('ereg.noevent')->with(['msg' => $msg]);
		}

		$msg = '';

		/*
		$barcode = Session::pull('barcode','');
        $vis = \App\Visitor::where('vis_code', $barcode)->first();
		if ($vis){
			Session::put('errmsg', 'Barcode already registered.');
			return redirect('register');
		}
		*/

		$input = $request->all();
		$attr = array(
			'vis_code' => 'Barcode',
			'vis_fname' => 'First Name',
			'vis_mname' => 'Middle Name',
			'vis_lname' => 'Last Name',
			'vis_email' => 'Email',
			'vis_gsm' => 'Mobile',
			'vis_enabled' => 'Enabled',
			'vis_age' => 'Age',
			'vis_address' => 'Address',
			'vis_barangay' => 'Barangay',
			'vis_province' => 'Province',
			'vis_municipality' => 'Municipality',
			'vis_company' => 'Company',
			'gender_id' => 'Gender',
			'region_id' => 'Region',
			'civil_id' => 'Civil Status',
		);
		$rules = array(
			'vis_code' => 'unique:er_visitors',
			'vis_age' => 'integer',
			'vis_email' => 'email',
			'vis_fname' => 'required|min:1',
		);

		$val = Validator::make($input, $rules);
		$val->setAttributeNames($attr);

		if ($val->fails()){
			return redirect('register')->withInput()->withErrors($val);
		}

		$row = new \App\Visitor;
		
		$row->event_id = $event->event_id;
		$row->vis_fname = $request->input('vis_fname');
		$row->vis_mname = $request->input('vis_mname');
		$row->vis_lname = $request->input('vis_lname');
		$row->vis_gsm = $request->input('vis_gsm');
		$row->vis_age = $request->input('vis_age');
		$row->vis_company = $request->input('vis_company');
		$row->gender_id = $request->input('gender_id');
		$row->civil_id = $request->input('civil_id');
		$row->region_id = $request->input('region_id');
		$row->class_id = $request->input('class_id');
		$row->vis_municipality = $request->input('vis_municipality');
		$row->vis_province = $request->input('vis_province');
		$row->vis_address = $request->input('vis_address');
		$row->vis_email = $request->input('vis_email');

		$lastCode = \App\Visitor::orderBy('vis_id','DESC')->take(1)->get();
		foreach ($lastCode as $end) {
			$lastViscode = $end->vis_code;
		}
		$endCode = (int)$lastViscode + 1;
		function addZero($num,$digit){
			return sprintf("%'.0".$digit."d\n", $num);
		}
		$newViscode = addZero($endCode,6);
		$row->vis_code = $newViscode;
		// $row->vis_code = $request->input('vis_code');
		$row->vis_batch = $request->input('vis_batch');
		$row->vis_serial = $request->input('vis_serial');
		// $row->vis_day = $request->input('vis_day');
		$row->save();

		//saving image..
		// $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
		// $imgdata = $generator->getBarcode($newViscode, $generator::TYPE_CODE_128);
		// $savepath = realpath(public_path('uploads/barcodes/')).DIRECTORY_SEPARATOR.$newViscode.'.png';
		// file_put_contents($savepath, $imgdata);
		
		
		$today = strtotime(date('Y-m-d'));
		$eventFrom = strtotime($event->event_from);
		$eventTo = strtotime($event->event_to);

		if($today >= $eventFrom){
			if($today <= $eventTo){
				$countVis = new \App\CounterVisitor;
				$visitor = \App\VWVisitor::where('vis_code', $newViscode)->first();
				$countVis->vis_id = $visitor->vis_id;
				$countVis->counter_id= $visitor->vis_id;
				$countVis->save();
				$errmsg = 'Registration Complete.';
			}
		}else{
			//mail a message
			if($request->input('vis_email') != ""){
				$errmsg = 'Registration Complete. Please check your email.';
				// //start Mailing
				// $visitor = \App\VWVisitor::where('vis_code', $newViscode)->first();

				// Mail::send('ereg.registrationmail', ['visitor'=>$visitor, 'event'=>$event], function($message) use ($visitor){
				// 	$message->from('rstw2018.dost3@gmail.com','RSTW 2018');
				// 	$message->cc('rstw2018.dost3@gmail.com');
				// 	$message->to($visitor->vis_email, $visitor->vis_fname.' '.$visitor->vis_mname.' '.$visitor->vis_lname);
				// 	$message->subject($visitor->vis_fname.'Your Registration for 2018 RSTW is Confirmed');
				// });
				// $row = \App\Visitor::where('vis_code', $newViscode)->first();
				// $row->email = 1;
				// $row->save();
			}else{
				$errmsg = 'Registration Complete.';
			}
		}

		Session::put('errmsg', $errmsg);
		Session::put('barcode', '');

		return redirect('register');
	}

	public function cancel(){
		Session::put('barcode', '');
		return redirect('register');
	}

	public function finished(){
		Session::put('barcode', '');
		return redirect('register');
	}

	public static function randName($p_prefix,$p_ext){
		$s='';
		for ($i = 0; $i < 7; $i++){
			$s .= chr(rand(97,122));
		}
		$s = "$p_prefix-$s-".date('Ymd_His').".$p_ext";
		return $s;
	}

	public function getprovinces(){
		$province = \App\Province::orderBy('name','ASC')->lists('name', 'id')->toArray();
		$provlist = array_merge([''=>'Please Select'],$province);
		echo '<table>';
		foreach ($provlist as $id => $value) {
			echo '<tr><td>';
			echo $id.'</td><td>'.$value;
			echo '</td></tr>';
		}
		echo '</table>';
	}
	public function getmunicipality(){
		$municipality = \App\Municipality::orderBy('name','ASC')->lists('name', 'id')->toArray();
		$list = array_merge([''=>'Please Select'],$municipality);
		$arr = [];
		echo '<table>';
		foreach ($list as $id => $value) {
			echo '<tr><td>';
			echo $id.'</td><td>'.$value;
			echo '</td></tr>';
			if($id!=""){
				array_push($arr, [
					'id'=>$id,
					'name'=>$value
				]);
			}
			
		}
		echo '</table>';
		\App\Munlist::insert($arr);
	}

}
