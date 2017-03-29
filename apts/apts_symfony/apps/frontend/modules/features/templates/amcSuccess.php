<?php /*<div id="sec-content">
  <div id="sec-left">
    <div id="print"><a href="javascript:window.print()"><img src="/images/btn-print.gif"></a></div>
    <span class="title">Features</span><br />
    <br />
    <div id="features-left">
      <div class="color14">Description</div>
      <div class="txt-left10"><?php echo nl2br($property->getDescription())?></div>
      <div class="color14">Floor Plans</div>
      <?php foreach($property->getPropertyFloorPlans() as $floorplan):?>
      <div class="features-floorplan">
        <?php if($floorplan->getImage()):?>
        <a href="/uploads/floorplans/<?php echo $floorplan->getImage()?>" rel="lightbox[floorplans]" title="<?php echo $floorplan->getName();?>"><img src="/uploads/floorplans/169/<?php echo $floorplan->getImage()?>" alt="<?php echo $floorplan->getName();?>" border="0" /></a>
        <?php endif;?>
        <strong><?php echo $floorplan->getName();?></strong><br />
        <?php echo $floorplan->getBedrooms();?> Bedroom(s), <?php echo $floorplan->getBathrooms();?> Bath<br />
        <?php echo $floorplan->getSquareFeet();?> Sq. Ft.<br />
        Rent: <?php echo $floorplan->getPrice();?><br />
        Lease: <?php echo $floorplan->getLeaseTerm();?><br />
        Deposit: <?php echo $floorplan->getDeposit();?>
      </div>
      <?php endforeach;?>
    </div>
    <div  id="features-right">
      <div class="color14">Location</div>
      <div class="txt-left10">
        <?php echo $property->getAddress()?><br />
        <?php echo $property->getCity()?>, <?php echo $property->getState()->getName()?> <?php echo $property->getZip()?><br />
        <?php if($property->getPhone()):?>
        <br />
        <strong>Phone:</strong><?php echo $property->getPhone()?><br />
       <?php endif;?>
       <?php if($property->getFax()):?>
       <strong>Fax:</strong> <?php echo $property->getFax()?><br />
     <?php endif;?>
     <?php if($property->getEmail()):?>
       <a href="<?php echo url_for('contact/index')?>" alt="<?php echo $property->getEmail()?>"><img style="padding-top: 10px; border: none;" src="/images/btn_email.png" border="0"></a>
     <?php endif;?>
    </div>
      <div class="color14">Office Hours</div>
      <div class="txt-left10">
    <?php echo nl2br($property->getHours())?>
      </div>
      <div class="color14">Apartment Features</div>
      <div class="txt-left10">
        <ul>
        <?php foreach($property->getPropertyApartmentFeatures() as $feature):?>
          <li><?php echo $feature->getApartmentFeature()->getName()?></li>
        <?php endforeach;?>
        </ul>
      </div>
      <div class="color14">Community Features</div>
      <div class="txt-left10">
        <ul>
        <?php foreach($property->getPropertyCommunityFeatures() as $feature):?>
          <li><?php echo $feature->getCommunityFeature()->getName()?></li>
        <?php endforeach;?>
        </ul>
      </div>
      <div class="color14">Other Services And Features</div>
      <div class="txt-left10">
        <ul>
        <?php foreach($property->getPropertyOtherFeatures() as $feature):?>
          <li><?php echo $feature->getOtherFeature()->getName()?></li>
        <?php endforeach;?>
        </ul>
      </div>
    </div>
    <br />
  </div>
  <div class="page-break"></div>
  <div id="right">
    <div class="right-title">
      <div class="right-title-txt">Community Photos</div>
    </div>
    <div class="right-txt">
    <?php foreach($featurePhotos as $photo):?>
      <img src="/uploads/photos/177/<?php echo $photo->getImage()?>" alt="<?php echo $photo->getName()?>" title="<?php echo $photo->getName()?>" border="0" />
    <?php endforeach;?>
    </div>
  </div>
</div>
*/?>
<div id="amencontain" class="clearfix">
    <div id="amenimage"> <img src="/images/amc/<?php echo $property->getCode()?>/img_amenities.jpg" alt="<?php echo $property->getName()?>" title="<?php echo $property->getName()?>" />
      <div id="amenoverlay" class="clearfix">
      <div id="amenscroll" class="clearfix">
        <h1>More than just a place to sleep</h1>
        <p><?php echo nl2br($property->getDescription())?></p>
        <div id="amenleftcol">
          <h2>Apartment Features </h2>
          <ul>
          <?php foreach($property->getPropertyApartmentFeatures() as $feature):?>
          <li><?php echo $feature->getApartmentFeature()->getName()?></li>
          <?php endforeach;?>
          </ul>
          <h2>Other Services/Features</h2>
          <ul>
          <?php foreach($property->getPropertyOtherFeatures() as $feature):?>
            <li><?php echo $feature->getOtherFeature()->getName()?></li>
          <?php endforeach;?>
          </ul>
        </div>
        <div id="amenrightcol">
          <h2>Community Features </h2>
          <ul>
          <?php foreach($property->getPropertyCommunityFeatures() as $feature):?>
            <li><?php echo $feature->getCommunityFeature()->getName()?></li>
          <?php endforeach;?>
          </ul>
          <li class="amenoverlay">*Select units only</li>
        </div>

        </div>
      </div>
    </div>
    <div id="amenbottomcell1">
      <ul>
      <?php if($propertyTemplate->getFacebookUrl() != ''):?>
        <?php foreach($arrSocialUrls as $keySocialURL=>$itemSocialURL):?>
           <?php if($keySocialURL == 'facebook'):?>
            <li><a href="<?php echo $itemSocialURL?>" data-icon="a" class="icon" title="<?php echo $keySocialURL?>" alt="<?php echo $keySocialURL?>" target="_blank"></a></li>
          <?php endif;?>
	  <?php if($keySocialURL == 'google'):?>
            <li><a href="<?php echo $itemSocialURL?>" data-icon="b" class="icon" title="<?php echo $keySocialURL?>" alt="<?php echo $keySocialURL?>" target="_blank"></a></li>
          <?php endif;?>
          <?php if($keySocialURL == 'pinterest'):?>
            <li><a href="<?php echo $itemSocialURL?>" data-icon="d" class="icon" title="<?php echo $keySocialURL?>" alt="<?php echo $keySocialURL?>" target="_blank"></a></li>
          <?php endif;?>
          <?php if($keySocialURL == 'twitter'):?>
            <li><a href="<?php echo $itemSocialURL?>" data-icon="e" class="icon" title="<?php echo $keySocialURL?>" alt="<?php echo $keySocialURL?>" target="_blank"></a></li>
          <?php endif;?>
        <?php endforeach;?>
        <?php endif;?>
        <?php /*
        <li><a href="#" data-icon="a" class="icon"></a></li>
        <li><a href="#" data-icon="b" class="icon"></a></li>
        <li><a href="#" data-icon="c" class="icon"></a></li>
        <li><a href="#" data-icon="d" class="icon"></a></li>
        <li><a href="#" data-icon="e" class="icon"></a></li>
        */?>
      </ul>
    </div>
    <div id="amenbottomcell2" class="borderright borderleft">
      <p><strong><?php echo $property->getPhone()?></strong> <br />
        <a href="<?php echo url_for('contact/index')?>">Click here to email us</a> </p>
    </div>
    <div id="amenbottomcell3" class="borderright">
      <p><strong><?php echo $property->getAddress()?><br />
        <?php echo $property->getCity()?>, <?php echo $property->getState()->getName()?> <?php echo $property->getZip()?></strong></p>
    </div>
    <div id="amenbottomcell4">
      <p><strong>Office Hours</strong><br />
        <?php echo nl2br($property->getHours())?></p>
    </div>
  </div>
  <!-- This end div ends the amencontain div -->
