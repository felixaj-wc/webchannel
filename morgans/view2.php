  <?php
$cou = $content->hitcount;
$cou = $cou+1;
$this->properties_model->update_view_count($content->prop_id,$cou);  
  ?>
        <?php
    $images = $this->gallery_model->get_array_cond2($content->prop_id); 
        $loc=$this->location_model->load($content->development);  
    $bed=$this->bedrooms_model->load($content->no_beds);
    $bath=$this->bathrooms_model->load($content->no_bathrooms);
    $type=$this->types_model->load($content->type_ref_id);
    
              if($content->prop_for_id=="sales")
              {
                $price=$content->prop_price;
              }
              else
              {
                $price=$content->annual_rent;
              }
    
    ?>
        
        
    
  

  <table width="790" border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td valign="top" bgcolor="#ffffff">
      <table width="100%" border="0" cellspacing="5" cellpadding="5">
  
  <tr>
    <td align="center" valign="top">
    <img style="margin:0; outline:none; border:0;" src="public/frontend/images/pdf-logo.gif" alt="Morgans" />
    </td> 
    </tr> 
</table>


    
    </td>
  </tr>
  <tr>
  <td valign="top">
  <table border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td align="center" colspan="3" style="background: url('<?php echo ($content->offplan=='N')?$images[0]['image_name']:base_url('public/uploads/gallery/'.$images[0]['image_name']); ?>'); background-size: cover;"><img width="120%" src="<?php echo ($content->offplan=='N')?$images[0]['image_name']:base_url('public/uploads/gallery/'.$images[0]['image_name']); ?>" style="opacity:0;"  alt="<?php echo stripslashes($content->prop_name); ?>" /></td>
  </tr>
  <tr>
    <td valign="top"><img width="263" height="150" style="display:block; margin:0; outline:none; border:0;" src="<?php echo ($content->offplan=='N')?$images[1]['image_name']:base_url('public/uploads/gallery/'.$images[1]['image_name']); ?>"  alt="" /></td>
    
    <td valign="top"><img width="263" height="150" style="display:block; margin:0; outline:none; border:0;" src="<?php echo ($content->offplan=='N')?$images[2]['image_name']:base_url('public/uploads/gallery/'.$images[2]['image_name']); ?>"  alt="" /></td>

    <td valign="top"><img width="263" height="150" style="display:block; margin:0; outline:none; border:0;" src="<?php echo ($content->offplan=='N')?$images[3]['image_name']:base_url('public/uploads/gallery/'.$images[3]['image_name']); ?>"  alt="" /></td>
  </tr>
</table>
  </td>
  </tr>
  <tr>
  <td valign="top" >    
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
  
  <tr>
    <td style="padding-top:20px;">
    <table width="100%" border="0" cellpadding="3" cellspacing="0">
  <tr>
    <td class="tg-smzr" style="color:#ffffff; font-size:20px; margin:0 0 10px;background:#2f2f31;padding: 15px 10px;" ><?php echo stripslashes($content->prop_name); ?></td>
    </tr>
    
  <tr>
    <td valign="top" style="padding-bottom:20px; padding-top:20px;">
    <table width="100%" border="0" cellpadding="3" cellspacing="0">
  <tr>
  
    <td valign="top">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="top" ><?php if($content->development!="") { ?><strong>Location:</strong> <?php echo @$loc->title; ?><?php } ?></td>
          </tr>
        </table>

    </td>
    
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="top" ><?php if($content->no_beds!=0) { ?><strong>Bedroom:</strong> <?php echo @$bed->bed_val; ?><?php } ?></td>

          </tr>
        </table></td>
    <td  valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="top" ><?php if($content->no_bathrooms!=0) { ?><strong>Bathrooms:</strong> <?php echo @$bath->bath_val; ?><?php } ?></td>
           </tr>
        </table></td>
  </tr>
   
    <tr>
    <td valign="top">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="top"><?php if($content->total_area!=0) { ?><strong>BUA:</strong> <?php echo $content->total_area; ?>Sq Ft<?php } ?></td>
          </tr>
        </table>

    </td>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="top" ><?php if($content->type_ref_id!=0) { ?><strong>Property Type:</strong> <?php echo $type->typename; ?><?php } ?></td>    
          </tr>
        </table></td>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="top" ><strong>Ref No:</strong> <?php echo @$content->prop_ref_no; ?></td>
          </tr>
        </table></td>
  </tr>
</table>
</td>
    </tr>
</table>
</td>
    </tr>
  
</table>

    </td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      
      <tr>
        <td valign="top">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top">
            
            <table width="100%" border="0" cellpadding="0" cellspacing="0">      
              <tr>
              <td>
              
              </td>
              </tr>       
            </table>            
            </td>            
          </tr>
        </table>
        </td>
        </tr>
      
    </table></td>
  </tr>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">            
              <tr>
                <td class="tg-smzr" valign="top" style="color:#000000; font-size:20px; margin:0 0 10px;padding-bottom:20px; padding-top:20px;" >Property Description</td>
              </tr>
              
              <tr>
               <td style="font-size: 12px; padding: 0px; line-height: 15px;" valign="top"><?php echo $content->prop_desc; ?>
</td>
              </tr>
            </table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td style="color:#000000; font-size:20px; margin:0 0 10px;padding-bottom:20px; padding-top:20px;" class="tg-smzr" valign="top">Amenities</td>
              </tr>
              
             <tr>
                <td  valign="top">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
          <?php
                    $facilAry = explode('<>',$content->prop_facilities);
                    $i=1;
                    foreach($facilAry as $fkey){
          ?>                
                    <td width="4%" valign="top"><img src="public/frontend/images/bullets.jpg"  alt="" /></td>
                    <td width="96%" valign="top" style="font-size:12px;padding-bottom:20px;"><?php echo $fkey; ?></td>
                    
                    <?php if($i%2==0) { ?>
                    </tr>
                    <tr>
                    <?php } ?>
                  
                       <?php
             $i++;
             }
             
                    
                  ?>
                  </tr>
                  
                   
                </table>

                </td>
              </tr>
               
             
              
            </table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td bgcolor="#2f2f31">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    
      <tr>
         <td valign="top" >    
      
        <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
   
    <td align="left" style="color:#ffffff; font-size:14px; margin:10px 0px;">email: info@morgansrealty.com</td>
    <td align="right" style="color:#ffffff; font-size:14px; margin:10px 0px;">contact: +971 4 2418886</td>
   
  </tr>
</table>

        </td>
        </tr>
        
      </table>
</td>
</tr>
</table>
