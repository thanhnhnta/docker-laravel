<?php

namespace App\Services\Notification;

interface NotificationServiceInterface
{
    public function sendBatchNotification($deviceTokens, $data);

    public function sendNotification($data): bool;

    public function subscribeTopic($deviceTokens, $topicName): bool;

    public function unsubscribeTopic($deviceTokens, $topicName): bool;
}
