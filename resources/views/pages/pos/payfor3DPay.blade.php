<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>
<head>
    <title>PayFor - 3D Pay</title>
    <meta http-equiv="Content-Language" content="tr">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9">
    <link href="site.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
    <form method="post" action="https://vpostest.qnbfinansbank.com/Gateway/Default.aspx">
        <input type="hidden" name="MbrId" value="{{ $payfor3D->MbrId }}">
        <input type="hidden" name="MerchantID" value="{{ $payfor3D->MerchantID }}">
        <input type="hidden" name="UserCode" value="{{ $payfor3D->UserCode }}">
        <input type="hidden" name="UserPass" value="{{ $payfor3D->UserPass }}">
        <input type="hidden" name="SecureType" value="{{ $payfor3D->SecureType }}">
        <input type="hidden" name="TxnType" value="{{ $payfor3D->TxnType }}">
        <input type="hidden" name="InstallmentCount" value="{{ $payfor3D->InstallmentCount }}">
        <input type="hidden" name="Currency" value="{{ $payfor3D->Currency }}">
        <input type="hidden" name="OkUrl" value="{{ $payfor3D->OkUrl }}">
        <input type="hidden" name="FailUrl" value="{{ $payfor3D->FailUrl }}">
        <input type="hidden" name="OrderId" value="{{ $payfor3D->OrderId }}">
        <input type="hidden" name="OrgOrderId" value="{{ $payfor3D->OrgOrderId }}">
        <input type="hidden" name="PurchAmount" value="{{ $payfor3D->PurchAmount }}">
        <input type="hidden" name="Lang" value="{{ $payfor3D->Lang }}">
        <input type="hidden" name="Rnd" value="{{ $payfor3D->rnd }}">
        <input type="hidden" name="Hash" value="{{ $payfor3D->hash }}">
        <table class="tableClass">
            <tr>
                <td colspan='2'>
                    <h1>
                        PayFor - 3D Pay
                    </h1>
                </td>
            </tr>
            <tr>
                <td style="text-align: right">
                    Kredi Kart Numarasi :
                </td>
                <td style="text-align: left">
                    <input type="text" name="Pan" maxlength="19" class="inputClass" value="4155650100416111"/>
            </tr>
            <tr>
                <td style="text-align: right">
                    Guvenlik Kodu (Cvv) :
                </td>
                <td style="text-align: left">
                    <input type="text" name="Cvv2" maxlength="4" class="inputClass" value="123"/>
            </tr>
            <tr>
                <td style="text-align: right">
                    Son Kullanma Tarihi (MMYY) :
                </td>
                <td style="text-align: left">
                    <input type="text" name="Expiry" maxlength="4" class="inputClass" value="0125"/>
            </tr>
            <tr>
                <td align='center' colspan='2'>
                    <input type='submit' value='Gonder' class='buttonClass'/>
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>

