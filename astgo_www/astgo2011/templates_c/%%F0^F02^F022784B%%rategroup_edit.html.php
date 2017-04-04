<?php /* Smarty version 2.6.26, created on 2014-10-31 00:17:33
         compiled from rategroup_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'rategroup_edit.html', 105, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mainstyle.css"/>
<title>编辑费率组</title>
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
	function check()
	{
		trim_all_input(); //所有input 去空格
			
		if (document.form1.rategroupname.value==""  )
		{
			document.getElementById("userTip").innerHTML="<div align='center'><span class='STYLE4'><font color=red>请输入正确的费率组名称</font></span></div>";
      		document.form1.rategroupname.focus();
			return false;
			
		}		
		if (document.form1.smsrateprice.value==""  )
		{
			document.getElementById("userTip").innerHTML="<div align='center'><span class='STYLE4'><font color=red>请输入正确的短信费率</font></span></div>";
      		document.form1.smsrateprice.focus();
			return false;
			
		}		
		
		return true;

	}
	
	function goback(curpage,agent_id)
	{
	    document.form1.action = '?action=list&curpage='+curpage +'&agent_id=' + agent_id;
		document.form1.submit();
	}
    </script>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="2%" height="19" valign="bottom"><div align="center"><img src="images/tb.gif" width="14" height="14" /></div></td>
                <td width="98%" valign="bottom"><span class="table_caption"><?php if ($this->_tpl_vars['action'] == 'edit_post'): ?> 修改费率组 <?php elseif ($this->_tpl_vars['action'] == 'add_post'): ?> 新增费率组<?php else: ?>费率组管理<?php endif; ?></span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1">
              </span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  
  <form name="form1" method="post" action="?action=<?php echo $this->_tpl_vars['action']; ?>
&id=<?php echo $this->_tpl_vars['rategroup']['decode_id']; ?>
&curpage=<?php echo $this->_tpl_vars['curpage']; ?>
&agent_id=<?php echo $this->_tpl_vars['agent_id']; ?>
">
  <tr>
    <td><table width="605" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
     
      <tr>
            <td height="18" colspan="3" bgcolor="#FFFFFF">&nbsp;            </td>
            </tr>
          <tr>
            <td height="18" align="right" bgcolor="#FFFFFF"><span class="STYLE1">费率组管理者</span></td>
            <td height="18" colspan="2" bgcolor="#FFFFFF"><span class="STYLE2 STYLE1">
               <select name="agent_id" class="STYLE1" id="agent_id"  <?php if ($this->_tpl_vars['action'] == 'edit_post'): ?>  disabled <?php endif; ?> onchange= "change_acct_id(this.value)"  >
                <option  value="<?php echo $this->_tpl_vars['res_acct']['decode_id']; ?>
"  <?php if ($this->_tpl_vars['res_acct']['decode_id'] == $this->_tpl_vars['agent_id']): ?> selected <?php endif; ?>> <?php echo $this->_tpl_vars['res_acct']['acctname']; ?>
 </option>
                  <?php $_from = $this->_tpl_vars['acctchild']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keyname'] => $this->_tpl_vars['eachone']):
?>
                  <option  value="<?php echo $this->_tpl_vars['eachone']['decode_id']; ?>
" <?php if ($this->_tpl_vars['eachone']['decode_id'] == $this->_tpl_vars['agent_id']): ?> selected="selected" <?php endif; ?> >
                    <?php echo $this->_tpl_vars['eachone']['acctname']; ?>

                  </option>
                  <?php endforeach; endif; unset($_from); ?>
                </select>
            </span></td>
          </tr>
          <tr>
            <td width="35%" height="18" align="right" bgcolor="#FFFFFF"><span   class="STYLE1" >费率组名称</span></td>
            <td height="18" colspan="2" bgcolor="#FFFFFF"><label for="rategroupname"></label>
              <span class="STYLE7">
                <input name="rategroupname" type="text" class="STYLE1" style="height:18px; width:150px;" size="30"  value='<?php echo $this->_tpl_vars['rategroup']['rategroupname']; ?>
' />
              </span></td>
            </tr>
          <tr>
            <td height="18" align="right" bgcolor="#FFFFFF"><span   class="STYLE1" >短信费率</span></td>
            <td height="18" colspan="2" bgcolor="#FFFFFF"><label for="gatewaygroupname"></label>
              <span class="STYLE7">
                <input name="smsrateprice" type="text" class="STYLE1" style="height:18px; width:50px;" size="30"  value='<?php echo ((is_array($_tmp=$this->_tpl_vars['rategroup']['smsrateprice'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.4f") : smarty_modifier_string_format($_tmp, "%.4f")); ?>
'  />
                <span class="STYLE1">元</span>              </span></td>
            </tr>
          <tr>
            <td height="18" align="right" bgcolor="#FFFFFF"><span class="STYLE1">套餐</span></td>
            <td height="18" colspan="2" bgcolor="#FFFFFF"><span class="STYLE7">
              <select name="ratepackage_id" id="ratepackage_id"  >
                <?php $_from = $this->_tpl_vars['ratepackages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keyname'] => $this->_tpl_vars['eachone']):
?>
				<option  value="-1" > 不启用 </option>
                <option  value="<?php echo $this->_tpl_vars['eachone']['decode_id']; ?>
" <?php if ($this->_tpl_vars['eachone']['id'] == $this->_tpl_vars['rategroup']['ratepackage_id']): ?> selected="selected" <?php endif; ?> >
                  <?php echo $this->_tpl_vars['eachone']['packagename']; ?>

                </option>
                <?php endforeach; endif; unset($_from); ?>
              </select>
            </span></td>
          </tr>
  
          <tr>
            <td id="userTip" height="18" colspan="3" align="right" bgcolor="#FFFFFF"></td>
          </tr>
          
          <tr>
            <td height="18" colspan="3" align="center" bgcolor="#FFFFFF">
              
              <input type="submit"  class="STYLE1"   name="submitbtn" id="submitbtn"   onClick="return check()" value=" 确认提交 ">
              <input  type="button"  class="STYLE1"   name="backbutton" id="button"   onClick="goback('<?php echo $this->_tpl_vars['curpage']; ?>
','<?php echo $this->_tpl_vars['agent_id']; ?>
')" value=" 取消返回 ">              </td>
            </tr>
 
    </table></td>
  </tr>
  </form>
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
</body>
</html>