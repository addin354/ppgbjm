<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect('/admin'));

Route::get('/deploy-setup', function () {
    $output = [];

    try {
        Artisan::call('migrate', ['--force' => true, '--seed' => true]);
        $output[] = "1. Migration & Seeder: " . Artisan::output();

        @Artisan::call('storage:link');
        $output[] = "2. Storage Link: OK";

        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        $output[] = "3. Cache Cleared: OK";

        return "<h2 style='color:green;'>SUCCESS: Deploy Setup Completed!</h2><pre>" . implode("\n", $output) . "</pre><br><a href='/admin'>Go to Admin Panel</a>";
    } catch (\Throwable $e) {
        return "<h2 style='color:red;'>ERROR: Setup Failed</h2><pre>" . $e->getMessage() . "\n" . $e->getTraceAsString() . "</pre>";
    }
});

