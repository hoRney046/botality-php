<?php

namespace Renegadik\Botality;

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Entities\ServerResponse;
use Longman\TelegramBot\TelegramLog;
use Dotenv\Dotenv;

class TelegramBot implements BotInterface
{
    private $telegram;
    private $apiKey;
    private $botUsername;

    public function __construct()
    {
        $this->initializeBot();
    }

    public function initializeBot()
    {
        $dotenv = Dotenv::createImmutable(__DIR__); 
        $dotenv->load();

        $this->apiKey = $_ENV['TELEGRAM_API_KEY'] ?? null;
        $this->botUsername = $_ENV['TELEGRAM_BOT_USERNAME'] ?? null;

        if (!$this->apiKey || !$this->botUsername) {
            throw new \Exception('API Key or Bot Username is not set in .env');
        }
    }

    
}
