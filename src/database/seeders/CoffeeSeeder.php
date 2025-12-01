<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coffee; // Gọi đúng Model Coffee
use Carbon\Carbon;

class CoffeeSeeder extends Seeder
{
    public function run()
    {
        // Danh sách món mẫu
        $menu = [
            [
                'name' => 'Signature Egg Coffee',
                'price' => 65000,
                'description' => 'Đặc sản Hà Nội. Lớp kem trứng béo ngậy đánh bông phủ lên nền cà phê Robusta đậm đà.',
            ],
            [
                'name' => 'Caramel Macchiato',
                'price' => 55000,
                'description' => 'Sự kết hợp ngọt ngào giữa vanilla, sữa nóng và Espresso, điểm xuyết bởi lớp sốt caramel.',
            ],
            [
                'name' => 'Cold Brew Cam Sả',
                'price' => 60000,
                'description' => 'Cà phê ủ lạnh 24h kết hợp cùng nước cam tươi và hương sả nhẹ nhàng.',
            ],
            [
                'name' => 'Bạc Xỉu Đá',
                'price' => 35000,
                'description' => 'Ký ức Sài Gòn. Nhiều sữa, ít cà phê, béo ngậy và ngọt ngào.',
            ],
            [
                'name' => 'Latte Hạnh Nhân',
                'price' => 59000,
                'description' => 'Espresso pha cùng sữa hạnh nhân nhập khẩu. Hương vị bùi béo tự nhiên.',
            ]
        ];

        // Vòng lặp để tạo từng món
        foreach ($menu as $item) {
            Coffee::create($item);
        }
    }
}