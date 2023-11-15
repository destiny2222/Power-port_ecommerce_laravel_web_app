<?php

namespace App\Console\Commands;

use App\Models\Cart;
use Illuminate\Console\Command;

class ClearExpiredCarts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cart:clearExpired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear expired cart data';



    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $expiredCarts = Cart::where('created_at', '<', now()->subMinutes(2))->delete();

    $this->info($expiredCarts . ' expired carts cleared.');
    }
}
