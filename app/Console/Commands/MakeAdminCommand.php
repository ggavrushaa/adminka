<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeAdminCommand extends Command
{
    protected $signature = 'make:admin';

    protected $description = 'Create an admin user to access the admin panel';

    public function handle()
    {
        $this->warn('Creating admin user...');

        $admin = new User();
        $admin->name = $this->ask('Имя', 'admin');
        $admin->email = $this->ask('Email', 'admin@foo.bar');
        $admin->password = $this->ask('Пароль', 'admin');
        $admin->save();

        $this->info('Admin user created successfully.');
    }
}
