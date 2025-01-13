<?php

namespace Modules\Icommerceepayco\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Isite\Jobs\ProcessSeeds;

class IcommerceepaycoDatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {

    ProcessSeeds::dispatch([
      "baseClass" => "\Modules\Icommerceepayco\Database\Seeders",
      "seeds" => ["IcommerceepaycoModuleTableSeeder", "IcommerceepaycoSeeder"]
    ]);

  }
}
