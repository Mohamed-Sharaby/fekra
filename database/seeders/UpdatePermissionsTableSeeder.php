<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class UpdatePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [

            'Admins'=> 'التعامل مع المديرين',
            'Roles' => 'التعامل مع الصلاحيات والمناصب',
            'Users'=> 'التعامل مع الاعضاء',
            'Services'=> 'التعامل مع الخدمات',
            'Settings'=> 'التعامل مع الاعدادات ',
            'GuestMessages'=> 'التعامل مع رسائل الزوار ',
            'Partners'=> 'التعامل مع الشركاء ',
            'Blogs'=> 'التعامل مع المدونة',
        ];

        foreach ($permissions as $key => $permission) {
            Permission::where('name', $key)->update(['ar_name' => $permission]);
        }
    }
}
