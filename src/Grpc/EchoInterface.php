<?php
# Generated by the protocol buffer compiler (roadrunner-server/grpc). DO NOT EDIT!
# source: service.proto

namespace App\Grpc;

use Spiral\RoadRunner\GRPC;

interface EchoInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "service.Echo";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param Message $in
    * @return Message
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function Ping(GRPC\ContextInterface $ctx, Message $in): Message;
}
