<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Str;


class QosApiController extends Controller
{
    public function index(Request $request)
    {
        //testing
        $context = 'staging.qosic.net:9010';
        $url = $context .'/QosicBridge/user/requestpayment';
        $msisdn = "22991323990";
        $amount = "350";
        $firstname = "John";
        $lastname = "Wick";
        $clientid = 'MTNTEST';
        $randomString = Str::random(20);
        $server_user = 'USR01';
        $server_pass = 'YG739G5XFVPYYV4ADJVW';
        $transref = Str::random(20);
        $data = array(
            "msisdn" => $msisdn,
            "amount" => $amount,
            "firstname" => $firstname,
            "lastname" => $lastname,
            "transref" => $transref,
            "clientid" => $clientid,
        );

        $client = new Client(['headers' => ['content-type' => 'application/json']]);
        $response = $client->request('POST', $url, [
            'auth' => [$server_user, $server_pass],
            'json' => $data,
        ]);

        ///////////DUMPS///////////
        dump("Request Transaction");
        dump($data);
        dump("Status Code: " . $response->getStatusCode());
        $response = $response->getBody()->getContents();
        dump($response);
        dump(json_decode($response));
        $response = json_decode($response);//json proper
        dump("Response: " . $response->responsecode);
        dump("Responsemsg: " . $response->responsemsg[0]);
        // dump("Responsemsg: " . $response->responsemsg['message']);
        dump("Transref: " . $response->transref);
        dump("Comment: " . $response->comment);
        return dd('-------------------');
    }

    public function get_status()
    {
        $context = 'staging.qosic.net:9010';
        $url = $context .'/QosicBridge/user/gettransactionstatus';
        $clientid = 'MTNTEST';
        $transref = "0C9j9B3ITfdkdf"; // transaction ref
        $server_user = 'USR01';
        $server_pass = 'YG739G5XFVPYYV4ADJVW';
        $data = array(
            "transref" => $transref,
            "clientid" => $clientid,
        );
        $client = new Client(['headers' => ['content-type' => 'application/json']]);
        $response = $client->request('POST', $url, [
            'auth' => [$server_user, $server_pass],
            'json' => $data,
        ]);
        dump("Get Transaction Status");
        dump($data);
        dump("Status Code: " . $response->getStatusCode());
        $response = $response->getBody()->getContents();
        dump($response);
        dump(json_decode($response));
        $response = json_decode($response);//json proper
        dump("Response: " . $response->responsecode);
        dump("Responsemsg: " . $response->responsemsg);
        dump("Transref: " . $response->transref);
        dump("Comment: " . $response->comment);
        return dd('-------------');
    }

    public function deposit()
    {
        $context = 'staging.qosic.net:9010';
        $url = $context .'/QosicBridge/user/deposit';
        $msisdn = '22991323990';
        $amount = '100';
        $clientid = 'MTNTEST';
        $transref = Str::random(20); // transaction ref
        $server_user = 'USR01';
        $server_pass = 'YG739G5XFVPYYV4ADJVW';
        $data = array(
            "msisdn" => $msisdn,
            "amount" => $amount,
            "transref" => $transref,
            "clientid" => $clientid,
        );
        $client = new Client(['headers' => ['content-type' => 'application/json']]);
        $response = $client->request('POST', $url, [
            'auth' => [$server_user, $server_pass],
            'json' => $data,
        ]);
        dump("Get Transaction Status");
        dump($data);
        dump("Status Code: " . $response->getStatusCode());
        $response = $response->getBody()->getContents();
        dump($response);
        dump(json_decode($response));
        $response = json_decode($response);//json proper
        dump("Response: " . $response->responsecode);
        dump("Responsemsg: " . $response->responsemsg);
        dump("Transref: " . $response->transref);
        dump("Comment: " . $response->comment);
        return dd('-------------');
    }

