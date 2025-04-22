<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(url: '/')
            //Mengarahkan ke URL tertentu dalam aplikasi
                    ->assertSee(text: 'Enterprise')
                    //Memastikan bahwa teks yang diberikan terdapat pada halaman
                    ->clickLink(link: 'Regis')
                    //Menekan tautan di browser
                    ->asserPathls(path: '/regis')
                    //Memastikan path dari halaman yang dijalankan
                    ->type(field: 'email', value: 'admin@gmail.com')
                    ->type(field: 'username', value: 'username')
                    ->type(field: 'password', value: 'password')
                    //Berinteraksi dengan elemen input
                    ->press(button: 'REGIS')
                    //Menekan elemen tombol pada halaman
                    ->asserPathls(path: '/dashboard');
                    //Memastikan path dari halaman yang dijalankan
        });
    }
}
