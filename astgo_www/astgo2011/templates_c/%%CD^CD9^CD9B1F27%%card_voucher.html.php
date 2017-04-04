<?php /* Smarty version 2.6.26, created on 2014-10-31 00:19:51
         compiled from card_voucher.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mainstyle.css"/>
<title>储值卡充值</title>
<script src="./js/jquery-1.6.2.min.js"></script>

<script>
	//所有input 去空格
	function trim_all_input()
	{
		var inpus = document.getElementsByTagName("INPUT")
        for(var i=0; i<inpus.length; i++)
        {
            if(inpus[i].type=="text")
            {
               inpus[i].value =  inpus[i].value.replace(/\s/g,"");
            }
        }
		
	}
	
	// 提交前检测输入是否合法
	function check(discharge_level,balance)
	{
		trim_all_input(); //所有input 去空格

	
	
	
				
		if (document.form1.cardname.value==""  )
		{
			document.getElementById("userTip").innerHTML="<div align='center'><span class='STYLE4'><font color=red>请输入正确储值卡卡号</font></span></div>";
      		document.form1.cardname.focus();
			return false;
		}		
		
		if (document.form1.password.value==""  )
		{
			document.getElementById("userTip").innerHTML="<div align='center'><span class='STYLE4'><font color=red>请输入正确储值卡密码</font></span></div>";
      		document.form1.password.focus();
			return false;
		}		
		if (document.form1.acctnameortel.value=="" )
		{
			document.getElementById("userTip").innerHTML="<div align='center'><span class='STYLE4'><font color=red>请输入正确电话号码或帐号</font></span></div>";
      		document.form1.acctnameortel.focus();
			return false;
		}		
	    return true;
		//return true;

	}

	function goback(curpage,agent_id)
	{
	    document.form1.action = '?action=list&curpage='+curpage +'&agent_id=' + agent_id;
		document.form1.submit();
	}
	

    </script>

<body>
<form name="form1" method="post" action="?action=<?php echo $this->_tpl_vars['action']; ?>
&curpage=<?php echo $this->_tpl_vars['curpage']; ?>
&agent_id=<?php echo $this->_tpl_vars['agent_id']; ?>
">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="2%" height="19" valign="bottom"><div align="center"><img src="images/tb.gif" width="14" height="14" /></div></td>
                <td width="98%" valign="bottom"><span class="table_caption"> <?php if ($this->_tpl_vars['action'] == 'edit_post'): ?> 修改费率 <?php elseif ($this->_tpl_vars['action'] == 'add_post'): ?> 新增费率<?php else: ?>费率管理<?php endif; ?></span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="table_caption">
              </span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  
      
      <td><table width="605" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
 <tr>
            <td height="18" colspan="2" bgcolor="#FFFFFF"><div align="center"><span class="STYLE4">储值卡充值</span>
            </div></td>
            </tr>
          <tr>
            <td height="18" colspan="2" align="right" bgcolor="#FFFFFF"></span></td>
            </tr>
          <tr>
            <td width="43%" height="18" align="right" bgcolor="#FFFFFF"><span   class="STYLE1" >充值卡卡号</span></td>
            <td width="57%" height="18" bgcolor="#FFFFFF"><label for="canreinvite"><span class="STYLE1">
              <input name="cardname" type="text" class="STYLE1" style="height:18px; width:160px;" size="30"  value='<?php echo $this->_tpl_vars['card']['cardname']; ?>
' />
              </span></label></td>
          </tr>
          <tr>
            <td height="18" align="right" bgcolor="#FFFFFF"><span class="STYLE1">充值卡密码</span></td>
            <td height="19" bgcolor="#FFFFFF"><label for="host"></label>
              <span class="STYLE7">
                <input name="password" type="text" class="STYLE1" style="height:18px; width:160px;" size="30"  value='<?php echo $this->_tpl_vars['card']['password']; ?>
' />
                </span></td>
          </tr>
          <tr>
            <td height="18" align="right" bgcolor="#FFFFFF"><span   class="STYLE1" >被充值手机或帐号</span></td>
            <td height="19" bgcolor="#FFFFFF"><label for="host"></label>
              <span class="STYLE7">
                <input name="acctnameortel" type="text" class="STYLE1" style="height:18px; width:160px;" size="30"  value="" />
              </span></td>
            </tr>
  
          <tr>
            <td id="userTip" height="18" colspan="2" align="right" bgcolor="#FFFFFF"></td>
            </tr>
          <tr>
            <td height="18" colspan="2" align="center" bgcolor="#FFFFFF">
              
              <input type="submit"  class="STYLE1"   name="submitbtn" id="submitbtn"   onClick="return check()" value=" 确认提交 ">
              <input  type="button"  class="STYLE1"   name="backbutton" id="button"   onClick="goback('<?php echo $this->_tpl_vars['curpage']; ?>
','<?php echo $this->_tpl_vars['agent_id']; ?>
')" value=" 取消返回 ">
              </td>
            </tr>      
    </table></td>
   
  </tr>

  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
       
        <td width="67%"><table width="312" border="0" align="right" cellpadding="0" cellspacing="0">
          <tr>

            <td width="35">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<p class="STYLE19">&nbsp;</p>
</form>
</body>
</html>