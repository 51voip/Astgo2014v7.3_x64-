<?php /* Smarty version 2.6.26, created on 2015-02-28 17:12:11
         compiled from citycode_list_page.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mainstyle.css"/>
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
<title>手机号段</title>
</head>

<script>

	function delete_confirm()
	{
		if (confirm("确定要删除这个号码吗?"))  {
			 return true;	
		}
		return false;	
	}




//页码导航 
function post_list(index,curpage,maxpage)
{ 
     if ( parseInt(index) <= parseInt(maxpage) && parseInt(index) > 0  && parseInt(curpage)!= parseInt(index) )
	 {
        document.form1.action = '?action=list&curpage='+index ;  
		//alert(document.form1.action);
	    document.form1.submit(); 
	    return true;
	 }
	 return false;
}

	
</script>
<div>
<body>
  <form name="form1" method="post" action="?action=list">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                
                <td width="97%" valign="bottom"><span class="table_caption">手机号段管理 &nbsp;&nbsp; 
                
              
                </span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="table_caption">
            <img src="images/add.gif" width="10" height="10" /> <a href="#"  onClick="call_add()">批量导入手机号段 </a> 
             </span>
             
             
             
             </div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">

          <tr>
            <td  height="24" colspan="6"    bgcolor="#FFFFFF" class="STYLE6"> 
            <label for="partcode2"> <span class="STYLE1">号段前缀</span></label>
                               <span class="STYLE1">
<input name="partcode" type="text" class="STYLE1" id="partcode2" size="12" maxlength="30" value='<?php echo $this->_tpl_vars['post_data']['partcode']; ?>
'  >
区号
<input name="citycode" type="text" class="STYLE1" id="citycode" size="12" maxlength="30" value='<?php echo $this->_tpl_vars['post_data']['citycode']; ?>
'  >
<input name="querybtn" type="submit" class="STYLE1"   id="querybtn"  value=" 查询 ">
<input name="checkbox_downloadfile" type="checkbox" class="STYLE1"   />
<label for="downloadfile">导出</label>
                               </span>
            <label for="downloadfile"></label></td>
          </tr>
          <tr>
            <td width="2%"  height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">序号</div></td>
            <td width="6%"  height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">号段</div></td>
            <td width="6%"  height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">区号</div></td>
            <td width="8%"  height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">地区</div></td>
            <td width="8%"  height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">运营商</div></td>
            <td width="6%"  height="24"    bgcolor="d3eaef" class="STYLE6"><div align="center" class="table_title">操作</div></td>
          </tr>
          
            
          
          
          <?php $_from = $this->_tpl_vars['table_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keyname'] => $this->_tpl_vars['eachone']):
?>  
           <tr>
        
            <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19"><?php echo $this->_tpl_vars['eachone']['check_id']; ?>
</div></td>
            <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19"><?php echo $this->_tpl_vars['eachone']['partcode']; ?>
</div></td>
            <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19"><?php echo $this->_tpl_vars['eachone']['citycode']; ?>
</div></td>
            <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19"><?php echo $this->_tpl_vars['eachone']['cityname']; ?>
</div></td>
            <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19"><?php echo $this->_tpl_vars['eachone']['telname']; ?>
</div></td>
          
            <td height="20" bgcolor="<?php if (!(1 & $this->_tpl_vars['keyname'])): ?>#FFFFFF<?php else: ?>#F3F3F3<?php endif; ?>"><div align="center" class="STYLE19"><a href="?action=delete_post&id=<?php echo $this->_tpl_vars['eachone']['decode_id']; ?>
&curpage=<?php echo $this->_tpl_vars['curpage']; ?>
"  onClick="return delete_confirm()" >删除</a></div></td>
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
','<?php echo $this->_tpl_vars['curpage']; ?>
','<?php echo $this->_tpl_vars['maxpage']; ?>
')" >尾页</a></div></td>
           
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</form>
</body>
</div>
<div class="demo" style="display:none" >
<div id="dialog-form" title="手机号段文件上传">
	  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="1">
	    <tr>
	      <td height="18" colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
	      </tr>
    <form enctype="multipart/form-data" method="post" name="form2"  target="_self">
	    <tr>
	      <td height="20" align="right" bgcolor="#FFFFFF"><span   class="STYLE1" >手机号段文件</span></td>
	      <td height="20" bgcolor="#FFFFFF"><label for="src"></label>
	        <input name="src" type="file" class="STYLE1" />
           <label for="dest"></label></td>
        </tr>
	    <tr>
	      <td height="18" align="right" bgcolor="#FFFFFF">&nbsp;</td>
	      <td height="18" bgcolor="#FFFFFF"><span class="STYLE2 STYLE1">
	        <input type="submit"  class="STYLE1"   name="submitbtn2" id="submitbtn2"   onClick="return check()" value="  提 交 上 传  ">
	      </span></td>
        </tr>
        </form>
	    <tr>
	      <td height="18" colspan="2" align="right" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
	    <tr>
	      <td height="18" colspan="2" align="right" bgcolor="#FFFFFF"><div align="center"><span class="STYLE4">*选择上传的文件请提前关闭，而且文件不能加密</span></div></td>
        </tr>
	    <tr>
	      <td height="18" colspan="2" align="right" bgcolor="#FFFFFF"><div align="center"><span class="STYLE4"><strong>文件格式：</strong>号段,区号,城市,运营商名</span></div></td>
        </tr>
         <tr>
	      <td height="18" colspan="2" align="right" bgcolor="#FFFFFF"><div align="center"><span class="STYLE4"><strong>,城市,运营商名为可选择项：</strong></span></div></td>
        </tr>   
	    </table>
 </div>
</div><!-- End demo -->

<script>


 function call_add()
 {
    document.form2.action = '?action=add_post&curpage=<?php echo $this->_tpl_vars['curpage']; ?>
';
    $( "#dialog-form" ).dialog( "open" );

 }
 	$(function() {
		$( "#dialog:ui-dialog" ).dialog( "destroy" );
		$( "#dialog-form" ).dialog({
			autoOpen: false,
			height: 300,
			width: 450,
			modal: true,
			close: function() {
				allFields.val( "" ).removeClass( "ui-state-error" );
			}
        });
        

                 

		/*编辑框选择后显示获取焦点，批量修改窗体提示不修改*/
		 $("input:text,input:password,textarea").focus(function(){
			 $(this).css("background","#d3eaef");
			 }).blur(function(){
				 $(this).css("background","#FFF");
			 }); 
	});
	</script>
</html>