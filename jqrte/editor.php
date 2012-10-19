<div id="color_div" style="display:none" title="<?php echo getLabel("Color Picker",$language);?>">
   <table>
      <tr>
         <td colspan="3">
            H:<input type="text" id="jqcp_h" size="3" value="0">
            S:<input type="text" id="jqcp_s" size="3" value="0">
            L:<input type="text" id="jqcp_l" size="3" value="0"><br>
            R:<input type="text" id="jqcp_r" size="3" value="255">
            G:<input type="text" id="jqcp_g" size="3" value="255">
            B:<input type="text" id="jqcp_b" size="3" value="255"><br>
            <input type="text" id="color_value" class="jqcp_value" size="8">
            <input type="button" id="color_btn" value="<?php echo getLabel("Pick",$language);?>">
         </td>
      </tr>
      <tr>
         <td align="left"><div id="color_picker"></div></td>
      </tr>
   </table>
</div>


<div id="character_div" style="display:none" title="<?php echo getLabel("Special Character",$language);?>">
</div>


<div id="addtable_div" style="display:none" title="<?php echo getLabel("Add Table",$language);?>">
   <table>
      <tr>
         <td><?php echo getLabel("Rows",$language);?></td>
         <td><input type="text" id="addtable_row" name="table_row" value="2" size="10"></td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td><?php echo getLabel("Columns",$language);?></td>
         <td><input type="text" id="addtable_column" name="table_column" value="2" size="10"></td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td><?php echo getLabel("Width",$language);?></td>
         <td><input type="text" id="addtable_width" name="table_width" value="100" size="10"></td>
         <td>
            <select name="table_width_format" id="addtable_format">
               <option value="%">%</option>
               <option value=""><?php echo getLabel("pixels",$language);?></option>
            </select>
         </td>
      </tr>
      <tr>
         <td><?php echo getLabel("Border",$language);?></td>
         <td><input type="text" id="addtable_border" name="table_border" value="1" size="10"></td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td><?php echo getLabel("Cellspacing",$language);?></td>
         <td><input type="text" id="addtable_cellspacing" name="table_cellspacing" value="0" size="10"></td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td><?php echo getLabel("Cellpadding",$language);?></td>
         <td><input type="text" id="addtable_cellpadding" name="table_cellpadding" value="0" size="10"></td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td><?php echo getLabel("Alignment",$language);?></td>
         <td>
            <select id="addtable_alignment" name="table_alignment">
               <option value=""><?php echo getLabel("default",$language);?></option>
               <option value="left"><?php echo getLabel("left",$language);?></option>
               <option value="right"><?php echo getLabel("right",$language);?></option>
               <option value="center"><?php echo getLabel("center",$language);?></option>
            </select>
         </td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td>
            <input type="button" id="addtable_btn" value="<?php echo getLabel("Submit",$language);?>">
         </td>
      </tr>
   </table>
</div>


<div id="addlink_div" style="display:none"  title="<?php echo getLabel("Add Link",$language);?>">
   <table>
      <tr>
         <td><?php echo getLabel("Site Name",$language);?></td>
         <td><input type="text" id="addlink_name" name="link_name" size="20"></td>
      </tr>
      <tr>
         <td><?php echo getLabel("URL",$language);?></td>
         <td><input type="text" id="addlink_url" name="link_url"></td>
      </tr>
      <tr>
         <td><?php echo getLabel("Target",$language);?></td>
         <td>
            <select name="link_target" id="addlink_target">
               <option value=""></option>
               <option value="_blank"><?php echo getLabel("_blank",$language);?></option>
               <option value="_parent"><?php echo getLabel("_parent",$language);?></option>
               <option value="_self"><?php echo getLabel("_self",$language);?></option>
               <option value="_top"><?php echo getLabel("_top",$language);?></option>
            </select>
         </td>
      </tr>
      <tr>
         <td>
            <input type="button" id="addlink_btn" value="<?php echo getLabel("Submit",$language);?>">
         </td>
      </tr>
   </table>
</div>

<div id="addimage_div" style="display:none" title="<?php echo getLabel("Add Image",$language);?>">
   <table>
      <tr>
         <td><?php echo getLabel("Image URL",$language);?></td>
         <td><input type="text" id="addimage_url" name="image_url"></td>
      </tr>
      <tr>
         <td><?php echo getLabel("Image Description",$language);?></td>
         <td><input type="text" id="addimage_desc" name="image_desc"></td>
      </tr>
      <tr>
         <td><?php echo getLabel("Alignment",$language);?></td>
         <td>
            <select name="image_alignment" id="addimage_alignment">
               <option value=""></option>
               <option value="left"><?php echo getLabel("left",$language);?></option>
               <option value="right"><?php echo getLabel("right",$language);?></option>
            </select>
         </td>
      </tr>
      <tr>
         <td><?php echo getLabel("Border",$language);?></td>
         <td><input type="text" id="addimage_border" name="image_border" value="0" size="10"></td>
      </tr>
      <tr>
         <td>
            <input type="button" id="addimage_btn" value="<?php echo getLabel("Submit",$language);?>">
         </td>
      </tr>
   </table>
