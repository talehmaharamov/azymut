<?php

namespace Database\Seeders;

use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run()
    {

        $settings = [
            ['name' => 'phone', 'link' => '+994102229515'],
            ['name' => 'facebook', 'link' => 'https://facebook.com'],
            ['name' => 'instagram', 'link' => 'https://www.instagram.com/zuhur_inshaat.mmc/'],
            ['name' => 'youtube', 'link' => 'https://www.youtube.com'],
            ['name' => 'email', 'link' => 'info@azymut.az'],
            ['name' => 'address_az', 'link' => 'Caspian Plaza'],
            ['name' => 'address_en', 'link' => 'Caspian Plaza'],
            ['name' => 'address_ru', 'link' => 'Каспиан Плаза'],
            ['name' => 'mail_receiver', 'link' => 'elmir_567@mail.ru'],
            ['name' => 'count_customer', 'link' => '510'],
            ['name' => 'count_experience', 'link' => '511'],
            ['name' => 'count_services', 'link' => '512'],
            ['name' => 'count_projects', 'link' => '513'],
            ['name' => 'map', 'link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.0608320297797!2d49.82610727548145!3d40.385344357549826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d9be60052ab%3A0xd7852fa710c6b11a!2sCaspian%20Plaza!5e0!3m2!1sen!2saz!4v1710417639532!5m2!1sen!2saz'],
        ];

        foreach ($settings as $setting) {
            $set = new Setting();
            $set->name = $setting['name'];
            $set->link = $setting['link'];
            $set->status = 1;
            $set->save();
        }
    }
}
