<?php
$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($verify_token === 'abc123') {
  echo $challenge;
}
curl \
  -F "object=page" \ 
  -F "callback_url=https://www.yourcallbackurl.com" \ 
  -F "fields=leadgen" \ 
  -F "verify_token=abc123" \ 
  -F "access_token=<APP_ACCESS_TOKEN>" \ 
  "https://graph.facebook.com/<API_VERSION>/<APP_ID>/subscriptions"