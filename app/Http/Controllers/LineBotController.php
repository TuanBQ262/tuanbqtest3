<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Message;
use Illuminate\Support\Facades\Log;
use LINE\LINEBot;
use LINE\LINEBot\Event\MessageEvent\TextMessage;
use LINE\LINEBot\Event\FollowEvent;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\MessageBuilder\RawMessageBuilder;
use Exception;

class LineBotController extends Controller
{
   public function restaurants(Request $request)
    {
        Log::debug($request->header());
        Log::debug($request->input());

        $httpClient = new CurlHTTPClient(env('H4ei/9lF7W/D5C4G7HGCfq2SpKsTuHJIAcWzOIprql8+rP5/xoTqvEooYvZ4NA3gNdiyWELRKa7xBG0nTuII1/HAy/h6PLjJdkCyykywlqHx+v6mxf985YwSlpLFejrrDkbHRjkGxJo38SAkiaM3pAdB04t89/1O/w1cDnyilFU='));
        $lineBot = new LINEBot($httpClient, ['channelSecret' => env('85884b57f1f89afe5cf6b4a36388b0a6')]);

        $signature = $request->header('x-line-signature');

        if (!$lineBot->validateSignature($request->getContent(), $signature)) {
            abort(400, 'Invalid signature');
        }

        $events = $lineBot->parseEventRequest($request->getContent(), $signature);

        Log::debug($events);

        foreach ($events as $event) {
            if (!($event instanceof TextMessage)) {
                Log::debug('Non text message has come');
                continue;
            }
            
            $message = new Message();
            $replyToken = $event->getReplyToken();
            $askAge = $message->askAge();
            $askAgeBuilder = new RawMessageBuilder($askAge);
            $lineBot->replyMessage($replyToken, $askAgeBuilder);
        }
    }
}
