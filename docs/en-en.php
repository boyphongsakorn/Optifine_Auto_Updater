<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="http://oau.boyphongsakorn.ga">
        <img alt="Brand" src="https://storage.kraken.io/3gR625Zpy2UKjJ4yoMVx/36f4002b2e556b9052d15a16ab408615/oaulogo_1.png" height="100%">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home </a></li>
        <li><a href="<?php print_r($resultapi[html_url]); ?>">Download</a></li>
        <li><a href="https://github.com/boyphongsakorn/Optifine_Auto_Updater">OAU On Github</a></li>
        <li><a href="https://optifine.net/home">OptiFine.net</a></li>
        <!--li><a href="https://network.boyphongsakorn.ga/donate/">บริจาค</a></li-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Program issues <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#myModal" data-toggle="modal">Common Problem</a></li>
            <li><a href="https://www.facebook.com/messages/t/1563244917249121" target="_black">Report a problem</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell" aria-hidden="true"></i></a>
          <ul class="dropdown-menu" style="padding-top: 0px;padding-bottom: 0px;">
            <iframe src="https://notification.boyphongsakorn.pro/" frameborder="0" width="376" height="300"></iframe>
          </ul>
      </li>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-language" aria-hidden="true"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="?lang=th-th"><i class="th flag"></i> TH</a></li>
            <li><a href="?lang=en-en"><i class="us flag"></i> EN</a></li>
          </ul>
      </li>
      <!--li><a href="http://oau.boyphongsakorn.ga">EN</a></li-->
    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<!--div class="alert alert-success alert-dismissable fade in" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Description!</strong> about OAU 5.4 <a href="https://www.facebook.com/boyphongsakornnetwork/photos/a.1764024943837783.1073741828.1563244917249121/1896991380541138/?type=3&permPage=1">Click Here</a></div>
<div class="alert alert-warning alert-dismissable fade in" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Alert!</strong> Server Maintenance 19:00-21:00 (GMT +7)</div>
<div class="alert alert-info alert-dismissable fade in" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>News!</strong> Server G detail <a href="<?php print_r($resultapi[html_url]); ?>">Click Here</a></div-->
<div class="alert alert-warning alert-dismissable fade in" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Announcement!</strong> Those who used OAU Thailand version version lower than 5.4 will no longer be available after October 30 asked to switch to a version 5.6 G OAU (OAU principles today)</div>
<div class="alert alert-danger alert-dismissable fade in" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Language translations may not be 100% accurate</div>
<center>
<div class="row">
<div class="col-md-6">
<?php
if( $detect->isiOS() or $detect->isAndroidOS() ){
?>
<img src="https://www.img.in.th/images/bb1e8f7bdd1a2f8b5cc45eb7bee887d4.png" width="100%">
<?php
} else {
?>
<img src="https://www.img.in.th/images/bb1e8f7bdd1a2f8b5cc45eb7bee887d4.png" height="10%">
<?php
}
?>
</div>
<div class="col-md-6">
<h2><font color="black">Optifine Auto Updater</h2>
<b><i class="fa fa-desktop" aria-hidden="true"></i> OAU <?php print_r($resultapi[tag_name]); ?></b> <b>Last Patch : <a href="<?php echo $tumblr[response][posts][0][post_url]; ?>" target="_black" style="color: rgb(0,0,0)"><?php echo str_replace("patch","",$tumblr[response][posts][0][title]); ?></a></b><br>
<img src="https://storage.kraken.io/3gR625Zpy2UKjJ4yoMVx/e1a8553ec9ad88b36e436059af32403e/148239107983861-min.png" border="0" width="70%" /><br><a href="#" data-toggle="tooltip" title="If any day there is no new version optifine. It will not be updated." style="color: #000000">Updated every Monday to Friday at 13:00.</a> (GMT +7)
<!-- Split button -->
<div class="btn-group">
  <a href="<?php print_r($resultapi[html_url]); ?>" target="_black" class="btn btn-danger btn-lg" role="button" target="_black"><!--button type="button" class="btn btn-danger btn-lg">Download</button-->Download</a>
  <button type="button" class="btn btn-danger btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-bottom-right-radius: 0;border-top-right-radius: 0;">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
  	<li><a href="http://www.mediafire.com/file/icp138tcsjmrcro/OAUs.zip" target="_black">Download from <img src="https://upload.wikimedia.org/wikipedia/en/8/80/MediaFire_logo.svg" width="25"> *recommend</a></li>
  	<li><a href="<?php print_r($resultapi[assets][0][browser_download_url]); ?>" target="_black">Download from <img src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Logo.png" width="25"></a></li>
  </ul>
  <a href="https://www.paypal.me/boyphongsakorn/1.5usd" class="btn btn-danger btn-lg" role="button" target="_black">Donate Via PayPal</a>