</div>


<div id="uploadimage_div" style="display:none" title="<?php echo getLabel("Upload Image",$language);?>">
   <form id="uploadimageform" name="uploadimageform" action="genericupload.php" method="post" enctype="multipart/form-data">
   <table>
      <tr>
         <td><?php echo getLabel("Upload Image",$language);?></td>
         <td>
            <input type="hidden" name="uploadimage_url" id="uploadimage_url">
            <input type="file" name="fileToUpload" id="uploadimage_fileToUpload">
         </td>
      </tr>
      <tr>
         <td><?php echo getLabel("Image Description",$language);?></td>
         <td><input type="text" id="uploadimage_desc" name="uploadimage_desc"></td>
      </tr>
      <tr>
         <td><?php echo getLabel("Alignment",$language);?></td>
         <td>
            <select name="uploadimage_alignment" id="uploadimage_alignment">
               <option value=""></option>
               <option value="left"><?php echo getLabel("left",$language);?></option>
               <option value="right"><?php echo getLabel("right",$language);?></option>
            </select>
         </td>
      </tr>
      <tr>
         <td><?php echo getLabel("Border",$language);?></td>
         <td><input type="text" id="uploadimage_border" name="uploadimage_border" value="0" size="10"></td>
      </tr>
      <tr>
         <td>
            <input type="submit" id="uploadimage_btn" value="<?php echo getLabel("Upload",$language);?>">
         </td>
      </tr>
   </table>
   </form>
</div>

<div id="uploadfile_div" style="display:none"  title="<?php echo getLabel("Upload File",$language);?>">
   <form id="uploadfileform" name="uploadfileform" action="genericupload.php" method="post" enctype="multipart/form-data">
   <table>
      <tr>
         <td><?php echo getLabel("Upload File",$language);?></td>
         <td>
            <input type="hidden" name="uploadfile_url" id="uploadfile_url">
            <input type="file" name="fileToUpload" id="uploadfile_fileToUpload">
         </td>
      </tr>
      <tr>
         <td><?php echo getLabel("File Name",$language);?></td>
         <td><input type="text" name="name" id="uploadfile_name" size="10"></td>
      </tr>
      <tr>
         <td>
            <input type="submit" id="uploadfile_btn" value="<?php echo getLabel("Upload",$language);?>">
         </td>
      </tr>
   </table>
   </form>
</div>

<div id="emotion_div" style="display:none"  title="<?php echo getLabel("Emotion",$language);?>">
   <table>
      <tr>
         <td><img class="emoticon" src="images/emotions/angry.gif" alt="<?php echo getLabel("angry",$language);?>"></td>
         <td><img class="emoticon" src="images/emotions/cry.gif" alt="<?php echo getLabel("cry",$language);?>"></td>
         <td><img class="emoticon" src="images/emotions/die.gif" alt="<?php echo getLabel("die",$language);?>"></td>
         <td><img class="emoticon" src="images/emotions/dislike.gif" alt="<?php echo getLabel("dislike",$language);?>"></td>
         <td><img class="emoticon" src="images/emotions/embarass.gif" alt="<?php echo getLabel("embarass",$language);?>"></td>
      </tr>
      <tr>
         <td><img class="emoticon" src="images/emotions/laugh.gif" alt="<?php echo getLabel("laugh",$language);?>"></td>
         <td><img class="emoticon" src="images/emotions/nochoice.gif" alt="<?php echo getLabel("nochoice",$language);?>"></td>
         <td><img class="emoticon" src="images/emotions/sad.gif" alt="<?php echo getLabel("sad",$language);?>"></td>
         <td><img class="emoticon" src="images/emotions/smile.gif" alt="<?php echo getLabel("smile",$language);?>"></td>
         <td><img class="emoticon" src="images/emotions/suprise.gif" alt="<?php echo getLabel("suprise",$language);?>"></td>
      </tr>
      <tr>
         <td><img class="emoticon" src="images/emotions/tongue.gif" alt="<?php echo getLabel("tongue",$language);?>"></td>
         <td><img class="emoticon" src="images/emotions/wink.gif" alt="<?php echo getLabel("wink",$language);?>"></td>
         <td><img class="emoticon" src="images/emotions/worry.gif" alt="<?php echo getLabel("worry",$language);?>"></td>
         <td><img class="emoticon" src="images/emotions/yell.gif" alt="<?php echo getLabel("yell",$language);?>"></td>
         <td></td>
      </tr>
   </table>
</div>
<div id="html_div" style="display:none" title="<?php echo getLabel("Html Content",$language);?>">
   <textarea id="html_content" rows="8" cols="50"></textarea><br>
   <input type="button" id="html_btn" value="submit">
</div>
