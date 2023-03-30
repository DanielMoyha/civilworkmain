<?php

namespace Database\Seeders;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services =
        [
            //construction
            [
                'id' => 1,
                'name' => 'INST DE FAENAS Y COLOC DE LETRERO OBRAS MEDIANAS',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'REPLANTEO Y TRAZADO DE OBRAS CIVILES CON ESTACION TOTAL',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'DESVIO TIPO C (CON TIERRA, MOVIMIENTO MANUAL)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'DESVIO CON YUTE (CON TIERRA, MOVIMIENTO MANUAL)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => 'EXCAVACION 0 - 1 m C/ AGOTAMIENTO',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'name' => 'EXCAVACION CON RETROEXCAVADORA',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'name' => 'ENTIBADO Y APUNTALADO',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'name' => 'MAMPOSTERIA DE PIEDRA BRUTA TIPO B MORT 1:4 C/ 1 CARA ENCOF, CON ADITIVO AL 1,5% EN PESO DEL CEMENTO',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'name' => 'MAMPOSTERIA DE PIEDRA CORTADA TIPO A MORT. 1:4 CON ADITIVO ACELERADOR DE FRAGUADO',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'name' => 'PROV Y COLOC DE SILLARES TIPO A H = 0.30 m CON ADITIVO ACELERANTE DE FRAGUADO EXCENTO DE CLORUROS',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'name' => 'RELLENO Y COMPACTADO CON EQUIPO COMPACTADOR (S/PROV DE MATERIAL)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'name' => 'TRANSPORTE DE PIEDRA A 300 m A MANO',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'name' => 'DESVIO TIPO D DE TUBERIA PVC 8"',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'name' => 'TRANSPORTE A MENOS DE 100 m CON CARRETILLA',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //study
            [
                'id' => 15,
                'name' => 'Resumen ejecutivo.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 17,
                'name' => 'Estudios socioeconómicos.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 18,
                'name' => 'Estudio de impacto ambiental.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 19,
                'name' => 'Diseño final de ingeniería.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 20,
                'name' => 'Tramificación del proyecto.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 21,
                'name' => 'Inventario Vial del tramo carretero.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 22,
                'name' => 'Planillas o Fichas Técnicas de relevamiento de campo.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 23,
                'name' => 'Estudio de tráfico y transporte.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 24,
                'name' => 'Estudio Topográfico a Detalle.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 25,
                'name' => 'Diseño Geométrico.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 26,
                'name' => 'Paquete Estructural.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 27,
                'name' => 'Estudio Geológico.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 28,
                'name' => 'Estudio Geotécnico.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 29,
                'name' => 'Estudios de Suelos y Materiales.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 30,
                'name' => 'Estudio Hidrológico.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 31,
                'name' => 'Estudio Hidráulico.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 32,
                'name' => 'Diseño de obras de drenaje.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 33,
                'name' => 'Diseño de obras de arte menor.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 34,
                'name' => 'Diseño de obras de arte mayor "Puentes".',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 35,
                'name' => 'Diseño de Accesos y Distribuidores Vehiculares.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 36,
                'name' => 'Señalización y Seguridad Vial.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 37,
                'name' => 'Plan de Reacondicionamiento de Camino.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 38,
                'name' => 'Costos, presupuestos, especificaciones técnicas',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 39,
                'name' => 'Cuantificación de Volúmenes de Obra y cómputos métricos.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 40,
                'name' => 'Análisis de Costos Unitarios (en software Quark).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 41,
                'name' => 'Presupuesto General de la obra.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 42,
                'name' => 'Presupuesto desglosado de la obra.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 43,
                'name' => 'Presupuesto general por tramos.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 44,
                'name' => 'Presupuesto desglosado por tramos.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 45,
                'name' => 'Metodología, organigrama para la construcción del proyecto.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 46,
                'name' => 'Cronograma de ejecución para el proyecto.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 47,
                'name' => 'Plan y Costos de mantenimiento.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //supervision
            [
                'id' => 48,
                'name' => 'Revisión, Complementación y Actualización del Diseño de la carreteras',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 49,
                'name' => 'Replanteo Topográfico',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 50,
                'name' => 'Control de Laboratorio, Dosificación de las Mezclas Asfálticas.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 51,
                'name' => 'Control Colocación Carpeta Asfáltica; en Planta y Pista.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 52,
                'name' => 'Ensayos de Control de Calidad Pre y Post estructuras mayores.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 53,
                'name' => 'Ensayos de Control de Calidad Pre y Post colocado de la Carpeta Asfáltica.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 54,
                'name' => 'Control Topográfico de Carpeta Asfáltica.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 55,
                'name' => 'Control Topográfico de Estructuras Mayores',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 56,
                'name' => 'Elaboración de Informes Técnico y Ambiental Mensuales y Final de la Obra.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 57,
                'name' => 'Taller de Educación Ambiental',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 58,
                'name' => 'Taller de Educación Vial',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 59,
                'name' => 'EMPIEDRE DE CALZADA CON EQUIPO COMPACTADOR',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 60,
                'name' => 'LIMPIEZA Y RETIRO DE ESCOMBROS',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 61,
                'name' => 'CUNETA DE PIEDRA C/REVESTIMIENTO e = 4 cm DOSIF 1:2:3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 62,
                'name' => 'CORDON DE CONCRETO DE 20 x 30 cm DOSIF 1:2:4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 63,
                'name' => 'EXCAVACION 0 - 1 m S/ AGOTAMIENTO TERRENO SEMIDURO',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 64,
                'name' => 'Hº Cº CON 50% DE PIEDRA DESPLAZADORA DOSIFICACION 1:3:4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 65,
                'name' => 'EXCAVACION 0 - 2 m S/ AGOTAMIENTO TERRENO SEMIDURO',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 66,
                'name' => 'ACERO DE REFUERZO',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 67,
                'name' => 'Hº Sº FCK=210 kg/cm2 DOSIF 1:2:3 (INCLUYE COLOC)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 68,
                'name' => 'RELLENO Y COMPACTADO CON COMPACTADOR MANUAL (SIN PROVISION DE MATERIAL)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 69,
                'name' => 'INSTALACION DE FAENAS Y MOVILIZACION',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 70,
                'name' => 'REPLANTEO Y CONTROL TOPOGRAFICO',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 71,
                'name' => 'CONFORMACIÓN DE TERRAPLEN PARA ACCESOS',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 72,
                'name' => 'EXCAVACION NO CLASIFICADA PARA ESTRUCTURAS C/ AG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 73,
                'name' => 'RELLENO Y COMPACTADO PARA ESTRUCTURAS',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 74,
                'name' => "HORMIGON SIMPLE F'C=25 MPA - INFRAESTRUCTURA",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 75,
                'name' => 'ACERO ESTRUCTURAL FY=412 MPA',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 76,
                'name' => 'APARATOS DE APOYO NEOPRENO FREYSSINET',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 77,
                'name' => 'TOPE DE NEOPRENO SIMPLE',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 78,
                'name' => 'TUBOS DE DRENAJE C-9 PVC D=4"',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 79,
                'name' => "HORMIGON DE LIMPIEZA F'C=11 MPA E=5 CM",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 80,
                'name' => 'VERIFICACION GEOTECNICA',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 81,
                'name' => 'VIGA DE HORMIGON POSTENSADO',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 82,
                'name' => 'OBRA FALSA O LANZAMIENTO DE VIGAS',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 83,
                'name' => "H O R M I G O N S I M PLE F'C=28 MPA - SUPERESTRUCTURA",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 84,
                'name' => 'BARANDADO TIPO P-3 ABC',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 85,
                'name' => 'JUNTA DE DILATACION ELASTOMERICA (CON CANTONERAS)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 86,
                'name' => 'EXCAVACION PARA GAVIONES',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 87,
                'name' => 'PROVISION Y COLOCADO DE GAVIONES TIPO CAJON',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 88,
                'name' => 'RELLENO Y COMPACTADO PARA GAVIONES',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 89,
                'name' => 'SEÑAL INFORMATIVA DE LOCALIZACIÓN (1.90 X 0.50)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 90,
                'name' => 'DEFENSAS LATERALES METALICAS, INCLUYE TERMINALES',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 91,
                'name' => 'LIMPIEZA GENERAL',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        foreach(array_chunk($services, 1000) as $service){
            Service::insert($service);
        }
    }
}
