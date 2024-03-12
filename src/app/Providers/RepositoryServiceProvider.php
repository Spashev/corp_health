<?php

declare(strict_types=1);

namespace App\Providers;

use App\Repository\Company\CompanyRepository;
use App\Repository\Company\CompanyRepositoryInterface;
use App\Repository\Company\CustomerRepository;
use App\Repository\Company\CustomerRepositoryInterface;
use App\Repository\Tests\TestCategoryRepository;
use App\Repository\Tests\TestCategoryRepositoryInterface;
use App\Repository\Tests\TestRepository;
use App\Repository\Tests\TestRepositoryInterface;
use App\Repository\Users\AdministratorRepository;
use App\Repository\Users\AdministratorRepositoryInterface;
use App\Repository\Users\ConsultantRepository;
use App\Repository\Users\ConsultantRepositoryInterface;
use App\Repository\Users\CoordinatorRepository;
use App\Repository\Users\CoordinatorRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(TestRepositoryInterface::class, TestRepository::class);
        $this->app->bind(TestCategoryRepositoryInterface::class, TestCategoryRepository::class);
        $this->app->bind(CoordinatorRepositoryInterface::class, CoordinatorRepository::class);
        $this->app->bind(ConsultantRepositoryInterface::class, ConsultantRepository::class);
        $this->app->bind(AdministratorRepositoryInterface::class, AdministratorRepository::class);
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->bind(CompanyRepositoryInterface::class, CompanyRepository::class);
    }

    public function boot(): void
    {
    }
}
