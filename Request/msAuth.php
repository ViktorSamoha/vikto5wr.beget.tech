<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

class msAuth
{
    private $url;
    private $authKey;

    public function __construct($authKey, $url)
    {
        $this->url = $url;
        $this->authKey = $authKey;
    }

    public function getRequest(){
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Authorization: Basic '.$this->authKey
            ],
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }

    public function prodCycle($data){
        $arResult = [];
        foreach ($data->rows as $row){
            $tempRes = [];
            $tempRes['name'] = $row->name;
            $tempRes['description'] = $row->description;
            $tempRes['priceValue'] =  $row->salePrices[0]->value;
            $arResult[] = $tempRes;
        }
        return $arResult;
    }

    public function initBitrixEl($arItem){
        foreach ($arItem as $itm){
            $el = new CIBlockElement;

            $PROP = array();
            $PROP['PRICE'] =  Array(
                "VALUE" => $itm["priceValue"],
            );

            $arLoadProductArray = Array(
                "IBLOCK_ID" => 5,
                "PROPERTY_VALUES" => $PROP,
                "NAME" => $itm["name"],
                "DETAIL_TEXT" => $itm["description"],
            );

            if($PRODUCT_ID = $el->Add($arLoadProductArray))
                echo "New ID: ".$PRODUCT_ID;
            else
                echo "Error: ".$el->LAST_ERROR;
            break;
        }
    }
}
