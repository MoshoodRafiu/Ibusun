<?php

namespace App\Services;

use App\Models\Seller;
use App\Repositories\SellerRepository;
use Illuminate\Support\Arr;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class RegisterService
{
  public function __construct(
    protected UserRepository $userRepository,
    protected SellerRepository $sellerRepository,
  )
  {

  }

  /**
   * Process user registration
   *
   * @param array $credentials
   * @param string $guard
   * @return void
   */
  public function processRegister(array $credentials, string $guard)
  {
    $details = Arr::only($credentials, ['first_name', 'last_name', 'email', 'password', 'business_name']);
    return $guard === 'seller'
      ? $this->sellerRepository->create($details)
      : $this->userRepository->create($details);
  }
}
