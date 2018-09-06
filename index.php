<?php
if(isset($_POST["submit"]))
{
	echo "<pre>";
	print_r($_POST);
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jquery Data Tables</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
function fnAddRecords()
{
	var new_id = jQuery("#last_id").val();
	var ajaxURL = "ajax.php?id="+new_id;
	jQuery.ajax({
			type: "GET",
			url: ajaxURL,
			success: function(result)
			{
				jQuery("#last_id").val(++new_id);
				jQuery('#table_id').append(result);
			}
	});
}
function fnRemove(id)
{
	jQuery("#tr_"+id).remove();
	//jQuery(ele).parent("tr").remove();
}
</script>
</head>

<body>
<form name="frm" method="post" action="index.php">
	<input type="hidden" name="last_id" id="last_id" value="2" />
	<a onclick="fnAddRecords()">Add a record</a>
	<table cellpadding="1" cellspacing="1" border="0" id="table_id">
    	<tr class="tr" id="tr_1">
        	<td>
            <div class="artist">
            Artist Name : <input type="text" name="artist_name[]"/>
            Act Size : <select name="act_size[]">
            	<option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            Description : <textarea name="description[]"></textarea>
            </div>
            </td>
            <td></td>
        </tr>
    </table>
    <input type="submit" name="submit" id="submit" value="Save" />
</form>

</body>
</html>