<?php if(in_array($property->getCode(),array('354AX9'))):?>
  <!-- Live Chat Button Code -->
  <div id="live_chat_status"></div>
  <!-- Live Chat Button Code -->
<?php endif;?>
<?php slot('customstyles') ?>
<?php include_partial('global/customstyles', array('propertyTemplate' => $propertyTemplate)) ?>
<?php end_slot() ?>

<?php slot('chat') ?>
  <?php if($propertyTemplate->getChat()):?>
    <div id="bold-chat-holder"><div id="bold-chat"><?php echo $propertyTemplate->getChat();?></div></div>
  <?php endif;?>
<?php end_slot() ?>

<?php slot('logo') ?>
  <?php if($propertyTemplate->getLogoImage()):?>
    <?php /*<a href="<?php echo url_for('default/index')?>"><img id="logo" src="/images/resp/logo.png" class="image" /></a>*/?>
    <a href="<?php echo url_for('default/index')?>"><img id="logo" class="image" src="/uploads/properties/<?php echo $propertyTemplate->getLogoImage()?>" title="Apartments in <?php echo $property->getCity()?> at <?php echo $property->getName()?> Apartments" alt="Apartments in <?php echo $property->getCity()?> at <?php echo $property->getName()?> Apartments" border="0" /></a>
  <?php else:?>
    <div id="logo-text"><a href="<?php echo url_for('default/index')?>"><?php echo $property->getName()?></a></div>
  <?php endif;?>
