<?php

namespace App\Providers;

use App\Providers\PushNotificationEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use sngrl\PhpFirebaseCloudMessaging\Client;
use sngrl\PhpFirebaseCloudMessaging\Message;
use sngrl\PhpFirebaseCloudMessaging\Recipient\Device;
use sngrl\PhpFirebaseCloudMessaging\Notification;
use Illuminate\Support\Facades\Log;

class SendPushNotification
{
    public $user;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  \App\Providers\PushNotificationEvent  $event
     * @return void
     */
    public function handle(PushNotificationEvent $event)
    {
        try {
            $server_key = $event->type == 'vendor' ? env('SERVER_KEY') : env('SERVER_KEY_CUSTOMER');
            
            $client = new Client();
            $client->setApiKey($server_key);
            $client->injectGuzzleHttpClient(new \GuzzleHttp\Client());
            
            $device_token = $event->device_token;
            $title = $event->title;
            $body =  $event->message;
            
            $message = new Message();
            $message->setPriority('high');
            
            foreach($device_token as $token) {
                $message->addRecipient(new Device($token));
            }
            
            $message->setNotification(new Notification($title, $body));
            
            $response = $client->send($message);
            $responseBody = $response->getBody()->getContents();

            // Log the response from FCM
            Log::info('FCM Response: ' . $responseBody);

            return $responseBody;

        } catch (\Exception $e) {
            // Log any exceptions that occur
            Log::error('Error sending push notification: ' . $e->getMessage());
        }
    }
}
