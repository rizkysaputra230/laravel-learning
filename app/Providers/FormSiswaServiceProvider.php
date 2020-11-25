<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Kelas;
use App\Hobi;

class FormSiswaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // view()->composer('siswa.form', function($view) {
        // $view->with('list_kelas', Kelas::lists('nama_kelas', 'id'));
        // $view->with('list_hobi', Hobi::lists('nama_hobi', 'id'));
        // });

        // view()->composer('siswa.form_pencarian', function($view) {
        // $view->with('list_kelas', Kelas::lists('nama_kelas', 'id'));
        // });
    }
}
