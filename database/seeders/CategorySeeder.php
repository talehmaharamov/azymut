<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryTranslation;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'slug' => 'azyMut-construction',
                'translation' => ['az' => 'AzyMut İnşaat', 'en' => 'AzyMut Construction', 'ru' => 'АзиМут Строительство'],
                'subcategories' => [
                    [
                        'slug' => 'repair-and-renovation',
                        'translation' => ['az' => 'Təmir və yeniləmə', 'en' => 'Repair and renovation', 'ru' => 'Ремонт и реконструкция'],
                    ],
                    [
                        'slug' => 'design-and-construction',
                        'translation' => ['az' => 'Dizayn və tikinti', 'en' => 'Design and construction', 'ru' => 'Дизайн и строительство'],
                    ],
                    [
                        'slug' => 'interior-decoration',
                        'translation' => ['az' => 'İnterior dekorasiya', 'en' => 'Interior decoration', 'ru' => 'Интерьерное оформление'],
                    ],
                ]
            ],
            [
                'slug' => 'first1',
                'translation' => ['az' => 'AzyMut Təmizlik', 'en' => 'AzyMut Cleaning', 'ru' => 'АзиМут Чистота'],
                'subcategories' => [
                    [
                        'slug' => 'cleaning-service',
                        'translation' => ['az' => 'Təmizlik xidməti', 'en' => 'Cleaning service', 'ru' => 'Услуги по уборке'],
                    ],
                ]
            ],
        ];
        foreach ($categories as $cat) {
            $newCategory = new Category();
            $newCategory->slug = $cat['slug'];
            $newCategory->save();
            foreach (active_langs() as $lang) {
                $translation = new CategoryTranslation();
                $translation->locale = $lang->code;
                $translation->category_id = $newCategory->id;
                $translation->name = $cat['translation'][$lang->code];
                $translation->save();
            }
            if (array_key_exists('subcategories', $cat)) {
                foreach ($cat['subcategories'] as $altCat) {
                    $subCategory = new Category();
                    $subCategory->slug = $altCat['slug'];
                    $newCategory->subcategories()->save($subCategory);
                    foreach (active_langs() as $lang) {
                        $subTranslation = new CategoryTranslation();
                        $subTranslation->locale = $lang->code;
                        $subTranslation->category_id = $subCategory->id;
                        $subTranslation->name = $altCat['translation'][$lang->code];
                        $subTranslation->save();
                    }
                }
            }
        }
    }
}