<?php end_slot() ?>

<?php slot('rentalapp') ?>
<?php if($propertyTemplate->getOnlineApplicationUrl() != ''):?>
&nbsp;&nbsp;&nbsp;<a title="<?php echo $property->getCity()?> Apartments For Rent - Rental Application" href="<?php echo $propertyTemplate->getOnlineApplicationUrl();?>" target="_blank">Online Application</a>
    <?php elseif($propertyTemplate->getRentalappFile() != ''):?>
&nbsp;&nbsp;&nbsp;<a title="<?php echo $property->getCity()?> Apartments For Rent - Rental Application" href="/uploads/properties/<?php echo $propertyTemplate->getRentalappFile();?>" target="_blank">Rental Application</a>
  <?php endif;?>
<?php end_slot() ?>
<?php slot('rentalappm') ?>
<?php if($propertyTemplate->getOnlineApplicationUrl() != ''):?>
    <a title="<?php echo $property->getCity()?> Apartments For Rent - Rental Application" href="<?php echo $propertyTemplate->getOnlineApplicationUrl();?>" target="_blank">Online Application</a>
    <?php elseif($propertyTemplate->getRentalappFile() != ''):?>
    <a title="<?php echo $property->getCity()?> Apartments For Rent - Rental Application" href="/uploads/properties/<?php echo $propertyTemplate->getRentalappFile();?>" target="_blank">Rental Application</a>
  <?php endif;?>
<?php end_slot() ?>
<?php slot('ourpage') ?>
<?php if(trim($propertyTemplate->getCustomPageName()) != ''):?>
    &nbsp;&nbsp;&nbsp;<a href="<?php echo url_for('ourpage/'.$propertyTemplate->getCustomPagePermaLink())?>"><?php echo $propertyTemplate->getCustomPageName()?></a>&nbsp;&nbsp;&nbsp;|
  <?php endif;?>
<?php end_slot() ?>
<?php slot('ourpagem') ?>
<?php if(trim($propertyTemplate->getCustomPageName()) != ''):?>
    <a href="<?php echo url_for('ourpage/'.$propertyTemplate->getCustomPagePermaLink())?>"><?php echo $propertyTemplate->getCustomPageName()?></a><br />
  <?php endif;?>
<?php end_slot() ?>


<?php slot('nav') ?>
<div id="nav">
  <div class="nav-item"><a title="<?php echo $property->getCity()?>, <?php echo $property->getState()->getName()?> Apartments - Home" href="<?php echo url_for('default/index')?>">Home</a></div>
  <div class="nav-item"><a title="Apartments for Rent in <?php echo $property->getCity()?>, <?php echo $property->getState()->getName()?> - Floor Plans" href="<?php echo url_for('floorplans/index')?>">Floor Plans</a></div>
  <div class="nav-item"><a title="<?php echo $property->getCity()?>, <?php echo $property->getState()->getCode()?> Homes - Photos"href="<?php echo url_for('photos/index')?>">Photos</a></div>
  <div class="nav-item" title="<?php echo $property->getCity()?> Apartment Complex - Features">Features</div>
  <div class="nav-item"><a title="Apts for Rent in <?php echo $property->getCity()?>, <?php echo $property->getState()->getName()?> - Our Community" href="<?php echo url_for('community/index')?>">Our Community</a></div>
  <?php if($propertyTemplate->getCustomPageName() != ''):?>
    <div class="nav-item"><a href="<?php echo url_for('ourpage/'.$propertyTemplate->getCustomPagePermaLink())?>"><?php echo $propertyTemplate->getCustomPageName()?></a></div>
  <?php endif;?>
  <div class="nav-item"><a title="<?php echo $property->getCity()?>, <?php echo $property->getState()->getName()?> Rentals - Contact Us" href="<?php echo url_for('contact/index')?>">Contact Us</a></div>
  <?php if($propertyTemplate->getOnlineApplicationUrl() != ''):?>
    <div class="nav-item"><a title="<?php echo $property->getCity()?> Apartments For Rent - Rental Application" href="<?php echo $propertyTemplate->getOnlineApplicationUrl();?>" target="_blank">Online Application</a></div>
    <?php elseif($propertyTemplate->getRentalappFile() != ''):?>
    <div class="nav-item"><a title="<?php echo $property->getCity()?> Apartments For Rent - Rental Application" href="/uploads/properties/<?php echo $propertyTemplate->getRentalappFile();?>" target="_blank">Rental Application</a></div>
  <?php endif;?>
  <!--<div id="nav-item-extra"><a href="extra.html">Extra</a></div>-->
