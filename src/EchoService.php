<?php

declare(strict_types=1);

namespace App;

use App\Grpc\EchoInterface;
use App\Grpc\Message;
use Spiral\RoadRunner\GRPC;

class EchoService implements EchoInterface
{

    public function Ping(GRPC\ContextInterface $ctx, Message $in): Message
    {
        if (random_int(0,1) === 1) {
            sleep(10);
        }

        return new Message();
    }
}
