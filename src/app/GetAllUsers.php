<?php

namespace source\app;

use source\repositories\user\IUserRepository;

class GetAllUsers {
  public IUserRepository $repository;

  public function __construct(IUserRepository $repository)
  {
    $this->repository = $repository;
  }

  public function execute(): mixed {
    return $this->repository->getAllUsers();
  }
}