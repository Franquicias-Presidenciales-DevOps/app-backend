<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CtlDistritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $distritos = [
            ['id' => 1, 'nombre' => 'Ahuachapán', 'id_municipio' => 2, 'codigo' => '01'],
            ['id' => 2, 'nombre' => 'Apaneca', 'id_municipio' => 2, 'codigo' => '02'],
            ['id' => 3, 'nombre' => 'Atiquizaya', 'id_municipio' => 1, 'codigo' => '03'],
            ['id' => 4, 'nombre' => 'Concepción De Ataco', 'id_municipio' => 2, 'codigo' => '04'],
            ['id' => 5, 'nombre' => 'El Refugio', 'id_municipio' => 1, 'codigo' => '05'],
            ['id' => 6, 'nombre' => 'Guaymango', 'id_municipio' => 3, 'codigo' => '06'],
            ['id' => 7, 'nombre' => 'Jujutla', 'id_municipio' => 3, 'codigo' => '07'],
            ['id' => 8, 'nombre' => 'San Francisco Menéndez', 'id_municipio' => 3, 'codigo' => '08'],
            ['id' => 9, 'nombre' => 'San Lorenzo', 'id_municipio' => 1, 'codigo' => '09'],
            ['id' => 10, 'nombre' => 'San Pedro Puxtla', 'id_municipio' => 3, 'codigo' => '10'],
            ['id' => 11, 'nombre' => 'Tacuba', 'id_municipio' => 2, 'codigo' => '11'],
            ['id' => 12, 'nombre' => 'Turín', 'id_municipio' => 1, 'codigo' => '12'],
            ['id' => 13, 'nombre' => 'Candelaria De La Frontera', 'id_municipio' => 4, 'codigo' => '01'],
            ['id' => 14, 'nombre' => 'Coatepeque', 'id_municipio' => 5, 'codigo' => '02'],
            ['id' => 15, 'nombre' => 'Chalchuapa', 'id_municipio' => 4, 'codigo' => '03'],
            ['id' => 16, 'nombre' => 'El Congo', 'id_municipio' => 5, 'codigo' => '04'],
            ['id' => 17, 'nombre' => 'El Porvenir', 'id_municipio' => 4, 'codigo' => '05'],
            ['id' => 18, 'nombre' => 'Masahuat', 'id_municipio' => 6, 'codigo' => '06'],
            ['id' => 19, 'nombre' => 'Metapán', 'id_municipio' => 6, 'codigo' => '07'],
            ['id' => 20, 'nombre' => 'San Antonio Pajonal', 'id_municipio' => 4, 'codigo' => '08'],
            ['id' => 21, 'nombre' => 'San Sebastián Salitrillo', 'id_municipio' => 4, 'codigo' => '09'],
            ['id' => 22, 'nombre' => 'Santa Ana', 'id_municipio' => 7, 'codigo' => '10'],
            ['id' => 23, 'nombre' => 'Santa Rosa Guachipilin', 'id_municipio' => 6, 'codigo' => '11'],
            ['id' => 24, 'nombre' => 'Santiago de la Frontera', 'id_municipio' => 4, 'codigo' => '12'],
            ['id' => 25, 'nombre' => 'Texistepeque', 'id_municipio' => 6, 'codigo' => '13'],
            ['id' => 26, 'nombre' => 'Acajutla', 'id_municipio' => 11, 'codigo' => '01'],
            ['id' => 27, 'nombre' => 'Armenia', 'id_municipio' => 10, 'codigo' => '02'],
            ['id' => 28, 'nombre' => 'Caluco', 'id_municipio' => 10, 'codigo' => '03'],
            ['id' => 29, 'nombre' => 'Cuisnahuat', 'id_municipio' => 10, 'codigo' => '04'],
            ['id' => 30, 'nombre' => 'Santa Isabel Ishuatan', 'id_municipio' => 10, 'codigo' => '05'],
            ['id' => 31, 'nombre' => 'Izalco', 'id_municipio' => 10, 'codigo' => '06'],
            ['id' => 32, 'nombre' => 'Juayúa', 'id_municipio' => 8, 'codigo' => '07'],
            ['id' => 33, 'nombre' => 'Nahuizalco', 'id_municipio' => 8, 'codigo' => '08'],
            ['id' => 34, 'nombre' => 'Nahulingo', 'id_municipio' => 9, 'codigo' => '09'],
            ['id' => 35, 'nombre' => 'Salcoatitán', 'id_municipio' => 8, 'codigo' => '10'],
            ['id' => 36, 'nombre' => 'San Antonio Del Monte', 'id_municipio' => 9, 'codigo' => '11'],
            ['id' => 37, 'nombre' => 'San Julián', 'id_municipio' => 10, 'codigo' => '12'],
            ['id' => 38, 'nombre' => 'Santa Catarina Masahuat', 'id_municipio' => 8, 'codigo' => '13'],
            ['id' => 39, 'nombre' => 'Santo Domingo Guzmán', 'id_municipio' => 9, 'codigo' => '14'],
            ['id' => 40, 'nombre' => 'Sonsonate', 'id_municipio' => 9, 'codigo' => '15'],
            ['id' => 41, 'nombre' => 'Sonzacate', 'id_municipio' => 9, 'codigo' => '16'],
            ['id' => 42, 'nombre' => 'Agua Caliente', 'id_municipio' => 13, 'codigo' => '01'],
            ['id' => 43, 'nombre' => 'Arcatao', 'id_municipio' => 14, 'codigo' => '02'],
            ['id' => 44, 'nombre' => 'Azacualpa', 'id_municipio' => 14, 'codigo' => '03'],
            ['id' => 45, 'nombre' => 'Citalá', 'id_municipio' => 12, 'codigo' => '04'],
            ['id' => 46, 'nombre' => 'Comalapa', 'id_municipio' => 14, 'codigo' => '05'],
            ['id' => 47, 'nombre' => 'Concepción Quezaltepeque', 'id_municipio' => 14, 'codigo' => '06'],
            ['id' => 48, 'nombre' => 'Chalatenango', 'id_municipio' => 14, 'codigo' => '07'],
            ['id' => 49, 'nombre' => 'Dulce Nombre de María', 'id_municipio' => 13, 'codigo' => '08'],
            ['id' => 50, 'nombre' => 'El Carrizal', 'id_municipio' => 14, 'codigo' => '09'],
            ['id' => 51, 'nombre' => 'El Paraíso', 'id_municipio' => 13, 'codigo' => '10'],
            ['id' => 52, 'nombre' => 'La Laguna', 'id_municipio' => 14, 'codigo' => '11'],
            ['id' => 53, 'nombre' => 'La Palma', 'id_municipio' => 12, 'codigo' => '12'],
            ['id' => 54, 'nombre' => 'La Reina', 'id_municipio' => 13, 'codigo' => '13'],
            ['id' => 55, 'nombre' => 'Las Vueltas', 'id_municipio' => 14, 'codigo' => '14'],
            ['id' => 56, 'nombre' => 'Nombre De Jesús', 'id_municipio' => 14, 'codigo' => '15'],
            ['id' => 57, 'nombre' => 'Nueva Concepción', 'id_municipio' => 13, 'codigo' => '16'],
            ['id' => 58, 'nombre' => 'Nueva Trinidad', 'id_municipio' => 14, 'codigo' => '17'],
            ['id' => 59, 'nombre' => 'Ojos De Agua', 'id_municipio' => 14, 'codigo' => '18'],
            ['id' => 60, 'nombre' => 'Potonico', 'id_municipio' => 14, 'codigo' => '19'],
            ['id' => 61, 'nombre' => 'San Antonio de La Cruz', 'id_municipio' => 14, 'codigo' => '20'],
            ['id' => 62, 'nombre' => 'San Antonio Ranchos', 'id_municipio' => 14, 'codigo' => '21'],
            ['id' => 63, 'nombre' => 'San Fernando', 'id_municipio' => 13, 'codigo' => '22'],
            ['id' => 64, 'nombre' => 'San Francisco Lempa', 'id_municipio' => 14, 'codigo' => '23'],
            ['id' => 65, 'nombre' => 'San Francisco Morazán', 'id_municipio' => 13, 'codigo' => '24'],
            ['id' => 66, 'nombre' => 'San Ignacio', 'id_municipio' => 12, 'codigo' => '25'],
            ['id' => 67, 'nombre' => 'San Isidro Labrador', 'id_municipio' => 14, 'codigo' => '26'],
            ['id' => 68, 'nombre' => 'San José Cancasque', 'id_municipio' => 14, 'codigo' => '27'],
            ['id' => 69, 'nombre' => 'San José Flores', 'id_municipio' => 14, 'codigo' => '28'],
            ['id' => 70, 'nombre' => 'San Luis Carmen', 'id_municipio' => 14, 'codigo' => '29'],
            ['id' => 71, 'nombre' => 'San Miguel Mercedes', 'id_municipio' => 14, 'codigo' => '30'],
            ['id' => 72, 'nombre' => 'San Rafael', 'id_municipio' => 13, 'codigo' => '31'],
            ['id' => 73, 'nombre' => 'Santa Rita', 'id_municipio' => 13, 'codigo' => '32'],
            ['id' => 74, 'nombre' => 'Tejutla', 'id_municipio' => 13, 'codigo' => '33'],
            ['id' => 75, 'nombre' => 'Antiguo Cuscatlán', 'id_municipio' => 18, 'codigo' => '01'],
            ['id' => 76, 'nombre' => 'Ciudad Arce', 'id_municipio' => 16, 'codigo' => '02'],
            ['id' => 77, 'nombre' => 'Colón', 'id_municipio' => 17, 'codigo' => '03'],
            ['id' => 78, 'nombre' => 'Comasagua', 'id_municipio' => 20, 'codigo' => '04'],
            ['id' => 79, 'nombre' => 'Chiltiupan', 'id_municipio' => 19, 'codigo' => '05'],
            ['id' => 80, 'nombre' => 'Huizúcar', 'id_municipio' => 18, 'codigo' => '06'],
            ['id' => 81, 'nombre' => 'Jayaque', 'id_municipio' => 17, 'codigo' => '07'],
            ['id' => 82, 'nombre' => 'Jicalapa', 'id_municipio' => 19, 'codigo' => '08'],
            ['id' => 83, 'nombre' => 'La Libertad', 'id_municipio' => 19, 'codigo' => '09'],
            ['id' => 84, 'nombre' => 'Nuevo Cuscatlán', 'id_municipio' => 18, 'codigo' => '10'],
            ['id' => 85, 'nombre' => 'Santa Tecla', 'id_municipio' => 20, 'codigo' => '11'],
            ['id' => 86, 'nombre' => 'Quezaltepeque', 'id_municipio' => 15, 'codigo' => '12'],
            ['id' => 87, 'nombre' => 'Sacacoyo', 'id_municipio' => 17, 'codigo' => '13'],
            ['id' => 88, 'nombre' => 'San José Villanueva', 'id_municipio' => 18, 'codigo' => '14'],
            ['id' => 89, 'nombre' => 'San Juan Opico', 'id_municipio' => 16, 'codigo' => '15'],
            ['id' => 90, 'nombre' => 'San Matías', 'id_municipio' => 15, 'codigo' => '16'],
            ['id' => 91, 'nombre' => 'San Pablo Tacachico', 'id_municipio' => 15, 'codigo' => '17'],
            ['id' => 92, 'nombre' => 'Tamanique', 'id_municipio' => 19, 'codigo' => '18'],
            ['id' => 93, 'nombre' => 'Talnique', 'id_municipio' => 17, 'codigo' => '19'],
            ['id' => 94, 'nombre' => 'Teotepeque', 'id_municipio' => 19, 'codigo' => '20'],
            ['id' => 95, 'nombre' => 'Tepecoyo', 'id_municipio' => 17, 'codigo' => '21'],
            ['id' => 96, 'nombre' => 'Zaragoza', 'id_municipio' => 18, 'codigo' => '22'],
            ['id' => 97, 'nombre' => 'Aguilares', 'id_municipio' => 21, 'codigo' => '01'],
            ['id' => 98, 'nombre' => 'Apopa', 'id_municipio' => 22, 'codigo' => '02'],
            ['id' => 99, 'nombre' => 'Ayutuxtepeque', 'id_municipio' => 24, 'codigo' => '03'],
            ['id' => 100, 'nombre' => 'Cuscatancingo', 'id_municipio' => 23, 'codigo' => '04'],
            ['id' => 101, 'nombre' => 'El Paisnal', 'id_municipio' => 21, 'codigo' => '05'],
            ['id' => 102, 'nombre' => 'Guazapa', 'id_municipio' => 21, 'codigo' => '06'],
            ['id' => 103, 'nombre' => 'Ilopango', 'id_municipio' => 23, 'codigo' => '07'],
            ['id' => 104, 'nombre' => 'Mejicanos', 'id_municipio' => 24, 'codigo' => '08'],
            ['id' => 105, 'nombre' => 'Nejapa', 'id_municipio' => 22, 'codigo' => '09'],
            ['id' => 106, 'nombre' => 'Panchimalco', 'id_municipio' => 25, 'codigo' => '10'],
            ['id' => 107, 'nombre' => 'Rosario De Mora', 'id_municipio' => 25, 'codigo' => '11'],
            ['id' => 108, 'nombre' => 'San Marcos', 'id_municipio' => 24, 'codigo' => '12'],
            ['id' => 109, 'nombre' => 'San Martin', 'id_municipio' => 23, 'codigo' => '13'],
            ['id' => 110, 'nombre' => 'San Salvador', 'id_municipio' => 24, 'codigo' => '14'],
            ['id' => 111, 'nombre' => 'Santiago Texacuangos', 'id_municipio' => 24, 'codigo' => '15'],
            ['id' => 112, 'nombre' => 'Santo Tomas', 'id_municipio' => 24, 'codigo' => '16'],
            ['id' => 113, 'nombre' => 'Soyapango', 'id_municipio' => 23, 'codigo' => '17'],
            ['id' => 114, 'nombre' => 'Tonacatepeque', 'id_municipio' => 23, 'codigo' => '18'],
            ['id' => 115, 'nombre' => 'Ciudad Delgado', 'id_municipio' => 23, 'codigo' => '19'],
            ['id' => 116, 'nombre' => 'Candelaria', 'id_municipio' => 27, 'codigo' => '01'],
            ['id' => 117, 'nombre' => 'Cojutepeque', 'id_municipio' => 27, 'codigo' => '02'],
            ['id' => 118, 'nombre' => 'El Carmen', 'id_municipio' => 27, 'codigo' => '03'],
            ['id' => 119, 'nombre' => 'El Rosario', 'id_municipio' => 27, 'codigo' => '04'],
            ['id' => 120, 'nombre' => 'Monte San Juan', 'id_municipio' => 27, 'codigo' => '05'],
            ['id' => 121, 'nombre' => 'Oratorio de Concepción', 'id_municipio' => 26, 'codigo' => '06'],
            ['id' => 122, 'nombre' => 'San Bartolomé Perulapia', 'id_municipio' => 26, 'codigo' => '07'],
            ['id' => 123, 'nombre' => 'San Cristóbal', 'id_municipio' => 27, 'codigo' => '08'],
            ['id' => 124, 'nombre' => 'San José Guayabal', 'id_municipio' => 26, 'codigo' => '09'],
            ['id' => 125, 'nombre' => 'San Pedro Perulapán', 'id_municipio' => 26, 'codigo' => '10'],
            ['id' => 126, 'nombre' => 'San Rafael Cedros', 'id_municipio' => 27, 'codigo' => '11'],
            ['id' => 127, 'nombre' => 'San Ramón', 'id_municipio' => 27, 'codigo' => '12'],
            ['id' => 128, 'nombre' => 'Santa Cruz Analquito', 'id_municipio' => 27, 'codigo' => '13'],
            ['id' => 129, 'nombre' => 'Santa Cruz Michapa', 'id_municipio' => 27, 'codigo' => '14'],
            ['id' => 130, 'nombre' => 'Suchitoto', 'id_municipio' => 26, 'codigo' => '15'],
            ['id' => 131, 'nombre' => 'Tenancingo', 'id_municipio' => 27, 'codigo' => '16'],
            ['id' => 132, 'nombre' => 'Cuyultitán', 'id_municipio' => 30, 'codigo' => '01'],
            ['id' => 133, 'nombre' => 'El Rosario', 'id_municipio' => 29, 'codigo' => '02'],
            ['id' => 134, 'nombre' => 'Jerusalén', 'id_municipio' => 29, 'codigo' => '03'],
            ['id' => 135, 'nombre' => 'Merced La Ceiba', 'id_municipio' => 29, 'codigo' => '04'],
            ['id' => 136, 'nombre' => 'Olocuilta', 'id_municipio' => 30, 'codigo' => '05'],
            ['id' => 137, 'nombre' => 'Paraíso Osorio', 'id_municipio' => 29, 'codigo' => '06'],
            ['id' => 138, 'nombre' => 'San Antonio Masahuat', 'id_municipio' => 29, 'codigo' => '07'],
            ['id' => 139, 'nombre' => 'San Emigdio', 'id_municipio' => 29, 'codigo' => '08'],
            ['id' => 140, 'nombre' => 'San Francisco Chinameca', 'id_municipio' => 30, 'codigo' => '09'],
            ['id' => 141, 'nombre' => 'San Juan Nonualco', 'id_municipio' => 28, 'codigo' => '10'],
            ['id' => 142, 'nombre' => 'San Juan Talpa', 'id_municipio' => 30, 'codigo' => '11'],
            ['id' => 143, 'nombre' => 'San Juan Tepezontes', 'id_municipio' => 29, 'codigo' => '12'],
            ['id' => 144, 'nombre' => 'San Luis Talpa', 'id_municipio' => 30, 'codigo' => '13'],
            ['id' => 145, 'nombre' => 'San Miguel Tepezontes', 'id_municipio' => 29, 'codigo' => '14'],
            ['id' => 146, 'nombre' => 'San Pedro Masahuat', 'id_municipio' => 30, 'codigo' => '15'],
            ['id' => 147, 'nombre' => 'San Pedro Nonualco', 'id_municipio' => 29, 'codigo' => '16'],
            ['id' => 148, 'nombre' => 'San Rafael Obrajuelo', 'id_municipio' => 28, 'codigo' => '17'],
            ['id' => 149, 'nombre' => 'Santa María Ostuma', 'id_municipio' => 29, 'codigo' => '18'],
            ['id' => 150, 'nombre' => 'Santiago Nonualco', 'id_municipio' => 29, 'codigo' => '19'],
            ['id' => 151, 'nombre' => 'Tapalhuaca', 'id_municipio' => 30, 'codigo' => '20'],
            ['id' => 152, 'nombre' => 'Zacatecoluca', 'id_municipio' => 28, 'codigo' => '21'],
            ['id' => 153, 'nombre' => 'San Luis La Herradura', 'id_municipio' => 29, 'codigo' => '22'],
            ['id' => 154, 'nombre' => 'Cinquera', 'id_municipio' => 31, 'codigo' => '01'],
            ['id' => 155, 'nombre' => 'Guacotecti', 'id_municipio' => 32, 'codigo' => '02'],
            ['id' => 156, 'nombre' => 'Ilobasco', 'id_municipio' => 31, 'codigo' => '03'],
            ['id' => 157, 'nombre' => 'Jutiapa', 'id_municipio' => 31, 'codigo' => '04'],
            ['id' => 158, 'nombre' => 'San Isidro', 'id_municipio' => 32, 'codigo' => '05'],
            ['id' => 159, 'nombre' => 'Sensuntepeque', 'id_municipio' => 32, 'codigo' => '06'],
            ['id' => 160, 'nombre' => 'Tejutepeque', 'id_municipio' => 31, 'codigo' => '07'],
            ['id' => 161, 'nombre' => 'Victoria', 'id_municipio' => 32, 'codigo' => '08'],
            ['id' => 162, 'nombre' => 'Dolores', 'id_municipio' => 32, 'codigo' => '09'],
            ['id' => 163, 'nombre' => 'Apastepeque', 'id_municipio' => 33, 'codigo' => '01'],
            ['id' => 164, 'nombre' => 'Guadalupe', 'id_municipio' => 34, 'codigo' => '02'],
            ['id' => 165, 'nombre' => 'San Cayetano Istepeque', 'id_municipio' => 34, 'codigo' => '03'],
            ['id' => 166, 'nombre' => 'Santa Clara', 'id_municipio' => 33, 'codigo' => '04'],
            ['id' => 167, 'nombre' => 'Santo Domingo', 'id_municipio' => 33, 'codigo' => '05'],
            ['id' => 168, 'nombre' => 'San Esteban Catarina', 'id_municipio' => 33, 'codigo' => '06'],
            ['id' => 169, 'nombre' => 'San Ildefonso', 'id_municipio' => 33, 'codigo' => '07'],
            ['id' => 170, 'nombre' => 'San Lorenzo', 'id_municipio' => 33, 'codigo' => '08'],
            ['id' => 171, 'nombre' => 'San Sebastián', 'id_municipio' => 33, 'codigo' => '09'],
            ['id' => 172, 'nombre' => 'San Vicente', 'id_municipio' => 34, 'codigo' => '10'],
            ['id' => 173, 'nombre' => 'Tecoluca', 'id_municipio' => 34, 'codigo' => '11'],
            ['id' => 174, 'nombre' => 'Tepetitán', 'id_municipio' => 34, 'codigo' => '12'],
            ['id' => 175, 'nombre' => 'Verapaz', 'id_municipio' => 34, 'codigo' => '13'],
            ['id' => 176, 'nombre' => 'Alegría', 'id_municipio' => 35, 'codigo' => '01'],
            ['id' => 177, 'nombre' => 'Berlín', 'id_municipio' => 35, 'codigo' => '02'],
            ['id' => 178, 'nombre' => 'California', 'id_municipio' => 36, 'codigo' => '03'],
            ['id' => 179, 'nombre' => 'Concepción Batres', 'id_municipio' => 36, 'codigo' => '04'],
            ['id' => 180, 'nombre' => 'El Triunfo', 'id_municipio' => 35, 'codigo' => '05'],
            ['id' => 181, 'nombre' => 'Ereguayquín', 'id_municipio' => 36, 'codigo' => '06'],
            ['id' => 182, 'nombre' => 'Estanzuelas', 'id_municipio' => 35, 'codigo' => '07'],
            ['id' => 183, 'nombre' => 'Jiquilisco', 'id_municipio' => 37, 'codigo' => '08'],
            ['id' => 184, 'nombre' => 'Jucuapa', 'id_municipio' => 35, 'codigo' => '09'],
            ['id' => 185, 'nombre' => 'Jucuarán', 'id_municipio' => 36, 'codigo' => '10'],
            ['id' => 186, 'nombre' => 'Mercedes Umaña', 'id_municipio' => 35, 'codigo' => '11'],
            ['id' => 187, 'nombre' => 'Nueva Granada', 'id_municipio' => 35, 'codigo' => '12'],
            ['id' => 188, 'nombre' => 'Ozatlán', 'id_municipio' => 36, 'codigo' => '13'],
            ['id' => 189, 'nombre' => 'Puerto El Triunfo', 'id_municipio' => 37, 'codigo' => '14'],
            ['id' => 190, 'nombre' => 'San Agustín', 'id_municipio' => 37, 'codigo' => '15'],
            ['id' => 191, 'nombre' => 'San Buenaventura', 'id_municipio' => 35, 'codigo' => '16'],
            ['id' => 192, 'nombre' => 'San Dionisio', 'id_municipio' => 36, 'codigo' => '17'],
            ['id' => 193, 'nombre' => 'Santa Elena', 'id_municipio' => 36, 'codigo' => '18'],
            ['id' => 194, 'nombre' => 'San Francisco Javier', 'id_municipio' => 37, 'codigo' => '19'],
            ['id' => 195, 'nombre' => 'Santa María', 'id_municipio' => 36, 'codigo' => '20'],
            ['id' => 196, 'nombre' => 'Santiago De María', 'id_municipio' => 35, 'codigo' => '21'],
            ['id' => 197, 'nombre' => 'Tecapán', 'id_municipio' => 36, 'codigo' => '22'],
            ['id' => 198, 'nombre' => 'Usulután', 'id_municipio' => 36, 'codigo' => '23'],
            ['id' => 199, 'nombre' => 'Carolina', 'id_municipio' => 38, 'codigo' => '01'],
            ['id' => 200, 'nombre' => 'Ciudad Barrios', 'id_municipio' => 38, 'codigo' => '02'],
            ['id' => 201, 'nombre' => 'Comacarán', 'id_municipio' => 39, 'codigo' => '03'],
            ['id' => 202, 'nombre' => 'Chapeltique', 'id_municipio' => 38, 'codigo' => '04'],
            ['id' => 203, 'nombre' => 'Chinameca', 'id_municipio' => 40, 'codigo' => '05'],
            ['id' => 204, 'nombre' => 'Chirilagua', 'id_municipio' => 39, 'codigo' => '06'],
            ['id' => 205, 'nombre' => 'El Transito', 'id_municipio' => 40, 'codigo' => '07'],
            ['id' => 206, 'nombre' => 'Lolotique', 'id_municipio' => 40, 'codigo' => '08'],
            ['id' => 207, 'nombre' => 'Moncagua', 'id_municipio' => 39, 'codigo' => '09'],
            ['id' => 208, 'nombre' => 'Nueva Guadalupe', 'id_municipio' => 40, 'codigo' => '10'],
            ['id' => 209, 'nombre' => 'Nuevo Edén De San Juan', 'id_municipio' => 38, 'codigo' => '11'],
            ['id' => 210, 'nombre' => 'Quelepa', 'id_municipio' => 39, 'codigo' => '12'],
            ['id' => 211, 'nombre' => 'San Antonio Del Mosco', 'id_municipio' => 38, 'codigo' => '13'],
            ['id' => 212, 'nombre' => 'San Gerardo', 'id_municipio' => 38, 'codigo' => '14'],
            ['id' => 213, 'nombre' => 'San Jorge', 'id_municipio' => 40, 'codigo' => '15'],
            ['id' => 214, 'nombre' => 'San Luis De La Reina', 'id_municipio' => 38, 'codigo' => '16'],
            ['id' => 215, 'nombre' => 'San Miguel', 'id_municipio' => 39, 'codigo' => '17'],
            ['id' => 216, 'nombre' => 'San Rafael Oriente', 'id_municipio' => 40, 'codigo' => '18'],
            ['id' => 217, 'nombre' => 'Sesori', 'id_municipio' => 38, 'codigo' => '19'],
            ['id' => 218, 'nombre' => 'Uluazapa', 'id_municipio' => 39, 'codigo' => '20'],
            ['id' => 219, 'nombre' => 'Arambala', 'id_municipio' => 41, 'codigo' => '01'],
            ['id' => 220, 'nombre' => 'Cacaopera', 'id_municipio' => 41, 'codigo' => '02'],
            ['id' => 221, 'nombre' => 'Corinto', 'id_municipio' => 41, 'codigo' => '03'],
            ['id' => 222, 'nombre' => 'Chilanga', 'id_municipio' => 42, 'codigo' => '04'],
            ['id' => 223, 'nombre' => 'Delicias De La Concepción', 'id_municipio' => 42, 'codigo' => '05'],
            ['id' => 224, 'nombre' => 'El Divisadero', 'id_municipio' => 42, 'codigo' => '06'],
            ['id' => 225, 'nombre' => 'El Rosario', 'id_municipio' => 41, 'codigo' => '07'],
            ['id' => 226, 'nombre' => 'Gualococti', 'id_municipio' => 42, 'codigo' => '08'],
            ['id' => 227, 'nombre' => 'Guatajiagua', 'id_municipio' => 42, 'codigo' => '09'],
            ['id' => 228, 'nombre' => 'Joateca', 'id_municipio' => 41, 'codigo' => '10'],
            ['id' => 229, 'nombre' => 'Jocoaitique', 'id_municipio' => 41, 'codigo' => '11'],
            ['id' => 230, 'nombre' => 'Jocoro', 'id_municipio' => 42, 'codigo' => '12'],
            ['id' => 231, 'nombre' => 'Lolotiquillo', 'id_municipio' => 42, 'codigo' => '13'],
            ['id' => 232, 'nombre' => 'Meanguera', 'id_municipio' => 41, 'codigo' => '14'],
            ['id' => 233, 'nombre' => 'Osicala', 'id_municipio' => 42, 'codigo' => '15'],
            ['id' => 234, 'nombre' => 'Perquín', 'id_municipio' => 41, 'codigo' => '16'],
            ['id' => 235, 'nombre' => 'San Carlos', 'id_municipio' => 42, 'codigo' => '17'],
            ['id' => 236, 'nombre' => 'San Fernando', 'id_municipio' => 41, 'codigo' => '18'],
            ['id' => 237, 'nombre' => 'San Francisco Gotera', 'id_municipio' => 42, 'codigo' => '19'],
            ['id' => 238, 'nombre' => 'San Isidro', 'id_municipio' => 41, 'codigo' => '20'],
            ['id' => 239, 'nombre' => 'San Simón', 'id_municipio' => 42, 'codigo' => '21'],
            ['id' => 240, 'nombre' => 'Sensembra', 'id_municipio' => 42, 'codigo' => '22'],
            ['id' => 241, 'nombre' => 'Sociedad', 'id_municipio' => 42, 'codigo' => '23'],
            ['id' => 242, 'nombre' => 'Torola', 'id_municipio' => 41, 'codigo' => '24'],
            ['id' => 243, 'nombre' => 'Yamabal', 'id_municipio' => 42, 'codigo' => '25'],
            ['id' => 244, 'nombre' => 'Yoloaiquín', 'id_municipio' => 42, 'codigo' => '26'],
            ['id' => 245, 'nombre' => 'Anamoros', 'id_municipio' => 43, 'codigo' => '01'],
            ['id' => 246, 'nombre' => 'Bolívar', 'id_municipio' => 43, 'codigo' => '02'],
            ['id' => 247, 'nombre' => 'Concepción De Oriente', 'id_municipio' => 43, 'codigo' => '03'],
            ['id' => 248, 'nombre' => 'Conchagua', 'id_municipio' => 44, 'codigo' => '04'],
            ['id' => 249, 'nombre' => 'El Carmen', 'id_municipio' => 44, 'codigo' => '05'],
            ['id' => 250, 'nombre' => 'El Sauce', 'id_municipio' => 43, 'codigo' => '06'],
            ['id' => 251, 'nombre' => 'Intipucá', 'id_municipio' => 44, 'codigo' => '07'],
            ['id' => 252, 'nombre' => 'La Unión', 'id_municipio' => 44, 'codigo' => '08'],
            ['id' => 253, 'nombre' => 'Lislique', 'id_municipio' => 43, 'codigo' => '09'],
            ['id' => 254, 'nombre' => 'Meanguito Del Golfo', 'id_municipio' => 44, 'codigo' => '10'],
            ['id' => 255, 'nombre' => 'Nueva Esparta', 'id_municipio' => 43, 'codigo' => '11'],
            ['id' => 256, 'nombre' => 'Pasaquina', 'id_municipio' => 43, 'codigo' => '12'],
            ['id' => 257, 'nombre' => 'Polorós', 'id_municipio' => 43, 'codigo' => '13'],
            ['id' => 258, 'nombre' => 'San Alejo', 'id_municipio' => 44, 'codigo' => '14'],
            ['id' => 259, 'nombre' => 'San José', 'id_municipio' => 43, 'codigo' => '15'],
            ['id' => 260, 'nombre' => 'Santa Rosa De Lima', 'id_municipio' => 43, 'codigo' => '16'],
            ['id' => 261, 'nombre' => 'Yayantique', 'id_municipio' => 44, 'codigo' => '17'],
            ['id' => 262, 'nombre' => 'Yucuaquín', 'id_municipio' => 44, 'codigo' => '18'],
        ];

        DB::table('ctl_distrito')->upsert($distritos, ['id']);
    }
}
