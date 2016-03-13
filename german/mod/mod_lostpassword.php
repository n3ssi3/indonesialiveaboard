<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?> 
<script language="JavaScript">
 
  function valid2()
 {
  if (document.formlog.username.value=="") { 
   window.alert("Please input email!"); document.formlog.username.focus(); return false;
   } else {
    return true;
   }
   }
 </script>
<form name="formlog" method="post" action="<?php echo($PHP_SELF);?>">
  <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF" class="text11">
    <tr> 
      <td colspan="2"><strong>Get Password</strong> 
        <hr size="1" noshade></td>
    </tr>
    <tr> 
      <td colspan="2"><font color="#FF0000"><?php echo("$msg");?></font></td>
    </tr>
    <tr> 
      <td height="22" colspan="2"><font color="#000000">Please input email to 
        retrive your login account. </font><font color="#FF0000">*</font> Required 
        fields.</td>
    </tr>
    <tr> 
      <td width="19%">Email <font color="#FF0000">*</font></td>
      <td width="81%">: 
        <input name="username" type="text" class="input_red" maxlength="30" value="<?php echo("$username");?>" /></td>
    </tr>
    <tr> 
      <td colspan="2"><hr size="1" noshade></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><div align="right"> 
          <input name="Submit" type="submit" class="input_red" id="Submit" value="Get Password" onClick="return valid2()">
          <input type="reset" name="Submit" value="Reset" class="input_red">
        </div></td>
    </tr>
    <tr> 
      <td colspan="2"><a href="login.php">Click here to Login</a></td>
    </tr>
    <tr> 
      <td colspan="2">Still have problem ? <a href="#">Contact Administrator </a></td>
    </tr>
  </table>
</form>
