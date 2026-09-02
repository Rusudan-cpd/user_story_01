<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use App\Models\User;

#[Signature('app:make-user-revisor {email}')]
#[Description('Rende un utente revisore')]
class MakeUserRevisor extends Command
{
    public function handle()
    {
        $user = User::where('email', $this->argument('email'))->first();

        if (!$user) {
            $this->error('Utente non trovato.');
            return Command::FAILURE;
        }

        $user->is_revisor = true;
        $user->save();

        $this->info('Utente reso revisore con successo.');
        return Command::SUCCESS;
    }
}