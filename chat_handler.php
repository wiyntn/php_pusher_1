<?php
  // require __DIR__ . '/vendor/autoload.php';


  // if( $_POST['action']=='userjoined' ){
  //   $options = array(
  //     'cluster' => 'us2',
  //     'useTLS' => true
  //   );

  require __DIR__ . '/vendor/autoload.php';

  if( $_POST['action'] == 'userjoined' ){
    $options = array(
    'cluster' => 'ap1',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '5061ba3068a132b2eca2',
    'f8967b631ac5b1224487',
    '1399715',
    $options
  );

    $data['username'] = $_POST['username'];

    $pusher->trigger('php', 'my-event', $data);
  }else


  if( $_POST['action']=='sendmessage' ){

    $options = array(
      'cluster' => 'ap1',
      'useTLS' => true
    );
    $pusher = new Pusher\Pusher(
      '5061ba3068a132b2eca2',
      'f8967b631ac5b1224487',
      '1399715',
      $options
    );

    // $data['name'] = $_POST['name'];
    // $data['message'] = $_POST['message'];

    // $pusher->trigger('php', 'sendmessage', $data);
    // echo 1;

    $data['name'] = $_POST['name'];

    $data['message'] = $_POST['message'];

  $pusher->trigger('php_chat_1', 'my-event', $data);

  }
