<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>
    <head>
        <title>PayFor - 3D Pay Odeme Sayfasi</title> 
        <meta http-equiv="Content-Language" content="tr">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9">
        <link href="site.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <center>
            <?php
            if (($_POST["3DStatus"] == "1")) {
                ?>                                                          
                <h2><b>3D Kullanici Dogrulama Basarili</b></h2>                     
                <?php
            } else {
                ?>                                                          
                <h2><b>3D Kullanici Dogrulama Hatali.</b></h2>                   
                <?php
            }
            ?>                                                          
            <?php
            if (($_POST["ProcReturnCode"] == "00")) {
                ?>                                                          
                <h2><b> Odeme Basarili.</b></h2>                    
                <?php
            } else {
                ?>                                                          
                <h2><b> Odeme Hatali.</b></h2>                  
                <?php
            }
            ?>                                                          
<table  class="tableClass">                                           
                <tr>                                                    
                    <td colspan="2">                                  
                        <h1>PayFor - Donus Parametreleri</h1>              
                    </td>                                               
                </tr>                                                   
                <tr>                                                    
                    <td style="text-align: right"><b>Parametre Adi</b></td>
                    <td style="text-align: left"><b>Parametre Degeri</b></td>
                </tr>
                <?php
                    $odemeparametreleri = array("AuthCode", "Response", "HostRefNum", "ProcReturnCode", "TransId", "ErrorMessage");
                foreach ($_POST as $key => $value) {
                    if ($key=="AuthCode" or $key=="Response" or $key=="HostRefNum" or $key=="ProcReturnCode" or $key=="TransId" or $key=="ErrorMessage") {
                        echo "<tr><td style='text-align: right'>".$key."</td><td style='text-align: left'>".$value."</td></tr>";
                    } else {
                        echo "<tr><td style='text-align: right'>".$key."</td><td style='text-align: left'>".$value."</td></tr>";
                    }
                }
                ?>                
            </table>              
        </center>
    </body>                       
</html>                           

