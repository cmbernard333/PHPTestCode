<?php
// check utc offset matches
preg_match('/^UTC[\+\-]\d{2}(\d{2})?$/', 'UTC-07', $matches, PREG_OFFSET_CAPTURE);
print_r($matches);
preg_match('/^UTC[\+\-]\d{2}(\d{2})?$/', 'UTC+0530', $matches, PREG_OFFSET_CAPTURE);
print_r($matches);
// TODO: check if datetimeformat works with the above captures
//
?>

