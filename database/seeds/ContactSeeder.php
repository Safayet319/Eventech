<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    $data = [
    //     'name' => 'Mr A',
    //     'email' => 'a@gmail.com',
    //     'subject' => 'Dummy',
    //     'message' => 'Dummy',
    //    ];

    //    Contact::create($data);
    factory(Contact::class,20)->create();
    }
}
