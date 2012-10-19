<div class="jqrte_body">
<table>
<tr>
   <td>
   <table class="jqrte_menu">
      <tr>
         <td colspan="4" title="<?php echo getLabel("Select Format",$language);?>">
            <select name="formatblock" id="content_rte_formatblock">
               <option value="" selected="selected"><?php echo getLabel("Select Format",$language);?></option>
               <option value="&lt;p&gt;">Paragraph</option>
               <option value="&lt;pre&gt;">Pre</option>
               <option value="&lt;h6&gt;">Heading 6</option>
               <option value="&lt;h5&gt;">Heading 5</option>
               <option value="&lt;h4&gt;">Heading 4</option>
               <option value="&lt;h3&gt;">Heading 3</option>
               <option value="&lt;h2&gt;">Heading 2</option>
               <option value="&lt;h1&gt;">Heading 1</option>
            </select>
         </td>
         <td colspan="4" title="<?php echo getLabel("Font Fmaily",$language);?>">
            <select name="fontname" id="content_rte_fontname">
               <option value="" selected="selected"><?php echo getLabel("Select Font",$language);?></option>
               <option value="arial"><?php echo getLabel("Arial",$language);?></option>
               <option value="comic sans ms"><?php echo getLabel("Comic Sans",$language);?></option>
               <option value="courier new"><?php echo getLabel("Courier New",$language);?></option>
               <option value="georgia"><?php echo getLabel("Georgia",$language);?></option>
               <option value="helvetica"><?php echo getLabel("Helvetica",$language);?></option>
               <option value="impact"><?php echo getLabel("Impact",$language);?></option>
               <option value="times new roman"><?php echo getLabel("Times",$language);?></option>
               <option value="trebuchet ms"><?php echo getLabel("Trebuchet",$language);?></option>
               <option value="verdana"><?php echo getLabel("Verdana",$language);?></option>
            </select>
         </td>
         <td colspan="4" title="<?php echo getLabel("Select Font Size",$language);?>">
            <select name="fontsize" id="content_rte_fontsize">
               <option value="" selected="selected"><?php echo getLabel("Select Font Size",$language);?></option>
               <option value="1">8</option>
               <option value="2">10</option>
               <option value="3">12</option>
               <option value="4">14</option>
               <option value="5">18</option>
               <option value="6">24</option>
            </select>
         </td>
         <td id="content_rte_subscript" title="<?php echo getLabel("Subscript",$language);?>"></td>
         <td id="content_rte_superscript" title="<?php echo getLabel("Superscript",$language);?>"></td>
      </tr>
      <tr>
         <td id="content_rte_bgcolor" title="<?php echo getLabel("Background Color",$language);?>"></td>
         <td id="content_rte_forecolor" title="<?php echo getLabel("Font Color",$language);?>"></td>
         <td id="content_rte_bold" title="<?php echo getLabel("Bold",$language);?>"></td>
         <td id="content_rte_italic" title="<?php echo getLabel("Italic",$language);?>"></td>
         <td id="content_rte_underline" title="<?php echo getLabel("Underline",$language);?>"></td>
         <td id="content_rte_strikethrough" title="<?php echo getLabel("Strikethrough",$language);?>"></td>
         <td id="content_rte_justifyleft" title="<?php echo getLabel("Justify Left",$language);?>"></td>
         <td id="content_rte_justifycenter" title="<?php echo getLabel("Justify Center",$language);?>"></td>
         <td id="content_rte_justifyright" title="<?php echo getLabel("Justify Right",$language);?>"></td>
         <td id="content_rte_justifyfull" title="<?php echo getLabel("Justify Full",$language);?>"></td>
         <td id="content_rte_insertorderedlist" title="<?php echo getLabel("Insert Ordered List",$language);?>"></td>
         <td id="content_rte_insertunorderedlist" title="<?php echo getLabel("Insert Unordered List",$language);?>"></td>
         <td id="content_rte_insertHorizontalRule" title="<?php echo getLabel("Insert Horizontal Rule",$language);?>"></td>
         <td id="content_rte_removeformat" title="<?php echo getLabel("Remove Format",$language);?>"></td>
      </tr>
      <tr>
         <td id="content_rte_addlink" title="<?php echo getLabel("Add Link",$language);?>"></td>
         <td id="content_rte_unlink" title="<?php echo getLabel("Unlink",$language);?>"></td>
         <td id="content_rte_addtable" title="<?php echo getLabel("Add Table",$language);?>"></td>
         <td id="content_rte_addimage" title="<?php echo getLabel("Add Image",$language);?>"></td>
         <td id="content_rte_uploadimage" title="<?php echo getLabel("Upload Image",$language);?>"></td>
         <td id="content_rte_uploadfile" title="<?php echo getLabel("Upload File",$language);?>"></td>
         <td id="content_rte_character" title="<?php echo getLabel("Special Character",$language);?>"></td>
         <td id="content_rte_emotion" title="<?php echo getLabel("Emotion",$language);?>"></td>
         <td id="content_rte_indent" title="<?php echo getLabel("Indent",$language);?>"></td>
         <td id="content_rte_outdent" title="<?php echo getLabel("Outdent",$language);?>"></td>
         <td id="content_rte_html" title="<?php echo getLabel("Html Content",$language);?>"></td>
         <td id="content_rte_copyright" title="<?php echo getLabel("Copyright",$language);?>"></td>
      </tr>
   </table>
   </td>
</tr>
<tr>
   <td>
      <iframe id="content_rte" src="about:blank" class="jqrte_iframebody"></iframe>
   </td>
</tr>
</table>
</div>