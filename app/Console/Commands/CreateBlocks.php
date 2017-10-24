<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\User;

use Carbon\Carbon;

use App\Models\User_block;

use App\Models\User_block_count;

class CreateBlocks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'block:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new users block';

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
     * @return mixed
     */
    public function handle()
    {
        $users = User::active_users();

        $id = User_block::insert_info( $users -> count() );

    if($users -> count() === 0 )
            return false;

     User_block_count::insert( $this -> create_request( $id, $users ));

    return true;

    }

    public function create_request( $user_block_id, $users )
    {
            $result = array();

            foreach ($users as $user )
                    $result[] =  array( 'user_block_id' => $user_block_id, 'user_id' => $user -> id );

            return $result;

    }
}
