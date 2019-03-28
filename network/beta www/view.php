<?php $seg =$this->uri->segment(4);if( $seg !="regional-presence") {  ?>
<div class="spec-wrapper white">
  <?php if( in_array($seg,$misslugs)) { ?>
  <section class="section">
    <div class="container">
      <div class="col-md-12">
        <div class="related-list">
          <div class="row">
            <?php /*echo '<pre>';print_r($aboutus); exit;*/ if($aboutus) foreach($aboutus as $key => $value): ?>
            <div class="col-md-4">
              <div class="item">
                <div class="item-inner">
                  <h5 class="br head-h5"><a href="<?php echo ($value['childs'])?site_url('contents/view/'.$miscarry[$value['menuitems_id']]):$value['link'].'" target="'.($value['target_type']?$value['target_type']:'_self');?>"><?php echo $value['name']; ?></a></h5>
                  <p><?php echo word_limiter(strip_tags($value['short_desc']?$value['short_desc']:$value['desc']),20) ?></p>
                  <?php if($value['childs']){ ?>
                  <ul class="style-1">
                    <?php foreach($value['childs'] as $child): ?>
                    <li><a href="<?php echo $child['link'] ?>" target="<?php echo $child['target_type']?>"><?php echo $child['name']; ?></a></li>
                    <?php  endforeach;?>
                  </ul>
                  <?php } if($value['link'] == site_url('contents/view/regional-presence')){ ?>
                  <ul class="style-1 half">
                    <?php if($locations)  foreach($locations as $key => $globe):?>
                    <li><a href="<?php echo site_url('contents/view/regional-presence') ?>"><?php echo $globe['title'] ?></a></li>
                    <?php endforeach;?>
                  </ul>
                  <?php } ?>
                </div>
              </div>
            </div>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php } else if(in_array( $seg ,array("merchant-acquiring",'issuing-and-processing'))) {  echo $content->desc;
  $urls = array('issuing-and-processing0'=>'contents/view/','issuing-and-processing1'=>'card-issuing-processing/','issuing-and-processing2'=>'contents/view/','merchant-acquiring0'=>'contents/view/','merchant-acquiring1'=>site_url('contents/view/acquiring-processing'),'merchant-acquiring2'=>'merchant-acquiring/');  ?>
  <?php /*?><!--<section class="section">
    <div class="container">
      <div class="col-md-12">
        <div class="related-list">
          <div class="row">
            <?php  $key=0; if($datas) foreach($datas as  $key => $data):?>
            <div class="col-md-4">
              <div class="item"><a href="<?php echo site_url($data['slug']) ?>">
                <div class="item-inner">
                  <h5 class="br text-nowrap head-h5"><?php echo $data['title']; ?></h5>
                  <?php  echo isset($this->contents[$data['content_id']]['short_desc']) ? '<p>'.word_limiter(strip_tags($this->contents[$data['content_id']]['short_desc']),21).'</p>': '';?>
                  <?php if($data['childs']) { echo '<ul class="style-1 '.(count($data['childs'])>4?'half':'').'">';foreach($data['childs'] as $ck => $child):  
					echo '<li><a href="'.site_url($urls[$seg.$key].$child['slug']).'">'.str_replace(' (EPP)','',$child['title']).'</a></li>';
					endforeach;echo '</ul>'; }?>
                </div>
                </a> </div>
            </div>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    </div>
  </section>--><?php */?>
  <?php }else { ?>
  <?php if($content->category_id==37) { ?>
  <?php /*?><a href="<?php echo site_url('contents/lists/support-faqs'); ?>" class="btn red"><i class="i.fa.fa-angle-left">&lt;&lt;Back</i></a><?php */?>
  <?php } ?>
  <?php if($content->desc!='') { echo $content->desc; } ?>
  <?php } ?>
  <?php //$this->load->view('frontend/include/commonimage'); ?>
</div>
<?php } else { ?>

<section class="section">
        <div class="container">           
            <div class="map-holder">
                <div class="col-md-12">
					<img id="ImageMaps" src="http://beta.network.ae/www/public/frontend/images/map.png" class="img-responsive" border="0" width="919" height="879" orgWidth="919" orgHeight="879" usemap="#image-maps" alt="" />
			<div class="desk-loc-wrap">
					<map name="image-maps" id="ImageMaps">						
						<ul class="tab-view">
							<li class="view-point Nigeria">
								<area alt="" title="" href="#" shape="poly" coords="267,388,269,375,268,366,269,358,269,353,276,347,280,340,281,331,280,329,276,328,280,316,281,307,287,301,292,299,300,297,307,297,313,306,321,306,324,305,334,309,344,312,347,306,357,304,370,306,377,307,381,303,385,300,396,303,397,313,405,317,405,323,393,333,386,341,386,351,379,357,374,366,367,377,365,383,355,378,347,380,343,390,334,394,334,401,331,408,328,413,310,411,303,411,301,402,296,404,291,391,287,386" style="outline:none;" target="_self" />
                                <div class="map-wrap">
								<div class="map-mark">
                                    <img src="public/frontend/images/map-marker.png">
                                </div>
                                <div class="loc-detail">
                                    <div class="closed-btn"><img src="public/frontend/images/close-bt.png" onClick="this.close"></div>                                  
                                    <span>Nigeria Office<br>
                                    Network International</span>
                                    <address>Block B; 4th Floor,3 Force Road,
Onikan Lagos, Nigeria</address>
                                    <div class="map-dir">
                                        <figcaption>DIRECTIONS</figcaption>
                                        <figure><a href="https://www.google.com/maps/place/Block+B;+4th+Floor,+3+Force+Rd,+Lagos+Island,+Lagos,+Nigeria/@9.571080,8.063969,17z/data=!3m1!4b1!4m5!3m4!1s0x103b8b18ac0693db:0x9cc46c3336f3e1cb!8m2!3d9.571080!4d8.063969" target="_blank"><img src="public/frontend/images/map-img.png" class="img-responsive"></a></figure>
                                    </div>                                  
                                </div>
                                </div>
                                
                                
                                
                                
							</li>
							
                            <li class="view-point Egypt">
    							<area  alt="" title="" href="#" shape="poly" coords="637,103,624,89,612,86,602,89,596,85,585,83,580,87,570,94,560,96,561,89,552,89,548,86,531,86,534,80,524,83,519,86,518,100,521,106,524,114,525,143,524,195,531,196,553,195,649,198,642,192,640,175,631,165,624,150,623,139,619,127,608,116,606,108,610,104,606,103,615,116,620,125,626,132,630,131" style="outline:none;" target="_self" />
                                <div class="map-wrap">
                                <div class="map-mark">
                                    <img src="public/frontend/images/map-marker.png">
                                </div>
                                <div class="loc-detail">
                                    <div class="closed-btn"><img src="public/frontend/images/close-bt.png" onClick="this.close"></div>
                                    <!-- <figure>
                                        <img src="public/frontend/images/uae-img.png" class="img-responsive">
                                    </figure>  -->                                  
                                    <span>Egypt Office<br>
                                    Network International</span>
                                    <address>CityStars Capital 8,4th Floor,
Heliopolis, Cairo, Egypt</address>
                                    <div class="map-dir">
                                        <figcaption>DIRECTIONS</figcaption>
                                        <figure><a href="https://www.google.com/maps/search/CityStars+Capital+8,4th+Floor,+Heliopolis,+Cairo,+Egypt/@26.8206,30.8025,17z/data=!3m1!4b1" target="_blank"><img src="public/frontend/images/map-img.png" class="img-responsive"></a></figure>
                                    </div>                                  
                                </div>
                                </div>
                            </li>
                            
                            <li class="view-point Jordan">
    							<area  alt="" title="" href="#" shape="poly" coords="645,60,637,103,647,107,654,104,665,95,666,91,667,86,663,83,664,76,674,74,683,69,685,62,680,57,680,56,671,60,665,64,656,67" style="outline:none;" target="_self" />
                                <div class="map-wrap">
                                <div class="map-mark">
                                    <img src="public/frontend/images/map-marker.png">
                                </div>
                                <div class="loc-detail">
                                    <div class="closed-btn"><img src="public/frontend/images/close-bt.png" onClick="this.close"></div>
                                    <!-- <figure>
                                        <img src="public/frontend/images/uae-img.png" class="img-responsive">
                                    </figure> -->                                   
                                    <span>Jordan Office<br>
                                    Network International</span>
                                    <address>Abdul Raheem Al-Wakeed St.,
Building 43, Shmeisani, Amman, Jordan</address>
                                    <div class="map-dir">
                                        <figcaption>DIRECTIONS</figcaption>
                                        <figure><a href="https://www.google.com/maps/place/Talal+Abu-Ghazaleh+University+(TAGI-UNI)/@30.5852,36.2384,17z/data=!3m1!4b1!4m5!3m4!1s0x151ca0729cbe672b:0xa9a8f5706163cd8a!8m2!3d30.5852!4d36.2384" target="_blank"><img src="public/frontend/images/map-img.png" class="img-responsive"></a></figure>
                                    </div>                                  
                                </div>
                                </div>
                            </li>
							
							<li class="view-point UAE">
								<area class="pointer" alt="" title="" href="#" shape="poly" coords="823,177,829,195,872,198,871,179,874,175,877,167,874,164,879,162,878,153,878,148,867,162,857,171,850,174" style="outline:none;" target="_self" />
                                <div class="map-wrap">
                                <div class="map-mark">
                                    <img src="public/frontend/images/map-marker.png">
                                </div>
			                    <div class="loc-detail">
                                    <div class="closed-btn"><img src="public/frontend/images/close-bt.png" onClick="this.close"></div>
			                    	<figure>
			                    		<img src="public/frontend/images/uae-img.png" class="img-responsive">
			                    	</figure>				                    
				                    <span>Group Head Ofﬁce<br>
				                    Network International LLC</span>
				                    <address>23rd Street, Opp. Al Salam Mosque, Al Barsha 2 - Dubai - UAE</address>
				                    <div class="map-dir">
				                    	<figcaption>DIRECTIONS</figcaption>
				                    	<figure><a href="https://www.google.com/maps/place/Network+International+L.L.C/@25.2048,55.2708,17z/data=!3m1!4b1!4m5!3m4!1s0x3e5f6b8900000001:0xbb5a5d8002c50e46!8m2!3d25.2048!4d55.2708" target="_blank"><img src="public/frontend/images/map-img.png" class="img-responsive"></a></figure>
				                    </div>			                  		
			                    </div>
                                </div>
							</li>

                            <li class="view-point Africa">
    							<area  alt="" title="" href="#" shape="poly" coords="572,718,563,722,550,735,544,742,537,749,530,750,530,763,525,763,513,763,507,760,504,756,495,763,482,775,473,777,474,766,470,757,465,749,462,754,461,772,462,786,457,800,450,803,439,808,442,803,436,803,438,796,435,791,429,792,423,798,440,819,448,831,449,843,447,853,446,860,450,869,460,875,469,878,481,875,504,871,526,868,533,863,540,864,550,862,560,851,564,845,567,838,562,841,573,837,580,831,586,822,590,813,596,812,604,801,608,794,611,781,610,770,605,767,602,773,603,781,601,785,597,787,589,780,586,773,589,762,600,759,604,758,603,742,598,734,595,729,597,720" style="outline:none;" target="_self" />
                                <div class="map-wrap">
                                <div class="map-mark">
                                    <img src="public/frontend/images/map-marker.png">
                                </div>
                                <div class="loc-detail">
                                    <div class="closed-btn"><img src="public/frontend/images/close-bt.png" onClick="this.close"></div>                               
                                    <span>Cape Town Office<br>
                                    Network International</span>
                                    <address>3rd Floor  Letterstedt House, 
Newlands on Main, 
Main Road  Claremont CapeTown, 
South Africa</address>
                                    <div class="map-dir">
                                        <figcaption>DIRECTIONS</figcaption>
                                        <figure><a href="https://www.google.com/maps/search/3rd+Floor++Letterstedt+House,++Newlands+on+Main,++Main+Road++Claremont+CapeTown,++South+Africa/@-33.924873,18.423402,17z/data=!3m1!4b1" target="_blank"><img src="public/frontend/images/map-img.png" class="img-responsive"></a></figure>
                                    </div>                                  
                                </div>
                                </div>
                            </li>
						</ul>
					</map>		

                    <div class="wrap-map">
                        <div class="map-head">
                            <h1>NETWORK INTERNATIONAL OFFICES</h1>
                            <h2>CLIENT PRESENCE</h2>
                        </div>
                    </div>
                    </div>
                    <div class="mob-loc-wrap">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="fancy-collapse-panel">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">UAE
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    23rd Street, Opp. Al Salam Mosque
Al Barsha 2 - Dubai - UAE
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">JORDAN
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    Abdul Raheem Al-Wakeed St.,
Building 43, Shmeisani, Amman, Jordan
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">EGYPT
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                   CityStars Capital 8,4th Floor,
Heliopolis, Cairo, Egypt
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFour">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">NIGERIA
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                <div class="panel-body">
                                                    Block B; 4th Floor,3 Force Road,
Onikan Lagos, Nigeria
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFive">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">SOUTH AFRICA
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                <div class="panel-body">
                                                    3rd Floor  Letterstedt House, 
Newlands on Main, 
Main Road  Claremont CapeTown, 
South Africa
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
    </section>

<?php /*?><section class="section">
  <div class="container">
    <div class="section-title br">
      <h2><?php echo $content->title; ?></h2>
    </div>
    <p class="text-center"> <?php echo  $content->short_desc; ?></p>
    <div class="map-holder">
      <div class="col-md-12">
        <div class="map global-presence" id="map"><img class="img-responsive" src="<?php echo base_url('public/frontend/images/NI_Regional_presence_Website.svg'); ?>" alt="locations" /></div>
      </div>
    </div>
  </div>
</section><?php */?>
<?php }$navslugs =array('integrated-solutions'=>'contents/lists/'); if(isset($related)){?>
<section class="related-wrap" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="related-list owl-carousel" id="related-slider">
          <?php foreach($related as $val):?>
          <li>
            <div class="item"><a href="<?php echo site_url(($navslugs[$val['slug']]?$navslugs[$val['slug']]:$val['url']).$val['slug']); ?>">
              <div class="item-inner">
                <h5 class="head-h5 br"><?php echo $val['title'] ?></h5>
                <p><?php echo word_limiter(strip_tags($val['short_desc']),(strlen($val['title'])>22?5:16))?></p>
              </div>
              </a> </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php }?>
<?php if($this->uri->segment(4)=='innovation-and-rd') { ?>
<section class="section content-contact content-about contactwrap">
  <div class="container">
    <div class="med-system innovation-form col-md-8 col-md-push-2">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="enquiry">
          <div class="form enquiry-form" id="innocontainer">
            <label class="btn red text-center"><?php echo convert_lang('loading',$this->alphalocalization); ?>....</label>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
