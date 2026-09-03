<?php

namespace Database\Seeders;

use App\Models\Desa;
use App\Models\Kelompok;
use App\Models\Generus;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GenerusSeeder extends Seeder
{
    public function run(): void
    {
        $dataPages = array (
  0 => 
  array (
    'desa' => 'BANJARMASIN BARAT',
    'items' => 
    array (
      0 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'ROSYIDA MISKI NOR ADILA',
        'ttl' => '08/11/1999',
        'ortu' => 'MUNASIR YATIN',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      1 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'KAYONNA MAUREEN EISHANUM SANJAYA',
        'ttl' => '23/04/2022',
        'ortu' => 'INDRA SANJAYA',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'PAUD',
      ),
      2 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'KHEYRA ELINASABHIRA UTAMA',
        'ttl' => '29/04/2019',
        'ortu' => 'ALIM FIRMANSYAH A.U',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      3 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'ALLODYA FRADEL MAHESWA WIRAYUDA',
        'ttl' => '06/10/2015',
        'ortu' => 'WAHYU IRFANDI DWI W.',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      4 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'RESHAD ZAVIER MUSA WIRAYUDA',
        'ttl' => '22/04/2021',
        'ortu' => 'WAHYU IRFANDI DWI W.',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'PAUD',
      ),
      5 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'NUR MUSLIMAH',
        'ttl' => '24/11/2008',
        'ortu' => 'LANDO',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      6 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'JASMINE NUR AURA',
        'ttl' => '23/10/2017',
        'ortu' => 'LANDO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      7 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'ABBDUROHMAN ROSYID',
        'ttl' => '23/02/2006',
        'ortu' => 'NURHASAN',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      8 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'LILY FEBRIANA AULIA',
        'ttl' => '01/02/2009',
        'ortu' => 'NURHASAN',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      9 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'NUR FADILA',
        'ttl' => '28/11/2010',
        'ortu' => 'NURHASAN',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      10 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'LARAS ALTHAFUNNISA',
        'ttl' => '01/07/2015',
        'ortu' => 'BAMBANG AHMADI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      11 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'GHINA AZKIA AL JAAUZA',
        'ttl' => '18/06/2008',
        'ortu' => 'RIFAI RIYADI',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      12 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'ABRAHAM JINGGA AL ZHORIF',
        'ttl' => '06/06/2011',
        'ortu' => 'RIFAI RIYADI',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      13 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'UWAIS YUSYA\'A AL FAQIH',
        'ttl' => '09/02/2014',
        'ortu' => 'RIFAI RIYADI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      14 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'KHALISHAH MAZAYA AZ ZUHUD',
        'ttl' => '24/10/2015',
        'ortu' => 'RIFAI RIYADI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      15 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'SHEZA MAHREEN AZKADINA',
        'ttl' => '19/02/2019',
        'ortu' => 'RIFAI RIYADI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'PAUD',
      ),
      16 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'PUTRI OKTAVIANI ANWAR',
        'ttl' => '08/10/2004',
        'ortu' => 'ERNA KURNIAWATI N.',
        'kelas' => 'USMAN',
        'pekerjaan' => 'MAHASISWA',
      ),
      17 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'NUURHASNAH MELANI PUTRI',
        'ttl' => '29/05/2009',
        'ortu' => 'ERNA KURNIAWATI N.',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      18 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'YULIA ANGGRAINI NINGTYAS',
        'ttl' => '09/07/2012',
        'ortu' => 'ERNA KURNIAWATI N.',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      19 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'YARJUNA LIQO\'A SYAFA\'ATA',
        'ttl' => '08/09/2007',
        'ortu' => 'TONI KUSWOYO',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      20 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'HABYL BRILLIANT ANSHORULLAH',
        'ttl' => '01/04/2008',
        'ortu' => 'BUDI YUNIANTONO',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      21 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'RAFIF DZAKI RAMADHAN',
        'ttl' => '25/08/2010',
        'ortu' => 'BUDI YUNIANTONO',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      22 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'WALDAN AQILLA LATHIEF',
        'ttl' => '22/01/2011',
        'ortu' => 'BUDI YUNIANTONO',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      23 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'AZKADINA FARAH ADIBA',
        'ttl' => '30/03/2017',
        'ortu' => 'BUDI YUNIANTONO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      24 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'M. FAIZ ARSYAD FATHONI',
        'ttl' => '11/11/2013',
        'ortu' => 'M. FATHONI',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      25 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'DZAKIRA MARLIANI NUR RAMADHANI',
        'ttl' => '31/05/2017',
        'ortu' => 'M. FATHONI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      26 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'ZHAFIRA AZZAHRA MARLIANI',
        'ttl' => '23/08/2018',
        'ortu' => 'M. FATHONI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      27 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'M. IHSAN FATHONI',
        'ttl' => '30/01/2021',
        'ortu' => 'M. FATHONI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'PAUD',
      ),
      28 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'FERDYAN CAHYA YUDHA KUSUMA',
        'ttl' => '30/07/2002',
        'ortu' => 'WAHYUDIONO',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      29 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'ALFYAN DWI OKTA AZZADIO',
        'ttl' => '21/10/2009',
        'ortu' => 'WAHYUDIONO',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      30 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'NAURA KAYYISA PUTRI RAMADHANIA',
        'ttl' => '12/07/2015',
        'ortu' => 'WAHYUDIONO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      31 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'YULVIKA SALWA SALSABILLAH',
        'ttl' => '23/06/2012',
        'ortu' => 'MISTAR HERMANTO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      32 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'AYSHA ASTI NABILA',
        'ttl' => '28/01/2005',
        'ortu' => 'CATUR MALIK NUR.A',
        'kelas' => 'USMAN',
        'pekerjaan' => 'MAHASISWA',
      ),
      33 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'ALYA SAFIRA SAHARINA',
        'ttl' => '01/03/2006',
        'ortu' => 'CATUR MALIK NUR.A',
        'kelas' => 'USMAN',
        'pekerjaan' => 'MAHASISWA',
      ),
      34 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'ALISA KHALILA KHANZA',
        'ttl' => '12/05/2014',
        'ortu' => 'CATUR MALIK NUR.A',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      35 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'FAIZ RIDHO',
        'ttl' => '29/12/2011',
        'ortu' => 'ROCHMADI',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      36 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'INDRA KUSUMA',
        'ttl' => '20/12/2008',
        'ortu' => 'MUJIANTO',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      37 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'M. ALIANDRA IBRAHIM',
        'ttl' => '10/07/2013',
        'ortu' => 'MUJIANTO',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SD',
      ),
      38 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'ALWI NUR ANSHORI',
        'ttl' => '14/07/2012',
        'ortu' => 'DENNY ANSHARI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      39 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'HAFIZA NUR IZZATI',
        'ttl' => '11/11/2015',
        'ortu' => 'DENNY ANSHARI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      40 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'ARIS SULAIMAN ANSHARI',
        'ttl' => '30/04/2001',
        'ortu' => 'ISNA KHAIRANI',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
    ),
  ),
  1 => 
  array (
    'desa' => 'BANJARMASIN BARAT',
    'items' => 
    array (
      0 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'NUR DWI ADELIA',
        'ttl' => '30/03/2007',
        'ortu' => 'MUKITO',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      1 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'ROJUL HANIF',
        'ttl' => '09/03/2005',
        'ortu' => '',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      2 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'SATRIA',
        'ttl' => '11/12/2006',
        'ortu' => '',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      3 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'DICKY DANI PRATAMA',
        'ttl' => '05/08/2000',
        'ortu' => '',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      4 => 
      array (
        'kelompok' => 'BASIRIH',
        'nama' => 'VALENTINO TEGAR PRAKOSO',
        'ttl' => '02/12/2003',
        'ortu' => '',
        'kelas' => 'USMAN',
        'pekerjaan' => 'MT',
      ),
      5 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'AHMAD MAULANA',
        'ttl' => '10/02/2003',
        'ortu' => 'WARSIDI',
        'kelas' => 'USMAN',
        'pekerjaan' => 'MAHASISWA',
      ),
      6 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'HIZQYL DIKA WIBOWO',
        'ttl' => '25/07/2008',
        'ortu' => 'PAIRAN',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      7 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'WINDY ANUM PRASTHA',
        'ttl' => '21/08/2006',
        'ortu' => 'PAIRAN',
        'kelas' => 'USMAN',
        'pekerjaan' => '-',
      ),
      8 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'M. TITO ARRAYAN',
        'ttl' => '28/09/2016',
        'ortu' => 'ANTONI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      9 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'ARSYA MALKI AKBAR',
        'ttl' => '01/05/2017',
        'ortu' => 'PAIRAN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      10 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'ADAM MAULANA IBRAHIM',
        'ttl' => '31/10/2016',
        'ortu' => 'SALAMUN IBRAHIM',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      11 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'HANNA S FARADIBA',
        'ttl' => '04/12/2018',
        'ortu' => 'SALAMUN IBRAHIM',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'PAUD',
      ),
      12 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'BILQIS VALDA HEMAYANTI',
        'ttl' => '16/10/2014',
        'ortu' => 'HERIYANTO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      13 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'M. NUR HUDA PRATAMA',
        'ttl' => '18/07/2009',
        'ortu' => 'TRIYONO S',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      14 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'HUSNA SHOLIHATUS SYIFA',
        'ttl' => '23/05/2017',
        'ortu' => 'TRIYONO S',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      15 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'NABILA AFIFAH KHAIRUNISA',
        'ttl' => '01/09/2001',
        'ortu' => 'ARIE POERWANINGSIH',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      16 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'NAJWA FARAH DILLA LOVIANE',
        'ttl' => '28/05/2005',
        'ortu' => 'ARIE POERWANINGSIH',
        'kelas' => 'USMAN',
        'pekerjaan' => 'MAHASISWA',
      ),
      17 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'DAMANG JATI RAMADHAN',
        'ttl' => '29/01/1997',
        'ortu' => 'SUPRIYADI',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      18 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'DAMANG ADHI YAHYA',
        'ttl' => '17/07/2003',
        'ortu' => 'SUPRIYADI',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      19 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'DAMANG WILDAN RAMADHAN',
        'ttl' => '24/11/2005',
        'ortu' => 'SUPRIYADI',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      20 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'DENOK ROSE AL JAUZAH',
        'ttl' => '10/02/2011',
        'ortu' => 'SUPRIYADI',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      21 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'A. SHIDDIQ A,',
        'ttl' => '17/03/2000',
        'ortu' => 'SUKIRTO',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      22 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'HAWA SHAKILLA AZZAHRA',
        'ttl' => '14/07/2017',
        'ortu' => 'ANGGI ANUGERAH',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      23 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'RIEFFAL ALFI NAHEL',
        'ttl' => '13/05/2013',
        'ortu' => 'ALFIAN FAQQIH',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      24 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'NAISHA KAYANA',
        'ttl' => '30/08/2017',
        'ortu' => 'LATIFAH DEWI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      25 => 
      array (
        'kelompok' => 'MULAWARMAN',
        'nama' => 'SULTHON',
        'ttl' => '28/10/2012',
        'ortu' => 'SETIO BUDI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      26 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'JIHAN QORI SALSABILA',
        'ttl' => '07/08/2021',
        'ortu' => 'KHOIRIL',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'PAUD',
      ),
      27 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'M. AFIF NUR FAIZIN',
        'ttl' => '17/05/2014',
        'ortu' => 'ARIF ABIDIN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      28 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'M. ALIF FADLU MINALLAH',
        'ttl' => '13/01/2023',
        'ortu' => 'ARIF ABIDIN',
        'kelas' => 'BALITA',
        'pekerjaan' => 'BALITA',
      ),
      29 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'NURUL AINI',
        'ttl' => '16/01/2008',
        'ortu' => 'SAFARI',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      30 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'CANTIKA ZAHRA RAHMAN',
        'ttl' => '03/03/2023',
        'ortu' => 'HAMIM TAUFIQ RAHMAN',
        'kelas' => 'BALITA',
        'pekerjaan' => 'BALITA',
      ),
      31 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'M. SULTHON FADILLAH AKBAR',
        'ttl' => '15/11/2019',
        'ortu' => 'HAMIM TAUFIQ RAHMAN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'PAUD',
      ),
      32 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'M. HAMIN ALI AKBAR',
        'ttl' => '19/12/2015',
        'ortu' => 'HAMIM TAUFIQ RAHMAN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      33 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'DWITA RIZKY SALSABILLAH',
        'ttl' => '20/03/2013',
        'ortu' => 'HAMIM TAUFIQ RAHMAN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      34 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'ANNISYA DEWI NURJANNAH',
        'ttl' => '08/05/2010',
        'ortu' => 'HAMIM TAUFIQ RAHMAN',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      35 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'AMIR LUCKY FADILLAH',
        'ttl' => '07/04/2007',
        'ortu' => 'SUKIRNO',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      36 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'ARCELLIO ADNAN PRATAMA',
        'ttl' => '02/05/2022',
        'ortu' => 'DEWI WULAN AMELIA',
        'kelas' => 'BALITA',
        'pekerjaan' => 'BALITA',
      ),
      37 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'AMANDA NOR SHOLIHAH',
        'ttl' => '23/06/2006',
        'ortu' => 'ISMI HASANAH',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      38 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'AHMAD GAJALI',
        'ttl' => '10/06/2010',
        'ortu' => 'M. SHOLIHIN',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      39 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'MAULANA',
        'ttl' => '07/05/2014',
        'ortu' => 'M. SHOLIHIN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      40 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'NUR AULIA KISTI SALAM',
        'ttl' => '02/11/2008',
        'ortu' => 'ABDUL SALAM',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      41 => 
      array (
        'kelompok' => 'MEKARSARI',
        'nama' => 'ABIZHAR MAUZA SALAM',
        'ttl' => '03/06/2018',
        'ortu' => 'ABDUL SALAM',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
    ),
  ),
  2 => 
  array (
    'desa' => 'KAPUAS',
    'items' => 
    array (
      0 => 
      array (
        'kelompok' => 'PANGKUH 6',
        'nama' => 'IBNU HASAN SABILLY',
        'ttl' => '06/08/2012',
        'ortu' => 'SUHARDI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      1 => 
      array (
        'kelompok' => 'PANGKUH 6',
        'nama' => 'TITTO NASRULLAH',
        'ttl' => '14/08/2013',
        'ortu' => 'SUMANTO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      2 => 
      array (
        'kelompok' => 'PANGKUH 6',
        'nama' => 'ELSA KHASRISMA PUTRI',
        'ttl' => '24/09/2014',
        'ortu' => 'WAKIDI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      3 => 
      array (
        'kelompok' => 'PANGKUH 6',
        'nama' => 'FAQIH ARI PRASETYO',
        'ttl' => '05/07/2012',
        'ortu' => 'SUPARMINTO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      4 => 
      array (
        'kelompok' => 'PANGKUH 6',
        'nama' => 'BAYU SAPUTRA',
        'ttl' => '14/04/2007',
        'ortu' => 'WAHYUDI',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      5 => 
      array (
        'kelompok' => 'PANGKUH 6',
        'nama' => 'ABDUL MALIK MANSURIN',
        'ttl' => '16/03/2005',
        'ortu' => 'SUHARDI',
        'kelas' => 'USMAN',
        'pekerjaan' => 'WIRAUSAHA',
      ),
      6 => 
      array (
        'kelompok' => 'PANGKUH 6',
        'nama' => 'LINDA NOPITASARI',
        'ttl' => '16/11/2005',
        'ortu' => 'SURYANTO',
        'kelas' => 'USMAN',
        'pekerjaan' => 'MAHASISWA',
      ),
      7 => 
      array (
        'kelompok' => 'PANGKUH 6',
        'nama' => 'TRIANA DINDA HERLINA',
        'ttl' => '13/06/2004',
        'ortu' => 'SUMITRO',
        'kelas' => 'USMAN',
        'pekerjaan' => 'MAHASISWA',
      ),
      8 => 
      array (
        'kelompok' => 'PANGKUH 6',
        'nama' => 'WIDYA KARTIKA',
        'ttl' => '03/10/2005',
        'ortu' => 'SUPARMINTO',
        'kelas' => 'USMAN',
        'pekerjaan' => 'MONDOK',
      ),
      9 => 
      array (
        'kelompok' => 'PANGKUH 6',
        'nama' => 'ANDREANSYAH EKO P.',
        'ttl' => '15/06/2001',
        'ortu' => 'WAKIDI',
        'kelas' => 'USMAN',
        'pekerjaan' => 'MAHASISWA',
      ),
      10 => 
      array (
        'kelompok' => 'PANGKUH 6',
        'nama' => 'M. IKHWAN A.',
        'ttl' => '27/07/2003',
        'ortu' => 'SUHARDI',
        'kelas' => 'USMAN',
        'pekerjaan' => 'WIRAUSAHA',
      ),
      11 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'NANDA',
        'ttl' => '08/07/2007',
        'ortu' => 'SOLIHIN',
        'kelas' => 'REMAJA',
        'pekerjaan' => '',
      ),
      12 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'NISA',
        'ttl' => '17/09/2002',
        'ortu' => 'SOHILUN',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      13 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'DEWI',
        'ttl' => '23/01/2000',
        'ortu' => 'TOPO',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      14 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'OKTA',
        'ttl' => '09/03/2009',
        'ortu' => 'SOHILUN',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => '',
      ),
      15 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'FAJAR',
        'ttl' => '18/05/2008',
        'ortu' => 'HANDO',
        'kelas' => 'REMAJA',
        'pekerjaan' => '',
      ),
      16 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'NAURA',
        'ttl' => '20/08/2007',
        'ortu' => 'HANDO',
        'kelas' => 'REMAJA',
        'pekerjaan' => '',
      ),
      17 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'AZAM',
        'ttl' => '29/07/2015',
        'ortu' => 'SOLIHIN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      18 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'FAUZI',
        'ttl' => '30/09/2010',
        'ortu' => 'HANDO',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => '',
      ),
      19 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'NITA',
        'ttl' => '07/12/2007',
        'ortu' => 'WIYONO',
        'kelas' => 'REMAJA',
        'pekerjaan' => '',
      ),
      20 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'YUSUF',
        'ttl' => '02/10/2008',
        'ortu' => 'WIYONO',
        'kelas' => 'REMAJA',
        'pekerjaan' => '',
      ),
      21 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'HASAN',
        'ttl' => '08/04/2008',
        'ortu' => 'MAKRUF',
        'kelas' => 'REMAJA',
        'pekerjaan' => '',
      ),
      22 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'ARIP',
        'ttl' => '14/07/2004',
        'ortu' => 'MIO',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      23 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'ICHAM',
        'ttl' => '17/12/1997',
        'ortu' => 'NGADINO',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      24 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'RIZAL',
        'ttl' => '20/06/2003',
        'ortu' => 'NGADINO',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      25 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'HAFIF',
        'ttl' => '28/09/2003',
        'ortu' => 'MAKRUF',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      26 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'EVA',
        'ttl' => '21/10/2000',
        'ortu' => 'MAKRUF',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      27 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'NISA',
        'ttl' => '17/04/2011',
        'ortu' => 'UDIN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      28 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'DANI',
        'ttl' => '11/07/2011',
        'ortu' => 'SURADI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      29 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'PAIS',
        'ttl' => '07/02/2012',
        'ortu' => 'HARIANTO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      30 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'NANDA',
        'ttl' => '01/06/2013',
        'ortu' => 'WIANTO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      31 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'GITA',
        'ttl' => '08/01/2013',
        'ortu' => 'ZUHER',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      32 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'SIFA',
        'ttl' => '28/09/2014',
        'ortu' => 'ZUHER',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      33 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'FAHRI',
        'ttl' => '24/12/2012',
        'ortu' => 'MAKRUF',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      34 => 
      array (
        'kelompok' => 'LAMUNTI',
        'nama' => 'DAPA',
        'ttl' => '22/08/2010',
        'ortu' => 'DAPA',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => '',
      ),
      35 => 
      array (
        'kelompok' => 'TAHAI JAYA',
        'nama' => 'ATHAYA FAREEN P A',
        'ttl' => '09/07/2016',
        'ortu' => 'ARDIANSYAH',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      36 => 
      array (
        'kelompok' => 'TAHAI JAYA',
        'nama' => 'AMEL SAFITRI',
        'ttl' => '17/07/2015',
        'ortu' => 'SUSILO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      37 => 
      array (
        'kelompok' => 'TAHAI JAYA',
        'nama' => 'BARADA BANGUN BUANA',
        'ttl' => '19/08/2011',
        'ortu' => 'WAHYUDI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      38 => 
      array (
        'kelompok' => 'TAHAI JAYA',
        'nama' => 'FATANA AIKO MORSE',
        'ttl' => '24/03/2017',
        'ortu' => 'MURDIONO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      39 => 
      array (
        'kelompok' => 'TAHAI JAYA',
        'nama' => 'KAILA ADELIA CALESTYN',
        'ttl' => '14/09/2014',
        'ortu' => 'SURAJI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      40 => 
      array (
        'kelompok' => 'TAHAI JAYA',
        'nama' => 'KHAISAN FADLI DAFFA D',
        'ttl' => '26/03/2018',
        'ortu' => 'YOGANATA',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      41 => 
      array (
        'kelompok' => 'TAHAI JAYA',
        'nama' => 'KHANZA MIQDAR H A',
        'ttl' => '06/09/2012',
        'ortu' => 'HENDRI',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
    ),
  ),
  3 => 
  array (
    'desa' => 'KAPUAS',
    'items' => 
    array (
      0 => 
      array (
        'kelompok' => 'TAHAI JAYA',
        'nama' => 'RAFA ARYA SATYA',
        'ttl' => '21/10/2013',
        'ortu' => 'SUDIHARTO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      1 => 
      array (
        'kelompok' => 'TAHAI JAYA',
        'nama' => 'RAJA AL GAZALI',
        'ttl' => '11/05/2016',
        'ortu' => '',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      2 => 
      array (
        'kelompok' => 'TAHAI JAYA',
        'nama' => 'RATIH DEWI NUR A',
        'ttl' => '25/11/2012',
        'ortu' => 'ZAINAL',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      3 => 
      array (
        'kelompok' => 'TAHAI JAYA',
        'nama' => 'VENIA ARISTA',
        'ttl' => '21/11/2016',
        'ortu' => 'SAFARI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      4 => 
      array (
        'kelompok' => 'TAHAI JAYA',
        'nama' => 'GATUT ALDI P',
        'ttl' => '30/12/2004',
        'ortu' => 'SURAJI',
        'kelas' => 'USMAN',
        'pekerjaan' => 'MAHASISWA',
      ),
      5 => 
      array (
        'kelompok' => 'TAHAI JAYA',
        'nama' => 'FARHAN UBAIDILLAH H',
        'ttl' => '21/11/2005',
        'ortu' => 'SRI',
        'kelas' => 'USMAN',
        'pekerjaan' => 'MAHASISWA',
      ),
      6 => 
      array (
        'kelompok' => 'TAHAI JAYA',
        'nama' => 'GALIH PANGESTU',
        'ttl' => '11/09/2004',
        'ortu' => 'KUAT',
        'kelas' => 'USMAN',
        'pekerjaan' => 'SMA',
      ),
      7 => 
      array (
        'kelompok' => 'MANGGALA',
        'nama' => 'FATHONI LUBIS A.',
        'ttl' => '07/03/2007',
        'ortu' => 'HENDRY',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      8 => 
      array (
        'kelompok' => 'MANGGALA',
        'nama' => 'KOIS ARIS FAUZAN',
        'ttl' => '',
        'ortu' => 'SUM',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      9 => 
      array (
        'kelompok' => 'MANGGALA',
        'nama' => 'SAIFUL NURROHMAN',
        'ttl' => '',
        'ortu' => 'NURHADI',
        'kelas' => 'REMAJA',
        'pekerjaan' => '',
      ),
      10 => 
      array (
        'kelompok' => 'MANGGALA',
        'nama' => 'HERI SETIAWAN',
        'ttl' => '',
        'ortu' => 'SUKADI',
        'kelas' => 'REMAJA',
        'pekerjaan' => '',
      ),
      11 => 
      array (
        'kelompok' => 'MANGGALA',
        'nama' => 'IMAM NURHASAN',
        'ttl' => '',
        'ortu' => 'FIRMAN',
        'kelas' => 'REMAJA',
        'pekerjaan' => '',
      ),
      12 => 
      array (
        'kelompok' => 'MANGGALA',
        'nama' => 'PUTRI ANGGRAINI',
        'ttl' => '',
        'ortu' => 'BONI',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => '',
      ),
      13 => 
      array (
        'kelompok' => 'MANGGALA',
        'nama' => 'MUHAMMAD FAQIH',
        'ttl' => '',
        'ortu' => 'FIRMAN',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => '',
      ),
      14 => 
      array (
        'kelompok' => 'MANGGALA',
        'nama' => 'BILQIS',
        'ttl' => '',
        'ortu' => 'ILHAM',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      15 => 
      array (
        'kelompok' => 'MANGGALA',
        'nama' => 'AZAD KHAIDAR',
        'ttl' => '',
        'ortu' => 'PAINO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      16 => 
      array (
        'kelompok' => 'MANGGALA',
        'nama' => 'AZIZ HAIDAR',
        'ttl' => '',
        'ortu' => 'PAINO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      17 => 
      array (
        'kelompok' => 'MANGGALA',
        'nama' => 'ALFIN ADITYA',
        'ttl' => '',
        'ortu' => 'SUPRADI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      18 => 
      array (
        'kelompok' => 'MANGGALA',
        'nama' => 'AHYANA ZUFAIRA AIDA',
        'ttl' => '',
        'ortu' => 'MAHMUDI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => '',
      ),
      19 => 
      array (
        'kelompok' => 'MANGGALA',
        'nama' => 'RIZKY AL FAUZI FEBRI',
        'ttl' => '',
        'ortu' => 'PAINO',
        'kelas' => 'REMAJA',
        'pekerjaan' => '',
      ),
    ),
  ),
  4 => 
  array (
    'desa' => 'BATOLA',
    'items' => 
    array (
      0 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'M. ZAKI AL FAHRI',
        'ttl' => '27/02/2019',
        'ortu' => 'JOHAN KURNIAWAN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'PAUD',
      ),
      1 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'M. USMAN FADILAH',
        'ttl' => '',
        'ortu' => 'TRIYONO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'PAUD',
      ),
      2 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'YASAF AL ARQOM',
        'ttl' => '11/02/2018',
        'ortu' => 'ABDUL ROUF SANI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      3 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'REGAN SHAQUILLE AL URZI',
        'ttl' => '03/12/2016',
        'ortu' => 'ABDUL AZIS ROSWANDANI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      4 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'M. SALMAN ASHORULLOH',
        'ttl' => '28/10/2015',
        'ortu' => 'TRIYONO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      5 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'BILQIS APRILLIA',
        'ttl' => '19/04/2016',
        'ortu' => 'M. ROFIK',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      6 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'DAFFA ADZKAN AL URZI',
        'ttl' => '21/05/2014',
        'ortu' => 'ABDUL AZIS ROSWANDANI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      7 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'RITA NUR AINI',
        'ttl' => '12/11/2015',
        'ortu' => 'SUTARTO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      8 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'NORLIANI RATNA NINGRUM',
        'ttl' => '22/12/2014',
        'ortu' => 'AZKA BAYU PRAKOSO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      9 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'GITA ALIA ZAHRA',
        'ttl' => '22/10/2014',
        'ortu' => 'ALI FAUZIN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      10 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'M. UMAR ASHORULLOH',
        'ttl' => '10/06/2013',
        'ortu' => 'TRIYONO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      11 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'DYAH SAFRINA SARI',
        'ttl' => '25/01/2013',
        'ortu' => 'SYAIFUL BARORY',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      12 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'NAZWA NAVILA PUTRI',
        'ttl' => '24/12/2012',
        'ortu' => 'M. YASIN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      13 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'AIRA SAHARANI SALSABILA',
        'ttl' => '03/11/2013',
        'ortu' => 'M. ROFIK',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      14 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'REKTA ZULAIHA INKOHAJAH',
        'ttl' => '15/10/2012',
        'ortu' => 'PUJUD',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      15 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'ANNISA QOIRUNISSYIFA',
        'ttl' => '07/07/2011',
        'ortu' => 'SLAMET EFENDI',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      16 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'ZATANIA IZZA AZZAHRA',
        'ttl' => '30/05/2011',
        'ortu' => 'SOFYAN',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      17 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'NUR FADZHILATUL KHASANAH',
        'ttl' => '17/01/2011',
        'ortu' => 'TRIONO',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      18 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'TIANA AULIA ABABIL',
        'ttl' => '25/03/2011',
        'ortu' => 'USEP TRI SETIANA',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      19 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'RIZKY ABY PRATAMA',
        'ttl' => '24/12/2009',
        'ortu' => 'MUSTAQIM',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      20 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'NABILA IKMALUDINA AL HAKI',
        'ttl' => '01/06/2010',
        'ortu' => 'NURSALIM',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      21 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'WILDAN ASADULLOH',
        'ttl' => '07/11/2009',
        'ortu' => 'ABDUL ROHIM',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      22 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'ERWIN SAPUTRA',
        'ttl' => '05/05/2009',
        'ortu' => 'SUTARTO',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      23 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'NIKEN SALSABILA QOIRUNI',
        'ttl' => '15/10/2008',
        'ortu' => 'SLAMET EFENDI',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      24 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'FERNANDA SEREGAR',
        'ttl' => '09/12/2008',
        'ortu' => 'SAMSUL BAHRY',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      25 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'SOBEKRUN JAMIL',
        'ttl' => '29/04/2008',
        'ortu' => 'SUWITO',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      26 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'BINTANG KARUNIA PAMUNGKAS',
        'ttl' => '01/05/2007',
        'ortu' => 'ANSORI',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      27 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'NOVI AYU ASTUTI',
        'ttl' => '19/02/2007',
        'ortu' => 'ABDUL ROHIM',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      28 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'REZA NUR FERDIANSYAH',
        'ttl' => '17/02/2007',
        'ortu' => 'PUJUD',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      29 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'MASINUR KHUSNA',
        'ttl' => '09/05/2008',
        'ortu' => 'TRIYONO',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'TDK SEKOLAH',
      ),
      30 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'GUTI NUR HIDAYAT H',
        'ttl' => '22/06/2004',
        'ortu' => 'ALI FAUZI',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      31 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'KHOIRIL HUDA BIMA SAPUTRA',
        'ttl' => '21/06/2004',
        'ortu' => 'SYAIFUL BARORY',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      32 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'M. ULUM BAHRONI',
        'ttl' => '29/03/2003',
        'ortu' => 'NURSALIM',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      33 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'ADIK LALA RUSMAN',
        'ttl' => '30/04/2002',
        'ortu' => 'alm. BASAR',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      34 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'DICKY NUR HIDAYAT',
        'ttl' => '15/05/2001',
        'ortu' => 'SOFYAN',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      35 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'IWAN HARIANTO',
        'ttl' => '06/02/2001',
        'ortu' => 'M. YASIN',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      36 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'AHMAD AMIRUDIN',
        'ttl' => '03/05/1996',
        'ortu' => 'TRIYONO',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      37 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'TATIK SUMARYATI',
        'ttl' => '13/07/2006',
        'ortu' => 'M. YASIN',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      38 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'ALFI NUR AZIZAH',
        'ttl' => '23/10/2005',
        'ortu' => 'TRIYONO',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      39 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'EVI WULAN RAMADHANI',
        'ttl' => '13/10/2005',
        'ortu' => 'SUWITO',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      40 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'KHOIRUN NISA',
        'ttl' => '05/12/2003',
        'ortu' => 'TRIYONO',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      41 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'LINDI ISNATI RAHAYU',
        'ttl' => '20/01/2003',
        'ortu' => 'RATIMIN',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      42 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'LAILA ISNAWATI',
        'ttl' => '13/11/2002',
        'ortu' => 'M. YASIN',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      43 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'RISMA NUR JANNAH',
        'ttl' => '18/12/2001',
        'ortu' => 'PUJUD',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
    ),
  ),
  5 => 
  array (
    'desa' => 'BATOLA',
    'items' => 
    array (
      0 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'FADLUN NUR ROHMAH',
        'ttl' => '13/05/2001',
        'ortu' => 'TRIYONO',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      1 => 
      array (
        'kelompok' => 'WANARAYA',
        'nama' => 'AISYAH NUR SHOLIHAH',
        'ttl' => '26/08/1998',
        'ortu' => 'TRIYONO',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      2 => 
      array (
        'kelompok' => 'SAKALAGUN',
        'nama' => 'RIZA MAULANA',
        'ttl' => '17/05/2010',
        'ortu' => 'ARDIANI',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      3 => 
      array (
        'kelompok' => 'SAKALAGUN',
        'nama' => 'MAULANA RAHMAN',
        'ttl' => '02/05/2011',
        'ortu' => 'AHMAD HARYANTO',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      4 => 
      array (
        'kelompok' => 'SAKALAGUN',
        'nama' => 'NUR ADILLAH',
        'ttl' => '08/09/2012',
        'ortu' => 'JAMHARI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      5 => 
      array (
        'kelompok' => 'SAKALAGUN',
        'nama' => 'AZKA FERNANDI ADINATA',
        'ttl' => '03/09/2015',
        'ortu' => 'TRI WAHYUDI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      6 => 
      array (
        'kelompok' => 'SAKALAGUN',
        'nama' => 'HAZWAN EL FATIH',
        'ttl' => '08/10/2015',
        'ortu' => 'TRISNA SUBROTO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      7 => 
      array (
        'kelompok' => 'SAKALAGUN',
        'nama' => 'RIZWAN AL FARIZI',
        'ttl' => '09/04/2016',
        'ortu' => 'AHMAD HARYANTO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      8 => 
      array (
        'kelompok' => 'SAKALAGUN',
        'nama' => 'DAFFA RIQWAN N',
        'ttl' => '27/02/2007',
        'ortu' => 'SARNIAH',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      9 => 
      array (
        'kelompok' => 'SAKALAGUN',
        'nama' => 'DIVA SINTYA B',
        'ttl' => '25/07/2011',
        'ortu' => 'TRISNA SUBROTO',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      10 => 
      array (
        'kelompok' => 'SAKALAGUN',
        'nama' => 'RIFAI PERMATA SARI',
        'ttl' => '31/05/2011',
        'ortu' => 'SARNIAH',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      11 => 
      array (
        'kelompok' => 'SAKALAGUN',
        'nama' => 'HANI NURUL A',
        'ttl' => '03/04/2013',
        'ortu' => 'YARI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      12 => 
      array (
        'kelompok' => 'SAKALAGUN',
        'nama' => 'ALIVAH HIBATILAH',
        'ttl' => '03/06/2015',
        'ortu' => 'BUDI NUR WAIDI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      13 => 
      array (
        'kelompok' => 'SAKALAGUN',
        'nama' => 'EKO SETYO PRANOOTO',
        'ttl' => '07/08/1998',
        'ortu' => 'LILIK PRAYOGO',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      14 => 
      array (
        'kelompok' => 'SAKALAGUN',
        'nama' => 'SATRIO DWI PANGESTU',
        'ttl' => '02/03/2006',
        'ortu' => 'LILIK PRAYOGO',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      15 => 
      array (
        'kelompok' => 'MARABAHAN',
        'nama' => 'NITA',
        'ttl' => '06/05/2018',
        'ortu' => 'BPK RESKA',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'PAUD',
      ),
      16 => 
      array (
        'kelompok' => 'MARABAHAN',
        'nama' => 'SABRINA',
        'ttl' => '28/10/2012',
        'ortu' => 'BPK ULIN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      17 => 
      array (
        'kelompok' => 'MARABAHAN',
        'nama' => 'ASAM',
        'ttl' => '18/03/2015',
        'ortu' => 'BPK HADI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      18 => 
      array (
        'kelompok' => 'MARABAHAN',
        'nama' => 'CALU',
        'ttl' => '13/12/2011',
        'ortu' => 'IBU SUCIATI',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      19 => 
      array (
        'kelompok' => 'MARABAHAN',
        'nama' => 'NIZAM',
        'ttl' => '09/09/2010',
        'ortu' => 'BPK HADI',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      20 => 
      array (
        'kelompok' => 'MARABAHAN',
        'nama' => 'ANDRI',
        'ttl' => '23/06/2006',
        'ortu' => 'IBU ERNAWATI',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      21 => 
      array (
        'kelompok' => 'MARABAHAN',
        'nama' => 'DHARMA',
        'ttl' => '11/01/2008',
        'ortu' => 'BPK HADI',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      22 => 
      array (
        'kelompok' => 'MARABAHAN',
        'nama' => 'AGAM',
        'ttl' => '05/08/2006',
        'ortu' => 'IBU YULIANA',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      23 => 
      array (
        'kelompok' => 'MARABAHAN',
        'nama' => 'AYUB',
        'ttl' => '05/01/2004',
        'ortu' => 'IBU YULIANA',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      24 => 
      array (
        'kelompok' => 'MARABAHAN',
        'nama' => 'FAQIH MS',
        'ttl' => '27/06/1998',
        'ortu' => 'BPK MUHTAR',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      25 => 
      array (
        'kelompok' => 'MARABAHAN',
        'nama' => 'ZILFI',
        'ttl' => '31/12/2014',
        'ortu' => 'IBU RETNO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      26 => 
      array (
        'kelompok' => 'MARABAHAN',
        'nama' => 'NISA MS',
        'ttl' => '30/01/2000',
        'ortu' => 'IBU ERNAWATI',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      27 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'FINO',
        'ttl' => '31/10/2017',
        'ortu' => 'FINDI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      28 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'RISKI',
        'ttl' => '24/10/2014',
        'ortu' => 'SUPRIYANTO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      29 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'NAILA',
        'ttl' => '17/10/2013',
        'ortu' => 'ADI YAHYA',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      30 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'DEDEN',
        'ttl' => '02/12/2013',
        'ortu' => 'NANA YOHANA',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      31 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'BUNGA',
        'ttl' => '04/11/2016',
        'ortu' => 'SUPIAN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      32 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'FERDI',
        'ttl' => '14/04/2010',
        'ortu' => 'GUNAWAN',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      33 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'AULIA',
        'ttl' => '01/11/2009',
        'ortu' => 'SUPIAN',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      34 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'RISMA',
        'ttl' => '19/01/2009',
        'ortu' => 'MU\'ARIF',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      35 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'SALSA',
        'ttl' => '06/04/2009',
        'ortu' => 'EDY RAHMAT',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      36 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'DIDIT',
        'ttl' => '20/02/2007',
        'ortu' => 'GUNAWAN',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      37 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'DIMAS',
        'ttl' => '20/02/2007',
        'ortu' => 'GUNAWAN',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      38 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'BAGUS',
        'ttl' => '08/04/2007',
        'ortu' => 'NANA YOHANA',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMA',
      ),
      39 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'PUTRI',
        'ttl' => '28/08/2004',
        'ortu' => 'MU\'ARIF',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      40 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'DINA',
        'ttl' => '',
        'ortu' => '',
        'kelas' => '',
        'pekerjaan' => '',
      ),
      41 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'ANDRE',
        'ttl' => '07/07/2005',
        'ortu' => 'SUPRIYANTO',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      42 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'RUDI',
        'ttl' => '14/08/2004',
        'ortu' => 'SUGITO',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
    ),
  ),
  6 => 
  array (
    'desa' => 'BATOLA',
    'items' => 
    array (
      0 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'RAHMA',
        'ttl' => '31/05/2003',
        'ortu' => 'TORIMAN',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      1 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'NUR',
        'ttl' => '',
        'ortu' => '',
        'kelas' => '',
        'pekerjaan' => '',
      ),
      2 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'ARIF',
        'ttl' => '',
        'ortu' => 'alm. SAMINGAN',
        'kelas' => '',
        'pekerjaan' => '',
      ),
      3 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'AZKA',
        'ttl' => '22/09/2013',
        'ortu' => 'HERMANTO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      4 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'FARAS',
        'ttl' => '17/01/2006',
        'ortu' => 'M. BASIR',
        'kelas' => 'USMAN',
        'pekerjaan' => 'MAHASISWA',
      ),
      5 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'ERI',
        'ttl' => '11/03/2004',
        'ortu' => 'M. BASIR',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      6 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'SOFI',
        'ttl' => '23/06/2000',
        'ortu' => 'alm. MANSYURIN',
        'kelas' => 'USMAN',
        'pekerjaan' => '',
      ),
      7 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'AHLIL',
        'ttl' => '21/05/2009',
        'ortu' => 'TORIMAN',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      8 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'RIZVAN',
        'ttl' => '29/10/2019',
        'ortu' => 'TORIMAN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'PAUD',
      ),
      9 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'NAYLA R',
        'ttl' => '28/06/2015',
        'ortu' => 'TORIMAN',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      10 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'PUTRI',
        'ttl' => '31/12/2012',
        'ortu' => 'M. ARSIDI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      11 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'SATRIA',
        'ttl' => '25/09/2004',
        'ortu' => 'HERMANTO',
        'kelas' => 'USMAN',
        'pekerjaan' => 'BEKERJA',
      ),
      12 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'PUTRA',
        'ttl' => '10/05/2015',
        'ortu' => 'M. ARSIDI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      13 => 
      array (
        'kelompok' => 'TEBING RIMBA',
        'nama' => 'KAMILA',
        'ttl' => '17/06/2019',
        'ortu' => 'FINDI',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'PAUD',
      ),
      14 => 
      array (
        'kelompok' => 'SAWAHAN',
        'nama' => 'AJENG YUSRINA HUSNA',
        'ttl' => '21/04/2019',
        'ortu' => 'MADE F',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'PAUD',
      ),
      15 => 
      array (
        'kelompok' => 'SAWAHAN',
        'nama' => 'AZKA FAJAR P',
        'ttl' => '02/01/2019',
        'ortu' => 'ROFIQ A.S',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'PAUD',
      ),
      16 => 
      array (
        'kelompok' => 'SAWAHAN',
        'nama' => 'TAUFIQ IBRAHIM',
        'ttl' => '03/09/2017',
        'ortu' => 'SUPRAPTO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      17 => 
      array (
        'kelompok' => 'SAWAHAN',
        'nama' => 'ARSYILA LUBIS',
        'ttl' => '12/12/2015',
        'ortu' => 'FATAHUDIN AZIZ',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      18 => 
      array (
        'kelompok' => 'SAWAHAN',
        'nama' => 'SALSABILA KHOIRIYAH',
        'ttl' => '31/03/2015',
        'ortu' => 'SUPRAPTO',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      19 => 
      array (
        'kelompok' => 'SAWAHAN',
        'nama' => 'SULTAN HAKIM P',
        'ttl' => '11/03/2015',
        'ortu' => 'ROFIQ A.S',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      20 => 
      array (
        'kelompok' => 'SAWAHAN',
        'nama' => 'KAFFATAN ZAINI',
        'ttl' => '12/05/2014',
        'ortu' => 'BUDI H',
        'kelas' => 'CABERAWIT',
        'pekerjaan' => 'SD',
      ),
      21 => 
      array (
        'kelompok' => 'SAWAHAN',
        'nama' => 'AKBAR HIDAYAT',
        'ttl' => '10/01/2012',
        'ortu' => 'SUPRAPTO',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      22 => 
      array (
        'kelompok' => 'SAWAHAN',
        'nama' => 'GHIFARI ANFIQO Z.A',
        'ttl' => '01/11/2009',
        'ortu' => 'BUDI H',
        'kelas' => 'PRA REMAJA',
        'pekerjaan' => 'SMP',
      ),
      23 => 
      array (
        'kelompok' => 'SAWAHAN',
        'nama' => 'AZZAHRA RESKIANA',
        'ttl' => '21/01/2009',
        'ortu' => 'FATAHUDIN AZIZ',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMK',
      ),
      24 => 
      array (
        'kelompok' => 'SAWAHAN',
        'nama' => 'DHIQTAU AGHNICKO P',
        'ttl' => '23/09/2006',
        'ortu' => 'BUDI H',
        'kelas' => 'REMAJA',
        'pekerjaan' => 'SMK',
      ),
    ),
  ),
);

        foreach ($dataPages as $page) {
            $namaDesa = trim($page['desa']);
            $desa = Desa::firstOrCreate(
                ['nama' => $namaDesa],
                ['is_active' => true]
            );

            foreach ($page['items'] as $item) {
                $namaKelompok = trim($item['kelompok']);
                if (empty($namaKelompok)) continue;

                $kelompok = Kelompok::firstOrCreate(
                    [
                        'desa_id' => $desa->id,
                        'nama' => $namaKelompok,
                    ],
                    ['is_active' => true]
                );

                $tanggalLahir = null;
                if (!empty($item['ttl'])) {
                    try {
                        $tanggalLahir = Carbon::createFromFormat('d/m/Y', trim($item['ttl']))->format('Y-m-d');
                    } catch (\Throwable $e) {
                        $tanggalLahir = null;
                    }
                }

                Generus::updateOrCreate(
                    [
                        'kelompok_id' => $kelompok->id,
                        'nama_lengkap' => trim($item['nama']),
                    ],
                    [
                        'nama_ortu' => trim($item['ortu']),
                        'tanggal_lahir' => $tanggalLahir,
                        'is_active' => true,
                    ]
                );
            }
        }
    }
}
