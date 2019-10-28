<?php

namespace NotificationChannels\Sns;


use Aws\Sns\SnsClient;
use NotificationChannels\Sns\Exceptions\CouldNotSendNotification;
use Illuminate\Notifications\Notification;


class SnsChannel
{

    /**
     * @var \Aws\Sns\SnsClient
     */
    protected $client;


    public function __construct ( SnsClient $client )
    {
        $this->client = $client;
    }


    /**
     * Send the given notification.
     *
     * @param mixed                                  $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @throws \NotificationChannels\Sns\Exceptions\CouldNotSendNotification
     */
    public function send ( $notifiable, Notification $notification )
    {
        //$response = [a call to the api of your notification send]

//        if ($response->error) { // replace this by the code need to check for errors
//            throw CouldNotSendNotification::serviceRespondedWithAnError($response);
//        }
    }
}
