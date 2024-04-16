<?php

namespace App\Providers;

use App\Helpers\HtmlPurifierHelper;
use App\Models\News;
use App\Models\Poll;
use App\Models\QualificationCategory;
use App\Models\User;
use App\Observers\NewsObserver;
use App\Observers\PollObserver;
use App\Observers\QualificationCategoryObserver;
use App\Observers\UserObserver;
use Carbon\Carbon;
use HTMLPurifier;
use HTMLPurifier_Config;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Carbon::setLocale('uk');

        Paginator::useTailwind();

        User::observe(UserObserver::class);
        News::observe(NewsObserver::class);
        Poll::observe(PollObserver::class);
        QualificationCategory::observe(QualificationCategoryObserver::class);
    }
}
