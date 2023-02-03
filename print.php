<?php
require_once('TwitterAPI_BHAM/TweetPHP.php');

$TweetPHP = new TweetPHP(array(
  'consumer_key'        => 'EKW7EzfDTrOGOl7JO1EiuMWNn',
  'consumer_secret'     => '9g18cher4cnKp9zPVscMVUVXiFjGd1OTyBWcBQJuVH3LEwPU3H',
  'access_token'        => '1065695870690172929-9FlkryDb1zTEpDdzIdghHeOaNXvBJy',
  'access_token_secret' => 'akrL68uPvNhLP4MQL1IKwNdcIhmk2wU6jVcEvZraJ9zO9',
  'api_endpoint'        => 'search/tweets',
  'api_params'          => array('q' => '#birmingham', 'result_type'=>'latest')
));

echo $TweetPHP->get_tweet_list();
?>

<?php
require_once('TwitterAPI_CHI/TweetPHP.php');

$TweetPHPCHI = new TweetPHPCHI(array(
  'consumer_key'        => 'EKW7EzfDTrOGOl7JO1EiuMWNn',
  'consumer_secret'     => '9g18cher4cnKp9zPVscMVUVXiFjGd1OTyBWcBQJuVH3LEwPU3H',
  'access_token'        => '1065695870690172929-9FlkryDb1zTEpDdzIdghHeOaNXvBJy',
  'access_token_secret' => 'akrL68uPvNhLP4MQL1IKwNdcIhmk2wU6jVcEvZraJ9zO9',
  'api_endpoint'        => 'search/tweets',
  'api_params'          => array('q' => '#chicago', 'result_type'=>'latest')
));

echo $TweetPHPCHI->get_tweet_list();
?>
