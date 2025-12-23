<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $items = [
            ['Sac Cuir Noir', 'sac-cuir-noir', 7900, 'Elegant, solide, parfait au quotidien.', 'products/sac-noir.jpg'],
            ['Sac Beige Minimal', 'sac-beige-minimal', 5900, 'Minimaliste, léger, ultra clean.', 'products/sac-beige.jpg'],
            ['Sac Week-end', 'sac-weekend', 9900, 'Grand format, idéal voyage.', 'products/sac-weekend.jpg'],
            ['Sac Bandoulière', 'sac-bandouliere', 4500, 'Compact, pratique, moderne.', 'products/sac-bandouliere.jpg'],
            ['Sac Canvas', 'sac-canvas', 3900, 'Style casual, résistant.', 'products/sac-canvas.jpg'],
            ['Sac Premium', 'sac-premium', 12900, 'Finition premium, look luxe.', 'products/sac-premium.jpg'],
        ];

        foreach ($items as [$name, $slug, $price, $desc, $img]) {
            Product::create([
                'name' => $name,
                'slug' => $slug,
                'price_cents' => $price,
                'description' => $desc,
                'image' => $img,
            ]);
        }
    }
}