</div>
</div>
</div>
<table class="table table-bordered white" width="100%">
  <tr>
    <th>Download today will be available <img src="Minecraft.ico" width="25"> 1.7.2,1.7.5,1.7.10,1.8,1.8.8,1.8.9,1.91.9.2,1.9.4,1.10,1.10.1,1.10.2,1.11,1.11.2 And 1.12</th>
  </tr>
</table>
<table class="table table-bordered white">
  <tr>
    <th>Minecraft Version</th>
    <th>Optifine Version</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.7.2</th>
    <th><img src="oc/image/op.png" width="25"> HD U E7<br><img src="oc/image/op.png" width="25"> HD U E8</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.7.5</th>
    <th><img src="oc/image/op.png" width="25"> HD U D1</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.7.10</th>
    <th><img src="oc/image/op.png" width="25"> HD U D4<br><img src="oc/image/op.png" width="25"> HD U D7<br><img src="oc/image/op.png" width="25"> HD U D8</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.8</th>
    <th><img src="oc/image/op.png" width="25"> HD U H6<br><img src="oc/image/op.png" width="25"> HD U H7<br><img src="oc/image/op.png" width="25"> HD U H8</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.8.8</th>
    <th><img src="oc/image/op.png" width="25"> HD U H6<br><img src="oc/image/op.png" width="25"> HD U H7<br><img src="oc/image/op.png" width="25"> HD U H8</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.8.9</th>
    <th><img src="oc/image/op.png" width="25"> HD U G7<br><img src="oc/image/op.png" width="25"> HD U G9<br><img src="oc/image/op.png" width="25"> HD U H2<br><img src="oc/image/op.png" width="25"> HD U H3<br><img src="oc/image/op.png" width="25"> HD U H4 Preview<br><img src="oc/image/op.png" width="25"> HD U H5<br><img src="oc/image/op.png" width="25"> HD U H6<br><img src="oc/image/op.png" width="25"> HD U H7<br><img src="oc/image/op.png" width="25"> HD U H8</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.9</th>
    <th><img src="oc/image/op.png" width="25"> HD U A1 Preview<br><img src="oc/image/op.png" width="25"> HD U B5<br><img src="oc/image/op.png" width="25"> HD U D7<br><img src="oc/image/op.png" width="25"> HD U D8</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.9.2</th>
    <th><img src="oc/image/op.png" width="25"> HD U B1<br><img src="oc/image/op.png" width="25"> HD U B2<br><img src="oc/image/op.png" width="25"> HD U D7<br><img src="oc/image/op.png" width="25"> HD U D8</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.9.4</th>
    <th><img src="oc/image/op.png" width="25"> HD U B4<br><img src="oc/image/op.png" width="25"> HD U B5<br><img src="oc/image/op.png" width="25"> HD U B6<br><img src="oc/image/op.png" width="25"> HD U D7<br><img src="oc/image/op.png" width="25"> HD U D8</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.10</th>
    <th><img src="oc/image/op.png" width="25"> HD U A0 Preview<br><img src="oc/image/op.png" width="25"> HD U B6<br><img src="oc/image/op.png" width="25"> HD U B7<br><img src="oc/image/op.png" width="25"> HD U C1<br><img src="oc/image/op.png" width="25"> HD U D7<br><img src="oc/image/op.png" width="25"> HD U D8</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.10.1</th>
    <th>-</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.10.2</th>
    <th><img src="oc/image/op.png" width="25"> HD U C1 Preview<br><img src="oc/image/op.png" width="25"> HD U C1<br><img src="oc/image/op.png" width="25"> HD U C2 Preview<br><img src="oc/image/op.png" width="25"> HD U C2<br><img src="oc/image/op.png" width="25"> HD U C3 Preview<br><img src="oc/image/op.png" width="25"> HD U C3<br><img src="oc/image/op.png" width="25"> HD U D1<br><img src="oc/image/op.png" width="25"> HD U D2<br><img src="oc/image/op.png" width="25"> HD U D3<br><img src="oc/image/op.png" width="25"> HD U D4<br><img src="oc/image/op.png" width="25"> HD U D7<br><img src="oc/image/op.png" width="25"> HD U D8</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.11</th>
    <th><img src="oc/image/op.png" width="25"> HD U B1<br><img src="oc/image/op.png" width="25"> HD U B2<br><img src="oc/image/op.png" width="25"> HD U B3<br><img src="oc/image/op.png" width="25"> HD U B4 Preview<br><img src="oc/image/op.png" width="25"> HD U B5<br><img src="oc/image/op.png" width="25"> HD U B7<br><img src="oc/image/op.png" width="25"> HD U B8</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.11.2</th>
    <th><img src="oc/image/op.png" width="25"> HD U B5 Preview<br><img src="oc/image/op.png" width="25"> HD U B5<br><img src="oc/image/op.png" width="25"> HD U B6 Preview<br><img src="oc/image/op.png" width="25"> HD U B6<br><img src="oc/image/op.png" width="25"> HD U B7 Preview<br><img src="oc/image/op.png" width="25"> HD U B7<br><img src="oc/image/op.png" width="25"> HD U B8 Preview<br><img src="oc/image/op.png" width="25"> HD U B8<br><img src="oc/image/op.png" width="25"> HD U B9<br><img src="oc/image/op.png" width="25"> 1.11.2 HD U C1<br><img src="New.gif"><img src="oc/image/op.png" width="25"> 1.11.2 HD U C2</th>
  </tr>
  <tr>
    <th><img src="Minecraft.ico" width="25"> 1.12</th>
    <th>-</th>
  </tr>
