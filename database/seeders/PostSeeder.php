<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        //
        $postPengumuman=Post::create([
            'title'=>'Pengumuman',
            'description'=>'<h1>Pengumuman Rekrutmen AKPOL Gelombang I Tahun 2023</h1><div class="post-content">

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size:14.0pt;
font-family:" arial="" unicode="" ms",sans-serif;color:black;mso-themecolor:text1;="" mso-fareast-language:in"="">TRIBRATANEWS SLEMAN -</span></b><span style="font-size:14.0pt;font-family:" arial="" unicode="" ms",sans-serif;color:black;="" mso-themecolor:text1;mso-fareast-language:in"="">&nbsp;Kepolisian Negara Republik
Indonesia (Polri) membuka pendaftaran untuk anggota Tamtama Polri mulai 12 September
sampai 21 September 2022. Untuk menjaring pendaftar, Polri telah melakukan
berbagai sosialisasi terbuka, baik melalui media massa, spanduk, baliho maupun
sosialisasi secara langsung ke masyarakat atau ke sekolah.</span><span style="font-size:14.0pt;font-family:" lato",sans-serif;mso-fareast-font-family:="" "times="" new="" roman";mso-bidi-font-family:"times="" roman";color:black;="" mso-themecolor:text1;mso-fareast-language:in"=""><o:p></o:p></span></p>

<p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" lato",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";color:black;mso-themecolor:text1;="" mso-fareast-language:in"="">&nbsp;<o:p></o:p></span></p>

<p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" arial="" unicode="" ms",sans-serif;color:black;mso-themecolor:text1;="" mso-fareast-language:in"="">Bagi yang berminat dan memenuhi syarat pendaftaran,
semua peserta perlu mendaftar online terlebih dahulu melalui laman
https://penerimaan.polri.go.id/&nbsp; Setelah itu pendaftar perlu mengisi form
registrasi, mengunggah berkas-berkas yang diperlukan, dan melakukan verifikasi
di Polres/Polda setempat.</span><span style="font-size:14.0pt;font-family:" lato",sans-serif;="" mso-fareast-font-family:"times="" new="" roman";mso-bidi-font-family:"times="" roman";="" color:black;mso-themecolor:text1;mso-fareast-language:in"=""><o:p></o:p></span></p>

<p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" lato",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";color:black;mso-themecolor:text1;="" mso-fareast-language:in"="">&nbsp;<o:p></o:p></span></p>

<p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" arial="" unicode="" ms",sans-serif;color:black;mso-themecolor:text1;="" mso-fareast-language:in"="">Semua tahapan seleksi dilakukan secara terbuka di mana
seluruh peserta seleksi bisa melihat sendiri hasil seleksi di setiap
tahapannya. Mulai dari proses penerimaan berkas, pemeriksan administrasi,
kesehatan, tes akademik, psikotes, dan kesamaptaan dan jasmani hingga proses
kelulusan semua dalam pengawasan.</span><span style="font-size:14.0pt;
font-family:" lato",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";color:black;mso-themecolor:text1;="" mso-fareast-language:in"=""><o:p></o:p></span></p>

<p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" lato",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";color:black;mso-themecolor:text1;="" mso-fareast-language:in"="">&nbsp;<o:p></o:p></span></p>

<p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" arial="" unicode="" ms",sans-serif;color:black;mso-themecolor:text1;="" mso-fareast-language:in"="">Sesuai perintah Kapolri yang menegaskan bahwa dalam
setiap tahun anggaran penerimaan, setiap Panitia Polda harus membentuk Tim
Pengawas Internal yaitu terdiri dari Itwasda dan Bidpropam Polda setempat dan
Tim Pengawasa Eksternal yaitu terdiri dari Diknas, Disdukcapil, IDI, HIMPSI,
Akademisi, Guru Olahraga, Tokoh Masyarakat, Tokoh Adat, LSM, Media Massa untuk
mengawasi/menyaksikan pelaksanaan setiap tahapan seleksi secara ketat, terus
menerus, transparan.</span><span style="font-size:14.0pt;font-family:" lato",sans-serif;="" mso-fareast-font-family:"times="" new="" roman";mso-bidi-font-family:"times="" roman";="" color:black;mso-themecolor:text1;mso-fareast-language:in"=""><o:p></o:p></span></p>

<p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" lato",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";color:black;mso-themecolor:text1;="" mso-fareast-language:in"="">&nbsp;<o:p></o:p></span></p>

<p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" arial="" unicode="" ms",sans-serif;color:black;mso-themecolor:text1;="" mso-fareast-language:in"="">Diharapkan masyarakat terus menerus berperan serta dalam
mengawasi setiap tahapan seleksi penerimaan anggota Polri, sehingga akan
terjaring anggota Polri yang berkalitas, memiliki Integritas yang tinggi dalam
pekerjaan dan terpenting adalah memiliki sikap melindungi, mengayomi dan
melayani masyarakat.</span><span style="font-size:14.0pt;font-family:" lato",sans-serif;="" mso-fareast-font-family:"times="" new="" roman";mso-bidi-font-family:"times="" roman";="" color:black;mso-themecolor:text1;mso-fareast-language:in"=""><o:p></o:p></span></p>

<p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" lato",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";color:black;mso-themecolor:text1;="" mso-fareast-language:in"="">&nbsp;<o:p></o:p></span></p>

<p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" arial="" unicode="" ms",sans-serif;color:black;mso-themecolor:text1;="" mso-fareast-language:in"="">Untuk memperbaiki proses rekruitmen anggota Polri agar
semakin berkualitas, Polri telah melakukan perubahan substansi dan kultur yang
diwujudkan dalam akselerasi transformasi di tubuh Polri, utamanya pada proses
penerimaan anggota Polri dengan mengacu pada prinsip dasar penerimaan yaitu “BETAH”
yang merupakan kepanjangan dari Bersih, Transparan, Akuntabel dan Humanis.</span><span style="font-size:14.0pt;font-family:" lato",sans-serif;mso-fareast-font-family:="" "times="" new="" roman";mso-bidi-font-family:"times="" roman";color:black;="" mso-themecolor:text1;mso-fareast-language:in"=""><o:p></o:p></span></p>

<p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" lato",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";color:black;mso-themecolor:text1;="" mso-fareast-language:in"="">&nbsp;<o:p></o:p></span></p>

<p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" arial="" unicode="" ms",sans-serif;color:black;mso-themecolor:text1;="" mso-fareast-language:in"="">Untuk informasi yang lengkap, detil dan terbarukan,
dari syarat hingga hasil seleksi, silahkan buka situs resmi rekrutmen Polri di
: https://penerimaan.polri.go.id/</span><span style="font-size:14.0pt;
font-family:" lato",sans-serif;mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";color:black;mso-themecolor:text1;="" mso-fareast-language:in"=""><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" arial="" unicode="" ms",sans-serif;color:black;mso-themecolor:text1;="" mso-fareast-language:in"=""><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" arial="" unicode="" ms",sans-serif;color:black;mso-themecolor:text1;="" mso-fareast-language:in"=""><img src="https://i.imgur.com/ULmQnnu.jpg" width="329"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" arial="" unicode="" ms",sans-serif;color:black;mso-themecolor:text1;="" mso-fareast-language:in"=""><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:14.0pt;
font-family:" arial="" unicode="" ms",sans-serif;color:black;mso-themecolor:text1;="" mso-fareast-language:in"=""><img src="https://i.imgur.com/oKudBD2.jpg" width="329"><br></span></p><p></p>

        </div> ',
            'attachment'=>null,
            'tags'=>null,
            'post_status'=>'publish',
            'post_type'=>'blog',
            'slug'=>'dikbang-akpol-pengumuman',
            'uuid'=>''
        ]);

       $postPengumuman->categories()->attach(4,['user_modify'=>'su']);

       $postPersyaratan=Post::create([
        'title'=>'Persyaratan',
        'description'=>$faker->text(),
        'attachment'=>null,
        'tags'=>null,
        'post_status'=>'publish',
        'post_type'=>'blog',
        'slug'=>'dikbang-akpol-persyaratan',
        'uuid'=>''

        ]);
       $postPersyaratan->categories()->attach(4,['user_modify'=>'su']);

       $postTimeLine=Post::create([
        'title'=>'Time Line',
        'description'=>$faker->text(),
        'attachment'=>null,
        'tags'=>null,
        'post_status'=>'publish',
        'post_type'=>'blog',
        'slug'=>'dikbang-akpol-timeline',
        'uuid'=>''

        ]);
       $postTimeLine->categories()->attach(4,['user_modify'=>'su']);
    }
}
