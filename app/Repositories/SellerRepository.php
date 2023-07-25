<?php

namespace App\Repositories;

use App\Models\Seller;

class SellerRepository extends BaseRepository
{
  public function model()
  {
    return app(Seller::class);
  }
}
