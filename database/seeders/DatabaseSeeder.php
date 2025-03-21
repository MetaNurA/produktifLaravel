

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('detail_profile')->insert([
            'addres'=>'Nganjuk',
            'nomor_telp'=>'08xxxxxxx',
            'ttl'=>'2004-12-04',
            'foto'=>'picture.png'
       ]);
    }
}

