<?php

namespace src;

class Sms implements IMensagem{
    public function enviar(): void {
        echo "SMS: Seu token é 888-222";
    }
}