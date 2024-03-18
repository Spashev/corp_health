<?php

declare(strict_types=1);

namespace App\Providers;

use App\Contracts\Articles\ArticleRepositoryInterface;
use App\Contracts\Company\CompanyRepositoryInterface;
use App\Contracts\Company\CustomerRepositoryInterface;
use App\Contracts\Tests\TestCategoryRepositoryInterface;
use App\Contracts\Tests\TestRepositoryInterface;
use App\Contracts\Users\AdministratorRepositoryInterface;
use App\Contracts\Users\ConsultantRepositoryInterface;
use App\Contracts\Users\CoordinatorRepositoryInterface;
use App\Contracts\Users\UserLogsRepositoryInterface;
use App\Repository\Articles\ArticleRepository;
use App\Repository\Company\CompanyRepository;
use App\Repository\Company\CustomerRepository;
use App\Repository\Tests\TestCategoryRepository;
use App\Repository\Tests\TestRepository;
use App\Repository\Users\AdministratorRepository;
use App\Repository\Users\ConsultantRepository;
use App\Repository\Users\CoordinatorRepository;
use App\Repository\Users\UserLogsRepository;
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
        $this->app->bind(UserLogsRepositoryInterface::class, UserLogsRepository::class);
        $this->app->bind(ArticleRepositoryInterface::class, ArticleRepository::class);
    }

    public function boot(): void
    {
    }
}
