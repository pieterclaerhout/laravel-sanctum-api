<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ListTokensCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'token:list {--user-id=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List the tokens token for the given user ID';

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

        $user = User::with('tokens')->findOrFail($userID);

        // We can't list the token itself as the database only contains the
        // SHA256 hash of the token, not the token itself
        //
        // To use as a Bearer Token, use the same format as what is returned
        // when you created the token (id|token)
        $this->info("All tokens for user {$user->name}");
        foreach ($user->tokens as $token) {
            $abilities = implode(', ', $token->abilities);
            $this->info("> {$token->name} | {$token->id} | {$abilities}");
        }

        return self::SUCCESS;
    }
}
