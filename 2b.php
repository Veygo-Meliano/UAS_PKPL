<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    // Function untuk testing insert data dosen ke dalam tabel dosen
    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '008',
            'nidn' => '0504116601',
            'nama' => 'Drs. Wahyu Pujiono, M.Kom',
            'jabfung' => 'LK',
            'email_dosen' => '008@tif.uad.ac.id',
            'avatar' => 'wahyu.jpg'
        ]);

        $this->assertEquals('008', $dosen->nipy);
        $this->assertEquals('0504116601', $dosen->nidn);
        $this->assertEquals('Drs. Wahyu Pujiono, M.Kom', $dosen->nama);
        $this->assertEquals('LK', $dosen->jabfung);
        $this->assertEquals('008@tif.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('wahyu.jpg', $dosen->avatar);
    }
}