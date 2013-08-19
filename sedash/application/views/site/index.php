<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="row-fluid">

  <div class="span3">
  </div>

  <div class="span9">
  </div>
</div>

<div class="row-fluid">
  <div class="span6">
    <div class="box">
      <div class="box-header">
        <div class="title">Full calendar</div>
      </div>

      <div class="box-content">
        <div id="calendar"></div>
      </div>
    </div>
  </div>

  <div class="span6">
    <div class="box">
      <div class="box-header">
        <span class="title">News with avatars (scrollable box)</span>
        <ul class="box-toolbar">
          <li><span class="label label-blue">178</span></li>
        </ul>
      </div>
      <div class="box-content scrollable" style="height: 552px; overflow-y: auto">
      </div>
    </div>
  </div>
</div>

<div class="row-fluid">
  <div class="span12">
  </div>
</div>
