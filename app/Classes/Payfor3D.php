<?php

namespace App\Classes;

class Payfor3D
{
    public string $MbrId = '5';
    public string $MerchantID  = '085300000009704';
    public string $MerchantPass =  '12345678';
    public string $UserCode = 'QNB_API_KULLANICI_3DPAY';
    public string $UserPass = 'UcBN0';
    public string $SecureType = '3DPay';
    public string $TxnType = 'Auth';
    public string $InstallmentCount = '0';
    public string $Currency = '949';
    public string $OkUrl = 'https://yourdomain.com/payfor3DPayPayment';
    public string $FailUrl = 'https://yourdomain.com/payfor3DPayPayment';
    public string $OrderId = 'PP0001';
    public string $OrgOrderId = '';
    public string $PurchAmount = '3.00';
    public string $Lang = 'TR';
    public string $rnd = '';
    public string $hash = '';

    public function __construct()
    {
        $this->hash();
    }

    public function setMbrId($MbrId)
    {
        $this->MbrId = $MbrId;
        $this->hash();
    }

    public function setOrderId($OrderId)
    {
        $this->OrderId = $OrderId;
        $this->hash();
    }

    public function setPurchAmount($PurchAmount)
    {
        $this->PurchAmount = $PurchAmount;
        $this->hash();
    }

    public function setOkUrl($OkUrl)
    {
        $this->OkUrl = $OkUrl;
        $this->hash();
    }

    public function setFailUrl($FailUrl)
    {
        $this->FailUrl = $FailUrl;
        $this->hash();
    }


    public function setTxnType($TxnType)
    {
        $this->TxnType = $TxnType;
        $this->hash();
    }

    public function setInstallmentCount($InstallmentCount)
    {
        $this->InstallmentCount = $InstallmentCount;
        $this->hash();
    }

    public function setMerchantPass($MerchantPass)
    {
        $this->MerchantPass = $MerchantPass;
        $this->hash();
    }

    private function hash()
    {
        $microtime = microtime();
        $this->rnd = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', $microtime);
        $hashtr = $this->MbrId . $this->OrderId . $this->PurchAmount . $this->OkUrl . $this->FailUrl .
            $this->TxnType . $this->InstallmentCount . $this->rnd.$this->MerchantPass;
        $this->hash = base64_encode(pack('H*', sha1($hashtr)));
    }
}
