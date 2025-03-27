<?php

namespace Renegadik\Botality;

interface BotInterface {
    public function sendMessage(string $message): bool;
}