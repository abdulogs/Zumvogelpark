<?php

/**
 * Messages
 */
class message {

    public static function success($value =""){
      echo '<div class="custom-alert" role="alert">
      <div class="custom-alert-body">
        <span class="bx bxs-badge-check custom-alert-icon-success"></span>
      <div class="custom-alert-content">
        <h6 class="custom-alert-heading"><b>Congratulations!</b></h6>
        <p class="custom-alert-subheading">'.$value.'</p>
      </div>
      <button class="bx bx-x alert-close" type="button" onclick="parentNode.parentNode.parentNode.removeChild(parentNode.parentNode);"
       data-dismiss="alert"></button></p>
      </div>';
    }

    public static function error($value = ""){
      echo '<div class="custom-alert" role="alert">
      <div class="media custom-alert-body">
        <span class="bx bxs-shield-x custom-alert-icon-error"></span>
      <div class="media-body custom-alert-content">
        <h6 class="custom-alert-heading"><b>Opps!</b> you got an error</h6>
        <p class="custom-alert-subheading">'.$value.'</p>
      </div>
      <button class="bx bx-x alert-close" onclick="parentNode.parentNode.parentNode.removeChild(parentNode.parentNode);"
      type="button" data-dismiss="alert"></button></p>
      </div>';
    }

    public static function warning($value = ""){
      echo '<div class="mb-1">
      <div class="alert alert-dismissible fade show custom-alert" role="alert">
      <div class="media custom-alert-body">
        <span class="fas fa-info-circle custom-alert-icon-warning"></span>
      <div class="media-body custom-alert-content">
        <h6 class="custom-alert-heading"><b>Opps!</b> you got an error</h6>
        <p class="custom-alert-subheading">'.$value.'</p>
      </div>
      <button class="btn btn-sm text-white ml-auto fas fa-times" type="button" data-dismiss="alert"></button></p>
      </div>
      </div>';
    }
  }
