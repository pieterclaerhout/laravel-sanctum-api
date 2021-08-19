<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateTokenCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'token:create {--user-id=} {--token-name=} {--abilities=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new token for the given user ID';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $userID = $this->option('user-id');
        $tokenName = $this->option('token-name');
        $abilities = explode(',', $this->option('abilities'));

        $user = User::findOrFail($userID);
        $token = $user->createToken($tokenName, $abilities);

        $this->info($token->plainTextToken);

        return self::SUCCESS;
    }
}
