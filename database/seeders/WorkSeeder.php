<?php

namespace Database\Seeders;

use App\Models\Associate_consultant;
use App\Models\Construction;
use App\Models\Service;
use App\Models\Study;
use App\Models\Supervision;
use App\Models\Work;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $works = [
            //study
            [
                'id' => 1,
                'name' => 'ESTUDIO A DISEÑO FINAL CAMINO CHACAPATA - CRUZ PATA',
                'city_id' => '30050',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'GOBIERNO AUTÓNOMO MUNICIPAL DE SANTIAGO DE HUATA',
                'address_contractor' => 'PLAZA PRINCIPAL SANTIAGO DE HUATA, PROVINCIA OMASUYOS,
                DEPARTAMENTO DE LA PAZ',
                'work_duration' => '3',
                'start_date' => '2021-06-01',
                'completion_date' => '2021-08-31',
                'value_approximate_services' => '140000',
                'description' => 'ESTUDIO A DISEÑO FINAL CAMINO CHACAPATA – CRUZ PATA',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            //construction
            [
                'id' => 2,
                'name' => 'CONSTRUCCION BARRERA TRANSVERSAL RIO ACHOCALLA ENTRE CALLE 2 Y 3 ZONA MALLASA',
                'city_id' => '30000',
                'user_id' => '2',
                'type_work_id' => '1',
                'name_contractor' => 'GOBIERNO AUTÓNOMO MUNICIPAL DE LA PAZ',
                'address_contractor' => 'CALLE MERCADO N° 1298, EDIF. PALACIO CONSISTORIAL, ZONA CENTRO',
                'work_duration' => '3',
                'start_date' => '2021-09-01',
                'completion_date' => '2021-10-15',
                'value_approximate_services' => '189137',
                'description' => 'CONSTRUCCION BARRERA TRANSVERSAL RIO ACHOCALLA ENTRE CALLE 2 Y 3 ZONA MALLASA',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            //supervision
            [
                'id' => 3,
                'name' => 'SUPERVISIÓN DEL PROYECTO MEJ. Y CONST. CARRET. CALAMARCA TOPOHOCO - V. PUCHUNI - HITO 15 (TRAMO I)',
                'city_id' => '30000',
                'user_id' => '4',
                'type_work_id' => '3',
                'name_contractor' => 'EMPRESA LOPEZ MIRANDA & ASOCIADOS S.R.L.',
                'address_contractor' => 'AV. ARCE N° 2355 - EDIFICIO COBIJA MEZANINE 2 - OF. 202',
                'work_duration' => '2',
                'start_date' => '2021-03-01',
                'completion_date' => '2021-04-30',
                'value_approximate_services' => '725000',
                'description' => 'SUPERVISIÓN DEL PROYECTO MEJ. Y CONST. CARRET. CALAMARCA TOPOHOCO - V. PUCHUNI - HITO 15 (TRAMO I)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'name' => 'ASISTENCIA TECNICA A PREINVERSION Y SUPERVISION MUNICIPAL, SECCIONAL COMPLEMENTACION, TRAMO VIACHA JALSURI)',
                'city_id' => '30002',
                'user_id' => '4',
                'type_work_id' => '3',
                'name_contractor' => 'GOBIERNO AUTÓNOMO MUNICIPAL DE VIACHA',
                'address_contractor' => 'PLAZA MCAL. JOSÉ BALLIVIÁN, PALACIO CONSISTORIAL',
                'work_duration' => '1',
                'start_date' => '2022-05-01',
                'completion_date' => '2022-06-01',
                'value_approximate_services' => '60000',
                'description' => 'ASISTENCIA TECNICA A PREINVERSION Y SUPERVISION MUNICIPAL, SECCIONAL COMPLEMENTACION, TRAMO VIACHA JALSURI DESDE EL LIMITE DE RADIO URBANO D-1 HASTA EL ENLACE CON EL PAVIMENTO SECTOR COMUNIDAD CHARAHUAYTO (ESTUDIO DE PRE INVERSION)',
                'created_at' => Carbon::now()->addMonths(1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'name' => 'SUPERVISIÓN DEL PROYECTO MEJ. CARRETERA CALAMARCA - SANTIAGO DE LLALLAGUA',
                'city_id' => '30000',
                'user_id' => '4',
                'type_work_id' => '3',
                'name_contractor' => 'ASOCIACIÓN ACCIDENTAL SANTIAGO',
                'address_contractor' => 'CAÑADA STRONGEST N° 47 - EDIFICIO CENTRUM PISO 2 - OF. 207',
                'work_duration' => '4',
                'start_date' => '2021-02-01',
                'completion_date' => '2021-05-01',
                'value_approximate_services' => '750000',
                'description' => 'SUPERVISIÓN DEL PROYECTO MEJ. CARRETERA CALAMARCA - SANTIAGO DE LLALLAGUA',
                'created_at' => Carbon::now()->addMonths(1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'name' => 'CONSTRUCCIÓN DE PUENTE FERROVIARIO',
                'city_id' => '30000',
                'user_id' => '2',
                'type_work_id' => '1',
                'name_contractor' => 'GOBIERNO AUTÓNOMO MUNICIPAL DE LA PAZ',
                'address_contractor' => 'CALLE MERCADO N° 1298, EDIF. PALACIO CONSISTORIAL, ZONA CENTRO',
                'work_duration' => '4',
                'start_date' => '2021-09-01',
                'completion_date' => '2022-01-01',
                'value_approximate_services' => '145520',
                'description' => 'CONSTRUCCIÓN DE PUENTE FERROVIARIO',
                'created_at' => Carbon::now()->addMonths(1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'name' => 'AMPLIACIÓN EMPEDADO Y OBRAS COMPLEMENTARIAS CALLE UNIÓN ZONA 24 DE JUNIO B',
                'city_id' => '30000',
                'user_id' => '2',
                'type_work_id' => '1',
                'name_contractor' => 'GOBIERNO AUTÓNOMO MUNICIPAL DE LA PAZ',
                'address_contractor' => 'CALLE MERCADO N° 1298, EDIF. PALACIO CONSISTORIAL, ZONA CENTRO',
                'work_duration' => '2',
                'start_date' => '2021-09-01',
                'completion_date' => '2021-11-01',
                'value_approximate_services' => '154612',
                'description' => 'AMPLIACIÓN EMPEDADO Y OBRAS COMPLEMENTARIAS CALLE UNIÓN ZONA 24 DE JUNIO B',
                'created_at' => Carbon::now()->addMonths(1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'name' => 'SUPERVISION DEL PROYECTO MEJORAMIENTO CARRETERA HUARINA - VILLA LIPE (TRAMO I)',
                'city_id' => '30000',
                'user_id' => '4',
                'type_work_id' => '3',
                'name_contractor' => 'ASOCIACIÓN ACCIDENTAL CUMBRE',
                'address_contractor' => 'CAÑADA STRONGEST N° 47 - EDIFICIO CENTRUM PISO 2 - OF. 207',
                'work_duration' => '30',
                'start_date' => '2019-05-01',
                'completion_date' => '2021-10-01',
                'value_approximate_services' => '624000',
                'description' => 'SUPERVISION DEL PROYECTO MEJORAMIENTO CARRETERA HUARINA - VILLA LIPE (TRAMO I)',
                'created_at' => Carbon::now()->addMonths(2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(2)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'name' => 'ESTUDIO DE DISEÑO TÉCNICO DE PREINVERSIÓN "MEJ. CARRETERA QUERAPI - CHIÑAYA - HITO 25"',
                'city_id' => '30000',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'GOBIERNO AUTÓNOMO DEPARTAMENTAL DE LA PAZ',
                'address_contractor' => 'CALLE COMERCIO ESQ. AYACUCHO N° 1200',
                'work_duration' => '18',
                'start_date' => '2020-01-01',
                'completion_date' => '2021-06-01',
                'value_approximate_services' => '1900000',
                'description' => 'ESTUDIO DE DISEÑO TÉCNICO DE PREINVERSIÓN "MEJ. CARRETERA QUERAPI - CHIÑAYA - HITO 25"',
                'created_at' => Carbon::now()->addMonths(2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(2)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'name' => 'ESTUDIO DE DISEÑO TÉCNICO DE PREINVERSIÓN "MEJ. CARRETERA CHILAHUALA - CHACARILLA"',
                'city_id' => '30000',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'GOBIERNO AUTÓNOMO DEPARTAMENTAL DE LA PAZ',
                'address_contractor' => 'CALLE COMERCIO ESQ. AYACUCHO N° 1200',
                'work_duration' => '18',
                'start_date' => '2020-01-01',
                'completion_date' => '2021-06-01',
                'value_approximate_services' => '1350000',
                'description' => 'ESTUDIO DE DISEÑO TÉCNICO DE PREINVERSIÓN "MEJ. CARRETERA CHILAHUALA - CHACARILLA"',
                'created_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'name' => 'CONST. PUENTE VEHICULAR JALSURI',
                'city_id' => '30000',
                'user_id' => '2',
                'type_work_id' => '1',
                'name_contractor' => 'GOBIERNO AUTÓNOMO DEPARTAMENTAL DE LA PAZ',
                'address_contractor' => 'CALLE COMERCIO ESQ. AYACUCHO N° 1200',
                'work_duration' => '16',
                'start_date' => '2019-12-01',
                'completion_date' => '2021-03-01',
                'value_approximate_services' => '1890773',
                'description' => 'CONST. PUENTE VEHICULAR JALSURI',
                'created_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'name' => 'ESTUDIO DE DISEÑO TÉCNICO DE PREINVERSIÓN DEL PROYECTO "MEJ. CARRETERA TOLAR - CALACACHI - TUMARAPI"',
                'city_id' => '30000',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'ASESORAMIENTO DE SERVICIOS ESPECIALIZADOS EN CONSULTORÍA (ASEC)',
                'address_contractor' => 'CALLE MERCADO N° 1328, EDIF. MARISCAL BALLIVIAN PISO 6 - OF. 604',
                'work_duration' => '14',
                'start_date' => '2019-01-01',
                'completion_date' => '2020-02-01',
                'value_approximate_services' => '125000',
                'description' => 'ESTUDIO DE DISEÑO TÉCNICO DE PREINVERSIÓN DEL PROYECTO "MEJ. CARRETERA TOLAR - CALACACHI - TUMARAPI"',
                'created_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'name' => 'ESTUDIO DE DISEÑO TÉCNICO DE PRE INVERSIÓN MEJ. CARRETERA AYO AYO - SULLCAVI',
                'city_id' => '30000',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'ASESORAMIENTO DE SERVICIOS ESPECIALIZADOS EN CONSULTORÍA (ASEC)',
                'address_contractor' => 'CALLE MERCADO N° 1328, EDIF. MARISCAL BALLIVIAN PISO 6 - OF. 604',
                'work_duration' => '13',
                'start_date' => '2019-01-01',
                'completion_date' => '2020-02-01',
                'value_approximate_services' => '104664',
                'description' => 'ESTUDIO DE DISEÑO TÉCNICO DE PRE INVERSIÓN MEJ. CARRETERA AYO AYO - SULLCAVI',
                'created_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'name' => 'ESTUDIO DE DISEÑO TÉCNICO DE PREINVERSIÓN CONSTRUCCIÓN DOBLE VÍA VIACHA - EL ALTO SECCIONAL',
                'city_id' => '30000',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'ASESORAMIENTO DE SERVICIOS ESPECIALIZADOS EN CONSULTORÍA (ASEC)',
                'address_contractor' => 'CALLE MERCADO N° 1328, EDIF. MARISCAL BALLIVIAN PISO 6 - OF. 604',
                'work_duration' => '14',
                'start_date' => '2018-04-01',
                'completion_date' => '2019-05-01',
                'value_approximate_services' => '437000',
                'description' => 'ESTUDIO DE DISEÑO TÉCNICO DE PREINVERSIÓN CONSTRUCCIÓN DOBLE VÍA VIACHA - EL ALTO SECCIONAL',
                'created_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 15,
                'name' => 'SUPERVISIÓN MEJ. CARRETERA EL ALTO - VIACHA (TRAMO 2 PROG. 14+594 - PROG. 16+194)',
                'city_id' => '30000',
                'user_id' => '4',
                'type_work_id' => '3',
                'name_contractor' => 'GOBIERNO AUTÓNOMO DEPARTAMENTAL DE LA PAZ',
                'address_contractor' => 'CALLE COMERCIO ESQ. AYACUCHO N° 1200',
                'work_duration' => '29',
                'start_date' => '2018-02-01',
                'completion_date' => '2020-06-01',
                'value_approximate_services' => '1120000',
                'description' => 'SUPERVISIÓN MEJ. CARRETERA EL ALTO - VIACHA (TRAMO 2 PROG. 14+594 - PROG. 16+194)',
                'created_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 16,
                'name' => 'CONSTRUCCIÓN DE ESTRIBOS PARA LOS PUENTES VEHICULARES CONDORIRI - KOLLPA KUCHO (MALLA)',
                'city_id' => '30162',
                'user_id' => '2',
                'type_work_id' => '1',
                'name_contractor' => 'FREDY SAAVEDRA RIVERA',
                'address_contractor' => 'CALLE CAMARONES VILLA BUSCH NORTE S/N',
                'work_duration' => '7',
                'start_date' => '2017-10-01',
                'completion_date' => '2018-04-01',
                'value_approximate_services' => '603035',
                'description' => 'CONSTRUCCIÓN DE ESTRIBOS PARA LOS PUENTES VEHICULARES CONDORIRI - KOLLPA KUCHO (MALLA)',
                'created_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 17,
                'name' => 'ESTUDIO DE DISEÑO TÉCNICO DE PREINVERSIÓN MEJ. APERTURA CARRETERA BALLIVIÁN - TRIPARTITO',
                'city_id' => '30000',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'ASOCIACIÓN ACCIDENTAL BALLIVIÁN',
                'address_contractor' => 'CAÑADA STRONGEST N° 47 - EDIFICIO CENTRUM PISO 2 - OF. 207',
                'work_duration' => '12',
                'start_date' => '2017-08-01',
                'completion_date' => '2018-05-01',
                'value_approximate_services' => '968',
                'description' => 'ESTUDIO DE DISEÑO TÉCNICO DE PREINVERSIÓN MEJ. APERTURA CARRETERA BALLIVIÁN - TRIPARTITO',
                'created_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(3)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 18,
                'name' => 'ESTUDIO DE DISEÑO TÉCNICO DE PREINVERSIÓN MEJ. CARRETERA BATALLAS - LAJA - PUCARANI',
                'city_id' => '30000',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'ASOCIACIÓN ACCIDENTAL PUCARANI',
                'address_contractor' => 'CAÑADA STRONGEST N° 47 - EDIFICIO CENTRUM PISO 2 - OF. 207',
                'work_duration' => '10',
                'start_date' => '2017-07-01',
                'completion_date' => '2018-04-01',
                'value_approximate_services' => '224280',
                'description' => 'ESTUDIO DE DISEÑO TÉCNICO DE PREINVERSIÓN MEJ. CARRETERA BATALLAS - LAJA - PUCARANI',
                'created_at' => Carbon::now()->addMonths(4)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(4)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 19,
                'name' => 'ESTUDIO DE DISEÑO TÉCNICO DE PRE INVERSIÓN MEJORAMIENTO Y APERTURA CARRETERA IXIAMAS - SAN PEDRO - MERUDIANA - CARMEN DE EMERO',
                'city_id' => '30000',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'GOBIERNO AUTÓNOMO DEPARTAMENTAL DE LA PAZ',
                'address_contractor' => 'CALLE COMERCIO ESQ. AYACUCHO N° 1200',
                'work_duration' => '32',
                'start_date' => '2017-01-01',
                'completion_date' => '2019-06-01',
                'value_approximate_services' => '5015000',
                'description' => 'ESTUDIO DE DISEÑO TÉCNICO DE PRE INVERSIÓN MEJORAMIENTO Y APERTURA CARRETERA IXIAMAS - SAN PEDRO - MERUDIANA - CARMEN DE EMERO',
                'created_at' => Carbon::now()->addMonths(5)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(5)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 20,
                'name' => 'SUPERVISIÓN TÉCNICA Y AMBIENTAL CONSTRUCCIÓN DE OBRAS COMPLEMENTARIAS PAQUETE 3 (PROGRAMA DE PUENTES)',
                'city_id' => '30000',
                'user_id' => '4',
                'type_work_id' => '3',
                'name_contractor' => 'ASESORAMIENTO DE SERVICIOS ESPECIALIZADOS EN CONSULTORÍA (ASEC)',
                'address_contractor' => 'CALLE MERCADO N° 1328, EDIF. MARISCAL BALLIVIAN PISO 6 - OF. 604',
                'work_duration' => '10',
                'start_date' => '2017-01-01',
                'completion_date' => '2017-10-01',
                'value_approximate_services' => '60000',
                'description' => 'SUPERVISIÓN TÉCNICA Y AMBIENTAL CONSTRUCCIÓN DE OBRAS COMPLEMENTARIAS PAQUETE 3 (PROGRAMA DE PUENTES)',
                'created_at' => Carbon::now()->addMonths(5)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(5)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 21,
                'name' => 'ESTUDIO DE DISEÑO TÉCNICO DE PREINVERSIÓN "MEJORAMIENTO CARRETERA CORO CORO - GRAL. PÉREZ)',
                'city_id' => '30000',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'GOBIERNO AUTÓNOMO DEPARTAMENTAL DE LA PAZ',
                'address_contractor' => 'CALLE COMERCIO ESQ. AYACUCHO N° 1200',
                'work_duration' => '23',
                'start_date' => '2016-11-01',
                'completion_date' => '2018-10-01',
                'value_approximate_services' => '1800000',
                'description' => 'ESTUDIO DE DISEÑO TÉCNICO DE PREINVERSIÓN "MEJORAMIENTO CARRETERA CORO CORO - GRAL. PÉREZ)',
                'created_at' => Carbon::now()->addMonths(6)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(6)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 22,
                'name' => 'CONSTRUCCIÓN TERRAPLÉN DE ACCESOS PUENTE VEHICULAR POSPONENDO (ALTO BENI)',
                'city_id' => '30162',
                'user_id' => '2',
                'type_work_id' => '1',
                'name_contractor' => 'FREDY SAAVEDRA RIVERA',
                'address_contractor' => 'CALLE CAMARONES VILLA BUSCH NORTE S/N',
                'work_duration' => '11',
                'start_date' => '2016-02-01',
                'completion_date' => '2016-12-01',
                'value_approximate_services' => '386364',
                'description' => 'CONSTRUCCIÓN TERRAPLÉN DE ACCESOS PUENTE VEHICULAR POSPONENDO (ALTO BENI)',
                'created_at' => Carbon::now()->addMonths(6)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(6)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 23,
                'name' => 'ESTUDIO DE IDENTIFICACIÓN Y ESTUDIO TÉCNICO, ECONÓMICO, SOCIAL Y AMBIENTAL DEL PROYECTO "CONST. PAVIMENTADO CAMINO KM 25 TARATA - ANZANDO"',
                'city_id' => '30162',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'CONSULTORÍA Y SERVICIOS MULTIDISCIPLINARIOS COSEM S.R.L.',
                'address_contractor' => 'AV. VILLAMONTES N° 1664 FORTIN VANGUARDIA',
                'work_duration' => '12',
                'start_date' => '2016-01-01',
                'completion_date' => '2016-12-01',
                'value_approximate_services' => '980000',
                'description' => 'ESTUDIO DE IDENTIFICACIÓN Y ESTUDIO TÉCNICO, ECONÓMICO, SOCIAL Y AMBIENTAL DEL PROYECTO "CONST. PAVIMENTADO CAMINO KM 25 TARATA - ANZANDO"',
                'created_at' => Carbon::now()->addMonths(6)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(6)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 24,
                'name' => 'REVISIÓN, COMPLEMENTACIÓN Y ACTUALIZACIÓN DEL ESTUDIO TESA DEL TRAMO I PATACAMAYA - TOPOHOCO Y TRAMO II TOPOHOCO - CORO CORO',
                'city_id' => '30000',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'ASESORAMIENTO DE SERVICIOS ESPECIALIZADOS EN CONSULTORÍA (ASEC)',
                'address_contractor' => 'CALLE MERCADO N° 1328, EDIF. MARISCAL BALLIVIAN PISO 6 - OF. 604',
                'work_duration' => '6',
                'start_date' => '2015-12-01',
                'completion_date' => '2016-06-01',
                'value_approximate_services' => '264000',
                'description' => 'REVISIÓN, COMPLEMENTACIÓN Y ACTUALIZACIÓN DEL ESTUDIO TESA DEL TRAMO I PATACAMAYA - TOPOHOCO Y TRAMO II TOPOHOCO - CORO CORO',
                'created_at' => Carbon::now()->addMonths(6)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(6)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 25,
                'name' => 'ESTUDIO TESA CAMINO CARACOLLO - CAÑOHUMA',
                'city_id' => '30162',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'CONSULTORÍA Y SERVICIOS MULTIDISCIPLINARIOS COSEM S.R.L.',
                'address_contractor' => 'AV. VILLAMONTES N° 1664 FORTIN VANGUARDIA',
                'work_duration' => '9',
                'start_date' => '2015-06-01',
                'completion_date' => '2016-02-01',
                'value_approximate_services' => '170000',
                'description' => 'ESTUDIO TESA CAMINO CARACOLLO - CAÑOHUMA',
                'created_at' => Carbon::now()->addMonths(7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(7)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 26,
                'name' => 'ESTUDIO A DISEÑO FINAL SISTEMA DE AGUA POTABLE COMUNIDAD ACHACACHI VIEJO',
                'city_id' => '30000',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'INTEGRA',
                'address_contractor' => 'CALLE SANCHEZ LIMA N° 856 - EDIFICIO ORION - PISO 6 OF. 605',
                'work_duration' => '5',
                'start_date' => '2015-05-01',
                'completion_date' => '2015-10-01',
                'value_approximate_services' => '175000',
                'description' => 'ESTUDIO A DISEÑO FINAL SISTEMA DE AGUA POTABLE COMUNIDAD ACHACACHI VIEJO',
                'created_at' => Carbon::now()->addMonths(7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(7)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 27,
                'name' => 'SUPERVISIÓN TÉCNICA DE LA CONSTRUCCIÓN CAMINO LA PLAQUETA - SIDRA 2DA. SECCIÓN CARAPARÍ',
                'city_id' => '30238',
                'user_id' => '4',
                'type_work_id' => '3',
                'name_contractor' => 'ASOCIACIÓN ACCIDENTAL RIO NEGRO SUR',
                'address_contractor' => 'AV. VILLAMONTES N° 1664 FORTIN VANGUARDIA',
                'work_duration' => '12',
                'start_date' => '2015-03-01',
                'completion_date' => '2016-03-01',
                'value_approximate_services' => '68000',
                'description' => 'SUPERVISIÓN TÉCNICA DE LA CONSTRUCCIÓN CAMINO LA PLAQUETA - SIDRA 2DA. SECCIÓN CARAPARÍ',
                'created_at' => Carbon::now()->addMonths(7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(7)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 28,
                'name' => 'CONST. EMPEDRADO LA ESTRELLA SAN SALVADOR',
                'city_id' => '30162',
                'user_id' => '2',
                'type_work_id' => '1',
                'name_contractor' => 'ORIANA SERVICIOS DE INGENIERÍA CONSTRUCCIÓN & CONSULTORÍA',
                'address_contractor' => 'CALLE LA PAZ N° 533 EDIFICIO MURIEL PISO 3 - OF. B',
                'work_duration' => '16',
                'start_date' => '2015-02-01',
                'completion_date' => '2016-05-01',
                'value_approximate_services' => '220000',
                'description' => 'CONST. EMPEDRADO LA ESTRELLA SAN SALVADOR',
                'created_at' => Carbon::now()->addMonths(8)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(8)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 29,
                'name' => 'ESTUDIO DE IDENTIFICACIÓN Y ESTUDIO TÉCNICO, ECONÓMICO, SOCIAL Y AMBIENTAL DEL PROYECTO "CONST. PAVIMENTADO CAMINO KM 25 - TARATA - ANZALDO - TORO TORO - KARASI"',
                'city_id' => '30000',
                'user_id' => '3',
                'type_work_id' => '2',
                'name_contractor' => 'CONSULTORÍA Y SERVICIOS MULTIDISCIPLINARIOS COSEM S.R.L.',
                'address_contractor' => 'AV. VILLAMONTES N° 1664 FORTIN VANGUARDIA',
                'work_duration' => '24',
                'start_date' => '2015-02-01',
                'completion_date' => '2016-12-01',
                'value_approximate_services' => '780000',
                'description' => 'ESTUDIO DE IDENTIFICACIÓN Y ESTUDIO TÉCNICO, ECONÓMICO, SOCIAL Y AMBIENTAL DEL PROYECTO "CONST. PAVIMENTADO CAMINO KM 25 - TARATA - ANZALDO - TORO TORO - KARASI"',
                'created_at' => Carbon::now()->addMonths(8)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(8)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 30,
                'name' => 'SUPERVISIÓN TÉCNICA, AMBIENTAL Y SOCIAL DEL PPP PARA LA REHABILITACIÓN DE LA "AV. BLANCO GALINDO"',
                'city_id' => '30000',
                'user_id' => '4',
                'type_work_id' => '3',
                'name_contractor' => 'ASOCIACIÓN ACCIDENTAL "VALLE"',
                'address_contractor' => 'CALLE LA PAZ N° 533 EDIFICIO MURIEL PISO 3 - OF. B',
                'work_duration' => '5',
                'start_date' => '2014-11-01',
                'completion_date' => '2015-04-01',
                'value_approximate_services' => '335592',
                'description' => 'SUPERVISIÓN TÉCNICA, AMBIENTAL Y SOCIAL DEL PPP PARA LA REHABILITACIÓN DE LA "AV. BLANCO GALINDO"',
                'created_at' => Carbon::now()->addMonths(8)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addMonths(8)->format('Y-m-d H:i:s'),
            ],
        ];

        foreach ($works as $work) {
            Work::insert($work);
        }

        $services = Service::all();
        $associate_consultants = Associate_consultant::all();

        /* Work::find(1)->each(function ($work) use ($services){
            $work->services()->attach(
                $services->only([15, 16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46, 47])->pluck('id')->toArray()
            );
        }); */
        $w1 = Work::find(1);
        $w2 = Work::find(2);
        $w3 = Work::find(3);
        $w4 = Work::find(4);
        $w5 = Work::find(5);
        $w6 = Work::find(6);
        $w7 = Work::find(7);
        $w8 = Work::find(8);
        $w9 = Work::find(9);
        $w10 = Work::find(10);
        $w11 = Work::find(11);
        $w12 = Work::find(12);
        $w13 = Work::find(13);
        $w14 = Work::find(14);
        $w15 = Work::find(15);
        $w16 = Work::find(16);
        $w17 = Work::find(17);
        $w18 = Work::find(18);
        $w19 = Work::find(19);
        $w20 = Work::find(20);
        $w21 = Work::find(21);
        $w22 = Work::find(22);
        $w23 = Work::find(23);
        $w24 = Work::find(24);
        $w25 = Work::find(25);
        $w26 = Work::find(26);
        $w27 = Work::find(27);
        $w28 = Work::find(28);
        $w29 = Work::find(29);
        $w30 = Work::find(30);

        $w1->services()->attach(
            $services->only([15, 16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46, 47])->pluck('id')->toArray()
        );
        $w1->associate_consultants()->attach(
            $associate_consultants->only([1,2])->pluck('id')->toArray()
        );
        if ($w1->type_work_id === 2) {
            Study::create([ 'work_id'=> $w1->id, 'name' => $w1->name ]);
        }
        $w2->services()->attach(
            $services->only([1,2,3,4,5,6,7,8,9,10,11,12,13,14])->pluck('id')->toArray()
        );
        $w2->associate_consultants()->attach(
            $associate_consultants->only([2])->pluck('id')->toArray()
        );
        if ($w2->type_work_id === 1) {
            Construction::create([ 'work_id'=> $w2->id, 'name' => $w2->name ]);
        }
        $w3->services()->attach(
            $services->only([48,49,50,51,52,53,54,55,56,57,58])->pluck('id')->toArray()
        );
        if ($w3->type_work_id === 3) {
            Supervision::create([ 'work_id'=> $w3->id, 'name' => $w3->name ]);
        }
        $w4->services()->attach(
            $services->only([15, 16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46, 47])->pluck('id')->toArray()
        );
        if ($w4->type_work_id === 3) {
            Supervision::create([ 'work_id'=> $w4->id, 'name' => $w4->name ]);
        }
        $w5->services()->attach(
            $services->only([48,49,50,51,52,53,54,55,56,57,58])->pluck('id')->toArray()
        );
        if ($w5->type_work_id === 3) {
            Supervision::create([ 'work_id'=> $w5->id, 'name' => $w5->name ]);
        }
        $w6->services()->attach(
            $services->only([48,49,50,51,52,53,54,55,56,57,58])->pluck('id')->toArray()
        );
        if ($w6->type_work_id === 1) {
            Construction::create([ 'work_id'=> $w6->id, 'name' => $w6->name ]);
        }
        $w7->services()->attach(
            $services->only([1,6,59,60,61,62,63,64,65,66,67,68])->pluck('id')->toArray()
        );
        if ($w7->type_work_id === 1) {
            Construction::create([ 'work_id'=> $w7->id, 'name' => $w7->name ]);
        }
        $w8->services()->attach(
            $services->only([48,49,50,51,52,53,54,55,56,57,58])->pluck('id')->toArray()
        );
        if ($w8->type_work_id === 3) {
            Supervision::create([ 'work_id'=> $w8->id, 'name' => $w8->name ]);
        }
        $w9->services()->attach(
            $services->only([15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47])->pluck('id')->toArray()
        );
        if ($w9->type_work_id === 2) {
            Study::create([ 'work_id'=> $w9->id, 'name' => $w9->name ]);
        }
        $w10->services()->attach(
            $services->only([15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47])->pluck('id')->toArray()
        );
        if ($w10->type_work_id === 2) {
            Study::create([ 'work_id'=> $w10->id, 'name' => $w10->name ]);
        }
        $w11->services()->attach(
            $services->only([69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91])->pluck('id')->toArray()
        );
        if ($w11->type_work_id === 1) {
            Construction::create([ 'work_id'=> $w11->id, 'name' => $w11->name ]);
        }
        $w12->services()->attach(
            $services->only([15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47])->pluck('id')->toArray()
        );
        if ($w12->type_work_id === 2) {
            Study::create([ 'work_id'=> $w12->id, 'name' => $w12->name ]);
        }
        $w13->services()->attach(
            $services->only([15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47])->pluck('id')->toArray()
        );
        if ($w13->type_work_id === 2) {
            Study::create([ 'work_id'=> $w13->id, 'name' => $w13->name ]);
        }
        $w14->services()->attach(
            $services->only([15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47])->pluck('id')->toArray()
        );
        if ($w14->type_work_id === 2) {
            Study::create([ 'work_id'=> $w14->id, 'name' => $w14->name ]);
        }
        $w15->services()->attach(
            $services->only([48,49,50,51,52,53,54,55,56,57,58])->pluck('id')->toArray()
        );
        if ($w15->type_work_id === 3) {
            Supervision::create([ 'work_id'=> $w15->id, 'name' => $w15->name ]);
        }
        $w16->services()->attach(
            $services->only([69,70,71,72,73,74,75,76,77,78,79,80])->pluck('id')->toArray()
        );
        if ($w16->type_work_id === 1) {
            Construction::create([ 'work_id'=> $w16->id, 'name' => $w16->name ]);
        }
        $w17->services()->attach(
            $services->only([15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47])->pluck('id')->toArray()
        );
        if ($w17->type_work_id === 2) {
            Study::create([ 'work_id'=> $w17->id, 'name' => $w17->name ]);
        }
        $w18->services()->attach(
            $services->only([15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47])->pluck('id')->toArray()
        );
        if ($w18->type_work_id === 2) {
            Study::create([ 'work_id'=> $w18->id, 'name' => $w18->name ]);
        }
        $w19->services()->attach(
            $services->only([15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47])->pluck('id')->toArray()
        );
        if ($w19->type_work_id === 2) {
            Study::create([ 'work_id'=> $w19->id, 'name' => $w19->name ]);
        }
        $w20->services()->attach(
            $services->only([48,49,50,51,52,53,54,55,56,57,58])->pluck('id')->toArray()
        );
        if ($w20->type_work_id === 3) {
            Supervision::create([ 'work_id'=> $w20->id, 'name' => $w20->name ]);
        }
        $w21->services()->attach(
            $services->only([15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47])->pluck('id')->toArray()
        );
        if ($w21->type_work_id === 2) {
            Study::create([ 'work_id'=> $w21->id, 'name' => $w21->name ]);
        }
        $w22->services()->attach(
            $services->only([69,70,71,72,73])->pluck('id')->toArray()
        );
        if ($w22->type_work_id === 1) {
            Construction::create([ 'work_id'=> $w22->id, 'name' => $w22->name ]);
        }
        $w23->services()->attach(
            $services->only([15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47])->pluck('id')->toArray()
        );
        if ($w23->type_work_id === 2) {
            Study::create([ 'work_id'=> $w23->id, 'name' => $w23->name ]);
        }
        $w24->services()->attach(
            $services->only([15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47])->pluck('id')->toArray()
        );
        if ($w24->type_work_id === 2) {
            Study::create([ 'work_id'=> $w24->id, 'name' => $w24->name ]);
        }
        $w25->services()->attach(
            $services->only([15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47])->pluck('id')->toArray()
        );
        if ($w25->type_work_id === 2) {
            Study::create([ 'work_id'=> $w25->id, 'name' => $w25->name ]);
        }
        $w26->services()->attach(
            $services->only([15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47])->pluck('id')->toArray()
        );
        if ($w26->type_work_id === 2) {
            Study::create([ 'work_id'=> $w26->id, 'name' => $w26->name ]);
        }
        $w27->services()->attach(
            $services->only([48,49,50,51,52,53,54,55,56,57,58])->pluck('id')->toArray()
        );
        if ($w27->type_work_id === 3) {
            Supervision::create([ 'work_id'=> $w27->id, 'name' => $w27->name ]);
        }
        $w28->services()->attach(
            $services->only([1,59,60,6,61,62,63,64])->pluck('id')->toArray()
        );
        if ($w28->type_work_id === 1) {
            Construction::create([ 'work_id'=> $w28->id, 'name' => $w28->name ]);
        }
        $w29->services()->attach(
            $services->only([15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47])->pluck('id')->toArray()
        );
        if ($w29->type_work_id === 2) {
            Study::create([ 'work_id'=> $w29->id, 'name' => $w29->name ]);
        }
        $w30->services()->attach(
            $services->only([48,49,50,51,52,53,54,55,56,57,58])->pluck('id')->toArray()
        );
        if ($w30->type_work_id === 3) {
            Supervision::create([ 'work_id'=> $w30->id, 'name' => $w30->name ]);
        }
    }
}
