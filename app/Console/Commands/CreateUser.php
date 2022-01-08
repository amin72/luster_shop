<?php

namespace Backpack\CRUD\app\Console\Commands;

use Illuminate\Console\Command;
use \App\Models\User;
use Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backpack:user
                            {--N|name= : The name of the new user}
                            {--E|phone= : The user\'s phone number}
                            {--P|password= : User\'s password}
                            {--encrypt=true : Encrypt user\'s password if it\'s plain text ( true by default )}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Creating a new user');

        if (! $name = $this->option('name')) {
            $name = $this->ask('Name');
        }

        if (! $phone = $this->option('phone')) {
            $phone = $this->ask('phone');
        }

        if (! $password = $this->option('password')) {
            $password = $this->secret('Password');
        }

        $user = User::create([
            'name' => $name,
            'phone' => $phone,
            'password' => Hash::make($password),
            'is_admin' => true,
            'is_active' => true,
        ]);

        $user->address()->create();

        if ($user) {
            $this->info('Successfully created new user');
        } else {
            $this->error('Something went wrong trying to save your user');
        }
    }
}
