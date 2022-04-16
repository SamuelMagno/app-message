<?php

namespace src;

class Email implements IMensagem{
    public function enviar(): void {
        echo "Email: Seu token é 555-333";
    }
}