</table>
<table class="table table-bordered white" style="background-color: black">
  <tr>
    <th><font color="white">* <img src="Minecraft.ico" width="25"> = Minecraft <img src="oc/image/op.png" width="25"> = Optifine</font></th>
  </tr>
</table>
<div class="fb-comments" data-href="https://oau.boyphongsakorn.ga/" data-numposts="5"></div>
</div>
</center>
<div class="container-fluid">
  <div class="row" style="background-color: white">
  <hr>
    <div class="col-lg-12">
      <div class="col-md-8">
This service is not affiliated with Optfine.net And <img src="Minecraft.ico" width="25"> | Server Thai By <a href="https://www.jaideawhosting.com/" target="_black"><img src="https://img.gs/fhcphvsghs/quality=lossless/https://www.jaideawhosting.com/images/logo.png" width="10%"></a> Server US By <a href="https://www.hostinger.in.th/" target="_black"><img src="https://img.gs/fhcphvsghs/85x25,quality=lossless/http://www.hostinger.in.th/static/default.hostinger.co.uk/images/logo.png" width="10%"></a>
        <!--a href="#">Terms of Service</a> | <a href="#">Privacy</a-->    
      </div>
      <div class="col-md-4">
        <p class="muted pull-right">a <a href="https://apps.boyphongsakorn.ga/" style="color: #6E6E6E">boyphongsakorn apps</a> product</p>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Common Problem</h4>
      </div>
      <div class="modal-body">
      <h2 style="
    margin-top: 0px;
">Load and hold can not quit</h2>
      <iframe src="https://player.vimeo.com/video/215311927" width="100%" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>