<?php

namespace Tapday\Notification;

use Illuminate\Support\Facades\Http;

class Notification {
    public function justDoIt() {
        $abc = env("DISCORD_WEBHOOK_URL");
        return $abc;
    }
}
