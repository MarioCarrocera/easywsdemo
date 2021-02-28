<?php
include_once '../NuSoap/nusoap.php';

$server = new soap_server();

$server->configureWSDL('On Time Core', 'urn:server');
$server->wsdl->schemaTargetNamespace = 'urn:server';

$server->register('Conect',
array('user' => 'xsd:string',  'password' => 'xsd:string'),
array('return' => 'xsd:string'),
'urn:server',
'urn:server#loginServer',
'rpc',
'encoded',
'Basic Information');                   

$server->register('PssChk',
array('user' => 'xsd:string',  'password' => 'xsd:string'),
array('return' => 'xsd:string'),
'urn:server',
'urn:server#loginServer',
'rpc',
'encoded',
'Validate User and password');                   


function Conect($user, $password)
{
	include_once '../ontime/"OnTime.php';
	$ws=new OnTime();
	$ws->Connect($user,$password);
	if ($ws->err=="0") {
	$response = array('status'=> True,'return'=> array('Conect'->$ws->conected,"Error"=>$ws->errtext,'Features'=>$ws->features,'level'=>$ws->level,'status'=>$ws->status,'public'=>$ws->user,'private'=>$ws->userp,'safety'=>$ws->safety));
	} else{
		if (array_key_exists($ws->err, $ws->errtext)) {
			$response = array('status'=> False,'return'=> array('code'=> $ws->err,'msg'=> $this->errtext[$this->err]));
		} else{
			$response = array('status'=> False,'return'=> array('code'=> $ws->err,'msg'=> 'Not Defined'));
		}
	}
	return json_encode($response);		
}

function PssChk($user, $password)
{
	include_once '../ontime/"OnTime.php';
	$ws=new OnTime();
	$ws->PssChk($user,$password);
	if ($ws->err=="0") {
		$response = array('status'=> True,'return'=> 'Empty');
	} else{
		if (array_key_exists($ws->err, $ws->errtext)) {
			$response = array('status'=> False,'return'=> array('code'=> $ws->err,'msg'=> $this->errtext[$this->err]));
		} else{
			$response = array('status'=> False,'return'=> array('code'=> $ws->err,'msg'=> 'Not Defined'));
		}
	}
	return json_encode($response);		
}

$server->service(file_get_contents("php://input"));

?>