</div>
<?php end_slot() ?>
<?php slot('bot-nav') ?>
<div style="text-align: center; padding: 0px 0px 15px 0px; color: white; font-size:10px;">
    <a href="<?php echo url_for('privacy-policy/index')?>">Privacy Policy</a> | <a href="<?php echo url_for('terms-of-use/index')?>">Terms of Use</a> | <?php echo $property->getCity()?> Apartments | Copyright &copy;<?php echo date('Y');?>&nbsp;&nbsp;<img style="vertical-align:middle;" src="/images/icon_equal_housing.png" alt="Equal Housing" title="Equal Housing"/></div>
<?php end_slot() ?>
<?php slot('tracking-code') ?>
    <?php if($propertyTemplate->getTrackingCode()):?>
      <?php echo $propertyTemplate->getTrackingCode()?>
    <?php endif;?>
<?php end_slot() ?>
<?php slot('bot-code') ?>
<?php if(in_array($property->getCode(),array('354AX9'))):?>
<!--Start of Chat Window Code-->
<script type='text/javascript' src="https://thelivechatsoftware.com/Dashboard/cwgen/scripts/library.js" ></script>
<script type='text/javascript' src="https://thelivechatsoftware.com/Dashboard/cwgen/Company/RealInteract/axisninemilestation.com/gvars.js" ></script>
<script type='text/javascript' src="https://thelivechatsoftware.com/Dashboard/cwgen/Company/RealInteract/axisninemilestation.com/chatwindow.js" ></script>
<script type='text/javascript' defer="defer" src="https://thelivechatsoftware.com/Dashboard/cwgen/scripts/chatscriptyui.js" ></script>
<!--End of Chat Window Code-->
<?php endif;?>
<?php end_slot() ?>
<?php if(in_array($property->getCode(),array('607SET','673CLR','06COV','11GGR','677GST'))):?>
<?php $shortcode =  $property->getCode();
$shortcode = substr($shortcode,-3,3);?>
<?php slot('rescenterlink') ?>
&nbsp;&nbsp;&nbsp;<a href="https://amc.myresman.com/Portal/Access/SignIn/<?php print $shortcode;?>" target="_blank">Resident Center</a>
<?php end_slot() ?>
<?php slot('rescenterlinkm') ?>
<a href="https://amc.myresman.com/Portal/Access/SignIn/<?php print $shortcode;?>" target="_blank">Resident Center</a><br />
<?php end_slot() ?>

<?php elseif(in_array($property->getCode(),array('28LOT','659LTP','657BWA','615MDR','658CIL','632BLK','605PNA'))):?>
<?php slot('rescenterlink') ?>
&nbsp;&nbsp;&nbsp;<a href="<?php echo url_for('residents/login')?>">Resident Center</a>
<?php end_slot() ?>
<?php slot('rescenterlinkm') ?>
<a href="<?php echo url_for('residents/login')?>">Resident Center</a><br />
<?php end_slot() ?>

<?php else:?>
<?php slot('rescenterlink') ?>
&nbsp;&nbsp;&nbsp;<a href="<?php echo url_for('residents/login')?>">Resident Center</a>
<?php end_slot() ?>
<?php slot('rescenterlinkm') ?>
<a href="<?php echo url_for('residents/login')?>">Resident Center</a><br />
<?php end_slot() ?>
<?php endif;?>