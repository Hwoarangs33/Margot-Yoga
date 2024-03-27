<?php
    function sanitize($data){
      return htmlentities(strip_tags(trim($data)));
  }
