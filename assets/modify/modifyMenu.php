<?php
//entfernt Men�reiter die f�r Zuschaeuer nicht zug�nglich seinen sollen

//set variables
$cid = $_GET["cid"];
$userId = $GLOBALS["user"]->id;

// $isOwner = $this->isOwner($cid, $userId);
 ?>


 <script type="text/javascript" src="/studip/plugins_packages/uos/EportfolioPlugin/assets/js/jquery.js"></script>
 <script type="text/javascript">
   $(document).ready(function(){
    $('#nav_eportfolioplugin_modules').remove();
   });


 </script>
