<?php 

switch($page_title){
  case "Users":
  $icon_class = "user";
  $h1 = "Users";
  $h2 = "& Personal Numbers";
  break;
  case "Departments":
  $icon_class = "department";
  $h1 = "Phone Numbers";
  $h2 = "& Routing";
  break;
  case "Dashboard":
  $icon_class = "user";
  $h1 = "Users";
  $h2 = "& Personal Numbers";
  break;
  case "CRM Integrations":
  $icon_class="crm";
  $h1 = "CRM Integrations";
  $h2 = "& API Access";
  break;
}

?>


<div class="row">
  <div class="page-header">
   <ul class="media-list">
    <li class="media">
      <span class="pull-right glyphicon glyphicon-<?php echo $icon_class ?> large"></span>
      <div class="media-body">
        <h1 class="media-heading"><?php echo $h1; ?></h1>
        <h2 class="media-heading"><?php echo $h2; ?></h2>
      </div>
    </li>
  </ul>
</div>
</div>