    public function refund()
    {
        $context = 'staging.qosic.net:9010';
        $url = $context .'/QosicBridge/user/refund';
        $clientid = 'MTNTEST';
        $transref = "0C9j9B3ITfdkdf"; // transaction ref
        $server_user = 'USR01';
        $server_pass = 'YG739G5XFVPYYV4ADJVW';
        $data = array(
            "transref" => $transref,
            "clientid" => $clientid,
        );
        $client = new Client(['headers' => ['content-type' => 'application/json']]);
        $response = $client->request('POST', $url, [
            'auth' => [$server_user, $server_pass],
            'json' => $data,
        ]);
        dump("Get Transaction Status");
        dump($data);
        dump("Status Code: " . $response->getStatusCode());
        $response = $response->getBody()->getContents();
        dump($response);
        dump(json_decode($response));
        $response = json_decode($response);//json proper
        dump("Response: " . $response->responsecode);
        dump("Responsemsg: " . $response->responsemsg);
        dump("Transref: " . $response->transref);
        dump("Comment: " . $response->comment);
        return dd('-------------');
    }

    public function get_available_amount_to_withdraw()
    {
        $context = 'staging.qosic.net:9010';
        $url = $context .'/QosicBridge/user/getavailableamountowithdraw';
        $clientid = 'MTNTEST';
        $server_user = 'USR01';
        $server_pass = 'YG739G5XFVPYYV4ADJVW';
        $data = array(
            "clientid" => $clientid,
        );
        $client = new Client(['headers' => ['content-type' => 'application/json']]);
        $response = $client->request('POST', $url, [
            'auth' => [$server_user, $server_pass],
            'json' => $data,
        ]);
        dump("Get Transaction Status");
        dump($data);
        dump("Status Code: " . $response->getStatusCode());
        $response = $response->getBody()->getContents();
        dump($response);
        dump(json_decode($response));
        $response = json_decode($response);//json proper
        dump("Response: " . $response->responsecode);
        dump("Responsemsg: " . $response->responsemsg);
        dump("amount: " . $response->amount);
        // dump("Transref: " . $response->transref);
        // dump("Comment: " . $response->comment);
        return dd('-------------');
    }

    public function get_account_holder_info()
    {
        $context = 'staging.qosic.net:9010';
        $url = $context .'/QosicBridge/user/getaccountholderinfo';
        $clientid = 'MTNTEST';
        $msisdn = '22960000000';
        $server_user = 'USR01';
        $server_pass = 'YG739G5XFVPYYV4ADJVW';
        $data = array(
            "msisdn" => $msisdn,
            "clientid" => $clientid,
        );
        $client = new Client(['headers' => ['content-type' => 'application/json']]);
        $response = $client->request('POST', $url, [
            'auth' => [$server_user, $server_pass],
            'json' => $data,
        ]);
        dump("Get Transaction Status");
        dump($data);
        dump("Status Code: " . $response->getStatusCode());
        $response = $response->getBody()->getContents();
        dump($response);
        dump(json_decode($response));
        $response = json_decode($response);//json proper
        dump("Response: " . $response->responsecode);
        dump("Responsemsg: " . $response->responsemsg);
        dump("Msisdn: " . $response->msisdn);
        dump("Firstname: " . $response->firstName);
        dump("Surename: " . $response->surName);
        dump("Accountholderstatus: " . $response->accountholderstatus);
        return dd('-------------');
    }

    public function get_account_holder_info_mv()
    {
        $context = 'staging.qosic.net:9010';
        $url = $context .'/QosicBridge/user/getaccountholderinfomv';
        $msisdn = '22960000000';
        $clientid = 'MOOVTEST'; // clientid
        $server_user = 'USR02';
        $server_pass = 'YG739G5XFVPYYV4ADJVW';
        $data = array(
            "msisdn" => $msisdn,
            "clientid" => $clientid,
        );
        $client = new Client(['headers' => ['content-type' => 'application/json']]);
        $response = $client->request('POST', $url, [
            'auth' => [$server_user, $server_pass],
            'json' => $data,
        ]);
        dump("Get Transaction Status");
        dump($data);
        dump("Status Code: " . $response->getStatusCode());
        $response = $response->getBody()->getContents();
        dump($response);
        dump(json_decode($response));
        $response = json_decode($response);//json proper
        dump("Response: " . $response->responsecode);
        dump("Responsemsg: " . $response->responsemsg);
        dump("Msisdn: " . $response->msisdn);
        dump("Firstname: " . $response->firstName);
        dump("Surename: " . $response->surName);
        dump("Accountholderstatus: " . $response->accountholderstatus);
        return dd('-------------');
    }
}
