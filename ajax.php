<?php
echo '<tr class="tr" id="tr_'.$_REQUEST["id"].'">
        	<td>
            <div class="artist">
            Artist Name : <input type="text" name="artist_name[]" />
            Act Size : <select name="act_size[]">
            	<option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            Description : <textarea name="description[]"></textarea>
            </div>
			<a onClick="fnRemove('.$_REQUEST["id"].')">Delete</a>
            </td>
            <td></td>
        </tr>';
?>