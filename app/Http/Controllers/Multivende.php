<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Multivende extends Controller
{
    public function login() {
        $base_url = env('MULTIVENDE_BASE_URL', 'https://app.multivende.com/');
        $client = new Client();
        $res = $client->request('POST', $base_url.'oauth/access-token', [
            'json' => [
                'client_id' => env('MULTIVENDE_CLIENT_ID', '613442147446'),
                'secret' => env('MULTIVENDE_SECRET', 'mfNpz4whhuekq2vDSFhOUTTl9TX5vfkgk5aB3lx778HVVAQHVG'),
                "grant_type" => "authorization_code",
                "code" => 'ac-450d292a-616f-41b7-a5a5-7f1e1d46e3a9'
            ], 
            'headers' => [
                'Content-Type' => 'application/json',
                'cache-control' => 'no-cache',
            ]
        ]);
        return $res->getBody();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function me()
    {
        //
        return json_decode('{"profile":{"name":"Silfa","role":"merchant-user","fullName":"Silfa"},"token":{"_id":"eb7770ef-9096-4aef-9ce1-15142d847b41","role":"merchant-user"},"_id":"eb7770ef-9096-4aef-9ce1-15142d847b41","name":"Silfa","email":"jorge.bobadilla@silfa.cl","role":"merchant-user","provider":"local","2faEnabled":false,"2faType":null,"createdAt":"2020-08-19T18:52:02.000Z","Merchants":[{"_id":"8f6da4ed-21a9-4eb0-b3e6-6681ca7a9f14","name":"Comercial e Industrial Silfa - Correcta","businessName":"Dorel Juvenile Chile S.A.","description":null,"code":null,"address":null,"zipCode":null,"activity":null,"taxId":"76171658-1","email":null,"phoneNumber":"942335793","city":null,"status":"created","createdAt":"2020-07-21T15:45:29.000Z","updatedAt":"2022-09-07T20:31:27.000Z","MerchantActivityId":"711fe536-0af9-4df7-a60e-d2c46dc970ef","LocationId":"427317d6-537b-11e6-a65d-aa8ab4ea7899","TimezoneId":"dee790bc-fdef-492b-9637-7cfd1f1fc031","MerchantAccountId":"cafd842f-74bd-406b-9e34-242fa81b1536","MerchantUser":{"status":"created","roles":"merchant-user"},"MerchantAccount":{"_id":"cafd842f-74bd-406b-9e34-242fa81b1536","name":"Dorel Juvenile S.A.","taxId":"76171658-1","taxName":"Dorel Juvenile S.A.","taxActivity":"COMPRA,DISTRIBUCION,VENTA,IMPORTACION  Y EXPORTACION, ARTICULOS INFANTILES,  VESTUARIO Y OTROS DE USO DOMESTICO Y  PASTELERIA","collectionManagerName":"Deisy Becerra","collectionManagerEmail":"deisy.becerra@silfa.cl","collectionManagerPhoneNumber":"56935267458","secondaryCollectionEmails":"942335793 carolina.lagos@silfa.cl","status":"created","processStatus":"billable","createdAt":"2020-07-21T15:45:29.000Z","updatedAt":"2021-04-16T20:40:03.000Z","CreatedById":"8e4bf57e-832f-460e-a97a-5b8e0f8e2d77","UpdatedById":"27432926-3fe1-4ace-998c-80b08ff28293","MerchantAccountBillingAddressId":"b957a2f7-162f-4a8f-a337-416a7c96b50c","LocationId":"427317d6-537b-11e6-a65d-aa8ab4ea7899","MerchantAccountAgreementId":"fc8da419-c2dd-4d96-ad61-e45979f7842c"}},{"_id":"e1de6084-74f7-43e4-8616-775253cb37da","name":"Silfa_TEST","businessName":null,"description":"Cuenta Test Silfa","code":null,"address":null,"zipCode":null,"activity":null,"taxId":null,"email":null,"phoneNumber":"950907730","city":null,"status":"created","createdAt":"2020-08-19T18:52:02.000Z","updatedAt":"2020-08-19T18:53:36.000Z","MerchantActivityId":"83ffe01d-fe59-47e0-bbe7-183ad7c4528d","LocationId":"427317d6-537b-11e6-a65d-aa8ab4ea7899","TimezoneId":"dee790bc-fdef-492b-9637-7cfd1f1fc031","MerchantAccountId":"1203b903-5ff9-44a6-9058-fcb5b712c086","MerchantUser":{"status":"created","roles":"owner"},"MerchantAccount":{"_id":"1203b903-5ff9-44a6-9058-fcb5b712c086","name":"Silfa","taxId":null,"taxName":null,"taxActivity":null,"collectionManagerName":"Silfa","collectionManagerEmail":"jorge.bobadilla@silfa.cl","collectionManagerPhoneNumber":"950907730","secondaryCollectionEmails":null,"status":"created","processStatus":"pending","createdAt":"2020-08-19T18:52:02.000Z","updatedAt":"2020-08-19T18:52:02.000Z","CreatedById":"eb7770ef-9096-4aef-9ce1-15142d847b41","UpdatedById":"eb7770ef-9096-4aef-9ce1-15142d847b41","MerchantAccountBillingAddressId":null,"LocationId":"427317d6-537b-11e6-a65d-aa8ab4ea7899","MerchantAccountAgreementId":null}}],"DeveloperPartners":[],"hasTfaSecret":false}');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
