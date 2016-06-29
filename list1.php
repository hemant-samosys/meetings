<?php if(!empty($recordsTotal)):
  $counter = 1;
  foreach ($data as $key => $value):
    if($counter == 1){
      $bubble = 'bubble.png';
    }else{
      $bubble = 'bubble2.png';
    }
    $color = '';
     if(!empty($this->session->userdata('compare_office'))){
        $compare = $this->session->userdata('compare_office');
        
        if(in_array($value['office_id'], $compare))
        {
         $color = "active" ; 
        }
    }

?>

    <div class="col-md-4 col-sm-6 col-xm-12 off_detail">
      <div class="bubble-wrap"> 
              
        <div class="bubble-image-wrap"><div class="bubble"><img src="images/<?= $bubble ?>"></div>
        <div class="wishlist_btn_container">
            <div class="icon_effect">
           <ul class="menu">
                <li class="icon_one addtoCompare"  data-id="<?= $value['office_id'] ?>" ><a href="#" title="Add to compare" id="color-<?= $value['office_id'] ?>" class=" stopProp <?php echo $color; ?>"></a></li>
                <li class="icone_second shortlist_btn <?= ($value['wishlist']) ? 'addedtowish' : '' ?>"><a class="<?= ($value['wishlist']) ? 'removeFromwish active' : 'addTowish' ?> " data-id="<?= $value['office_id'] ?>" href=""></a></li>
                <li class="icon_third"><a href="#" class="launch-map stopProp" title="Show map" data-id="<?= $value['office_id'] ?>" ></a></li>       
          </ul> 
          </div>
         <!-- <ul class="">
            <li class="map_btn thumb_option " data-src="http://c.dryicons.com/images/icon_sets/minimalistica_red_icons/png/128x128/map_pin.png">
              <a class="launch-map stopProp" data-id="<?= $value['office_id'] ?>" >  <img src="http://c.dryicons.com/images/icon_sets/minimalistica_red_icons/png/128x128/map_pin.png"> </a> </li>
            <li class="wishlist_btn addtoCompare  thumb_option <?php echo $color; ?>"  id="color-<?= $value['office_id'] ?>" data-id="<?= $value['office_id'] ?>" data-src="images/selected_wishlist_icon.png"> <a class="stopProp" > <img src="images/addtocompaire_icon.png"> </a> </li>
            <li class=" shortlist_btn <?= ($value['wishlist']) ? 'addedtowish' : '' ?> thumb_option" data-src="images/selected_shortlist_icon.png"> <a class="stopProp <?= ($value['wishlist']) ? 'removeFromwish' : 'addTowish' ?> " data-id="<?= $value['office_id'] ?>" href=""> <img src="images/shortlist_icon.png"> </a> </li>
          </ul> -->
        </div><!-- //wishlist_btn_container --> 

          <img alt="<?= $value['office_name'] ?>" src="<?= $value['image'] ?>">
        </div>
        <div class="summary_container">
          <div class="project_name"><p><a href="#"><?= $value['office_name'] ?> </a></p></div><!-- //project_name -->
          <div class="location"><?= $value['location'] ?></div><!-- //location -->
           <div class="capacity">Capacity: <?= $value['office_capacity'] ?></div> <!--//capacity -->
          <div class="price_info"><p>Start from Rs. <?= $value['price'] ?></p></div><!-- //price_info -->
          <div class="view_more">
          <span class="left"><a class="product-btn-office" href="<?= base_url('Front_search/product_detail/'.$value['office_id']) ?>">view more</a></span>
          <span class="right">  
            <div id="star<?= $value['office_id'] ?>" class="stopProp"></div> 
          </span><!-- //right -->
          </div><!-- //view_more  -->
        </div>
      </div><!-- end of bubblr-wrap --> 
    </div><!-- //col-md-4 -->
    <input type="hidden" id="total-rows" value="<?= $recordsTotal ?>">
    <script type="text/javascript">
      var score =  <?= $value['reviews_rating'] ?>;
      $("#star<?= $value['office_id'] ?>").raty({
          half  : true,
          score : score,
          readOnly: true
        });
    </script>

<?  $counter++;
if($counter == 3){
  $counter = 1;
}
endforeach;
?>


 
<style>
.dark_blue img{
background-color:#094AF2;
}
</style>

<?

 else: 
  echo "false";
 endif;?>
