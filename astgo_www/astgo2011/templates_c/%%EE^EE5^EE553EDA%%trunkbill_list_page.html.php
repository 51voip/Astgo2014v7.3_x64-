<?php /* Smarty version 2.6.26, created on 2014-11-03 15:08:53
         compiled from trunkbill_list_page.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mainstyle.css"/>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./css/themes/base/jquery.ui.all.css">
	<script src="./js/jquery-1.6.2.min.js"></script>
	<script src="./js/external/jquery.bgiframe-2.1.2.js"></script>
	<script src="./js/ui/jquery.ui.core.js"></script>
	<script src="./js/ui/jquery.ui.widget.js"></script>
	<script src="./js/ui/jquery.ui.mouse.js"></script>
	<script src="./js/ui/jquery.ui.button.js"></script>
	<script src="./js/ui/jquery.ui.draggable.js"></script>
	<script src="./js/ui/jquery.ui.position.js"></script>
	<script src="./js/ui/jquery.ui.resizable.js"></script>
	<script src="./js/ui/jquery.ui.dialog.js"></script>
    <script src="./js/ui/jquery.ui.datepicker.js"></script>
    <script src="./js/ui/i18n/jquery.ui.datepicker-zh-CN.js"></script>
    <link rel="stylesheet" href="./css/demos.css">
<title>话务对接</title>
</head>

<script>


//页码导航 
function post_list(index,curpage,maxpage)
{ 
     if (parseInt(index) <= parseInt(maxpage) && parseInt(index) > 0  && parseInt(curpage)!= parseInt(index) )
	 {
        document.form1.action = '?action=list&curpage='+index+'&agent_id=<?php echo $this->_tpl_vars['agent_id']; ?>
'; 
	    document.form1.submit(); 
	    return true;
	 }
	 return false;
}

	function delete_confirm()
	{
		if (confirm("确定要删除这个话务落地吗?"))  {
			 return true;	
		}
		return false;	
	}
	


function  change_acct_id(acct_id)
{
	    document.form1.submit(); 
	    return true;		 
	
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
                
                <td width="97%" valign="bottom"><span  align="left" class="table_caption">话务批发 </span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="table_caption"> <?php if ($this->_tpl_vars['res_acct']['accttype'] == '1'): ?><a href="?action=add_send&curpage=<?php echo $this->_tpl_vars['curpage']; ?>
&agent_id=<?php echo $this->_tpl_vars['agent_id']; ?>
" >新增话务批发 </a><?php endif; ?></span>
             
             
             
             </div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
    
<form name="form1" method="post" action="?action=list">
 <tr>
   <td  height="24" colspan="11"    bgcolor="#FFFFFF" class="STYLE1"><label for="agent_id"> <?php if ($this->_tpl_vars['res_acct']['accttype'] == '1'): ?> 代理
                              <select name="agent_id" class="STYLE1" id="agent_id" onChange= "change_acct_id(this.value)" >
                               <option  value="" > --全部-- </option>
                              <?php $_from = $this->_tpl_vars['acctchild']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keyname'] => $this->_tpl_vars['eachone']):
?>
                              <option  value="<?php echo $this->_tpl_vars['eachone']['decode_id']; ?>
" <?php if ($this->_tpl_vars['eachone']['decode_id'] == $this->_tpl_vars['agent_id']): ?> selected <?php endif; ?> >
                                <?php echo $this->_tpl_vars['eachone']['acctname']; ?>

                                </option>
                              <?php endforeach; endif; unset($_from); ?>
                              </select>
                              <label for="host"> 对接IP</label>
                            <input name="host" type="text" class="STYLE1" id="host" size="20" maxlength="30" value='<?php echo $this->_tpl_vars['post_data']['host']; ?>
'>
                            <input name="querybtn" type="submit" class="STYLE1"   id="querybtn"  value=" 查询 ">
                          <?php endif; ?></td>
   </tr>
 </form>
 
         <tr>
                           <td width="2%" height="26"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">序号</div></td>
                          
                          
                          
        <td width="6%" height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">代理商</div></td>
        <td width="6%" height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">对接名称</div></td>
        <td width="2%" height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">状态</div></td>
        <td width="5%" height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">对接IP</div></td>
        <td width="8%" height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">呼出费率组</div></td>
         <td width="8%" height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">呼出路由组</div></td>
         <td width="4%" height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">走媒体</div></td>
         <td width="8%" height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">语音编码</div></td>
         <td width="4%" height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">DTMF格式</div></td>
         <td width="8%" height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">操作</div></td>
                          
 
        </tr>     

          
          
          <?php $_from = $this->_tpl_vars['table_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keyname'] => $this->_tpl_vars['eachone']):
?>  	
        <tr>
       
                        <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19" > <?php echo $this->_tpl_vars['eachone']['check_id']; ?>
 </div></td>
                         <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19" > <?php echo $this->_tpl_vars['eachone']['acctname']; ?>
 </div></td>
                         <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19" > <?php echo $this->_tpl_vars['eachone']['trunkbill_name']; ?>
 </div></td>
                         <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19" > <?php if ($this->_tpl_vars['eachone']['enable'] == '1'): ?>激活<?php else: ?>冻结<?php endif; ?> </div></td>
                         <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19" > <?php echo $this->_tpl_vars['eachone']['host']; ?>
 </div></td>
                         <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19" > <?php echo $this->_tpl_vars['eachone']['rategroupname']; ?>
 </div></td>
                         <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19" > <?php echo $this->_tpl_vars['eachone']['gatewaygroupname']; ?>
 </div></td>                         
                         <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19" > <?php if ($this->_tpl_vars['eachone']['canreinvite'] == 'yes'): ?>否<?php else: ?>否<?php endif; ?> </div></td>
                         <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19" > <?php echo $this->_tpl_vars['eachone']['allow']; ?>
 </div></td>
                         <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19" > <?php echo $this->_tpl_vars['eachone']['dtmfmode']; ?>
 </div></td>
                         <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19">
                          <?php if ($this->_tpl_vars['res_acct']['accttype'] == '1'): ?>
                          [<a href="?action=edit_send&id=<?php echo $this->_tpl_vars['eachone']['decode_id']; ?>
&curpage=<?php echo $this->_tpl_vars['curpage']; ?>
&agent_id=<?php echo $this->_tpl_vars['agent_id']; ?>
"  >修改</a>]</span>
                         
                           [<a href="?action=delete_post&id=<?php echo $this->_tpl_vars['eachone']['decode_id']; ?>
&curpage=<?php echo $this->_tpl_vars['curpage']; ?>
&agent_id=<?php echo $this->_tpl_vars['agent_id']; ?>
"  onClick="return delete_confirm()">删除</a>]</div>
                          <?php endif; ?>
                          </td>
                           
           </tr>
          
 
        <?php endforeach; endif; unset($_from); ?>
    </table></td>
  </tr>
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="33%"><div align="left"><span class="STYLE21">共
              <?php echo $this->_tpl_vars['record_count']; ?>

              条记录，当前第
              <?php echo $this->_tpl_vars['curpage']; ?>

              /
              <?php echo $this->_tpl_vars['maxpage']; ?>

              页，每页
              <?php echo $this->_tpl_vars['pagelimtcount']; ?>

          条记录</span></div></td>
        <td width="67%"><table width="180" border="0" align="right" cellpadding="0" cellspacing="0">
          <tr>
            <td width="40"><div align="center"> <a href="#" class="STYLE21" onClick="return post_list('1',<?php echo $this->_tpl_vars['curpage']; ?>
,'<?php echo $this->_tpl_vars['maxpage']; ?>
')"  >首页</a> </div></td>
            <td width="40"><div align="center"> <a href="#" class="STYLE21" onClick="return post_list('<?php echo $this->_tpl_vars['curpage']-1; ?>
','<?php echo $this->_tpl_vars['curpage']; ?>
','<?php echo $this->_tpl_vars['maxpage']; ?>
')" >上一页</a></div></td>
            <td width="40"><div align="center"> <a href="#" class="STYLE21" onClick="return post_list('<?php echo $this->_tpl_vars['curpage']+1; ?>
','<?php echo $this->_tpl_vars['curpage']; ?>
','<?php echo $this->_tpl_vars['maxpage']; ?>
')" >下一页</a></div></td>
            <td width="40"><div align="center"> <a href="#" class="STYLE21" onClick="return post_list('<?php echo $this->_tpl_vars['maxpage']; ?>
' ,'<?php echo $this->_tpl_vars['curpage']; ?>
','<?php echo $this->_tpl_vars['maxpage']; ?>
')" >尾页</a></div></td>
           
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>

</html>