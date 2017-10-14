<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('item')->get()->count() == 0){
            DB::table('item')->insert([
                /* TODO HONDA */
                /* NOTE Cortacesped */
                [
                    'id' => '1',
                    'name' => 'HRE 330',
                    'short_name' => 'HRE330',
                    'short_description' => 'Cortacésped eléctrico Honda HRE330, económico, fácil y ligero, para jardines pequeños. Con portacables, cuchilla inteligente y protección contra sobre calentamiento.',
                    'description' => 'El cortacésped Honda IZY41P cuenta con todas las ventajas tecnológicas de la gama Honda IZY, como la exclusiva cuchilla perforada de diseño patentado con 8 ranuras y forma Vortex. Gracias al flujo de aire se controla el nivel sonoro (30% menor). Además, ha sido fabricada con un material inteligente que se dobla al ser golpeada. De esta manera se evita que se rompa la carcasa o se doble el eje del motor. En caso de golpe, sólo se tendrá de sustituir la cuchilla',
                    'price' => 189,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '2',
                    'name' => 'HRE 370',
                    'short_name' => 'HRE370',
                    'short_description' => 'Cortacésped eléctrico Honda HRE370, económico, fácil y ligero, para jardines pequeños. Con portacables, cuchilla inteligente y protección contra sobre calentamiento.',
                    'description' => 'La ergonomía también se ha mejorado significativamente respecto a los anteriores modelos de cortacéspedes eléctricos Honda. Se ha añadido un asa para facilitar el transporte, así como un nuevo interruptor más confortable que puede accionarse con ambas manos. Además, los cables quedan recogidos con un nuevo soporte, alejándolos de la cuchilla. Es una máquina muy ligera y por lo tanto, muy fácil de utilizar. El cortacésped eléctrico Honda HRE370 incorpora un portacables de diseño inteligente que libera la tensión del cable. Igualmente, impide que se pueda cortar mientras se trabaja y que el usuario pueda tropezar con él.',
                    'price' => 295,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '3',
                    'name' => 'IZY 41 P',
                    'short_name' => 'IZY41P',
                    'short_description' => 'Cortacésped Honda IZY41P muy fácil de usar, avance manual, estárter automático, chasis de acero, potente y silencioso, la mejor calidad de corte y recogida.',
                    'description' => 'El cortacésped Honda IZY41P cuenta con todas las ventajas tecnológicas de la gama Honda IZY, como la exclusiva cuchilla perforada de diseño patentado con 8 ranuras y forma Vortex. Gracias al flujo de aire se controla el nivel sonoro (30% menor). Además, ha sido fabricada con un material inteligente que se dobla al ser golpeada. De esta manera se evita que se rompa la carcasa o se doble el eje del motor. En caso de golpe, sólo se tendrá de sustituir la cuchilla.',
                    'price' => 399,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '4',
                    'name' => 'IZY 46 P',
                    'short_name' => 'IZY46P',
                    'short_description' => 'Cortacésped Honda IZY46P muy fácil de usar, avance manual, estárter automático, chasis de acero, potente y silencioso, la mejor calidad de corte y recogida.',
                    'description' => 'Tener un césped limpio, sano y bien cortado no es complicado. La clave está en un buen cortacésped y la ilusión por mantener tu jardín perfecto. Honda reúne todos estos aspectos en la mejor gama de cortacéspedes disponibles hoy día en el mercado. En su corazón late el potente y mundialmente reconocido motor Honda de 4 tiempos, con el que tu cortacésped arrancará siempre a la primera, consumirá menos combustible y protegerá el medio ambiente. Los cortacéspedes Honda marcan la diferencia por su tecnología, prestaciones y diseño innovador. Los mejores materiales y las características más innovadoras, siempre pensando en hacer la vida más fácil. Honda es la marca número 1 de jardinería en Europa y cuenta con miles de felices usuarios, satisfechos con su elección. No lo dudes y forma parte del club.',
                    'price' => 649,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '5',
                    'name' => 'IZI 41 S',
                    'short_name' => 'IZY41S',
                    'short_description' => 'Cortacésped Honda IZY41S muy fácil de usar, autopropulsado, mulching opcional, estárter automático, chasis de acero, la mejor calidad de corte y recogida.',
                    'description' => 'El cortacésped Honda IZY41S cuenta con todas las ventajas tecnológicas de la gama Honda IZY, como la exclusiva cuchilla perforada de diseño patentado con 8 ranuras y forma Vortex. Gracias al flujo de aire se controla el nivel sonoro (30% menor). Además, ha sido fabricada con un material inteligente que se dobla al ser golpeada. De esta manera se evita que se rompa la carcasa o se doble el eje del motor. En caso de golpe, sólo se tendrá de sustituir la cuchilla.',
                    'price' => 495,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '6',
                    'name' => 'IZY 46 S',
                    'short_name' => 'IZY46S',
                    'short_description' => 'Cortacésped Honda IZY46S muy fácil de usar, autopropulsado, mulching versamow selective, estárter automático, chasis de acero, excelente corte y recogida.',
                    'description' => 'Como es habitual en los cortacéspedes Honda, éstos incorporan siempre la tecnología más innovadora y exclusiva. En este caso, el cortacésped Honda IZY46S disfruta del sistema Mulching Versamow Selective, que permite al usuario escoger fácilmente y de manera autónoma si quiere recoger la hierba cortada o prefiere cortar tipo mulching y que los restos caigan directamente al césped, convirtiéndose en abono natural.',
                    'price' => 698,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '7',
                    'name' => 'IZY 53 S',
                    'short_name' => 'IZY53S',
                    'short_description' => 'Cortacésped Honda IZY53S muy fácil de usar, autopropulsado, mulching opcional, estárter automático, chasis de acero, la mejor calidad de corte y recogida.',
                    'description' => 'La carcasa del cortacésped Honda IZY53S es de acero, robusta, redondeada y con tratamiento anticorrosión. Fácil de limpiar. Su exclusivo diseño redondeado con ventilación trasera, consistente en un sistema patentado de ranuras en la carcasa y ángulo del chasis respecto al suelo, ayuda a mejorar la calidad de recogida del césped. Todo ello, con un nivel de ruido mucho más bajo del que podrías imaginar. Su nivel de ruido es de -2dB(A) LWA por debajo de la actual regulación europea de emisión de ruidos.',
                    'price' => 895,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '8',
                    'name' => 'IZY 53 PREMIUM',
                    'short_name' => 'IZY53PREMIUM',
                    'short_description' => 'Cortacésped Honda IZY41P muy fácil de usar, avance manual, estárter automático, chasis de acero, potente y silencioso, la mejor calidad de corte y recogida.',
                    'description' => 'El cortacésped Honda IZY41P cuenta con todas las ventajas tecnológicas de la gama Honda IZY, como la exclusiva cuchilla perforada de diseño patentado con 8 ranuras y forma Vortex. Gracias al flujo de aire se controla el nivel sonoro (30% menor). Además, ha sido fabricada con un material inteligente que se dobla al ser golpeada. De esta manera se evita que se rompa la carcasa o se doble el eje del motor. En caso de golpe, sólo se tendrá de sustituir la cuchilla.',
                    'price' => 1075,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '9',
                    'name' => 'HRX 476 VYE',
                    'short_name' => 'HRX476VYE',
                    'short_description' => 'Cortacésped Honda HRX476VYE, estárter automático, jardines medios o grandes, sistema de corte Versamow® y avance automático Smart Drive®.',
                    'description' => 'El cortacésped Honda HRX476VYE incorpora el innovador sistema Smart Drive® de Honda para el cambio de velocidades. Este exclusivo sistema permite regular la velocidad de manera progresiva y precisa simplemente apoyando las manos en el manillar. El cortacésped es realmente autopropulsado, no es necesario empujarlo, avanza por sí solo y resulta extraordinariamente fácil y confortable para el usuario.',
                    'price' => 1199,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '10',
                    'name' => 'HRX 476 HYE',
                    'short_name' => 'HRX476HYE',
                    'short_description' => 'Cortacésped Honda HRX476HYE, estárter automático, jardines medios o grandes, sistema de corte Versamow® y transmisión hidrostática.',
                    'description' => 'El cortacésped Honda HRX476VYE incorpora el innovador sistema Smart Drive® de Honda para el cambio de velocidades. Este exclusivo sistema permite regular la velocidad de manera progresiva y precisa simplemente apoyando las manos en el manillar. El cortacésped es realmente autopropulsado, no es necesario empujarlo, avanza por sí solo y resulta extraordinariamente fácil y confortable para el usuario.',
                    'price' => 1449,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '11',
                    'name' => 'HRX 537 VYE',
                    'short_name' => 'HRX537VYE',
                    'short_description' => 'Cortacésped Honda HRX 537 VYE, estárter automático, jardines medios o grandes, sistema de corte Versamow® y avance automático Smart Drive®.',
                    'description' => 'El cortacésped HRX537VYE está equipado con chasis de Xenoy®. Se trata de una resina de alta resistencia utilizada en la fabricación de los parachoques de automóviles de gama alta. Es un material de extrema durabilidad y presenta una resistencia frente a los golpes muy superior a las carcasas de polipropileno estándar.',
                    'price' => 1440,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '12',
                    'name' => 'HRX 537 HYE',
                    'short_name' => 'HRX537HYE',
                    'short_description' => 'Cortacésped Honda HRX 537 VYE, estárter automático, jardines medios o grandes, sistema de corte Versamow® y avance automático Smart Drive®.',
                    'description' => 'El cortacésped HRX537VYE está equipado con chasis de Xenoy®. Se trata de una resina de alta resistencia utilizada en la fabricación de los parachoques de automóviles de gama alta. Es un material de extrema durabilidad y presenta una resistencia frente a los golpes muy superior a las carcasas de polipropileno estándar.',
                    'price' => 1590,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '13',
                    'name' => 'HRD 536 CTX',
                    'short_name' => 'HRD536CTX',
                    'short_description' => 'Cortacésped Honda HRD536CTX, fiabilidad profesional para el particular, autopropulsado, carcasa aluminio, jardines medianos y grandes, Rotostop®, mulching opcional.',
                    'description' => 'El cortacésped Honda HRD536CTX incorpora el exclusivo sistema de seguridad Rotostop BBC®, que detiene el giro de la cuchilla del cortacésped sin necesidad de parar el motor y evita accidentes por proyección de piedras o manipulación indebida. Es un sistema que aporta seguridad a la vez que comodidad, ya que como usuario no tendrás que parar y arrancar el motor cada vez que te detengas a vaciar el recogedor.',
                    'price' => 1399,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '14',
                    'name' => 'HRD 536 HXE',
                    'short_name' => 'HRD536HXE',
                    'short_description' => 'Cortacésped Honda HRD536HXE, fiabilidad profesional para el particular, transmisión hidrostática, carcasa aluminio, jardines medianos y grandes, Rotostop®, mulching opcional.',
                    'description' => 'El cortacésped Honda HRD 536 HXE incorpora el exclusivo sistema de seguridad Rotostop BBC®, que detiene el giro de la cuchilla del cortacésped sin necesidad de parar el motor y evita accidentes por proyección de piedras o manipulación indebida. Es un sistema que aporta seguridad a la vez que comodidad, ya que como usuario no tendrás que parar y arrancar el motor cada vez que te detengas a vaciar el recogedor.',
                    'price' => 1998,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '15',
                    'name' => 'HRH 536 HXE',
                    'short_name' => 'HRH536HXE',
                    'short_description' => 'Cortacésped Honda HRH536HXE, uso profesional, transmisión hidrostática, carcasa aluminio reforzado, eje de transmisión protegido, mulching opcional.',
                    'description' => 'El cortacésped Honda HRH536HXE está equipado con un saco de recogida de gran capacidad que te harán ahorrar viajes para vaciar la bolsa. Está fabricado en Dralon®, que es un material sintético de alta resistencia y altas propiedades que le confieren gran duración, resistencia al desgaste y a la radiación UV. Incluye filtro antipolvo.
                    La cuchilla ha sido fabricada con un material inteligente que se dobla al ser golpeada. De esta manera se evita que se rompa la carcasa o se doble el eje del motor. En caso de golpe, sólo se tendrá de sustituir la cuchilla. Además, su exclusivo diseño reduce el nivel de ruido un 30%, comparándolo con sus más directos competidores. Esto permite trabajar cómodamente y sin causar molestias al vecindario.
                    Dispone de regulación independiente de la altura de corte, con 7 posiciones a escoger según el estado del césped, y kit de mulching opcional para que la hierba cortada sea finamente triturada antes de que caiga al suelo de nuevo. Con esta técnica ahorras tiempo y disfrutarás de un césped impecable además de que lo proteges de sufrir deshidratación.',
                    'price' => 2299,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '16',
                    'name' => 'HRH 536 QXE',
                    'short_name' => 'HRH536QXE',
                    'short_description' => 'Cortacésped Honda HRH536QXE, uso profesional, transmisión hidrostática, carcasa aluminio reforzado, eje de transmisión protegido, versión rodillo.',
                    'description' => 'El cortacésped Honda HRH 536 QXE está equipado con un saco de recogida de gran capacidad que te harán ahorrar viajes para vaciar la bolsa. Está fabricado en Dralon®, que es un material sintético de alta resistencia y altas propiedades que le confieren gran duración, resistencia al desgaste y a la radiación UV. Incluye filtro antipolvo.
                    La cuchilla ha sido fabricada con un material inteligente que se dobla al ser golpeada. De esta manera se evita que se rompa la carcasa o se doble el eje del motor. En caso de golpe, sólo se tendrá de sustituir la cuchilla. Además, su exclusivo diseño reduce el nivel de ruido un 30%, comparándolo con sus más directos competidores. Esto permite trabajar cómodamente y sin causar molestias al vecindario.
                    Dispone de regulación independiente de la altura de corte, con 7 posiciones a escoger según el estado del césped, y kit de mulching opcional para que la hierba cortada sea finamente triturada antes de que caiga al suelo de nuevo. Con esta técnica ahorras tiempo y disfrutarás de un césped impecable además de que lo proteges de sufrir deshidratación.',
                    'price' => 2360,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '81',
                    'name' => 'HRS 536 CSD',
                    'short_name' => 'HRS536CSD',
                    'short_description' => 'Cortacésped Honda HRS536C, profesional, expulsión lateral o corte mulching, sin bolsa de recogida, autopropulsado, chasis acero, ligero y manejable.',
                    'description' => 'Tener un césped limpio, sano y bien cortado no es complicado. La clave está en un buen cortacésped y la ilusión por mantener tu jardín perfecto. Honda reúne todos estos aspectos en la mejor gama de cortacéspedes disponibles hoy día en el mercado. En su corazón late el potente y mundialmente reconocido motor Honda de 4 tiempos, con el que tu cortacésped arrancará siempre a la primera, consumirá menos combustible y protegerá el medio ambiente.',
                    'price' => 890,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '84' ,
                    'name' => 'HF 1211 H',
                    'short_name' => 'HF1211H',
                    'short_description' => 'Cortacésped de asiento Honda HF1211H, tipo rider, transmisión hidrostática, deflector y mulching opcional, comodidad y seguridad.',
                    'description' => 'El cortacésped de asiento HF1211H incorpora una carcasa de corte multifunción, tres en una, que permite adaptar el tipo de siega a tus necesidades y al tipo de terreno. Si no quieres recoger la hierba cortada, te ofrece dos alternativas: expulsión trasera o corte tipo mulching.' ,
                    'price' => 3442,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '85' ,
                    'name' => 'HF 2315 SB',
                    'short_name' => 'HF2315SB',
                    'short_description' => 'Cortacésped de asiento Honda HF2315SB, transmisión mecánica, deflector y mulching opcional, Optiflow, comodidad y seguridad.',
                    'description' => 'Si optas por recoger, debes saber que el cortacésped de asiento HF2315SB incorpora el exclusivo sistema “OptiFlow", que ofrece el mejor rendimiento de recogida de Honda incluso en las condiciones más exigentes. “OptiFlow” combina una potente aspiración con el control de la turbulencia, para reducir la pérdida de potencia, el ruido y los atascos.' ,
                    'price' => 4175,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '86' ,
                    'name' => 'HF 2315 HM',
                    'short_name' => 'HF2315HM',
                    'short_description' => 'Cortacésped de asiento Honda HF2315HM, transmisión hidrostática, deflector y mulching opcional, Optiflow, comodidad y seguridad.',
                    'description' => 'Tener un césped limpio, sano y bien cortado no es complicado. La clave está en un buen cortacésped y la ilusión por mantener tu jardín perfecto. Honda reúne todos estos aspectos en la mejor gama de cortacéspedes disponibles hoy día en el mercado. En su corazón late el potente y mundialmente reconocido motor Honda de 4 tiempos, con el que tu cortacésped arrancará siempre a la primera, consumirá menos combustible y protegerá el medio ambiente.' ,
                    'price' => 4495,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '87' ,
                    'name' => 'HF 2417 HM',
                    'short_name' => 'HF2417HM',
                    'short_description' => 'Cortacésped de asiento Honda HF2417HM, transmisión hidrostática, Versamow System, Optiflow, versión Premium, mayor comodidad y seguridad.',
                    'description' => 'El cortacésped de asiento HF2417HM está equipado con cambio hidrostático, que permite variar la velocidad de avance a las necesidades del trabajo y a la dificultad del terrero, sólo desplazando una palanca. Con la transmisión hidrostática, tu cortacésped de asiento funcionará de forma similar a un automóvil con cambio automático.
                    Con el motor en marcha, arrancas y regulas la velocidad de avance según las condiciones del terreno, simplemente con la presión del pie sobre el pedal. El pedal de marcha atrás queda perfectamente diferenciado para evitar accidentes por errores de maniobra.' ,
                    'price' => 5945,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '88' ,
                    'name' => 'HF 2622 HM',
                    'short_name' => 'HF2622HM',
                    'short_description' => 'Cortacésped de asiento Honda HF2622HM, transmisión hidrostática, Versamow System, Optiflow, versión Premium, mayor potencia, comodidad y seguridad.',
                    'description' => 'Tener un césped limpio, sano y bien cortado no es complicado. La clave está en un buen cortacésped y la ilusión por mantener tu jardín perfecto. Honda reúne todos estos aspectos en la mejor gama de cortacéspedes disponibles hoy día en el mercado. En su corazón late el potente y mundialmente reconocido motor Honda de 4 tiempos, con el que tu cortacésped arrancará siempre a la primera, consumirá menos combustible y protegerá el medio ambiente.
                    El cortacésped de asiento HF 2622 HM se beneficia de un nuevo diseño del capó y de los faros, mejorando la durabilidad y rigidez del conjunto. Incorpora un eje de hierro fundido, así como un nuevo parachoques de acero para la protección contra obstáculos como ramas y arbustos.' ,
                    'price' => 6995,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '89' ,
                    'name' => 'Miimo HRM 310',
                    'short_name' => 'MiimoHRM310',
                    'short_description' => 'Si lo que quieres es un césped perfecto sin preocuparte de nada, el Honda Miimo 310 es la solución ideal. Para jardines de cualquier medida, hasta un máximo de 2.000 m2. Instalación no incluida en el precio.',
                    'description' => 'Miimo es nuestro robot cortacésped, inteligente y completamente autónomo que puede cuidar tu césped sin ninguna ayuda. Alimentado con baterías, Miimo es capaz de recargarse y adaptar sus sesiones de trabajo a conveniencia. Desde jardines simples hasta zonas complejas con parterres,  irregulares  o con pendientes,  Miimo te ayudará a conseguir un césped perfecto mientras tú disfrutas de tu tiempo libre haciendo las cosas que más te gustan. Encuentra el Honda Miimo adecuado para tu jardín.' ,
                    'price' => 2395,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '90' ,
                    'name' => 'Miimo HRM 520',
                    'short_name' => 'MiimoHRM520',
                    'short_description' => 'Si lo que quieres es un césped perfecto sin preocuparte de nada, el Honda Miimo 520 es la solución ideal. Para jardines de cualquier medida, hasta un máximo de 3.000 m2. Instalación no incluida en el precio.',
                    'description' => 'Miimo es nuestro robot cortacésped, inteligente y completamente autónomo que puede cuidar tu césped sin ninguna ayuda. Alimentado con baterías, Miimo es capaz de recargarse y adaptar sus sesiones de trabajo a conveniencia. Desde jardines simples hasta zonas complejas con parterres,  irregulares  o con pendientes,  Miimo te ayudará a conseguir un césped perfecto mientras tú disfrutas de tu tiempo libre haciendo las cosas que más te gustan. Encuentra el Honda Miimo adecuado para tu jardín.' ,
                    'price' => 2995,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                [
                    'id' => '91' ,
                    'name' => 'Miimo HRM 3000',
                    'short_name' => 'MiimoHRM3000',
                    'short_description' => 'Si lo que quieres es un césped perfecto sin preocuparte de nada, el Honda Miimo HRM 3000 es la solución ideal. Para jardines de cualquier medida, hasta un máximo de 4.000 m2. Instalación no incluida en el precio.',
                    'description' => 'Miimo convierte los recortes de hierba en partículas diminutas que traspasan el césped  y actúan como un fertilizante natural. Así que no hay nada que recoger. Si se programa para cortar el césped con regularidad, el Miimo maximiza los beneficios del mulching, garantizando así  un césped perfecto y saludable.
                    Al cortar la hierba en partículas tan diminutas, éstas alimentan el suelo de manera mucho más rápida.
                    El robot cortacésped Honda Miimo es capaz de cortar en pendientes de hasta el 47% gracias a su alto nivel de tracción y agarre. Nunca se atascará en un agujero o terreno irregular, gracias a sus sensores de elevación de reacción rápida. Su sensor de dirección exclusivo le permite mantener la trayectoria incluso en pendientes.' ,
                    'price' => 3399,
                    'id_category' => '10',
                    'id_patent' => '1'
                ],
                /* NOTE DESBROZADORA */
                [
                    'id' => '17',
                    'name' => 'UM 526',
                    'short_name' => 'UM526',
                    'short_description' => 'Desbrozadora de ruedas Honda UM526, profesional, velocidad variable, manillar ajustable y desplazable, chasis de acero, rueda frontal giratoria.',
                    'description' => 'La desbrozadora de ruedas Honda UM526 es la más pequeña de la gama, pero no por ello deja de ofrecer un rendimiento profesional. Es muy fácil de usar y permite cortar sin dificultad hierba o maleza alta.',
                    'price' => 1368,
                    'id_category' => '3',
                    'id_patent' => '1'
                ],
                [
                    'id' => '18',
                    'name' => 'UM 536',
                    'short_name' => 'UM536',
                    'short_description' => 'Desbrozadora de ruedas Honda UM536, profesional, autopropulsada, carcasa flotante, embrague de cuchilla, rueda delantera giratoria.',
                    'description' => 'Las ruedas de gran diámetro proporcionan una excelente tracción y la estabilidad al aumentar la superficie de contacto con el suelo. El diseño específico del neumático maximiza el agarre. Incorporan rodamiento de bolas que facilitan enormemente las maniobras. La rueda delantera giratoria aporta mayor movilidad y equilibrio en sus tareas. Puede hacer giros de 360º y también se puede bloquear cuando trabajas en pendientes o en línea recta. Todas estas prestaciones permiten que el usuario pueda realizar una larga jornada de trabajo sin cansarse.',
                    'price' => 3415,
                    'id_category' => '3',
                    'id_patent' => '1'
                ],
                [
                    'id' => '19',
                    'name' => 'UM 616',
                    'short_name' => 'UM616',
                    'short_description' => 'Desbrozadora de ruedas Honda UM616, profesional, autopropulsada, transmisión hidrostática, carcasa flotante, embrague de cuchilla, rueda delantera giratoria.',
                    'description' => 'La desbrozadora de ruedas Honda UM616 ofrece un rendimiento profesional. Es muy fácil de usar y permite cortar sin dificultad hierba o maleza alta. Está equipada con carcasa flotante, por lo que la mitad de la carcasa se levanta hacia arriba para cortar eficazmente cualquier hierba desde la base.
                    La calidad de corte es excepcional. Incluye embrague de cuchilla, para una mayor seguridad, y freno de tambor en ambas ruedas traseras, que garantizan el frenado incluso en fuertes pendientes, mejorando el control y la maniobrabilidad. La carcasa de acero es resistente a golpes y con tratamiento de cataforesis tratada para la prevenir la oxidación, la corrosión y el desgaste por los rayos UV. Con deflector lateral.',
                    'price' => 4100,
                    'id_category' => '3',
                    'id_patent' => '1'
                ],
                [
                    'id' => '20',
                    'name' => 'UM 659',
                    'short_name' => 'UM659',
                    'short_description' => 'Desbrozadora de ruedas Honda UM 659, motor Honda GXV340, profesional, forestal, autopropulsada, patines desplazamiento, ruedas anti pinchazos.',
                    'description' => 'La desbrozadora de ruedas Honda UM659 está especialmente indicada para el uso profesional forestal, permitiendo el mantenimiento de cualquier terreno. Gracias a su transmisión de 3 velocidades + 1 marcha atrás y bloqueo de diferencial, puede desplazarse por los terrenos más complicados.
                    Es muy fácil de usar y permite cortar sin dificultad hierba o maleza alta en cualquier tipo de terreno o situación, con una calidad y rendimiento de corte excepcionales. Los patines de la carcasa de corte facilitan el desplazamiento sobre la hierba y rmiten la instalación opcional de ruedas.',
                    'price' => 4780,
                    'id_category' => '3',
                    'id_patent' => '1'
                ],
                [
                    'id' => '75',
                    'name' => 'UMS 425 E1 LE',
                    'short_name' => 'UMS425E1LE',
                    'short_description' => 'El cortabordes Honda UMS425 es el ideal para tu jardín. Si te gusta el trabajo bien hecho, no olvides repasar los bordes de tu césped. Te sorprenderá su corte limpio y eficaz. FICHA TÉCNICA Tipo de motor GX 25 Cilindrada 25 cm³ Potencia nominal 0,72 kW (0,98 cv) Depósito de gasolina Euro 95 0,58 litros Arranque Manual Sistema antivibración Doble Embrague Centrífugo Manillar Simple Diámetro del tubo 24 mm Peso (en seco) 5,4 Kg (sin accesorio)',
                    'description' => 'El cortabordes Honda UMS425 es el ideal para tu jardín. Si te gusta el trabajo bien hecho, no olvides repasar los bordes de tu césped. Te sorprenderá su corte limpio y eficaz. FICHA TÉCNICA Tipo de motor GX 25 Cilindrada 25 cm³ Potencia nominal 0,72 kW (0,98 cv) Depósito de gasolina Euro 95 0,58 litros Arranque Manual Sistema antivibración Doble Embrague Centrífugo Manillar Simple Diámetro del tubo 24 mm Peso (en seco) 5,4 Kg (sin accesorio)',
                    'price' => 349,
                    'id_category' => '3',
                    'id_patent' => '1'
                ],
                [
                    'id' => '76',
                    'name' => 'UMK 425 UE',
                    'short_name' => 'UMK425UE',
                    'short_description' => 'Desbrozadora Honda UMK 425 UE con mini motor Honda 4 tiempos de menor consumo, ruido y emisiones. Corte limpio, fácil y eficaz. Manillar doble.',
                    'description' => 'La desbrozadora Honda UMK 425 UE incorpora un cabezal de nailon semiautomático “Tap&Go” de serie. Es el más cómodo para trabajar, ya que con un solo golpe en el suelo expulsa la cantidad de hilo necesaria. Es ideal tanto para el usuario particular como para profesionales con muchas horas de trabajo continuo.',
                    'price' => 448,
                    'id_category' => '3',
                    'id_patent' => '1'
                ],
                [
                    'id' => '77',
                    'name' => 'UMK 425 LE',
                    'short_name' => 'UMK425LE',
                    'short_description' => 'Desbrozadora Honda UMK 425 LE con mini motor Honda 4 tiempos de menor consumo, ruido y emisiones. Corte limpio, fácil y eficaz. Manillar simple.',
                    'description' => 'La desbrozadora Honda UMK 425 LE incorpora un cabezal de nailon semiautomático “Tap&Go” de serie. Es el más cómodo para trabajar, ya que con un solo golpe en el suelo expulsa la cantidad de hilo necesaria. Es ideal tanto para el usuario particular como para profesionales con muchas horas de trabajo continuo.',
                    'price' => 365,
                    'id_category' => '3',
                    'id_patent' => '1'
                ],
                [
                    'id' => '78',
                    'name' => 'UMK 435 UE',
                    'short_name' => 'UMK435UE',
                    'short_description' => 'Desbrozadora Honda UMK 435 UE con mini motor Honda 4 tiempos de menor consumo, ruido y emisiones. Corte limpio, fácil y eficaz. Manillar doble.',
                    'description' => 'La desbrozadora Honda UMK 435 UE incorpora un cabezal de nailon semiautomático “Tap&Go” de serie. Es el más cómodo para trabajar, ya que con un solo golpe en el suelo expulsa la cantidad de hilo necesaria. Es ideal tanto para el usuario particular como para profesionales con muchas horas de trabajo continuo.
                    Su especial diseño con barra ligera, a la vez que reforzada, y manillar doble articulado y ajustable sin necesidad de herramientas, permite trabajar con disco metálico en la posición más cómoda y adecuada para el usuario. La empuñadura ergonómica tiene una forma totalmente adaptada a la mano del usuario y está recubierto de un material suave exclusivo “soft skin”, de plástico inyectado y con revestimiento de caucho, para un excelente agarre, a la vez que reduce la fatiga y las vibraciones.',
                    'price' => 628,
                    'id_category' => '3',
                    'id_patent' => '1'
                ],
                [
                    'id' => '79',
                    'name' => 'UMK 435 LE',
                    'short_name' => 'UMK435LE',
                    'short_description' => 'Desbrozadora Honda UMK 435 LE con mini motor Honda 4 tiempos de menor consumo, ruido y emisiones. Corte limpio, fácil y eficaz. Manillar simple.',
                    'description' => 'La desbrozadora Honda UMK 435 LE incorpora un cabezal de nailon semiautomático “Tap&Go” de serie. Es el más cómodo para trabajar, ya que con un solo golpe en el suelo expulsa la cantidad de hilo necesaria. Es ideal tanto para el usuario particular como para profesionales con muchas horas de trabajo continuo.',
                    'price' => 510,
                    'id_category' => '3',
                    'id_patent' => '1'
                ],
                [
                    'id' => '80',
                    'name' => 'UMR 435 LG',
                    'short_name' => 'UMR435LG',
                    'short_description' => 'Desbrozadora de mochila Honda UMK 435 LG con mini motor Honda 4 tiempos de menor consumo, ruido y emisiones. Ligera y cómoda. Especial trabajo en pendientes.',
                    'description' => 'La desbrozadora Honda UMR 435 LG incorpora un cabezal de nailon semiautomático “Tap&Go” de serie. Es el más cómodo para trabajar, ya que con un solo golpe en el suelo expulsa la cantidad de hilo necesaria. Es ideal tanto para el usuario particular como para profesionales con muchas horas de trabajo continuo.
                    La desbrozadora de mochila Honda UMR425 LG resulta ideal para zonas complicadas, de difícil acceso o con pendientes pronunciadas, así como en espacios reducidos del jardín. Ha sido diseñada pensando en la comodidad del usuario y para una óptima maniobrabilidad y confort. Su montura anti vibraciones, su mochila ergonómica y su reducido peso hacen de esta máquina la estrella del mercado.',
                    'price' => 894,
                    'id_category' => '3',
                    'id_patent' => '1'
                ],
                [
                    'id' => '102' ,
                    'name' => 'HHTE 38 BE',
                    'short_name' => 'HHTE38BE',
                    'short_description' => 'La desbrozadora de batería Honda HHTE38BE es ideal para el mantenimiento de espacios con vegetación densa, hierba alta y maleza persistente (batería y cargador no incluidos).',
                    'description' => 'Las nuevas herramientas de jardinería Honda son máquinas robustas, potentes y de alta tecnología. Con todo, son increíblemente ligeras, silenciosas y fáciles de manejar, ofreciendo al usuario un mayor control y una importante reducción de la fatiga.' ,
                    'price' => 278,
                    'id_category' => '3',
                    'id_patent' => '1'
                ],
                [
                    'id' => '103' ,
                    'name' => 'KIT HHTE 38 BE + HBP 20 AH + HBC 210 WE',
                    'short_name' => 'KITHHTE38BE_HBP20AH_HBC210WE',
                    'short_description' => 'La desbrozadora de batería Honda HHTE38BE es ideal para el mantenimiento de espacios con vegetación densa, hierba alta y maleza persistente (batería y cargador incluidos).',
                    'description' => 'Las nuevas herramientas de jardinería Honda son máquinas robustas, potentes y de alta tecnología. Con todo, son increíblemente ligeras, silenciosas y fáciles de manejar, ofreciendo al usuario un mayor control y una importante reducción de la fatiga.' ,
                    'price' => 495,
                    'id_category' => '3',
                    'id_patent' => '1'
                ],
                [
                    'id' => '104' ,
                    'name' => 'KIT HHTE 38 BE + HBP 20 AH + HBC 550 WE',
                    'short_name' => 'KITHHTE38BE_HBP20AH_HBC550WE',
                    'short_description' => 'La desbrozadora de batería Honda HHTE38BE es ideal para el mantenimiento de espacios con vegetación densa, hierba alta y maleza persistente (batería y cargador incluidos).',
                    'description' => 'Las nuevas herramientas de jardinería Honda son máquinas robustas, potentes y de alta tecnología. Con todo, son increíblemente ligeras, silenciosas y fáciles de manejar, ofreciendo al usuario un mayor control y una importante reducción de la fatiga.
                    Las baterías de alta calidad Honda HPB20AH son de iones de litio y se caracterizan por su alta densidad energética. Gozan de una tecnología patentada de enfriamiento de las celdas que garantiza una mayor autonomía y miles de ciclos de carga/descarga sin sufrir ninguna alteración en su rendimiento. Cada batería incluye un indicador de autonomía.' ,
                    'price' => 529,
                    'id_category' => '3',
                    'id_patent' => '1'
                ],
                /* NOTE BARREDORA */
                [
                    'id' => '22',
                    'name' => 'FG 201 B',
                    'short_name' => 'FG201B',
                    'short_description' => 'Barredora Honda FG 201 B con cepillos diseñados para el mantenimiento o regeneración de todo tipo de céspedes artificiales. Ideal para las pistas de pádel.',
                    'description' => 'Con la barredora Honda FG 201 B podrás barrer cualquier superficie con polvo, arena, etc. con facilidad y comodidad. Es la máquina ideal para el matenimiento del césped artificial, que se recomienda limpiarlo una vez al año.
                    Además, la barredora Honda FG 201 B te permite eliminar facilmente las partículas extrañas que haya en su superficie y el polvillo verde proveniente del desgaste de la fibra, al tiempo que limpias toda la suciedad que está mezclada con la arena.',
                    'price' => 1495,
                    'id_category' => '15',
                    'id_patent' => '1'
                ],
                /*  NOTE REGENERADOR */
                [
                    'id' => '23',
                    'name' => 'RH 390',
                    'short_name' => 'RH390',
                    'short_description' => 'Consigue un césped sano pasando un par de veces al año el regenerador Honda RH390. Máxima resistencia gracias a su carcasa metálica y potente motor Honda.',
                    'description' => 'Consigue un jardín sano gracias al regenerador RH390 y no permitas que nada estropee tu bonito césped. Recuerda regenerarlo una o dos veces al año: los momentos idóneos son entre febrero-marzo y septiembre-octubre.
                    La regeneración del césped consiste en pasar el regenerador, el cual gracias a sus 27 cuchillas flotantes va sacando las hojas muertas y el fieltro que se ha ido acumulando debido a los restos vegetales (tierra, restos de raíces y de hojas) y que impiden que el agua y el abono se filtren correctamente y que el césped se airee
                    Superficie aconsejable de trabajo: 5.000 m2.',
                    'price' => 990,
                    'id_category' => '16',
                    'id_patent' => '1'
                ],
                [
                    'id' => '24',
                    'name' => 'RH 480',
                    'short_name' => 'RH480',
                    'short_description' => 'Si eres un profesional de la jardinería, aquí tienes tu regenerador: el Honda RH480. Potente, robusto y fiable, con nuevo sistema de cuchillas flotantes.',
                    'description' => 'Consiguirás un jardín sano y bonito gracias al regenerador RH480 . Recuerda regenerarlo una o dos veces al año: los momentos idóneos son entre febrero-marzo y septiembre-octubre.
                    La regeneración del césped consiste en pasar el regenerador, el cual gracias a sus 33 cuchillas flotantes va sacando las hojas muertas y el fieltro que se ha ido acumulando debido a los restos vegetales (tierra, restos de raíces y de hojas) y que impiden que el agua y el abono se filtren correctamente y que el césped se airee.
                    Superficie aconsejable de trabajo: 5.000 m2.',
                    'price' => 1465,
                    'id_category' => '16',
                    'id_patent' => '1'
                ],
                [
                    'id' => '25',
                    'name' => 'RH 700',
                    'short_name' => 'RH700',
                    'short_description' => 'El regenerador ideal para el regenerado de grandes áreas. Las cuchillas flotantes del Honda RH700 consiguen eliminar de una sola pasada las raíces, hierba, malezas y musgo.',
                    'description' => 'Las cuchillas flotantes consiguen eliminar de una sola pasada las raíces, hierba, malezas y musgo que pueden estropear tu césped.Esta es la única forma de asegurar un césped sano y cuidado.El regenerador RH 700, por su ancho de trabajo de 60 cm, sus 38 cuchillas flotantes y su potencia es ideal para el regenerado de grandes áreas (hasta 8.000 m2).
                    La regeneración del césped consiste en pasar el regenerador , el cual gracias a sus cuchillas flotantes va sacando las hojas muertas y el fieltro que se ha ido acumulando debido a los restos vegetales (tierra, restos de raíces y de hojas) y que impiden que el agua y el abono se filtren correctamente y que el césped se airee.',
                    'price' => 1720,
                    'id_category' => '16',
                    'id_patent' => '1'
                ],
                [
                    'id' => '82',
                    'name' => 'RH 370',
                    'short_name' => 'RH370',
                    'short_description' => 'Regenerador RH370, motor Honda GP160, uso particular o profesional, con recogedor y chasis de acero, para airear y regenerar el césped de pequeños jardines.',
                    'description' => 'Consigue un jardín sano gracias al regenerador RH370 y no permitas que nada estropee tu bonito césped. La regeneración del césped consiste en pasar el regenerador, el cual gracias a sus 15 cuchillas fijas va sacando las hojas muertas y el fieltro que se ha ido acumulando debido a los restos vegetales (tierra, restos de raíces y de hojas). Éstos impiden que el agua y el abono se filtren correctamente y que el césped se airee. Recuerda regenerarlo una o dos veces al año: los momentos idóneos son entre febrero-marzo y septiembre-octubre.',
                    'price' => 799,
                    'id_category' => '16',
                    'id_patent' => '1'
                ],
                /* NOTE Aspiradores */
                [
                    'id' => '83',
                    'name' => 'AS 100',
                    'short_name' => 'AS100',
                    'short_description' => 'Aspirador autopropulsado de hojas AS 100 de gran capacidad, ideal para la limpieza de parques y jardines, ambientes urbanos e instalaciones deportivas, etc.',
                    'description' => 'El aspirador de hojas autopropulsado de gran capacidad AS 100 es ideal para la limpieza de parques y jardines, ambientes urbanos e instalaciones deportivas.Kit tubo aspiración adicional disponible, particularmente interesante para la aspiración en parterres de difícil acceso.
                    Bolsas desechables disponibles.También es posible convertirlo en soplador con el accesorio soplador lateral o el accesorio soplador con manguera de 4 metros.',
                    'price' => 2125,
                    'id_category' => '17',
                    'id_patent' => '1'
                ],
                /* NOTE Cortasetos */
                [
                    'id' => '92' ,
                    'name' => 'HHH 25 S75E',
                    'short_name' => 'HHH25S75E',
                    'short_description' => 'El cortasetos de corte simple Honda HHH25 S75E: el más fiable del mercado. La potencia de su motor de 4 tiempos te permite trabajar en las más duras condiciones.',
                    'description' => 'El cortasetos de cuchilla simple para un acabado preciso que todos los competidores querrán imitar. La potencia de un motor de 4 tiempos para trabajar en las más duras condiciones.' ,
                    'price' => 649,
                    'id_category' => '2',
                    'id_patent' => '1'
                ],
                [
                    'id' => '93' ,
                    'name' => 'HHH 25 D60E',
                    'short_name' => 'HHH25D60E',
                    'short_description' => 'Cortasetos con resultados de corte de precisión. La suave potencia que ofrece el nuevo motor 4 tiempos te permitirá trabajar con firmeza en las tareas que precisen un buen acabado. Este cortasetos monta manillar ajustable a 45º.',
                    'description' => 'La suave potencia que ofrece el nuevo motor 4 tiempos te permitirá trabajar con firmeza en las tareas que precisen un buen acabado. Este cortasetos monta manillar ajustable a 45º.' ,
                    'price' => 799,
                    'id_category' => '2',
                    'id_patent' => '1'
                ],
                [
                    'id' => '94' ,
                    'name' => 'HHH 25 D75E',
                    'short_name' => 'HHH25D75E',
                    'short_description' => 'Con el cortasetos Honda HHH 25 D75E de doble cuchilla y manillar ajustable 45º obtendrás unos acabados de película. Motor de 4 tiempos, potente y silencioso.',
                    'description' => 'La suave potencia que ofrece el nuevo motor 4 tiempos te permitirá trabajar con firmeza en las tareas que precisen un buen acabado. Este cortasetos monta manillar ajustable a 45º.' ,
                    'price' => 829,
                    'id_category' => '2',
                    'id_patent' => '1'
                ],
                [
                    'id' => '99' ,
                    'name' => 'HHHE 61 LE',
                    'short_name' => 'HHHE61LE',
                    'short_description' => 'El cortasetos de batería Honda HHHE61LE es el mejor aliado para el mantenimiento de setos en parques y jardines (batería y cargador no incluidos).',
                    'description' => 'Las nuevas herramientas de jardinería Honda son máquinas robustas, potentes y de alta tecnología. Con todo, son increíblemente ligeras, silenciosas y fáciles de manejar, ofreciendo al usuario un mayor control y una importante reducción de la fatiga.' ,
                    'price' => 251,
                    'id_category' => '2',
                    'id_patent' => '1'
                ],
                [
                    'id' => '100' ,
                    'name' => 'KIT HHHE 61 LE + HBP 20 AH + HBC 210 WE',
                    'short_name' => 'KITHHHE61LE_HBP20AH_HBC210WE',
                    'short_description' => 'El cortasetos de batería Honda HHHE61LE es el mejor aliado para el mantenimiento de setos en parques y jardines (batería y cargador incluidos).',
                    'description' => 'Las nuevas herramientas de jardinería Honda son máquinas robustas, potentes y de alta tecnología. Con todo, son increíblemente ligeras, silenciosas y fáciles de manejar, ofreciendo al usuario un mayor control y una importante reducción de la fatiga.
                    Disponen de una batería común de 56V de iones de litio de alta calidad, caracterizada por su alta carga de energía, una gran autonomía y miles de ciclos de carga/descargar sin sufrir ninguna alteración en su rendimiento. Con esto, la nueva gama de batería Honda tiene todo lo necesario para garantizar al usuario un trabajo seguro, confortable y eficiente.' ,
                    'price' => 470,
                    'id_category' => '2',
                    'id_patent' => '1'
                ],
                [
                    'id' => '101' ,
                    'name' => 'KIT HHHE 61 LE + HBP 20 AH + HBC 550 WE',
                    'short_name' => 'KITHHHE61LE_HBP20AH_HBC550WE',
                    'short_description' => 'El cortasetos de batería Honda HHHE61LE es el mejor aliado para el mantenimiento de setos en parques y jardines (batería y cargador incluidos).',
                    'description' => 'Las nuevas herramientas de jardinería Honda son máquinas robustas, potentes y de alta tecnología. Con todo, son increíblemente ligeras, silenciosas y fáciles de manejar, ofreciendo al usuario un mayor control y una importante reducción de la fatiga.
                    Las baterías de alta calidad Honda HPB20AH son de iones de litio y se caracterizan por su alta densidad energética. Gozan de una tecnología patentada de enfriamiento de las celdas que garantiza una mayor autonomía y miles de ciclos de carga/descarga sin sufrir ninguna alteración en su rendimiento. Cada batería incluye un indicador de autonomía.' ,
                    'price' => 529,
                    'id_category' => '2',
                    'id_patent' => '1'
                ],
                /* NOTE Sopladores */
                [
                    'id' => '95' ,
                    'name' => 'HHB 25',
                    'short_name' => 'HHB25',
                    'short_description' => 'Utilizar el soplador Honda HHB 25, con sólo 4.5 Kg y motor de 4 tiempos, es la manera más cómoda y eficaz de mantener limpio tu jardín',
                    'description' => 'No renuncies a disponer de más tiempo libre durante el fin de semana con el sistema más cómodo para mantener limpio tu jardín, el soplador HHB 25. Además, pesa tan sólo 4,5 kg gracias al nuevo motor Honda GX25 de 4 tiempos.' ,
                    'price' => 650,
                    'id_category' => '4',
                    'id_patent' => '1'
                ],
                [
                    'id' => '96' ,
                    'name' => 'HHBE 81 BE',
                    'short_name' => 'HHBE81BE',
                    'short_description' => 'El soplador de batería Honda HHBE81BE permite limpiar sin esfuerzo la hojarasca y suciedad acumuladas, incluso espacios interiores (batería y cargador no incluidos).',
                    'description' => 'Las nuevas herramientas de jardinería Honda son máquinas robustas, potentes y de alta tecnología. Con todo, son increíblemente ligeras, silenciosas y fáciles de manejar, ofreciendo al usuario un mayor control y una importante reducción de la fatiga.
                    Disponen de una batería común de 56V de iones de litio de alta calidad, caracterizada por su alta carga de energía, una gran autonomía y miles de ciclos de carga/descargar sin sufrir ninguna alteración en su rendimiento. Con esto, la nueva gama de batería Honda tiene todo lo necesario para garantizar al usuario un trabajo seguro, confortable y eficiente.' ,
                    'price' => 234,
                    'id_category' => '4',
                    'id_patent' => '1'
                ],
                [
                    'id' => '97' ,
                    'name' => 'KIT HHBE 81 BE + HBP 40 AH + HBC 210 WE',
                    'short_name' => 'KITHHBE81BE_HBP40AH_HBC210WE',
                    'short_description' => 'El soplador de batería Honda HHBE81BE permite limpiar sin esfuerzo la hojarasca y suciedad acumuladas, incluso espacios interiores (batería y cargador incluidos).',
                    'description' => 'Sus 3 modos de funcionamiento permiten gestionar el flujo de aire y adaptarlo a cualquier situación. Compacto, ligero y bien equilibrado, su alta maniobrabilidad lo convierte en la máquina ideal para trabajar con gran confort. Las baterías de 56V permiten optimizar el tiempo de trabajo.' ,
                    'price' => 555,
                    'id_category' => '4',
                    'id_patent' => '1'
                ],
                [
                    'id' => '98' ,
                    'name' => 'KIT HHBE 81 BE + HBP 40 AH + HBC 550 WE',
                    'short_name' => 'KITHHBE81BE_HBP40AH_HBC550WE',
                    'short_description' => 'El soplador de batería Honda HHBE81BE permite limpiar sin esfuerzo la hojarasca y suciedad acumuladas, incluso espacios interiores (batería y cargador incluidos).',
                    'description' => 'Sus 3 modos de funcionamiento permiten gestionar el flujo de aire y adaptarlo a cualquier situación. Compacto, ligero y bien equilibrado, su alta maniobrabilidad lo convierte en la máquina ideal para trabajar con gran confort. Las baterías de 56V permiten optimizar el tiempo de trabajo.
                    Las baterías de alta calidad Honda HPB40AH son de iones de litio y se caracterizan por su alta densidad energética. Gozan de una tecnología patentada de enfriamiento de las celdas que garantiza una mayor autonomía y miles de ciclos de carga/descarga sin sufrir ninguna alteración en su rendimiento. Cada batería incluye un indicador de autonomía.' ,
                    'price' => 613,
                    'id_category' => '4',
                    'id_patent' => '1'
                ],
                /* NOTE Baterias */
                [
                    'id' => '105' ,
                    'name' => 'HBP 20 AH',
                    'short_name' => 'HBP20AH',
                    'short_description' => 'Las baterías de alta calidad Honda HBP 20 AH y HBP 40 AH son de iones de litio y se catacterizan por su alta densidad energética. Compatibles con toda la gama.',
                    'description' => 'Las baterías de alta calidad Honda HPB 20 AH y HPB 40 AH son de iones de litio y se caracterizan por su alta densidad energética. Gozan de una tecnología patentada de enfriamiento de las celdas que garantiza una mayor autonomía y miles de ciclos de carga/descarga sin sufrir ninguna alteración en su rendimiento. Cada batería incluye un indicador de autonomía.' ,
                    'price' => 182,
                    'id_category' => '7',
                    'id_patent' => '1'
                ],
                [
                    'id' => '106' ,
                    'name' => 'HBP 40 AH',
                    'short_name' => 'HBP40AH',
                    'short_description' => 'Las baterías de alta calidad Honda HBP 20 AH y HBP 40 AH son de iones de litio y se catacterizan por su alta densidad energética. Compatibles con toda la gama.',
                    'description' => 'Las baterías de alta calidad Honda HPB 20 AH y HPB 40 AH son de iones de litio y se caracterizan por su alta densidad energética. Gozan de una tecnología patentada de enfriamiento de las celdas que garantiza una mayor autonomía y miles de ciclos de carga/descarga sin sufrir ninguna alteración en su rendimiento. Cada batería incluye un indicador de autonomía.' ,
                    'price' => 292,
                    'id_category' => '7',
                    'id_patent' => '1'
                ],
                /* NOTE Cargadores */
                [
                    'id' => '107' ,
                    'name' => 'HBC 210 WE',
                    'short_name' => 'HBC210WE',
                    'short_description' => 'Cargador rápido de baterías Honda Cordless HBC210WE. Compatible con toda la gama.',
                    'description' => 'Cargador rápido de baterías Honda Cordless HBC210WE. Compatible con toda la gama.' ,
                    'price' => 90,
                    'id_category' => '18',
                    'id_patent' => '1'
                ],
                [
                    'id' => '108' ,
                    'name' => 'HBC 550 WE',
                    'short_name' => 'HBC550WE',
                    'short_description' => 'Cargador ultrarápido de baterías Honda Cordless HBC550WE. Compatible con toda la gama.',
                    'description' => 'Cargador ultrarápido de baterías Honda Cordless HBC550WE. Compatible con toda la gama.' ,
                    'price' => 154,
                    'id_category' => '18',
                    'id_patent' => '1'
                ],
                /* NOTE Motoazadas */
                [
                    'id' => '109' ,
                    'name' => 'FG 205',
                    'short_name' => 'FG205',
                    'short_description' => 'Motoazada Honda FG205 para huertos pequeños y urbanos. Transmisión reforzada, compacta, ligera y fácil de utilizar y transportar.',
                    'description' => 'Las motoazadas Honda son las preferidas de los usuarios por su fiabilidad, robustez y polivalencia. Son la mejor elección para el aficionado a la huerta o para el profesional, porque son potentes, silenciosas, económicas, seguras, cómodas y fáciles de utilizar. Desde su introducción en el mercado español hace ya 40 años, han sido siempre la referencia a seguir y líderes indiscutibles de ventas.' ,
                    'price' => 864,
                    'id_category' => '19',
                    'id_patent' => '1'
                ],
                [
                    'id' => '110' ,
                    'name' => 'F 220',
                    'short_name' => 'F220',
                    'short_description' => 'Motoazada Honda F220 para huertos pequeños y medianos. Maniobrable y potente. Profesional. La más ligera de su categoría.',
                    'description' => 'No hace falta disponer de un gran terreno para disfrutar de los beneficios de tener un huerto. Cada vez existen más huertos compartidos o propietarios que parcelan su terreno y ofrecen pequeñas parcelas en alquiler, también llamados “huertos urbanos”.
                    Para este tipo de usuario, para quien su huerto es un hobby y le puede dedicar quizá solo los fines de semana, Honda pone a su disposición la pequeña motoazada F220, capaz de quitarle de encima el trabajo pesado de la forma más rápida, fácil y cómoda.' ,
                    'price' => 898,
                    'id_category' => '19',
                    'id_patent' => '1'
                ],
                [
                    'id' => '111' ,
                    'name' => 'FG 320',
                    'short_name' => 'FG320',
                    'short_description' => 'Motoazada Honda FG320 para huertos pequeños y medianos. Maniobrable y potente. Profesional. La mejor relación calidad-precio.',
                    'description' => 'La motoazada Honda FG320, por su construcción y calidad, no solo es adecuada para propietarios de pequeños huertos, sino que también es perfecta para parcelas de tamaño mediano, que requieren un uso más intensivo. Es ideal tanto para el usuario particular como para el agricultor que tiene huertos medianos en su explotación. Y todo ello, con la mejor relación calidad-precio.' ,
                    'price' => 569,
                    'id_category' => '19',
                    'id_patent' => '1'
                ],
                [
                    'id' => '112' ,
                    'name' => 'FJ 500 STD',
                    'short_name' => 'FJ500STD',
                    'short_description' => 'La motoazada Honda FJ500 STD es ideal para todo tipo de trabajo en la huerta. Segura, cómoda y robusta y robusta. ¡Múltiples accesorios disponibles!',
                    'description' => 'La motoazada Honda FJ500 STD ofrece total versatilidad y comodidad para su uso en una amplia variedad de tareas del huerto y el jardín durante todo el año, a un precio muy competitivo. Está equipada con un motor Honda GX160, de especificación profesional. Incluye robustas fresas de eje hexagonal, de 3 coronas más disco por cada lado, que permiten el desmontaje de la última corona para disminuir el ancho de trabajo si fuera necesario.' ,
                    'price' => 998,
                    'id_category' => '19',
                    'id_patent' => '1'
                ],
                [
                    'id' => '113' ,
                    'name' => 'FJ 500 DLX',
                    'short_name' => 'FJ500DLX',
                    'short_description' => 'Motoazada Honda FJ500 DLX, versión de luxe, para huertos medianos, compacta, robusta, fácil de usar. Precio competitivo. Variedad de accesorios.',
                    'description' => 'La motoazada Honda FJ500 DLX ofrece total versatilidad y comodidad para su uso en una amplia variedad de tareas del huerto y el jardín durante todo el año, a un precio muy competitivo. Está equipada con un motor Honda GX160, de especificación profesional. Incluye robustas fresas de eje hexagonal, de 3 coronas más disco por cada lado, que permiten el desmontaje de la última corona para disminuir el ancho de trabajo si fuera necesario.' ,
                    'price' => 1425,
                    'id_category' => '19',
                    'id_patent' => '1'
                ],
                [
                    'id' => '114' ,
                    'name' => 'F 506',
                    'short_name' => 'F506',
                    'short_description' => 'Motoazada Honda F506 para huertos medianos, potente, compacta, robusta, fácil de usar y polivalente. Con marcha atrás. Variedad de accesorios.',
                    'description' => 'La motoazada Honda F506 está concebida para trabajos profesionales. Permite adaptar la velocidad de trabajo a las condiciones del terreno y al tipo de accesorio que lleve acoplado. La marcha atrás facilita las maniobras. Dispone de manillar ergonómico, ajustable en altura y lateralmente. Así, en los trabajos de fresado deja un trabajo perfecto sin pisar la superficie.' ,
                    'price' => 2125,
                    'id_category' => '19',
                    'id_patent' => '1'
                ],
                [
                    'id' => '115' ,
                    'name' => 'F 510',
                    'short_name' => 'F510',
                    'short_description' => 'Motoazada Honda F510 para huertos grandes. Potente y profesional, caja de cambios y manillar desplazable. Gran variedad de accesorios.',
                    'description' => 'La motoazada Honda F510 está concebida para trabajos profesionales. Dispone de manillar reversible, ajustable en altura y lateralmente, que permite dejar un acabado perfecto en los trabajos de fresado, sin pisar la superficie trabajada. Es fácil de usar y ofrece un cómodo manejo, incluso durante largas jornadas de trabajo. Está equipada con mandos seguros y ergonómicos, que garantizan la comodidad, el control y la seguridad, y con embrague de seguridad, que detiene la máquina para evitar accidentes.' ,
                    'price' => 2530,
                    'id_category' => '19',
                    'id_patent' => '1'
                ],
                [
                    'id' => '116' ,
                    'name' => 'F 560',
                    'short_name' => 'F560',
                    'short_description' => 'Motoazada Honda F560 para huertos grandes. Potente y profesional, caja de cambios y manillar desplazable. Desbloqueo de ruedas. Gran variedad de accesorios.',
                    'description' => 'La motoazada Honda F560 ofrece total versatilidad y comodidad para su uso en una amplia variedad de tareas del huerto y el jardín durante todo el año. Está equipada con un motor Honda GX160, de especificación profesional. Incluye robustas fresas de eje hexagonal, de 3 coronas más disco por cada lado, que permiten el desmontaje de la última corona para disminuir el ancho de trabajo si fuera necesario.' ,
                    'price' => 3220,
                    'id_category' => '19',
                    'id_patent' => '1'
                ],
                [
                    'id' => '117' ,
                    'name' => 'FF 300',
                    'short_name' => 'FF300',
                    'short_description' => 'Motoazada Honda FF 300 especial para “huertos cómodos”. Ligera y maniobrable, con fresas contra rotación para trabajar sin esfuerzo.',
                    'description' => 'La motoazada Honda FF 300 es la máquina ideal para el aficionado exigente que quiere trabajar sin esfuerzo y con la calidad que hasta ahora sólo se podía obtener con un motocultor profesional. Las motoazadas de fresa frontal son herramientas ligeras y compactas. Sin embargo, requieren una cierta pericia en su empleo. Por ejemplo, al trabajar en suelos duros resultan difíciles de equilibrar y al rebotar pueden sorprender al usuario.' ,
                    'price' => 2446,
                    'id_category' => '19',
                    'id_patent' => '1'
                ],
                [
                    'id' => '118' ,
                    'name' => 'FF 500',
                    'short_name' => 'FF500',
                    'short_description' => 'Motoazada Honda FF500: la revolución en el huerto. Acabados de calidad profesional sin esfuerzo ni fatiga. Si la pruebas, no la cambiarás por nada.',
                    'description' => 'La motoazada Honda FF 500 es la máquina ideal para el aficionado exigente que quiere trabajar sin esfuerzo y con la calidad que hasta ahora sólo se podía obtener con un motocultor profesional. Las motoazadas de fresa frontal son herramientas ligeras y compactas. Sin embargo, requieren una cierta pericia en su empleo. Por ejemplo, al trabajar en suelos duros resultan difíciles de equilibrar y al rebotar pueden sorprender al usuario.' ,
                    'price' => 3208,
                    'id_category' => '19',
                    'id_patent' => '1'
                ],
                [
                    'id' => '119' ,
                    'name' => 'FR 750',
                    'short_name' => 'FR750',
                    'short_description' => 'Motocultor Honda FR750, fresas centrales de contra rotación, sin vibraciones, comodidad y suavidad para arar, hacer surcos y labrar entre carriles.',
                    'description' => 'Con el motocultor Honda FR750 dispones de una amplia variedad de usos, ya que es posible arar, hacer surcos y labrar entre carriles con una misma máquina y sin cambiar accesorios. Sus fresas frontales de contra rotación permiten arar en profundidad hasta el final del terreno. Además, su diseño exclusivo reduce la cantidad de barro pegado en el centro.' ,
                    'price' => 3700,
                    'id_category' => '19',
                    'id_patent' => '1'
                ],
                [
                    'id' => '120' ,
                    'name' => 'F 560 M',
                    'short_name' => 'F560M',
                    'short_description' => 'Motocultor Honda F560 M potentes, con fresa trasera y frenos de ruedas. Comodidad sin vibraciones. Gran diversidad de accesorios.',
                    'description' => 'El motocultor Honda F560 M es una máquina de gran maniobrabilidad y que ofrece un trabajo de calidad. Es altamente robusta y fiable, perfecta para grandes extensiones. Dispone de una exclusiva fresa trasera de 2 velocidades que le permite dar un acabado esponjoso y fino a la tierra, dejándola a punto para la siembra.' ,
                    'price' => 4525,
                    'id_category' => '19',
                    'id_patent' => '1'
                ],
                /* NOTE Motobombas */
                [
                    'id' => '121' ,
                    'name' => 'WX 10',
                    'short_name' => 'WX10',
                    'short_description' => 'Motobomba de caudal Honda WX 10, la menor de la familia. Pequeña, económica y de fácil arranque que te sacará de cualquier apuro sin apenas ocupar espacio.',
                    'description' => 'Motobomba de caudal Honda WX 10, la menor de la familia. Pequeña, económica y de fácil arranque que te sacará de cualquier apuro sin apenas ocupar espacio.' ,
                    'price' => 565,
                    'id_category' => '20',
                    'id_patent' => '1'
                ],
                [
                    'id' => '122' ,
                    'name' => 'WX 15',
                    'short_name' => 'WX15',
                    'short_description' => 'La motobomba de caudal Honda WX15 es la amiga de tu huerto. Motobomba compacta y potente que te ofrece un rendimiento insuperable. Portátil y muy ligera.',
                    'description' => 'La motobomba de caudal Honda WX15 es la amiga de tu huerto. Motobomba compacta y potente que te ofrece un rendimiento insuperable. Portátil y muy ligera.' ,
                    'price' => 776,
                    'id_category' => '20',
                    'id_patent' => '1'
                ],
                [
                    'id' => '123' ,
                    'name' => 'WB 20 XT',
                    'short_name' => 'WB20XT',
                    'short_description' => 'Con la motobomba WB 20 XT la falta de lluvias ya no acabará con tu huerto. Mejor aprovechamiento de la potencia del motor. Con 37.200 litros/hora esta motobomba puede con todo.',
                    'description' => 'Con la motobomba WB 20 XT la falta de lluvias ya no acabará con tu huerto. Mejor aprovechamiento de la potencia del motor. Con 37.200 litros/hora esta motobomba puede con todo.' ,
                    'price' => 470,
                    'id_category' => '20',
                    'id_patent' => '1'
                ],
                [
                    'id' => '124' ,
                    'name' => 'WB 30 XT',
                    'short_name' => 'WB30XT',
                    'short_description' => 'La motobomba de caudal Honda WB 30 XT aprovecha al máximo de la potencia de su increíble motor Honda. Encontrarás la manera más fácil de achicar el agua.',
                    'description' => 'La motobomba de caudal Honda WB 30 XT aprovecha al máximo de la potencia de su increíble motor Honda. Encontrarás la manera más fácil de achicar el agua.' ,
                    'price' => 569,
                    'id_category' => '20',
                    'id_patent' => '1'
                ],
                [
                    'id' => '125' ,
                    'name' => 'WT 20 X',
                    'short_name' => 'WT20X',
                    'short_description' => '¿Sufrir? Nunca más con esta motobomba de aguas sucias Honda WT20 X. Motobomba imprescindible en trabajos de achique en la construcción o inundaciones.',
                    'description' => '¿Sufrir? Nunca más con esta motobomba de aguas sucias Honda WT20 X. Motobomba imprescindible en trabajos de achique en la construcción o inundaciones.' ,
                    'price' => 1810,
                    'id_category' => '20',
                    'id_patent' => '1'
                ],
                [
                    'id' => '126' ,
                    'name' => 'WT 30 X',
                    'short_name' => 'WT30X',
                    'short_description' => 'Motobomba Honda para aguas sucias WT30X de cuerpo desmontable para que limpiarla sea un juego de niños. Se acabó el mantenimiento. ¡Un manguerazo y lista!',
                    'description' => 'Motobomba Honda para aguas sucias WT30X de cuerpo desmontable para que limpiarla sea un juego de niños. Se acabó el mantenimiento. ¡Un manguerazo y lista!' ,
                    'price' => 2369,
                    'id_category' => '20',
                    'id_patent' => '1'
                ],
                [
                    'id' => '127' ,
                    'name' => 'WT 40 X',
                    'short_name' => 'WT40X',
                    'short_description' => 'Potente por excelencia, la motobomba Honda WT40 X para aguas sucias es máquina perfecta para profesionales que necesitan potencia en condiciones extremas.',
                    'description' => 'Potente por excelencia, la motobomba Honda WT40 X para aguas sucias es máquina perfecta para profesionales que necesitan potencia en condiciones extremas.' ,
                    'price' => 3295,
                    'id_category' => '20',
                    'id_patent' => '1'
                ],
                [
                    'id' => '128' ,
                    'name' => 'WH 5',
                    'short_name' => 'WH5',
                    'short_description' => 'La motobomba Honda de presión WH5, la más pequeña del mercado de motobombas de presión con motor de 4 tiempos. Nunca te fallará.',
                    'description' => 'La motobomba Honda de presión WH5, la más pequeña del mercado de motobombas de presión con motor de 4 tiempos. Nunca te fallará.',
                    'price' => 438,
                    'id_category' => '20',
                    'id_patent' => '1'
                ],
                [
                    'id' => '129' ,
                    'name' => 'WH 10 X',
                    'short_name' => 'WH10X',
                    'short_description' => 'Nunca falla. Motobomba de presión Honda WH10 con motor de 4 tiempos. Compacta y eficiente, perfecta para el riego por goteo o aspersión.',
                    'description' => 'Nunca falla. Motobomba de presión Honda WH10 con motor de 4 tiempos. Compacta y eficiente, perfecta para el riego por goteo o aspersión.',
                    'price' => 645,
                    'id_category' => '20',
                    'id_patent' => '1'
                ],
                [
                    'id' => '130' ,
                    'name' => 'WH 20 X',
                    'short_name' => 'WH20X',
                    'short_description' => 'La motobomba de presión Honda WH20 X es la mejor opción para el riego. Te garantiza la presión la presión necesaria para el riego por goteo o aspersión.',
                    'description' => 'La motobomba de presión Honda WH20 X es la mejor opción para el riego. Te garantiza la presión la presión necesaria para el riego por goteo o aspersión.' ,
                    'price' => 890,
                    'id_category' => '20',
                    'id_patent' => '1'
                ],
                [
                    'id' => '131' ,
                    'name' => 'WH 75',
                    'short_name' => 'WH75',
                    'short_description' => 'Motobomba de presión WH75X con motor Honda de 4 tiempos para cuando precises una motobomba de altas prestaciones. Siempre a punto. Máxima calidad.',
                    'description' => 'Motobomba de presión WH75X con motor Honda de 4 tiempos para cuando precises una motobomba de altas prestaciones. Siempre a punto. Máxima calidad.' ,
                    'price' => 970,
                    'id_category' => '20',
                    'id_patent' => '1'
                ],
                [
                    'id' => '132' ,
                    'name' => 'WH 90 X',
                    'short_name' => 'WH90X',
                    'short_description' => 'Motobomba de alta presión WH90 X con motor Honda de 4 tiempos. Una motobomba de fiabilidad a toda prueba, ideal para trasvasar agua en situaciones extremas.',
                    'description' => 'Motobomba de alta presión WH90 X con motor Honda de 4 tiempos. Una motobomba de fiabilidad a toda prueba, ideal para trasvasar agua en situaciones extremas.' ,
                    'price' => 1247,
                    'id_category' => '20',
                    'id_patent' => '1'
                ],
                [
                    'id' => '133' ,
                    'name' => 'WH 100 X',
                    'short_name' => 'WH100X',
                    'short_description' => 'Protege tu casa con motobomba de presión WH100X con motor Honda de 4 tiempos. La motobomba perfecta para riegos por aspersión o como equipo contra incendios.',
                    'description' => 'Protege tu casa con motobomba de presión WH100X con motor Honda de 4 tiempos. La motobomba perfecta para riegos por aspersión o como equipo contra incendios.' ,
                    'price' => 2150,
                    'id_category' => '20',
                    'id_patent' => '1'
                ],
                [
                    'id' => '134' ,
                    'name' => 'WMP 20 X',
                    'short_name' => 'WMP20X',
                    'short_description' => 'Motobomba Honda WMP20X para agua salada y líquidos especiales utilizados en agricultura e industria, gracias a su carcasa de termoplástico reforzado.',
                    'description' => 'Motobomba Honda WMP20X para agua salada y líquidos especiales utilizados en agricultura e industria, gracias a su carcasa de termoplástico reforzado.' ,
                    'price' => 1225,
                    'id_category' => '20',
                    'id_patent' => '1'
                ],
                /* NOTE Generadores */
                [
                'id' => '135' ,
                'name' => 'EM 30',
                'short_name' => 'EM30',
                'short_description' => 'Generador Honda EM30, con regulación electrónica, para aparatos de medición, ordenadores y equipos que necesitan corriente eléctrica de calidad.',
                'description' => 'Generador para aparatos de medición, ordenadores y equipos que necesitan corriente eléctrica de calidad. Disfrútalos en silencio. Con regulación electrónica.' ,
                'price' => 1899,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '136' ,
                'name' => 'EG 4500 CL',
                'short_name' => 'EG4500CL',
                'short_description' => 'Generador de altas prestaciones Honda EG4500, con sistema de regulación electrónica D-AVR y mecanismos de reducción de ruido.',
                'description' => 'Generador de altas prestaciones Honda EG 4500, con sistema de regulación electrónica D-AVR y mecanismos de reducción de ruido. Si eres profesional de la industria, o montador, y utilizas todo tipo de máquinas, éste es tu generador.
                Chasis robusto con paneles de insonorización que junto con el filtro de aire y el tubo de escape de gran tamaño ofrece un nivel de ruido inferior a los generadores tradicionales abiertos. Con depósito de grandes dimensiones para una mayor autonomía de trabajo.' ,
                'price' => 2165,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '137' ,
                'name' => 'EG 5500 CL',
                'short_name' => 'EG5500CL',
                'short_description' => 'Generador de altas prestaciones Honda EG5500, con sistema de regulación electrónica D-AVR y mecanismos de reducción de ruido.',
                'description' => 'Generador de altas prestaciones Honda EG 5500, con sistema de regulación electrónica D-AVR y mecanismos de reducción de ruido. Si eres profesional de la industria, o montador, y utilizas todo tipo de máquinas, éste es tu generador.
                Chasis robusto con paneles de insonorización que junto con el filtro de aire y el tubo de escape de gran tamaño ofrece un nivel de ruido inferior a los generadores tradicionales abiertos. Con depósito de grandes dimensiones para una mayor autonomía de trabajo.' ,
                'price' => 2330,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '138' ,
                'name' => 'EM 5500 AE',
                'short_name' => 'EM5500AE',
                'short_description' => 'Generador Honda EM5500 AE de alta precisión, con el nuevo motor inteligente Honda iGX390 i sistema i-AVR que permite regular electrónicamente la tensión.',
                'description' => 'El generador Honda EM5500 AE es un nuevo modelo dentro de la gama de generadores Honda polivalentes de altas prestaciones, que destaca especialmente por estar equipado con el motor iGX390, de la nueva generación de motores inteligentes, convirtiéndolo en un generador de alta precisión, único en el mercado. Gracias a la incorporación de este revolucionario motor, el generador puede incorporar un avanzado sistema de regulación de voltaje, el i-AVR, exclusivo de Honda, que mediante la gestión electrónica del carburador, ofrece una estabilidad de la frecuencia aún mayor.
                Tecnología destacada:Nuevo motor iGX390 inteligente: con su regulador electrónico, ofrece una mayor potencia y una notable reducción del consumo (entre el 10% y el 15%). Mucho más silencioso y fácil de arrancar gracias al estárter automático.' ,
                'price' => 2975,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '139' ,
                'name' => 'EP 3000',
                'short_name' => 'EP3000',
                'short_description' => 'Generador monofásico Honda EC2000, ligero, robusto y de fácil manejo. Toda la calidad Honda aun precio razonable.',
                'description' => 'Generador monofásico Honda EC2000, ligero, robusto y de fácil manejo. Toda la calidad Honda aun precio razonable. Generador ligero, robusto y de fácil manejo.' ,
                'price' => 698,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '140' ,
                'name' => 'EC 3000',
                'short_name' => 'EC3000',
                'short_description' => 'Generador monofásico EC3000 con motor Honda, para disfrutar de toda la potencia a un buen precio. Robustez y resistencia.',
                'description' => 'Generador monofásico EC3000 con motor Honda, para disfrutar de toda la potencia a un buen precio. Robustez y resistencia. Un generador para que dispongas de 3 KVA. Honda a un buen precio.Kit de ruedas disponible.' ,
                'price' => 875,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '141' ,
                'name' => 'EC 3600',
                'short_name' => 'EC3600',
                'short_description' => 'Generador Honda EC3600, monofásico, potente y fiable. Máxima calidad a un precio económico. Kit de 2 o 4 ruedas disponible.',
                'description' => 'Generador Honda EC3600, monofásico, potente y fiable. Máxima calidad a un precio económico. Kit de 2 o 4 ruedas disponible.' ,
                'price' => 1299,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '142' ,
                'name' => 'EC 3600 AE',
                'short_name' => 'EC3600AE',
                'short_description' => 'Generador monofásico EC3600 AE con motor Honda y arranque eléctrico. Económico, potente. Consulta sus múltiples opciones y kits.',
                'description' => 'Generador monofásico EC3600 AE con motor Honda y arranque eléctrico. Económico, potente. Consulta sus múltiples opciones y kits.' ,
                'price' => 1450,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '143' ,
                'name' => 'EC 5000',
                'short_name' => 'EC5000',
                'short_description' => 'El generador Honda EC5000 es potente, económico y monofásico. Su robustez y resistencia lo hacen imprescindible para las tareas más duras.',
                'description' => 'El generador Honda EC5000 es potente, económico y monofásico. Su robustez y resistencia lo hacen imprescindible para las tareas más duras. Un generador que te permite combinar diferentes opciones: arranque manual, eléctrico, con mando a distancia o automatismo de arranque. Todo para adaptarse a tus necesidades. Kit de ruedas disponible.' ,
                'price' => 1762,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '144' ,
                'name' => 'EC 5000 AE',
                'short_name' => 'EC5000AE',
                'short_description' => 'El generador EC5000 AE con motor Honda te permite combinar diferentes opciones: arranque manual, eléctrico, con mando a distancia , etc. Con kit de ruedas disponible.',
                'description' => 'Un generador que te permite combinar diferentes opciones: arranque manual, eléctrico, con mando a distancia o automatismo de arranque. Todo para adaptarse a tus necesidades. Kit de ruedas disponible.' ,
                'price' => 1899,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '145' ,
                'name' => 'ECT 7000',
                'short_name' => 'ECT7000',
                'short_description' => 'Con el generador Honda ECT 7000 dispondrás de 7 KVA en corriente trifásica y 4 KVA en monofásica. Increíble pero cierto. Potente y económico.',
                'description' => 'Con el generador Honda ECT 7000 dispondrás de 7 KVA en corriente trifásica y 4 KVA en monofásica. Increíble pero cierto. Potente y económico.' ,
                'price' => 1999,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '146' ,
                'name' => 'ECT 7000 AE',
                'short_name' => 'ECT7000AE',
                'short_description' => 'Con el generador ECT 7000 AE dispondrás de 7 KVA en corriente trifásica y 4 KVA en monofásica. Consulta sus múltiples opciones.',
                'description' => 'Con el generador ECT 7000 AE dispondrás de 7 KVA en corriente trifásica y 4 KVA en monofásica. Consulta sus múltiples opciones.' ,
                'price' => 2150,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '147' ,
                'name' => 'ECT 7000 P',
                'short_name' => 'ECT7000P',
                'short_description' => 'Generador Honda ECT7000P, ideal para trabajar bajo la lluvia y en condiciones de extrema humedad (IP54). Generador industrial con regulación electrónica.',
                'description' => 'Generador Honda ECT7000P, ideal para trabajar bajo la lluvia y en condiciones de extrema humedad (IP54). Generador industrial con regulación electrónica.' ,
                'price' => 3070,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '148' ,
                'name' => 'ECMT 7000',
                'short_name' => 'ECMT7000',
                'short_description' => 'El generador Honda ECMT7000 te ofrece gran autonomía gracias a su mayor depósito. Generador de prestaciones únicas. Incluye el kit de ruedas.',
                'description' => 'El generador Honda ECMT7000 te ofrece gran autonomía gracias a su mayor depósito. Generador de prestaciones únicas. Incluye el kit de ruedas.' ,
                'price' => 2612,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '149' ,
                'name' => 'EW 120',
                'short_name' => 'EW120',
                'short_description' => 'Motosoldadora EW120 con motor Honda pensada para el particular. Potente y económica. Para soldar sin contratiempos.',
                'description' => 'Motosoldadora EW120 con motor Honda pensada para el particular. Potente y económica. Para soldar sin contratiempos.' ,
                'price' => 1178,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '150' ,
                'name' => 'EW 170',
                'short_name' => 'EW170',
                'short_description' => 'Motosoldadora EW170 con motor Honda de corriente alterna pensada para el particular. Podrás emplear electrodos de 1,5 a 3,25 mm. Kit de ruedas opcional.',
                'description' => 'Honda te ofrece una motosoldadora de corriente alterna pensada para el particular, en la que podrás emplear electrodos de 1,5 a 3,25 mm, y disponer de corriente monofásica.. Kit de ruedas de transporte opcional.' ,
                'price' => 1770,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '151' ,
                'name' => 'EW 200',
                'short_name' => 'EW200',
                'short_description' => 'Tu profesionalidad te agradecerá esta motosoldadora EW200 con motor Honda: corriente continua que aporta corriente monofásica y trifásica de alta calidad.',
                'description' => 'Una motosoldadora profesional de corriente continua que aporta corriente monofásica y trifásica de alta calidad. para soldar sin problemas con electrodos de 1,5 hasta 4 mm. Ruedas de transporte opcionales.' ,
                'price' => 2298,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '152' ,
                'name' => 'EU 10',
                'short_name' => 'EU10',
                'short_description' => 'Generador Honda EU10 INVERTER, portátil, insonorizado y con la calidad de corriente de la compañía eléctrica. Aconsejable para instrumentos de alta precisión.',
                'description' => 'Generador Honda EU10 INVERTER, portátil, insonorizado y con la calidad de corriente de la compañía eléctrica. Aconsejable para instrumentos de alta precisión. Ideal para iluminación, ventiladores, TV, ordenadores y pequeñas herramientas eléctricas.
                    Ultraligero: gracias a la tecnología INVERTER, que economiza hasta un 50% del volumen y peso, es perfecto para las actividades de ocio y bricolaje.
                    Insonorizado: la normativa sobre el nivel de ruido es cada vez más severa. Los generadores insonorizados Honda de altas prestaciones responden perfectamente a estas exigencias, además de proporcionar toda la potencia necesaria para el funcionamiento de tus aparatos eléctricos.
                    Mayor autonomía: gracias al funcionamiento inteligente del motor, con la función “ECO” sólo consume la cantidad de combustible estrictamente necesaria, lo que aumenta la autonomía del motor. Puede funcionar de 4 hasta 8.3 horas seguidas con un único depósito de combustible, dependiendo de la carga. La tecnología Eco-Throttle ® mejora la eficiencia del combustible en más de un 10%. El motor se acelera en función de la demanda de potencia.' ,
                'price' => 1348,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '153' ,
                'name' => 'EU 20',
                'short_name' => 'EU20',
                'short_description' => 'Generador Honda EU20 INVERTER, portátil, insonorizado y con la calidad de corriente de la compañía eléctrica. Aconsejable para instrumentos de alta precisión.',
                'description' => 'Generador Honda EU20 INVERTER, portatil e insonorizadoportátil, insonorizado y con la calidad de corriente de la compañía eléctrica. Todo son ventajas para el profesional o el usuario que necesita corriente sin fluctuaciones. Aconsejable para instrumentos de alta precisión. Perfecto para funcionar hornos microondas, cafeteras, secadores de pelo, neveras y equipos electrónicos.
                    Ultraligero: gracias a la tecnología inverter, que reduce hasta un 50% del volumen y peso, es perfecto para las actividades de ocio y bricolaje.
                    Insonorizado: la normativa sobre el nivel de ruido es cada vez más severa. Los generadores insonorizados Honda de altas prestaciones responden perfectamente a estas exigencias, además de proporcionar toda la potencia necesaria para el funcionamiento de tus aparatos eléctricos.
                    Mayor autonomía: gracias al funcionamiento inteligente del motor, con la función “ECO” sólo consume la cantidad de combustible estrictamente necesaria, lo que aumenta la autonomía del motor. Puede funcionar de 4 hasta 15 horas seguidas con un único depósito de combustible, dependiendo de la carga. La tecnología Eco-Throttle ® mejora la eficiencia del combustible en más de un 10%. El motor se acelera en función de la demanda de potencia.' ,
                'price' => 1890,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '154' ,
                'name' => 'EU 30 iF Handy',
                'short_name' => 'EU30iFHandy',
                'short_description' => 'Generador Honda EU30 handy con tecnología INVERTER, portátil e insonorizado. Ligero, compacto y de fácil maniobrabilidad. Corriente de calidad, sin fluctuaciones.',
                'description' => 'El generador Honda EU30 handy INVERTER portatil e insonorizado permite llevar corriente de calidad dónde se necesite. De reducidas dimensiones y peso, resulta un modelo realmente ligero, compacto y de muy fácil maniobrabilidad, gracias a la excelente combinación de las ruedas de gran diámetro y el manillar de transporte plegable. Con Honda todo son ventajas.
                    Además, su chasis principal de magnesio en forma de T, que separa la zona caliente (escape motor) de la refrigerada (combustible y electrónica), le confiere una estructura robusta y segura, a la vez que ligera.
                    El generador Honda EU30 handy está especialmente indicado para su uso en aplicaciones de ocio en el aire libre, como la acampada, el camping o el caravaning. Los usuarios profesionales dedicados a la industria o construcción, que trabajen con herramientas electrónicas que precisan de una excelente calidad de corriente, también lo agradecerán, por su calidad, fácil transporte y bajo consumo.
                    Insonorizado: la normativa sobre el nivel de ruido es cada vez más severa. Los generadores insonorizados Honda de altas prestaciones responden perfectamente a estas exigencias, además de proporcionar toda la potencia necesaria para el funcionamiento de tus aparatos eléctricos.' ,
                'price' => 3524,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '155' ,
                'name' => 'EU 30 isF',
                'short_name' => 'EU30isF',
                'short_description' => 'Allí donde necesites silencio, calidad de corriente y ahorro de combustible estará un generador Honda Inverter EU30.  Kit transporte disponible',
                'description' => 'Sólo en Honda disponemos de esta tecnología, ya que somos los inventores. Allí donde necesites silencio, calidad de corriente y ahorro de combustible estará un generador EU30. Regulación de voltaje por sistema INVERTER. Kit de ruedas disponible. Aconsejable para instrumentos de alta precisión.
                    Ultraligero: gracias a la tecnología inverter, que economiza hasta un 50% del volumen y peso, es perfecto para las actividades de ocio y bricolaje.
                    Insonorizado: la normativa sobre el nivel de ruido es cada vez más severa. Los generadores insonorizados Honda de altas prestaciones responden perfectamente a estas exigencias, además de proporcionar toda la potencia necesaria para el funcionamiento de tus aparatos eléctricos.
                    Mayor autonomía: gracias al funcionamiento inteligente del motor, con la función “ECO” sólo consume la cantidad de combustible estrictamente necesaria, lo que aumenta la autonomía del motor. Puede funcionar de 7.2 hasta 20 horas seguidas con un único depósito de combustible, dependiendo de la carga. La tecnología Eco-Throttle ® mejora la eficiencia del combustible en más de un 10%. El motor se acelera en función de la demanda de potencia.' ,
                'price' => 3549,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                [
                'id' => '156' ,
                'name' => 'EU 70 iSF',
                'short_name' => 'EU70iSF',
                'short_description' => 'El generador Honda EU 70 iSF es primer modelo Inverter de gasolina con inyección electrónica',
                'description' => 'Regulación Inverter Honda: proporciona una calidad de corriente óptima indicada para la alimentación de los aparatos más sofisticados, con componentes eléctricos muy sensibles. Además, reduce el consumo de combustible, aumenta la autonomía y disminuye el nivel de ruido. El nuevo alternador de este modelo es más eficiente y ofrece más potencia a las mismas revoluciones del motor.
                    Tecnología Eco-Throttle ®: En un generador convencional, el motor debe trabajar siempre a un mismo régimen para dar el voltaje y frecuencia correctos. Gracias al alternador inverter y el sistema Eco-Throttle ®, el motor se ajusta automáticamente a las revoluciones necesarias en función de la demanda de potencia, disminuyendo drásticamente el consumo y nivel de ruido y alargando la vida útil del motor.
                    Inyección electrónica: menor mantenimiento, consumo y emisiones y mejor rendimiento.
                    Conexión en paralelo: mediante una caja de conexión opcional se pueden sincronizar 2 generadores EU70i, doblando la potencia disponible y alcanzando hasta 14.000 VA.
                    iMonitor: exclusivo display para un fácil reconocimiento del estado de la máquina. Su panel LCD muestra horas de uso, carga, r.p.m. del motor, función de autodiagnosis (en caso de fallo) y voltaje de la batería.' ,
                'price' => 6275,
                'id_category' => '22',
                'id_patent' => '1'
                ],
                /* NOTE Biotrituradoras */
                [
                'id' => '157' ,
                'name' => 'BIO 3000' ,
                'short_name' => 'BIO3000' ,
                'short_description' => 'Con la biotrituradora eléctrica BIO 3000 aprenderás a reciclar. Con su sistema de corte de piñón dentado y contracuchilla, acepta cualquier tipo de resto vegetal.' ,
                'description' => 'Con la biotrituradora eléctrica BIO 3000 aprenderás a reciclar. Con su sistema de corte de piñón dentado y contracuchilla, acepta cualquier tipo de resto vegetal.' ,
                'price' => 299,
                'id_category' => '21' ,
                'id_patent' => '1'
                ],
                [
                'id' => '158' ,
                'name' => 'BIO 175 E' ,
                'short_name' => 'BIO175E' ,
                'short_description' => 'Biotrituradora eléctrica BIO175E, con su sistema de corte con cuchilla fija y flotante, es la solución definitiva a tus problemas de reciclaje.' ,
                'description' => 'Desde el particular hasta el profesional, cualquier usuario encontrará soluciones en la gama de biotrituradoras Honda. Ahora este modelo incorpora propulsor eléctrico.' ,
                'price' => 1159 ,
                'id_category' => '21' ,
                'id_patent' => '1'
                ],
                [
                'id' => '159' ,
                'name' => 'BIO 180' ,
                'short_name' => 'BIO180' ,
                'short_description' => 'La biotrituradora BIO180 con motor Honda te ayuda a reciclar. Ideal para triturar cualquier resto de poda de un jardín o huerta particular.' ,
                'description' => 'La biotrituradora BIO180 con motor Honda te ayuda a reciclar. Ideal para triturar cualquier resto de poda de un jardín o huerta particular.' ,
                'price' => 1475 ,
                'id_category' => '21' ,
                'id_patent' => '1'
                ],
                [
                'id' => '160' ,
                'name' => 'BIO 320' ,
                'short_name' => 'BIO320' ,
                'short_description' => 'Colabora con el medio ambiente y ahorra tiempo y dinero con la biotrituradora con motor Honda más ligera de la gama profesional, la BIO 320.' ,
                'description' => 'Colabora con el medio ambiente y ahorra tiempo y dinero con la biotrituradora con motor Honda más ligera de la gama profesional, la BIO 320.' ,
                'price' => 2995 ,
                'id_category' => '21' ,
                'id_patent' => '1'
                ],
                [
                'id' => '161' ,
                'name' => 'BIO 375' ,
                'short_name' => 'BIO375' ,
                'short_description' => 'La biotrituradora BIO 375 es la ideal para jardineros que trabajan en distintos jardines. Manejable y potente, siempre a punto cuando la necesitas.' ,
                'description' => 'El aprovechamiento de los restos de poda ha aumentado la demanda de equipos apropiados para el desmenuzado del material leñoso, la biotrituradora BIO 375 es la ideal para estas necesidades.' ,
                'price' => 4750 ,
                'id_category' => '21' ,
                'id_patent' => '1'
                ],
                [
                'id' => '162' ,
                'name' => 'BIO 375 FE' ,
                'short_name' => 'BIO375FE' ,
                'short_description' => 'Biotrituradora con remolque BIO 375FE, la ideal para jardineros que trabajan en distintos jardines. Manejable y potente, siempre a punto cuando la necesitas.' ,
                'description' => 'El aprovechamiento de los restos de poda ha aumentado la demanda de equipos apropiados para el desmenuzado del material leñoso y la biotrituradora BIO 375 FE es la ideal para estas necesidades. Con remolque homologado para circular por carretera.' ,
                'price' => 5975 ,
                'id_category' => '21' ,
                'id_patent' => '1'
                ],
                [
                'id' => '163' ,
                'name' => 'BIO 510' ,
                'short_name' => 'BIO510' ,
                'short_description' => 'Biotrituradora astilladora BIO 510, con motor Honda GX390, incorpora remolque de serie para fácil transporte.' ,
                'description' => 'Biotrituradora astilladora BIO 510, con motor Honda GX390, incorpora remolque de serie para fácil transporte.' ,
                'price' => 8395 ,
                'id_category' => '21' ,
                'id_patent' => '1'
                ],
                [
                'id' => '164' ,
                'name' => 'BIO 525' ,
                'short_name' => 'BIO525' ,
                'short_description' => 'La biotrituradora BIO 525 incorpora el revolucionario motor i-GX 440 de 15 hp, el primero gobernado electrónicamente de su categoría.' ,
                'description' => 'Esta biotrituradora incorpora el revolucionario motor i-GX 440 de 15 hp, el primero gobernado electrónicamente de su categoría.' ,
                'price' => 12050 ,
                'id_category' => '21' ,
                'id_patent' => '1'
                ],
                [
                'id' => '165' ,
                'name' => 'BIO 650' ,
                'short_name' => 'BIO650' ,
                'short_description' => 'La biotrituradora BIO650 consigue la viruta perfecta y para reutilizar como nutriente natural. Incorpora Motor Honda GX620 y remolque de serie.' ,
                'description' => 'Biotrituradora para conseguir la viruta perfecta y reutilizarla como nutriente natural. Una forma natural de alimentar los árboles, así como un gran ahorro.' ,
                'price' => 15990 ,
                'id_category' => '21' ,
                'id_patent' => '1'
                ],
                [
                'id' => '166' ,
                'name' => 'BIO 750' ,
                'short_name' => 'BIO750' ,
                'short_description' => 'La biotrituradora BIO750 KAS con motor Honda monta dos cuchillas fijas en un volante. Lo tiene todo: alto rendimiento, seguridad en el manejo y facilidad de transporte.' ,
                'description' => 'La biotrituradora BIO 750 pro monta dos cuchillas fijas en un volante y se caracteriza por su gran rendimiento de trabajo al triturar restos de poda. Da seguridad en el manejo y facilidad de transporte.' ,
                'price' => 22210 ,
                'id_category' => '21' ,
                'id_patent' => '1'
                ],
                [
                'id' => '167' ,
                'name' => 'BIO 310 TDF' ,
                'short_name' => 'BIO310TDF' ,
                'short_description' => 'Su capacidad de trabajo no te dejará indiferente. Pequeña biotrituradora con toma de fuerza y de alimentación manual, con 2 cuchillas fijas y una capacidad de trabajo de 3 m3/h. Ideal para pequeños tractores tipo “Pasquali”.' ,
                'description' => 'Pequeña biotrituradora con toma de fuerza y de alimentación manual, con 2 cuchillas fijas y una capacidad de trabajo de 3 m3/h. Ideal para pequeños tractores tipo “Pasquali”.' ,
                'price' => 2995 ,
                'id_category' => '21' ,
                'id_patent' => '1'
                ],
                [
                'id' => '168' ,
                'name' => 'BIO 510 TDF' ,
                'short_name' => 'BIO510TDF' ,
                'short_description' => 'La biotrituradora que ahorra tiempo y dinero. El modelo de biotrituradora profesional con toma de fuerza.' ,
                'description' => 'La biotrituradora que ahorra tiempo y dinero. El modelo de biotrituradora profesional con toma de fuerza.' ,
                'price' => 8195 ,
                'id_category' => '21' ,
                'id_patent' => '1'
                ],
                [
                'id' => '169' ,
                'name' => 'BIO 630 TDF' ,
                'short_name' => 'BIO630TDF' ,
                'short_description' => 'Especialmente diseñada para utilizarla en el olivar. Biotrituradora Honda de toma de fuerza, especialmente diseñada para utilizarla en el olivar por su boca amplia y alta. Con alimentación hidráulica, 10 martillos y 10 cuchillas, con gran capacidad de trabajo de 8 m3/h.' ,
                'description' => 'Biotrituradora Honda de toma de fuerza, especialmente diseñada para utilizarla en el olivar por su boca amplia y alta. Con alimentación hidráulica, 10 martillos y 10 cuchillas, con gran capacidad de trabajo de 8 m3/h.' ,
                'price' => 11700 ,
                'id_category' => '21' ,
                'id_patent' => '1'
                ],
                /* NOTE Carretillas */
                [
                'id' => '170' ,
                'name' => 'HP 310' ,
                'short_name' => 'HP310' ,
                'short_description' => 'Carretilla todo terreno HP310, motor Honda GP160, uso profesional, ruedas tipo oruga, descarga tipo volquete, uso profesional en construcción, agricultura y forestal.' ,
                'description' => 'La tecnología que Honda ha desarrollado para la gama de carretillas todo terreno aporta una fiabilidad a toda prueba y una gran durabilidad. Permiten transportar sin problemas entre 300 y 500 Kg de carga, como herramientas, ladrillos y todo tipo de material, con comodidad y suavidad.' ,
                'price' => 3275 ,
                'id_category' => '23' ,
                'id_patent' => '1'
                ],
                [
                'id' => '171' ,
                'name' => 'HP 350' ,
                'short_name' => 'HP350' ,
                'short_description' => 'Carretilla todo terreno HP 350, uso profesional, ruedas tipo oruga, descarga tipo volquete, uso profesional en construcción, agricultura y forestal. Sin vibraciones.' ,
                'description' => 'La tecnología que Honda ha desarrollado para la gama de carretillas todo terreno aporta una fiabilidad a toda prueba y una gran durabilidad. Permiten transportar sin problemas entre 300 y 500 Kg de carga, como herramientas, ladrillos y todo tipo de material, con comodidad y suavidad. La carretilla todo terreno HP350 dispone de embrague de seguridad que actúa sólo con soltar el manillar, parando el avance sin apagar el motor. Es capaz de detener la máquina incluso en pendientes, poniendo siempre por delante tu seguridad.' ,
                'price' => 4390 ,
                'id_category' => '23' ,
                'id_patent' => '1'
                ],
                [
                'id' => '172' ,
                'name' => 'HP 490' ,
                'short_name' => 'HP490' ,
                'short_description' => 'Carretilla todo terreno HP 490, motor Honda GP200, profesional, ruedas oruga, descarga volquete, uso profesional en construcción, agricultura y forestal. Sin vibraciones. Bomba hidráulica.' ,
                'description' => 'La tecnología que Honda ha desarrollado para la gama de carretillas todo terreno aporta una fiabilidad a toda prueba y una gran durabilidad. Permiten transportar sin problemas entre 300 y 500 Kg de carga, como herramientas, ladrillos y todo tipo de material, con comodidad y suavidad. La carretilla todo terreno HP490 dispone de embrague de seguridad que actúa sólo con soltar el manillar, parando el avance sin apagar el motor. Es capaz de detener la máquina incluso en pendientes, poniendo siempre por delante tu seguridad. Este modelo incluye transmisión hidrostática que permite ajustar la velocidad de forma variable, adaptándola a tus necesidades.' ,
                'price' => 4268 ,
                'id_category' => '23' ,
                'id_patent' => '1'
                ],
                [
                'id' => '173' ,
                'name' => 'HP 500' ,
                'short_name' => 'HP500' ,
                'short_description' => 'Carretilla todo terreno HP500, profesional, ruedas oruga, descarga volquete, uso profesional en construcción, agricultura y forestal. Sin vibraciones. Transmisión hidrostática.' ,
                'description' => 'La carretilla todo terreno HP 500 está también pensada para el transporte de distintos materiales en la agricultura, como leña, fruta o restos de poda. Dispone de una plataforma de carga muy polivalente, ya que puede extenderse tanto en anchura como en longitud para adaptarse a las diferentes necesidades de carga. La carretilla todo terreno HP 500 dispone de embrague de seguridad que actúa sólo con soltar el manillar, parando el avance sin apagar el motor. Es capaz de detener la máquina incluso en pendientes, poniendo siempre por delante tu seguridad. Este modelo incluye transmisión hidrostática que permite ajustar la velocidad de forma variable, adaptándola a tus necesidades.' ,
                'price' => 6225 ,
                'id_category' => '23' ,
                'id_patent' => '1'
                ],
                [
                'id' => '174' ,
                'name' => 'CPH 55' ,
                'short_name' => 'CPH55' ,
                'short_description' => 'Carretilla pulverizadora CPH55, depósito 55 litros, ruedas de transporte, manguera de 10 metros, potente, fiable y manejable.' ,
                'description' => 'La carretilla pulverizadora CPH55 ofrece total versatilidad y comodidad para su uso en las tareas de eliminación y prevención de plagas en el huerto y el jardín durante todo el año, a un precio muy competitivo. Está equipada con un motor Honda GX25, potente y silencioso. Incluye ruedas de transporte, para su fácil maniobrabilidad.' ,
                'price' => 796 ,
                'id_category' => '23' ,
                'id_patent' => '1'
                ],
                [
                'id' => '175' ,
                'name' => 'CPH 100' ,
                'short_name' => 'CPH100' ,
                'short_description' => 'Carretilla pulverizadora CPH100, uso profesional, depósito 100 litros, ruedas de transporte, manguera de 10 metros, potente, fiable y manejable.' ,
                'description' => 'La carretilla pulverizadora CPH 100 ofrece total versatilidad y comodidad para su uso en las tareas de eliminación y prevención de plagas en el huerto y el jardín durante todo el año. Está equipada con un motor Honda GX35, potente y silencioso. Incluye ruedas de transporte, para su fácil maniobrabilidad. Como cualquier máquina Honda, la carretilla pulverizadora CPH100 cuenta con todos los elementos de seguridad característicos de la marca. Igualmente, ha sido diseñada para la mayor comodidad de uso, gracias a sus ruedas de transporte, su depósito de polietileno traslúcido de fácil llenado, su manguera de 10 metros de serie y su boquilla especial para un mayor rendimiento.' ,
                'price' => 979 ,
                'id_category' => '23' ,
                'id_patent' => '1'
                ],
                /* NOTE Hidrolimpiadores */
                [
                'id' => '176' ,
                'name' => 'EPH 180' ,
                'short_name' => 'EPH180' ,
                'short_description' => 'Hidrolimpiadora industrial autónoma de agua fría EPH180 con motor Honda GX200, bomba profesional, manguera de alta presión y lanza desmontable.' ,
                'description' => 'Las hidrolimpiadoras de alta presión de agua fría autónomas con motor de combustión son la elección más acertada cuando no se disponga de red eléctrica. Sus altas prestaciones de presión y caudal convierten a estos equipos en una herramienta ideal para el profesional. Apropiada para trabajos prolongados e intensivos, la hidrolimpiadora de alta presión EPH 180 asegura unos máximos niveles de flexibilidad y autonomía. Este modelo está especialmente indicado en los sectores agrario, ganadero, construcción, limpiezas, etc. Con estructura tubular de acero pintada con polvo epoxi, viene equipada de serie con bomba de alta presión con tres pistones cerámicos y cabezal de bronce, filtro de agua, válvula by-pass automática y manómetro.' ,
                'price' => 1965 ,
                'id_category' => '24' ,
                'id_patent' => '1'
                ],
                [
                'id' => '177' ,
                'name' => 'EPH 200' ,
                'short_name' => 'EPH200' ,
                'short_description' => 'Hidrolimpiadora industrial autónoma de agua fría EPH200, con motor Honda GX390, bomba profesional con reductora, manguera de alta presión y lanza desmontable.' ,
                'description' => 'Las hidrolimpiadoras de alta presión de agua fría autónomas con motor de combustión son la elección más acertada cuando no se disponga de red eléctrica. Sus altas prestaciones de presión y caudal convierten a estos equipos en una herramienta ideal para el profesional.
                Apropiada para trabajos prolongados e intensivos, la hidrolimpiadora de alta presión EPH 180 asegura unos máximos niveles de flexibilidad y autonomía. Este modelo está especialmente indicado en los sectores agrario, ganadero, construcción, limpiezas, etc. Con estructura tubular de acero pintada con polvo epoxi, viene equipada de serie con bomba de alta presión con tres pistones cerámicos y cabezal de bronce, con reductora, filtro de agua, válvula by-pass automática y manómetro.',
                'price' => 2740 ,
                'id_category' => '24' ,
                'id_patent' => '1'
                ],
                /* NOTE Scooter */
                [
                'id' => '178' ,
                'name' => 'Monpal ML 100' ,
                'short_name' => 'MonpalML100' ,
                'short_description' => 'Honda ha ideado este scooter eléctrico innovador y moderno que te proporciona movilidad y te ayuda en tus desplazamientos diarios para salir a pasear y disfrutar del aire libre de forma independiente y divertida. Las actividades cotidianas nunca más serán un problema para ti.' ,
                'description' => 'Honda ha ideado este scooter eléctrico innovador y moderno que te proporciona movilidad y te ayuda en tus desplazamientos diarios para salir a pasear y disfrutar del aire libre de forma independiente y divertida. Las actividades cotidianas nunca más serán un problema para ti. Limpio, seguro, fiable, fácil de utilizar y de mantener, el scooter eléctrico Honda Monpal disfruta de toda la tecnología de un líder. Un amplio espacio para los pies, un cómodo asiento, un fácil acceso a los mandos, una cómoda posición de los brazos durante la conducción o el mando del acelerador adaptable para zurdos son algunos de los puntos más sobresalientes del vehículo. Dispone también de un cesto frontal con gran capacidad de carga para que siempre puedas llevar contigo tus cosas.',
                'price' => 3602 ,
                'id_category' => '25' ,
                'id_patent' => '1'
                ],
                /* TODO ECHO */
                /* NOTE Sopladores */
                [
                    'id' => '26',
                    'name' => 'PB 250 (EUST2)',
                    'short_name' => 'PB250',
                    'short_description' => 'Soplador de mano ECHO PB 250 económico, potente, ligero, tubo excéntrico anti giro, anclaje seguro, bloqueo del acelerador, CDI, certificación EUST2.',
                    'description' => 'Su potente motor asegura al soplador de mano ECHO PB 250 la energía suficiente para trabajar sin contratiempos, con un excelente ratio peso-potencia, funcionamiento a altas revoluciones y capacidad de funcionamiento en cualquier posición. Se trata de un motor de alto rendimiento Euro Stage II, con menor consumo de carburante, bajo nivel de ruidos y menos emisiones de escape. Sistema de encendido electrónico CDI. Su menor desgaste significa mayor vida útil del motor, mayor durabilidad y fácil mantenimiento. Más potente que un motor eléctrico.',
                    'price' => 279,
                    'id_category' => '4',
                    'id_patent' => '2'
                ],
                [
                    'id' => '27',
                    'name' => 'PB 251 (EUST2)',
                    'short_name' => 'PB251',
                    'short_description' => 'Soplador de mano ECHO PB 251, potente, ligero, tubo excéntrico anti giro, anclaje seguro, bloqueo del acelerador, CDI, certificación EUST2.',
                    'description' => 'Su potente motor asegura al soplador de mano ECHO PB 251 la energía suficiente para trabajar sin contratiempos, con un excelente ratio peso-potencia, funcionamiento a altas revoluciones y capacidad de funcionamiento en cualquier posición. Se trata de un motor de alto rendimiento Euro Stage II, con menor consumo de carburante, bajo nivel de ruidos y menos emisiones de escape. Sistema de encendido electrónico CDI. Su menor desgaste significa mayor vida útil del motor, mayor durabilidad y fácil mantenimiento. Más potente que un motor eléctrico.',
                    'price' => 299,
                    'id_category' => '4',
                    'id_patent' => '2'
                ],
                [
                'id' => '179' ,
                'name' => 'PB 255 ES (EUST2)' ,
                'short_name' => 'PB255ES' ,
                'short_description' => 'Soplador de mano ECHO PB 255 ES, ligero, silencioso, tubo excéntrico anti giro, anclaje seguro, bloqueo del acelerador, arranque fácil ES Start, EUST2.' ,
                'description' => 'Su potente motor asegura al soplador de mano ECHO PB 255 ES la energía suficiente para trabajar sin contratiempos, con un excelente ratio peso-potencia, funcionamiento a altas revoluciones y capacidad de funcionamiento en cualquier posición. Se trata de un motor de alto rendimiento Euro Stage II, con menor consumo de carburante, bajo nivel de ruidos y menos emisiones de escape. Nuevo y revolucionario sistema de arranque fácil ES Start que permite la puesta en marcha de los motores de 2 tiempos de la manera más fácil y con el mínimo esfuerzo.' ,
                'price' => 369 ,
                'id_category' => '4' ,
                'id_patent' => '2'
                ],
                [
                'id' => '180' ,
                'name' => 'ES 250 ES (EUST2)' ,
                'short_name' => 'ES250ES' ,
                'short_description' => 'Aspirador-soplador-triturador de mano ECHO ES 250 ES, ligero, tubo excéntrico anti giro, anclaje seguro, bloqueo del acelerador, arranque fácil ES Start, EUST2.' ,
                'description' => 'El aspirador-soplador de mano ECHO ES 250 ES es un pequeño y práctico aspirador con función de triturado, para todo tipo de usos de limpieza en exteriores. Sin la bolsa de aspiración, puedes convertirlo fácilmente en un útil soplador. Su potente motor asegura al soplador de mano ECHO ES 250 ES la energía suficiente para trabajar sin contratiempos, con un excelente ratio peso-potencia, funcionamiento a altas revoluciones y capacidad de funcionamiento en cualquier posición. Se trata de un motor de alto rendimiento Euro Stage II, con menor consumo de carburante, bajo nivel de ruidos y menos emisiones de escape. Nuevo y revolucionario sistema de arranque fácil ES Start que permite la puesta en marcha de los motores de 2 tiempos de la manera más fácil y con el mínimo esfuerzo.' ,
                'price' => 475 ,
                'id_category' => '4' ,
                'id_patent' => '2'
                ],
                [
                'id' => '181' ,
                'name' => 'PB 580 (EUST2)' ,
                'short_name' => 'PB580' ,
                'short_description' => 'Soplador de mochila ECHO PB 580, potente, ligero, ergonómico, tubo recto y curvado, sistema antivibración, bloqueo del acelerador, anti hielo, CDI, EUST2.' ,
                'description' => 'Su potente motor asegura al soplador de mochila ECHO PB 580 la energía suficiente para trabajar sin contratiempos, con un excelente ratio peso-potencia, funcionamiento a altas revoluciones y capacidad de funcionamiento en cualquier posición. Se trata de un motor de alto rendimiento Euro Stage II, con menor consumo de carburante, bajo nivel de ruidos y menos emisiones de escape. Sistema de encendido electrónico CDI. Su menor desgaste significa mayor vida útil del motor, mayor durabilidad y fácil mantenimiento. Más potente que un motor eléctrico.' ,
                'price' => 679 ,
                'id_category' => '4' ,
                'id_patent' => '2'
                ],
                [
                'id' => '182' ,
                'name' => 'PB 760 (EUST2)' ,
                'short_name' => 'PB760' ,
                'short_description' => 'Soplador de mochila ECHO PB 760 LN, potente, ligero, ergonómico, tubo recto y curvado, sistema antivibración, bloqueo del acelerador, anti hielo, CDI, EUST2.' ,
                'description' => 'Su potente motor asegura al soplador de mochila ECHO PB 760 LN la energía suficiente para trabajar sin contratiempos, con un excelente ratio peso-potencia, funcionamiento a altas revoluciones y capacidad de funcionamiento en cualquier posición. Se trata de un motor de alto rendimiento Euro Stage II, con menor consumo de carburante, bajo nivel de ruidos y menos emisiones de escape. Sistema de encendido electrónico CDI. Su menor desgaste significa mayor vida útil del motor, mayor durabilidad y fácil mantenimiento. Más potente que un motor eléctrico.' ,
                'price' => 769 ,
                'id_category' => '4' ,
                'id_patent' => '2'
                ],
                [
                'id' => '183' ,
                'name' => 'PB 770 (EUST2)' ,
                'short_name' => 'PB770' ,
                'short_description' => 'Soplador de mochila ECHO PB 770, especial olivar, potente, tubo recto y curvado, sistema antivibración, bloqueo del acelerador, CDI, EUST2.' ,
                'description' => 'El soplador de mochila ECHO PB 770 ofrece una capacidad de soplado sin competencia. Es el modelo preferido de los agricultores para las tareas de recolección en el olivar y su rendimiento profesional está más que contrastado. Su sistema de refrigeración de la espalda incluye una toma de aire integrada en el acolchado de la espalda para mayor comodidad del usuario cuando trabaja en ambientes cálidos. Viene equipado con sistema anti vibración para mayor comodidad del usuario que lo emplea en largas jornadas.' ,
                'price' => 749 ,
                'id_category' => '4' ,
                'id_patent' => '2'
                ],
                [
                'id' => '184' ,
                'name' => 'DPB 600' ,
                'short_name' => 'DPB600' ,
                'short_description' => 'Soplador de batería ECHO DPB 600. Potencia 50V. Silencioso, sin vibraciones ni emisiones, económico y fácil de usar. También en versión kit que incluye cargador y batería' ,
                'description' => 'El sistema de 50V de ECHO utiliza la última tecnología de iones de litio y proporciona energía de más alta densidad, en comparación con la tecnología de baterías tradicionales menos potentes y pesadas. Hemos puesto toda nuestra experiencia en la nueva gama de maquinaria de batería de 50V, creando una gama de potentes herramientas aptas tanto para el usuario doméstico como para el profesional.' ,
                'price' => 295 ,
                'id_category' => '4' ,
                'id_patent' => '2'
                ],
                [
                'id' => '185' ,
                'name' => 'KIT DPB 600 + BATERIA 200 + CARGADOR' ,
                'short_name' => 'KITDPB600_BATERIA200_CARGADOR' ,
                'short_description' => 'Soplador de batería ECHO DPB 600 con cargador rápido LCQJ 600 y batería de 4 Ah LBP 560-200. Potencia 50V. Silencioso, sin vibraciones ni emisiones, económico y fácil de usar.' ,
                'description' => 'El sistema de 50V de ECHO utiliza la última tecnología de iones de litio y proporciona energía de más alta densidad, en comparación con la tecnología de baterías tradicionales menos potentes y pesadas. Hemos puesto toda nuestra experiencia en la nueva gama de maquinaria de batería de 50V, creando una gama de potentes herramientas aptas tanto para el usuario doméstico como para el profesional.' ,
                'price' => 620 ,
                'id_category' => '4' ,
                'id_patent' => '2'
                ],
                /* NOTE Motosierra */
                [
                    'id' => '28',
                    'name' => 'CS 2511 TES',
                    'short_name' => 'CS2511TES',
                    'short_description' => 'Motosierra de poda ECHO CS 2511 TES profesional ultraligera y con una inmejorable relación peso/potencia. Certificación EUST2. Arranque fácil ES-Start.',
                    'description' => 'El excelente diseño de la motosierra CS 2511 TES ha permitido a ECHO realizar una máquina profesional ligera sin tener que renunciar a especificaciones y equipamiento. De este modo, monta espada sólida, cadena estándar profesional OREGON con un diente grande que puede afilarse más veces, retenedor de cadena rotativo profesional, púas de tope de metal, protector metálico para proteger el cárter de la máquina, estarter de retorno automático y bomba de engrase profesional ajustable que accionada por el embrague, permite al usuario el control del flujo de aceite mediante un tornillo situado en la parte superior para un funcionamiento óptimo. De este modo reduce de forma considerable el consumo de aceite y mantiene la cadena perfectamente lubricada.',
                    'price' => 459,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '29',
                    'name' => 'CS 2511 TESC',
                    'short_name' => 'CS2511TESC',
                    'short_description' => 'Motosierra de poda ECHO CS 2511 TESC carving 0.050" ultraligera y con una inmejorable relación peso/potencia. Certificación EUST2. Arranque fácil ES-Start.',
                    'description' => 'El excelente diseño de la motosierra CS 2511 TES ha permitido a ECHO realizar una máquina profesional ligera sin tener que renunciar a especificaciones y equipamiento. De este modo, monta espada sólida, cadena estándar profesional OREGON con un diente grande que puede afilarse más veces, retenedor de cadena rotativo profesional, púas de tope de metal, protector metálico para proteger el cárter de la máquina, estarter de retorno automático y bomba de engrase profesional ajustable que accionada por el embrague, permite al usuario el control del flujo de aceite mediante un tornillo situado en la parte superior para un funcionamiento óptimo. De este modo reduce de forma considerable el consumo de aceite y mantiene la cadena perfectamente lubricada.',
                    'price' => 499,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '30',
                    'name' => 'CS 280 T',
                    'short_name' => 'CS280T',
                    'short_description' => 'Motosierra de poda ECHO CS 280 T profesional, ligera y potente. Filtro de aire G-Force, encendido digital CDI, Certificación EUST2',
                    'description' => 'La motosierra ECHO CS 280 TES es un modelo de poda muy ligero y manejable, con solo 3Kg de peso, con una inmejorable relación peso/potencia. Arranque fácil ES-Start y sistema de encendido digital CDI, que mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo. La Certificación EUST2 (Directiva 2012/46/EC) supone además de la reducción de emisiones, un importante ahorro en la factura de carburante. Con sistema de encendido digital y un eficaz sistema de reducción de vibraciones, dispone también de estárter integrado y ralentí rápido de fácil liberación, tan solo apretando el gatillo, que permite arrancar la máquina con menos esfuerzo.',
                    'price' => 383,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '31',
                    'name' => 'CS 280 T ES',
                    'short_name' => 'CS280TES',
                    'short_description' => 'Motosierra de poda ECHO CS 280 TES profesional, ligera y potente. Filtro de aire G-Force, encendido digital CDI, Certificación EUST2, arranque fácil ES-Start.',
                    'description' => 'La motosierra ECHO CS 280 TES es un modelo de poda muy ligero y manejable, con solo 3Kg de peso, con una inmejorable relación peso/potencia. Arranque fácil ES-Start y sistema de encendido digital CDI, que mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo. La Certificación EUST2 (Directiva 2012/46/EC) supone además de la reducción de emisiones, un importante ahorro en la factura de carburante. Con sistema de encendido digital y un eficaz sistema de reducción de vibraciones, dispone también de estárter integrado y ralentí rápido de fácil liberación, tan solo apretando el gatillo, que permite arrancar la máquina con menos esfuerzo.',
                    'price' => 430,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '32',
                    'name' => 'CS 280 T ES C',
                    'short_name' => 'CS280TESC',
                    'short_description' => 'Motosierra de poda ECHO CS 280 T profesional, ligera y potente. Filtro de aire G-Force, encendido digital CDI, Certificación EUST2.',
                    'description' => 'La motosierra ECHO CS 280 TES es un modelo de poda muy ligero y manejable, con solo 3Kg de peso, con una inmejorable relación peso/potencia. Arranque fácil ES-Start y sistema de encendido digital CDI, que mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo. La Certificación EUST2 (Directiva 2012/46/EC) supone además de la reducción de emisiones, un importante ahorro en la factura de carburante. Con sistema de encendido digital y un eficaz sistema de reducción de vibraciones, dispone también de estárter integrado y ralentí rápido de fácil liberación, tan solo apretando el gatillo, que permite arrancar la máquina con menos esfuerzo.',
                    'price' => 470,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '33',
                    'name' => 'CS 281 WES',
                    'short_name' => 'CS281WES',
                    'short_description' => 'Motosierra de poda ECHO CS 281 WES profesional, ligera y potente. Filtro aire G-Force, encendido digital, catalizador, certificación EUST2, ES-Start.',
                    'description' => 'La motosierra ECHO CS 281 WES es un modelo de poda capaz de cumplir con las estrictas normativas de regulación de emisiones EUST2 (Directiva 2012/46/EC) mediante el uso de catalizador, con lo que se disminuye el nivel de emisiones, conservando toda su potencia. La Certificación EUST2 supone además de la reducción de emisiones, un importante ahorro en la factura de carburante. Arranque fácil ES-Start y sistema de encendido digital CDI, que mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo. Dispone también de estárter integrado y ralentí rápido de fácil liberación, tan solo apretando el gatillo, que permite arrancar la máquina con menos esfuerzo.',
                    'price' => 425,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '34',
                    'name' => 'CS 320 TES ',
                    'short_name' => 'CS320TES',
                    'short_description' => 'Motosierra de poda ECHO CS 320 TES profesional, ligera y potente. Filtro aire G-Force, encendido digital CDI, arranque fácil ES-Start.',
                    'description' => 'La motosierra de poda ECHO CS 320 TES presenta una excelente relación peso/potencia para una máxima manejabilidad y confort. Arranque fácil con el mínimo esfuerzo gracias al sistema ES-Start. Encendido digital CDI, que mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo. Dispone también de estárter integrado y ralentí rápido de fácil liberación, tan solo apretando el gatillo, que permite arrancar la máquina con menos esfuerzo. La bomba de cebado también facilita el arranque del motor.',
                    'price' => 410,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '35',
                    'name' => 'CS 360 TES',
                    'short_name' => 'CS360TES',
                    'short_description' => 'Motosierra de poda ECHO CS 360 TES profesional, ligera y potente. Filtro aire G-Force, encendido digital CDI, certificación EUST2, arranque fácil ES-Start.',
                    'description' => 'La motosierra ECHO CS 360 TES es el modelo de poda más potente, con una excelente relación peso/potencia para una máxima manejabilidad y confort. Arranque fácil con el mínimo esfuerzo gracias al sistema ES-Start. Encendido digital CDI, que mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo. Dispone también de estárter integrado y ralentí rápido de fácil liberación, tan solo apretando el gatillo, que permite arrancar la máquina con menos esfuerzo. La bomba de cebado también facilita el arranque del motor.',
                    'price' => 479,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '36',
                    'name' => 'CS 310 ES',
                    'short_name' => 'CS310ES',
                    'short_description' => 'Motosierra ECHO CS 310 ES polivalente y económica, sistema encendido digital, arranque fácil ES-Start, filtro aire G-Force, certificación EUST2.',
                    'description' => 'La motosierra CS 310 ES es una máquina polivalente y económica, con una relación precio y prestaciones sin competencia, ideal para propietarios de pequeñas fincas y labores de mantenimiento. Con motor arranque fácil ES-Start y encendido Digitized Magneto, combinado con el cebador de combustible, permite arrancar la máquina sin esfuerzo, de una forma sencilla y segura, para que resulte más cómodo trabajar con la motosierra.',
                    'price' => 229,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '37',
                    'name' => 'CS 352 ES',
                    'short_name' => 'CS352ES',
                    'short_description' => 'Motosierra ECHO CS 352 ES polivalente y económica, sistema encendido digital, arranque fácil ES-Start, filtro aire G-Force, sistema anti-hielo, EUST2.',
                    'description' => 'La motosierra CS 352 ES es una máquina polivalente y económica, con una relación precio y prestaciones sin competencia, ideal para propietarios de pequeñas fincas y labores de mantenimiento. Con motor arranque fácil ES-Start y encendido Digitized Magneto, combinado con el cebador de combustible, permite arrancar la máquina sin esfuerzo, de una forma sencilla y segura, para que resulte más cómodo trabajar con la motosierra.',
                    'price' => 299,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '38',
                    'name' => 'CS 361 WES',
                    'short_name' => 'CS361WES',
                    'short_description' => 'Motosierra ECHO CS 361 WES para la poda a dos manos, sistema encendido digital, arranque fácil ES-Start, EUST2.',
                    'description' => 'La motosierra CS 361 WES es una máquina ligera y muy maniobrable gracias a su cuerpo delgado, una excelente distribución de pesos y la localización de los controles. Ideal para poda a dos manos, junto a su hermana pequeña, la motosierra ECHO CS 281 WES, son las máquinas de referencia en la poda del olivar. Con motor arranque fácil ES-Start y encendido Digitized Magneto. Este sistema desarrollado por ECHO, combinado con el cebador de combustible, facilita en gran forma la puesta en marcha del motor porque permite arrancar la máquina sin esfuerzo, de una forma sencilla y segura, para que resulte más cómodo trabajar con la motosierra.',
                    'price' => 464,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '39',
                    'name' => 'CS 420 ES',
                    'short_name' => 'CS420ES',
                    'short_description' => 'Motosierra ECHO CS 420 ES equilibrada y manejable, sistema encendido digital, arranque fácil ES-Start, catalizador, filtro aire G-Force, EUST2.',
                    'description' => 'La motosierra CS 420 ES es una máquina equilibrada y manejable, que permite trabajar sin esfuerzo con la máxima calidad. Con motor arranque fácil ES-Start y encendido Digitized Magneto. Combinado con el cebador de combustible, permite arrancar la máquina sin esfuerzo, de una forma sencilla y segura, para que resulte más cómodo trabajar con la motosierra. Con catalizador para conseguir un motor mucho más limpio que reduce considerablemente las emisiones de CO y Nox a la atmósfera.',
                    'price' => 475,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '40',
                    'name' => 'CS 490 ES /38',
                    'short_name' => 'CS490ES38',
                    'short_description' => 'Motosierra ECHO CS 490 ES para uso profesional en agricultura y forestal, sistema encendido digital, arranque fácil ES-Start, filtro aire G-Force, EUST2.',
                    'description' => 'La motosierra CS 490 ES es una máquina equilibrada y manejable, que permite trabajar sin esfuerzo con la máxima calidad. Con motor arranque fácil ES-Start y encendido Digitized Magneto. Este sistema desarrollado por ECHO, combinado con el cebador de combustible, facilita en gran forma la puesta en marcha del motor porque permite arrancar la máquina sin esfuerzo, de una forma sencilla y segura, para que resulte más cómodo trabajar con la motosierra.',
                    'price' => 599,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '41',
                    'name' => 'CS 490 ES /45',
                    'short_name' => 'CS490ES45',
                    'short_description' => 'Motosierra ECHO CS 490 ES para uso profesional en agricultura y forestal, sistema encendido digital, arranque fácil ES-Start, filtro aire G-Force, EUST2.',
                    'description' => 'La motosierra CS 490 ES es una máquina equilibrada y manejable, que permite trabajar sin esfuerzo con la máxima calidad. Con motor arranque fácil ES-Start y encendido Digitized Magneto. Este sistema desarrollado por ECHO, combinado con el cebador de combustible, facilita en gran forma la puesta en marcha del motor porque permite arrancar la máquina sin esfuerzo, de una forma sencilla y segura, para que resulte más cómodo trabajar con la motosierra.',
                    'price' => 635,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '42',
                    'name' => 'CS 590 /45',
                    'short_name' => 'CS59045',
                    'short_description' => 'Motosierra ECHO CS 590 para uso profesional en agricultura y forestal, sistema encendido digital, filtro aire G-Force, corte de alto rendimiento, EUST2.',
                    'description' => 'La motosierra CS 590 es una máquina potente y profesional, que ofrece el máximo rendimiento para el cuidado forestal y la agricultura. Su motor incorpora encendido Digitized Magneto. Este sistema desarrollado por ECHO, combinado con la válvula de descompresión, contribuye a un arranque mucho más fácil y a un funcionamiento mucho más suave. La potencia de la motosierra CS 590 permite a ECHO ofrecerla en dos versiones, con espadas de 45 cm y 50 cm.',
                    'price' => 735,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '43',
                    'name' => 'CS 590 /50',
                    'short_name' => 'CS59050',
                    'short_description' => 'Motosierra ECHO CS 590 para uso profesional en agricultura y forestal, sistema encendido digital, filtro aire G-Force, corte de alto rendimiento, EUST2.',
                    'description' => 'La motosierra CS 590 es una máquina potente y profesional, que ofrece el máximo rendimiento para el cuidado forestal y la agricultura. Su motor incorpora encendido Digitized Magneto. Este sistema desarrollado por ECHO, combinado con la válvula de descompresión, contribuye a un arranque mucho más fácil y a un funcionamiento mucho más suave. La potencia de la motosierra CS 590 permite a ECHO ofrecerla en dos versiones, con espadas de 45 cm y 50 cm.',
                    'price' => 749,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '44',
                    'name' => 'CS 390 ESX',
                    'short_name' => 'CS390ESX',
                    'short_description' => 'Motosierra forestal ECHO CS 390 ESX, uso profesional agricultura y forestal. Potente, ligera, sistema anti-hielo, arranque fácil y barra profesional Sugihara.',
                    'description' => 'Las máquinas ECHO se construyen siempre bajo normas profesionales y la motosierra forestal CS 390 ESX no es una excepción. Su motor profesional de 2 tiempos ofrece una impresionante potencia y un rendimiento de corte excepcional. Su sistema de encendido digital CDI mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo. La Certificación EUST2 (Directiva 2012/46/EC) supone además de la reducción de emisiones, un importante ahorro en la factura de carburante.',
                    'price' => 698,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '45',
                    'name' => 'CS 501 SX /40',
                    'short_name' => 'CS501SX40',
                    'short_description' => 'Motosierra forestal ECHO CS 501 SX, uso profesional agricultura y forestal. Potente, ligera, anti-vibraciones, CDI, filtro G-Force y espada Sugihara 40 cm.',
                    'description' => 'Las máquinas ECHO se construyen siempre bajo normas profesionales y la motosierra forestal CS 501 SX no es una excepción. Su motor profesional de 2 tiempos ofrece una impresionante potencia y un rendimiento de corte excepcional. Su sistema de encendido digital CDI mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo. La Certificación EUST2 (Directiva 2012/46/EC) supone además de la reducción de emisiones, un importante ahorro en la factura de carburante.',
                    'price' => 799,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '46',
                    'name' => 'CS 501 SX /45',
                    'short_name' => 'CS420ES',
                    'short_description' => 'Motosierra forestal ECHO CS 501 SX, uso profesional agricultura y forestal. Potente, ligera, anti-vibraciones, CDI, filtro G-Force y espada Sugihara 45 cm.',
                    'description' => 'Las máquinas ECHO se construyen siempre bajo normas profesionales y la motosierra forestal CS 501 SX no es una excepción. Su motor profesional de 2 tiempos ofrece una impresionante potencia y un rendimiento de corte excepcional. Su sistema de encendido digital CDI mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo. La Certificación EUST2 (Directiva 2012/46/EC) supone además de la reducción de emisiones, un importante ahorro en la factura de carburante.',
                    'price' => 810,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '61',
                    'name' => 'CS 620 SX /45',
                    'short_name' => 'CS620SX45',
                    'short_description' => 'Motosierra forestal ECHO CS 620 SX, uso profesional agricultura y forestal. Potente, ligera, alto par motor, CDI, filtro G-Force y espada Sugihara de 45 cm.',
                    'description' => 'Las máquinas ECHO se construyen siempre bajo normas profesionales y la motosierra forestal CS 620 SX no es una excepción. Su motor profesional de 2 tiempos ofrece una impresionante potencia y un rendimiento de corte excepcional. Su sistema de encendido digital CDI mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo. El motor ha sido diseñado para ofrecer el máximo par a las revoluciones de trabajo, lo que disminuye el tiempo de corte en más de un 30% respecto de otros modelos similares.',
                    'price' => 928,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '47',
                    'name' => 'CS 620 SX /50',
                    'short_name' => 'CS620SX50',
                    'short_description' => 'Motosierra forestal ECHO CS 501 SX, uso profesional agricultura y forestal. Potente, ligera, anti-vibraciones, CDI, filtro G-Force y espada Sugihara 45 cm.',
                    'description' => 'Las máquinas ECHO se construyen siempre bajo normas profesionales y la motosierra forestal CS 501 SX no es una excepción. Su motor profesional de 2 tiempos ofrece una impresionante potencia y un rendimiento de corte excepcional. Su sistema de encendido digital CDI mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo. La Certificación EUST2 (Directiva 2012/46/EC) supone además de la reducción de emisiones, un importante ahorro en la factura de carburante.',
                    'price' => 950,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '201',
                    'name' => 'CS 2000',
                    'short_name' => 'CS2000',
                    'short_description' => 'short_description' ,
                    'description' => 'description' ,
                    'price' => 158,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                [
                    'id' => '202',
                    'name' => 'CS 2400',
                    'short_name' => 'CS2400',
                    'short_description' => 'short_description' ,
                    'description' => 'description' ,
                    'price' => 206,
                    'id_category' => '1',
                    'id_patent' => '2'
                ],
                /* DESBROZADORA */
                [
                    'id' => '62',
                    'name' => 'SRM 222 ESL',
                    'short_name' => 'SRM222ESL',
                    'short_description' => 'Desbrozadora ligera ECHO SRM 222 ESL, manillar simple, compacta y manejable, arranque fácil ES-Start, bajas vibraciones, encendido electrónico CDI, EUST2.',
                    'description' => 'La desbrozadora ECHO SRM 222 ESL, ligera, robusta y compacta, hace fáciles los trabajos más duros. Su innovadora tecnología ofrece un menor consumo, mayor aceleración y un aumento de la potencia en un 13% respecto de su predecesora, la desbrozadora ECHO SRM 220 ESL. El exclusivo sistema de arranque fácil ES-Start permite un rápido encendido con el mínimo esfuerzo.
                    Este modelo, el primero de la amplia gama de desbrozadoras ECHO, es ligera y compacta, a la vez que potente y robusta. Destaca su mayor potencia y aceleración respecto a versiones anteriores, así como su ajustado precio que la convierte en una máquina muy interesante para el usuario particular.',
                    'price' => 295,
                    'id_category' => '3',
                    'id_patent' => '2'
                ],
                [
                    'id' => '63',
                    'name' => 'SRM 222 ESU',
                    'short_name' => 'SRM222ESU',
                    'short_description' => 'Desbrozadora ligera ECHO SRM 222 ESU, manillar doble, compacta y manejable, arranque fácil ES-Start, bajas vibraciones, encendido electrónico CDI, EUST2.',
                    'description' => 'La desbrozadora ECHO SRM 222 ESU, ligera, robusta y compacta, hace fáciles los trabajos más duros. Su innovadora tecnología ofrece un menor consumo, mayor aceleración y un aumento de la potencia en un 13% respecto de su predecesora, la desbrozadora ECHO SRM 220 ESU. El exclusivo sistema de arranque fácil ES-Start permite un rápido encendido con el mínimo esfuerzo.
                    Este modelo, el primero de la amplia gama de desbrozadoras ECHO, es ligera y compacta, a la vez que potente y robusta. Destaca su mayor potencia y aceleración respecto a versiones anteriores, así como su ajustado precio que la convierte en una máquina muy interesante para el usuario particular.',
                    'price' => 329,
                    'id_category' => '3',
                    'id_patent' => '2'
                ],
                [
                    'id' => '64',
                    'name' => 'SRM 2620 ESL',
                    'short_name' => 'SRM2620ESL',
                    'short_description' => 'Desbrozadora ligera ECHO SRM 2620 ESL, manillar simple, compacta y manejable, arranque fácil ES-Start, catalizador, encendido electrónico CDI, EUST2.',
                    'description' => 'La desbrozadora ECHO SRM 2620 ESL, ligera, robusta y compacta, es el modelo más potente de su categoría. Su nuevo motor con catalizador, que reduce las emisiones de CO2, y de alto rendimiento la convierte en la desbrozadora profesional ligera más potente del mercado. El exclusivo sistema de arranque fácil ES-Start permite un rápido encendido con el mínimo esfuerzo.
                    Su motor de alta resistencia presenta un menor desgaste, lo que significa una mayor vida útil del mismo y durabilidad extendida. Su motor diseñado y fabricado en Japón cumple con la segunda fase de la estricta directiva comunitaria de emisiones (EUST2), con menor consumo de carburante, bajo nivel de ruidos y menos emisiones de escape. Su sistema de encendido electrónico CDI mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo.',
                    'price' => 448,
                    'id_category' => '3',
                    'id_patent' => '2'
                ],
                [
                    'id' => '65',
                    'name' => 'SRM 2620 ESU',
                    'short_name' => 'SRM2620ESU',
                    'short_description' => 'Desbrozadora ligera ECHO SRM 2620 ESU, manillar doble, compacta y manejable, arranque fácil ES-Start, catalizador, encendido electrónico CDI, EUST2.',
                    'description' => 'La desbrozadora ECHO SRM 2620 ESU, ligera, robusta y compacta, es el modelo más potente de su categoría. Su nuevo motor con catalizador, que reduce las emisiones de CO2, y de alto rendimiento la convierte en la desbrozadora profesional ligera más potente del mercado. El exclusivo sistema de arranque fácil ES-Start permite un rápido encendido con el mínimo esfuerzo.
                    Su motor de alta resistencia presenta un menor desgaste, lo que significa una mayor vida útil del mismo y durabilidad extendida. Su motor diseñado y fabricado en Japón cumple con la segunda fase de la estricta directiva comunitaria de emisiones (EUST2), con menor consumo de carburante, bajo nivel de ruidos y menos emisiones de escape. Su sistema de encendido electrónico CDI mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo.',
                    'price' => 478,
                    'id_category' => '3',
                    'id_patent' => '2'
                ],
                [
                    'id' => '66',
                    'name' => 'SRM 2620 T ESL',
                    'short_name' => 'SRM2620TESL',
                    'short_description' => 'Desbrozadora High-Torque ECHO SRM 2620 T ESL con reductora, manillar simple, ligera y potente, arranque fácil ES-Start, encendido electrónico CDI, EUST2.',
                    'description' => 'La desbrozadora ECHO SRM 2620 T ESL con reductora es el modelo más potente de su categoría. Su nuevo motor de alto rendimiento la convierte en la desbrozadora profesional ligera más potente del mercado. Gracias a su reductora “High-Torque” de alto par ofrece un 50% más de fuerza y permite trabajar con una superficie de corte hasta 4 veces mayor, con una desbrozadora de poco peso y bajo consumo. Permite realizar cualquier tipo de trabajo profesional de limpieza y mantenimiento en jardines. Es la máquina ideal para los jardineros profesionales y las brigadas de mantenimiento.',
                    'price' => 498,
                    'id_category' => '3',
                    'id_patent' => '2'
                ],
                [
                    'id' => '67',
                    'name' => 'SRM 2620 T ESU',
                    'short_name' => 'SRM2620TESU',
                    'short_description' => 'Desbrozadora High-Torque ECHO SRM 2620 T ESU con reductora, manillar doble, ligera y potente, arranque fácil ES-Start, encendido electrónico CDI, EUST2.',
                    'description' => 'La desbrozadora ECHO SRM 2620 T ESU con reductora es el modelo más potente de su categoría. Su nuevo motor de alto rendimiento la convierte en la desbrozadora profesional ligera más potente del mercado. Gracias a su reductora “High-Torque” de alto par ofrece un 50% más de fuerza y permite trabajar con una superficie de corte hasta 4 veces mayor, con una desbrozadora de poco peso y bajo consumo. Permite realizar cualquier tipo de trabajo profesional de limpieza y mantenimiento en jardines. Es la máquina ideal para los jardineros profesionales y las brigadas de mantenimiento.',
                    'price' => 528,
                    'id_category' => '3',
                    'id_patent' => '2'
                ],
                [
                    'id' => '68',
                    'name' => 'SRM 420 T ESU',
                    'short_name' => 'SRM420TESU',
                    'short_description' => 'Desbrozadora High-Torque ECHO SRM 420 T ESU con reductora, manillar doble, ligera y potente, arranque fácil ES-Start, encendido electrónico CDI, EUST2.',
                    'description' => 'La desbrozadora ECHO SRM 420 T ESU con reductora es el modelo más potente de su categoría. Su nuevo motor de alto rendimiento la convierte en la desbrozadora profesional ligera más potente del mercado. Gracias a su reductora “High-Torque” de alto par ofrece un 50% más de fuerza y permite trabajar con una superficie de corte hasta 4 veces mayor, con una desbrozadora de poco peso y bajo consumo. Permite realizar cualquier tipo de trabajo profesional de limpieza y mantenimiento en jardines. Es la máquina ideal para los jardineros profesionales y las brigadas de mantenimiento.',
                    'price' => 870,
                    'id_category' => '3',
                    'id_patent' => '2'
                ],
                [
                    'id' => '69',
                    'name' => 'SRM 350 ESU',
                    'short_name' => 'SRM350ESU',
                    'short_description' => 'Desbrozadora potente ECHO SRM 350 ESU, manillar doble, robusta y económica, arranque fácil ES-Start, nivel sonoro Low Tone, encendido electrónico CDI.',
                    'description' => 'La desbrozadora ECHO SRM 350 ESU hace fáciles los trabajos más duros y al mejor precio. Ligera, robusta y potente, incorpora un motor de alta resistencia y sistema de bajo nivel sonoro Low Tone. El exclusivo sistema de arranque fácil ES-Start permite un rápido encendido con el mínimo esfuerzo.
                    u motor de alta resistencia presenta un menor desgaste, lo que significa una mayor vida útil del mismo y durabilidad extendida. Su motor diseñado y fabricado en Japón cumple con la primera fase de la estricta directiva comunitaria de emisiones (EUST1). Su sistema de encendido electrónico CDI mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo.',
                    'price' => 489,
                    'id_category' => '3',
                    'id_patent' => '2'
                ],
                [
                    'id' => '70',
                    'name' => 'SRM 420 ESU',
                    'short_name' => 'SRM420ESU',
                    'short_description' => 'Desbrozadora forestal ECHO SRM 420 ESU, manillar doble, profesional, robusta, potente y resistente, arranque fácil ES-Start, encendido electrónico CDI, EUST2.',
                    'description' => 'La desbrozadora ECHO SRM420 ESU ha sido especialmente diseñada para trabajos forestales de envergadura por su gran capacidad de trabajo. Su ligereza, combinada con la potencia de su nuevo motor le confieren las características que todo profesional busca en una desbrozadora. Incorpora el sistema de arranque fácil ES Start exclusivo de ECHO, gracias al cual arranca a la primera y sin esfuerzo.
                    La desbrozadora ECHO SRM420 ESU equipa el nuevo motor profesional de cilindro cromado que consigue, con sólo 42cc, un 11% más de potencia y una reducción del 20% en el consumo comparada con los modelos tradicionales. Además reduce las emisiones en un 70%. Su motor diseñado y fabricado en Japón cumple con la segunda fase de la estricta directiva comunitaria de emisiones (EUST2), con menor consumo de carburante, bajo nivel de ruidos y menos emisiones de escape. Su sistema de encendido electrónico CDI mejora el comportamiento de la máquina a cualquier régimen del motor y se ajusta perfectamente a cada condición de trabajo.',
                    'price' => 732,
                    'id_category' => '3',
                    'id_patent' => '2'
                ],
                [
                    'id' => '71',
                    'name' => 'SRM 520 ESU',
                    'short_name' => 'SRM520ESU',
                    'short_description' => 'Desbrozadora forestal ECHO SRM 520 ESU, manillar doble, profesional, robusta, olivar, ES-Start, bajo nivel sonoro Low-Tone, encendido electrónico CDI, EUST2.',
                    'description' => 'La desbrozadora ECHO SRM 520 ESU tiene la potencia necesaria para desbrozar en los sitios más difíciles. Incorpora sistema Low-Tone de bajo nivel sonoro. Arranque fácil ES-Start. Su elevada potencia le permite incorporar cabezales de 4 y 8 hilos, especialmente útiles para el desbroce de plantas resistentes sin correr riesgo de dañar el pie del olivo. Incorpora el sistema de arranque fácil ES Start exclusivo de ECHO, gracias al cual arranca a la primera y sin esfuerzo.',
                    'price' => 910,
                    'id_category' => '3',
                    'id_patent' => '2'
                ],
                [
                    'id' => '72',
                    'name' => 'BCLS 510 ES',
                    'short_name' => 'BCLS510ES',
                    'short_description' => 'Desbrozadora forestal ECHO BCLS 510 ES, manillar doble, profesional, robusta, ES-Start, bajo nivel sonoro Low-Tone, antivibración, encendido electrónico CDI, EUST2.',
                    'description' => 'La desbrozadora forestal ECHO BCLS 510 ES tiene la potencia necesaria para desbrozar en los sitios más complicados y permite limpiar como nadie el sotobosque más difícil. Incorpora sistema Low-Tone de bajo nivel sonoro. Arranque fácil ES-Start. El diseño especial de su eje, más corto y con un diámetro más grueso, junto a su sistema anti vibración profesional, la convierten en un modelo especial para limpieza forestal intensiva. Incorpora el sistema de arranque fácil ES Start exclusivo de ECHO, gracias al cual arranca a la primera y sin esfuerzo.',
                    'price' => 860,
                    'id_category' => '3',
                    'id_patent' => '2'
                ],
                [
                    'id' => '73',
                    'name' => 'BCLS 580',
                    'short_name' => 'BCLS580',
                    'short_description' => 'Desbrozadora forestal ECHO BCLS 580, manillar doble, profesional, robusta, bajo nivel sonoro Low-Tone, antivibración, encendido electrónico CDI.',
                    'description' => 'La desbrozadora forestal ECHO BCLS 580 tiene la potencia necesaria para desbrozar en los sitios más complicados y permite limpiar como nadie el sotobosque más difícil. Incorpora sistema Low-Tone de bajo nivel sonoro. Arranque fácil ES-Start. El diseño especial de su eje, más corto y con un diámetro más grueso, junto a su sistema anti vibración profesional, la convierten en un modelo especial para limpieza forestal intensiva. Incorpora el sistema de arranque fácil ES Start exclusivo de ECHO, gracias al cual arranca a la primera y sin esfuerzo.',
                    'price' => 1140,
                    'id_category' => '3',
                    'id_patent' => '2'
                ],
                [
                    'id' => '74',
                    'name' => 'RM 520 ES',
                    'short_name' => 'RM520ES',
                    'short_description' => 'Desbrozadora de mochila ECHO RM 520 ES, manillar flexible, bajo nivel sonoro Low-Tone, antivibración, encendido electrónico CDI, arranque fácil ES-Start.',
                    'description' => 'La desbrozadora de mochila ECHO RM 520 ES permite llegar a los sitios más inaccesibles gracias a su manillar flexible. El peso del motor recae en la cintura para mayor comodidad y a fin de evitar daños en la columna vertebral. El centro de gravedad está más cerca de la espalda del usuario y el motor está fijado con un ángulo de 35º. Incorpora sistema Low-Tone de bajo nivel sonoro. Incorpora el sistema de arranque fácil ES Start exclusivo de ECHO, gracias al cual arranca a la primera y sin esfuerzo.',
                    'price' => 1080,
                    'id_category' => '3',
                    'id_patent' => '2'
                ],
                [
                    'id' => '186' ,
                    'name' => 'DSRM 300' ,
                    'short_name' => 'DSRM300' ,
                    'short_description' => 'Desbrozadora de batería ECHO DHC 200. Potencia 50V. Silenciosa, sin vibraciones ni emisiones, económica y fácil de usar. También en versión kit que incluye cargador y batería.' ,
                    'description' => 'El sistema de 50V de ECHO utiliza la última tecnología de iones de litio y proporciona energía de más alta densidad, en comparación con la tecnología de baterías tradicionales menos potentes y pesadas. Hemos puesto toda nuestra experiencia en la nueva gama de maquinaria de batería de 50V, creando una gama de potentes herramientas aptas tanto para el usuario doméstico como para el profesional.' ,
                    'price' => 310 ,
                    'id_category' => '3' ,
                    'id_patent' => '2'
                ],
                [
                    'id' => '187' ,
                    'name' => 'KIT DSRM 300 + BATERIA 100 + CARGADOR' ,
                    'short_name' => 'KITDSRM300_BATERIA100_CARGADOR' ,
                    'short_description' => 'Desbrozadora de batería ECHO DHC 200 con cargador rápido LCQJ 600 y batería de 2Ah LBP 560-200. Potencia 50V. Silenciosa, sin vibraciones ni emisiones, económica y fácil de usar.' ,
                    'description' => 'El sistema de 50V de ECHO utiliza la última tecnología de iones de litio y proporciona energía de más alta densidad, en comparación con la tecnología de baterías tradicionales menos potentes y pesadas. Hemos puesto toda nuestra experiencia en la nueva gama de maquinaria de batería de 50V, creando una gama de potentes herramientas aptas tanto para el usuario doméstico como para el profesional.' ,
                    'price' => 585 ,
                    'id_category' => '3' ,
                    'id_patent' => '2'
                ],
                [
                    'id' => '199' ,
                    'name' => 'EGT 350' ,
                    'short_name' => 'EGT350' ,
                    'short_description' => 'short_description' ,
                    'description' => 'description' ,
                    'price' => 85 ,
                    'id_category' => '3' ,
                    'id_patent' => '2'
                ],
                [
                    'id' => '200' ,
                    'name' => 'EGT 520' ,
                    'short_name' => 'EGT520' ,
                    'short_description' => 'short_description' ,
                    'description' => 'description' ,
                    'price' => 109 ,
                    'id_category' => '3' ,
                    'id_patent' => '2'
                ],
                /* NOTE Cortasetos */
                [
                'id' => '188' ,
                'name' => 'HC 1501 (EUST2)' ,
                'short_name' => 'HC1501' ,
                'short_description' => 'short_description' ,
                'description' => 'description' ,
                'price' => 339 ,
                'id_category' => '2' ,
                'id_patent' => '2'
                ],
                [
                'id' => '189' ,
                'name' => 'HCR 165 ES (EUST2)' ,
                'short_name' => 'HCR165ES' ,
                'short_description' => 'short_description' ,
                'description' => 'description' ,
                'price' => 565 ,
                'id_category' => '2' ,
                'id_patent' => '2'
                ],
                [
                'id' => '190' ,
                'name' => 'HCR 185 ES (EUST2)' ,
                'short_name' => 'HCR185ES' ,
                'short_description' => 'Cortasetos doble corte ECHO HCR 165 ES, manillar giratorio, cuchilla desplazable 64 cm largo, corte ajustable japonés, anti vibraciones, arranque fácil, EUST2.' ,
                'description' => 'Fabricado con la solidez y robustez que caracteriza a los productos ECHO, el cortasetos HCR 165 ES, por su potencia y comodidad, puede ser utilizado tanto por empresas de mantenimiento y jardineros, como usuarios particulares. Su motor diseñado y fabricado en Japón cumple con la segunda fase de la estricta directiva comunitaria de emisiones (EUST2), con menor consumo de carburante, bajo nivel de ruidos y menos emisiones de escape. Sistema de arranque asistido por muelle ES-Start que requiere el mínimo esfuerzo. El motor de arranque sólo requiere un corto tirón del cable.' ,
                'price' => 630 ,
                'id_category' => '2' ,
                'id_patent' => '2'
                ],
                [
                'id' => '191' ,
                'name' => 'HC 331 ES (EUST2)' ,
                'short_name' => 'HC331ES' ,
                'short_description' => 'Cortasetos corte simple ECHO HC 331 ES, manillar fijo, cuchilla desplazable 72 cm largo, corte ajustable japonés, uso profesional, arranque fácil, EUST2.' ,
                'description' => 'Fabricado con la solidez y robustez que caracteriza a los productos ECHO, el cortasetos HC 331 ES, por su diseño especial de corte simple, está indicado para el uso profesional de jardineros y empresas de mantenimiento. Su motor diseñado y fabricado en Japón cumple con la segunda fase de la estricta directiva comunitaria de emisiones (EUST2), con menor consumo de carburante, bajo nivel de ruidos y menos emisiones de escape. Sistema de arranque asistido por muelle ES-Start que requiere el mínimo esfuerzo. El motor de arranque sólo requiere un corto tirón del cable.' ,
                'price' => 799 ,
                'id_category' => '2' ,
                'id_patent' => '2'
                ],
                [
                'id' => '192' ,
                'name' => 'HCA 265 ES (EUST2)' ,
                'short_name' => 'HCA265ES' ,
                'short_description' => 'Cortasetos de altura ECHO HCA 265 ESLW con cuchilla doble articulada, ligero, corte ajustable japonés, uso profesional, arranque fácil, EUST2.' ,
                'description' => 'Fabricado con la solidez y robustez que caracteriza a los productos ECHO, el cortasetos de altura HCA 265 ESLW, permite llegar a los setos más altos con comodidad, o a las partes inferiores sin agacharse. Su motor de alto rendimiento diseñado y fabricado en Japón, presenta un menor desgaste y una mayor vida útil. Cumple con la segunda fase de la estricta directiva comunitaria de emisiones (EUST2), con menor consumo de carburante, bajo nivel de ruidos y menos emisiones de escape. Con catalizador y sistema de arranque asistido por muelle ES-Start que requiere el mínimo esfuerzo. El motor de arranque sólo requiere un corto tirón del cable.' ,
                'price' => 723 ,
                'id_category' => '2' ,
                'id_patent' => '2'
                ],
                [
                'id' => '193' ,
                'name' => 'PAS 265 ES (EUST2)' ,
                'short_name' => 'PAS265ES' ,
                'short_description' => 'short_description' ,
                'description' => 'description' ,
                'price' => 944 ,
                'id_category' => '2' ,
                'id_patent' => '2'
                ],
                [
                'id' => '194' ,
                'name' => 'DHC 200' ,
                'short_name' => 'DHC200' ,
                'short_description' => 'Cortasetos de batería ECHO DHC 200 con cargador rápido y batería de 2Ah. Potencia 50V. Silencioso, sin vibraciones ni emisiones, económico y fácil de usar. También en versión kit que incluye cargador y batería.' ,
                'description' => 'El sistema de 50V de ECHO utiliza la última tecnología de iones de litio y proporciona energía de más alta densidad, en comparación con la tecnología de baterías tradicionales menos potentes y pesadas. Hemos puesto toda nuestra experiencia en la nueva gama de maquinaria de batería de 50V, creando una gama de potentes herramientas aptas tanto para el usuario doméstico como para el profesional.' ,
                'price' => 355 ,
                'id_category' => '2' ,
                'id_patent' => '2'
                ],
                [
                'id' => '195' ,
                'name' => 'KIT DHC200 + BATERIA 100 + CARGADOR' ,
                'short_name' => 'KITDHC200_BATERIA100_CARGADOR' ,
                'short_description' => 'Cortasetos de batería ECHO DHC 200 con cargador rápido LCQJ 600 y batería de 2Ah LBP 560-100. Potencia 50V. Silencioso, sin vibraciones ni emisiones, económico y fácil de usar.' ,
                'description' => 'El sistema de 50V de ECHO utiliza la última tecnología de iones de litio y proporciona energía de más alta densidad, en comparación con la tecnología de baterías tradicionales menos potentes y pesadas. Hemos puesto toda nuestra experiencia en la nueva gama de maquinaria de batería de 50V, creando una gama de potentes herramientas aptas tanto para el usuario doméstico como para el profesional.' ,
                'price' => 625 ,
                'id_category' => '2' ,
                'id_patent' => '2'
                ],
                // [
                // 'id' => '196' ,
                // 'name' => 'HC 560' ,
                // 'short_name' => 'HC560' ,
                // 'short_description' => 'short_description' ,
                // 'description' => 'description' ,
                // 'price' => 172 ,
                // 'id_category' => '2' ,
                // 'id_patent' => '2'
                // ],
                // [
                // 'id' => '197' ,
                // 'name' => 'HCR 610' ,
                // 'short_name' => 'HCR610' ,
                // 'short_description' => 'short_description' ,
                // 'description' => 'description' ,
                // 'price' => 215 ,
                // 'id_category' => '2' ,
                // 'id_patent' => '2'
                // ],
                // [
                // 'id' => '198' ,
                // 'name' => 'DHC 30' ,
                // 'short_name' => 'DHC30' ,
                // 'short_description' => 'short_description' ,
                // 'description' => 'description' ,
                // 'price' => 359 ,
                // 'id_category' => '2' ,
                // 'id_patent' => '2'
                // ],
                /* NOTE Podadoras */
                [
                'id' => '203' ,
                'name' => 'PPF 236 ES (EUST2)' ,
                'short_name' => 'PPF236ES' ,
                'short_description' => 'Motosierra de poda de altura ECHO PPF236 ES, barra fija de acero, sin vibraciones, arranque fácil ES-Start, encendido digital, certificación EUST2.' ,
                'description' => 'Motosierra de poda de altura ECHO PPF236 ES, para los trabajos de precisión en altura. Su barra de longitud fija, protegida de las vibraciones, te permitirá realizar con precisión las tareas de poda desde el nivel del suelo. Su sistema de arranque fácil ES-Start y encendido Digitized Magneto, combinado con la bomba de cebado, permite arrancar la máquina sin esfuerzo, de una forma sencilla y segura, para que resulte más cómodo trabajar con la motosierra.' ,
                'price' => 659 ,
                'id_category' => '26' ,
                'id_patent' => '2'
                ],
                [
                'id' => '204' ,
                'name' => 'PPT 265 ES (EUST2)' ,
                'short_name' => 'PPT265ES' ,
                'short_description' => 'Motosierra de poda de altura ECHO PPT265 ES, barra telescópica de fibra de vidrio, arranque fácil ES-Start, encendido digital, catalizador, EUST2.' ,
                'description' => 'Motosierra de poda de altura ECHO PPT265 ES, para los trabajos de precisión en altura. Su barra telescópica ajustable en altura hasta 5.2m, protegida de las vibraciones, te permitirá realizar con precisión las tareas de poda desde el nivel del suelo. Protección de fibra de vidrio en la barra para lograr un agarre seguro. Su sistema de arranque fácil ES-Start y encendido Digitized Magneto, combinado con la bomba de cebado, permite arrancar la máquina sin esfuerzo, de una forma sencilla y segura, para que resulte más cómodo trabajar con la motosierra.' ,
                'price' => 878 ,
                'id_category' => '26' ,
                'id_patent' => '2'
                ],
                // [
                // 'id' => '205' ,
                // 'name' => 'PAS 265 ES (EUST2)' ,
                // 'short_name' => 'PAS265ES' ,
                // 'short_description' => 'short_description' ,
                // 'description' => 'description' ,
                // 'price' => 797 ,
                // 'id_category' => '26' ,
                // 'id_patent' => '2'
                // ],
                /* NOTE Baterias */
                [
                'id' => '206' ,
                'name' => 'BATERIA 100' ,
                'short_name' => 'BATERIA100' ,
                'short_description' => 'Batería ECHO LBP 560 100 de 2 Ah, compatible con toda la gama ECHO battery series. Potencia y autonomía para trabajos duros. 80% de carga en 24 minutos.' ,
                'description' => 'El sistema de 50V de ECHO utiliza la última tecnología de iones de litio y proporciona energía de más alta densidad, en comparación con la tecnología de baterías tradicionales menos potentes y pesadas. Hemos puesto toda nuestra experiencia en la nueva gama de maquinaria de batería de 50V, creando una gama de potentes herramientas aptas tanto para el usuario doméstico como para el profesional.' ,
                'price' => 209 ,
                'id_category' => '7' ,
                'id_patent' => '2'
                ],
                [
                'id' => '207' ,
                'name' => 'BATERIA 200' ,
                'short_name' => 'BATERIA200' ,
                'short_description' => 'Batería ECHO LBP 560 200 de 4 Ah, compatible con toda la gama ECHO battery series. Potencia y autonomía para trabajos duros. 80% de carga en 48 minutos.' ,
                'description' => 'El sistema de 50V de ECHO utiliza la última tecnología de iones de litio y proporciona energía de más alta densidad, en comparación con la tecnología de baterías tradicionales menos potentes y pesadas. Hemos puesto toda nuestra experiencia en la nueva gama de maquinaria de batería de 50V, creando una gama de potentes herramientas aptas tanto para el usuario doméstico como para el profesional.' ,
                'price' => 265 ,
                'id_category' => '7' ,
                'id_patent' => '2'
                ],
                [
                'id' => '208' ,
                'name' => 'LBP 560-900' ,
                'short_name' => 'LBL560900' ,
                'short_description' => 'Batería de mochila ECHO LBP-560-900 de 16Ah. Compatible con toda la gama ECHO Battery series. Aumenta la autonomía y reduce el peso de la máquina.' ,
                'description' => '
Con la batería de mochila ECHO LBP-560-900 podrás trabajar tanto tiempo como necesites y sin cansarte, ya que, al llevarla colgada en un cómoda mochila, la tarea se hará mucho más llevadera. Viene equipada con un arnés ergonómico totalmente ajustable, para adaptarlo perfectamente a tu espalda, y con un cinturón acolchado. Incluye un asa de transporte superior, logo reflectante para seguridad del usuario, e indicador del nivel de carga de 4 leds.' ,
                'price' => 1199 ,
                'id_category' => '7' ,
                'id_patent' => '2'
                ],

                /* NOTE Cargadores */
                [
                'id' => '209' ,
                'name' => 'CARGADOR RAPIDO' ,
                'short_name' => 'CARGADORRAPIDO' ,
                'short_description' => 'short_description' ,
                'description' => 'description' ,
                'price' => 130 ,
                'id_category' => '18' ,
                'id_patent' => '2'
                ],
                /* TODO Oleo-Mac */
                /* NOTE Tractor desbrozador */
                [
                    'id' => '215' ,
                    'name' => 'Apache 92 EVO' ,
                    'short_name' => 'APACHE92EVO' ,
                    'short_description' => 'El Tractor Cortacésped profesionales Oleo Mac APACHE 92 EVO, robusto y seguro, es ideal para segar y limpiar zonas incultas con vegetación espesa y suelos irregulares o en pendientes.' ,
                    'description' => 'El potente grupo de corte está formado por una sola cuchillas con extremos flotantes.
Las bandas de rodadura anchas y el centro de gravedad bajo aseguran la máxima estabilidad incluso en terrenos accidentados o en proximidad de orillas y cunetas.
Numerosos dispositivos simplifican el trabajo del conductor, por ejemplo, por ejemplo el accionamiento electromagnético del embrague, la transmisión hidrostática, la regulación centralizada de la altura de corte y el diferencial bloqueable que permite superar dificultades en cualquier tipo de terreno.
Máxima protección para el conductor mediante el arco, las protecciones laterales y el cinturón de seguridad.' ,
                    'price' => 6999 ,
                    'id_category' => '3' ,
                    'id_patent' => '17'
                ],
                [
                    'id' => '216' ,
                    'name' => 'Apache 92 EVO 4x4' ,
                    'short_name' => 'APACHE92EVO4X4' ,
                    'short_description' => 'El Tractor Cortacésped profesionales Oleo Mac APACHE 92 EVO, robusto y seguro, es ideal para segar y limpiar zonas incultas con vegetación espesa y suelos irregulares o en pendientes.' ,
                    'description' => 'El Tractor Cortacésped profesionales Oleo Mac APACHE 92 EVO, robusto y seguro, es ideal para segar y limpiar zonas incultas con vegetación espesa y suelos irregulares o en pendientes.' ,
                    'description' => 'El potente grupo de corte está formado por una sola cuchillas con extremos flotantes.
Las bandas de rodadura anchas y el centro de gravedad bajo aseguran la máxima estabilidad incluso en terrenos accidentados o en proximidad de orillas y cunetas.
Numerosos dispositivos simplifican el trabajo del conductor, por ejemplo, por ejemplo el accionamiento electromagnético del embrague, la transmisión hidrostática, la regulación centralizada de la altura de corte y el diferencial bloqueable que permite superar dificultades en cualquier tipo de terreno.
Máxima protección para el conductor mediante el arco, las protecciones laterales y el cinturón de seguridad.
La gama incluye modelos con tracción integral 4×4, ideales para terrenos abruptos o empinados.
Cruise Control de serie en todos los modelos.' ,
                    'price' => 9999 ,
                    'id_category' => '3' ,
                    'id_patent' => '17'
                ],
                /* NOTE Motosierra */
                [
                    'id' => '217' ,
                    'name' => 'GS 350 C' ,
                    'short_name' => 'GS350C' ,
                    'short_description' => 'Motosierra con motor de gasolina con una potencia de 2 CV, una cilindrada de 35 cc y una longitud de la espada de 41 cm. Soporta usos frecuentes y se recomienda para el corte de maderas duras de hasta 35 cm de diámetro' ,
                    'description' => 'Motosierra con motor de gasolina con una potencia de 2 CV, una cilindrada de 35 cc y una longitud de la espada de 41 cm. Soporta usos frecuentes y se recomienda para el corte de maderas duras de hasta 35 cm de diámetro.' ,
                    'price' => 189 ,
                    'id_category' => '1' ,
                    'id_patent' => '17'
                ],
                [
                    'id' => '218' ,
                    'name' => 'GS 440' ,
                    'short_name' => 'GS440' ,
                    'short_description' => 'Motosierra de gasolina con 2,9 CV de potencia, 42,9 cc de cilindrada y con una longitud de espada de 41 cm. Se recomienda para maderas duras de hasta 35 cm de diámetro y soporta usos intensivos.' ,
                    'description' => 'Motosierra de gasolina con 2,9 CV de potencia, 42,9 cc de cilindrada y con una longitud de espada de 41 cm. Se recomienda para maderas duras de hasta 35 cm de diámetro y soporta usos intensivos.' ,
                    'price' => 379 ,
                    'id_category' => '1' ,
                    'id_patent' => '17'
                ],
                [
                    'id' => '219' ,
                    'name' => 'GS 650' ,
                    'short_name' => 'GS650' ,
                    'short_description' => 'Motosierra de gasolina con una potencia de 4,7 CV y una cilindrada de 63,4 cc. Tiene una longitud de la espada de 46 cm. Admite un uso intensivo. Recomendado para maderas blandas de más de 35 cm de diámetro.' ,
                    'description' => 'Motosierra de gasolina con una potencia de 4,7 CV y una cilindrada de 63,4 cc. Tiene una longitud de la espada de 46 cm. Admite un uso intensivo. Recomendado para maderas blandas de más de 35 cm de diámetro.' ,
                    'price' => 579 ,
                    'id_category' => '1' ,
                    'id_patent' => '17'
                ],
                /* NOTE Hidrolimpiadora */
                [
                    'id' => '220' ,
                    'name' => 'PW 110 C' ,
                    'short_name' => 'PW110C' ,
                    'short_description' => 'Diseñadas para limpiar sin esfuerzo los espacios exteriores de la casa, el jardín o el garaje.
                        Numerosos dispositivos pensados para facilitar el uso, como las grandes ruedas y los amplios soportes que alojan los accesorios y el cable de alimentación.
                        Dispositivo "Easy Start" que garantiza el arranque de la máquina en cualquier condición de suministro eléctrico.
                        Máxima economía de utilización gracias al sistema "Total Stop", que para el motor cuando se cierra la lanza de lavado.
                        Protección térmica del motor.
                        120 bares de presión. 360 litros/hora. Bomba de aluminio. peso 10 kilos. 1600 w.
                        Equipada con lanza con regulación de chorro, 6 mts. manguera.' ,
                    'description' => 'Diseñadas para limpiar sin esfuerzo los espacios exteriores de la casa, el jardín o el garaje.
                        Numerosos dispositivos pensados para facilitar el uso, como las grandes ruedas y los amplios soportes que alojan los accesorios y el cable de alimentación.
                        Dispositivo "Easy Start" que garantiza el arranque de la máquina en cualquier condición de suministro eléctrico.
                        Máxima economía de utilización gracias al sistema "Total Stop", que para el motor cuando se cierra la lanza de lavado.
                        Protección térmica del motor.
                        120 bares de presión. 360 litros/hora. Bomba de aluminio. peso 10 kilos. 1600 w.
                        Equipada con lanza con regulación de chorro, 6 mts. manguera.',
                    'price' => 125 ,
                    'id_category' => '24' ,
                    'id_patent' => '17'
                ],
                [
                    'id' => '221' ,
                    'name' => 'PW 175 C' ,
                    'short_name' => 'PW175C' ,
                    'short_description' => 'Estructura robusta y fiable en cualquier condición de uso, gracias a los componentes interiores de acero inoxidable y latón, y a la sólida bomba de tres pistones axiales con válvula de regulación y manómetro.' ,
                    'description' => 'Hidrolimpiadora ideal para trabajos domésticos. Su gran fuerza de lavado y su diseño moderno la convierten en la herramienta perfecta para limpiar los espacios exteriores, el jardín o el garaje.
Equipada con un dispositivo "Easy Start", garantiza el arranque de la máquina en cualquier condición de suministro eléctrico. Proporciona altas prestaciones y duración gracias a la bomba de latón resistente a las heladas. ' ,
                    'price' => 369 ,
                    'id_category' => '24' ,
                    'id_patent' => '17'
                ],
                /* NOTE Desbrozadora */
                [
                    'id' => '222' ,
                    'name' => 'WB 51 S6' ,
                    'short_name' => 'WB51S6' ,
                    'short_description' => 'Regulación de la altura de corte centralizada con mando ergonómico en la empuñadura. Dotados de tres ruedas, la frontal pivotante (metálica en el modelo WB 51 VB6) para disminuir el radio de giro y asegurar la máxima agilidad de estas desbrozadoras en medio de la espesura.' ,
                    'description' => 'Desbrozadora de ruedas Oleo-mac WB 51 S6 muy robustas y al mismo tiempo son compactas y maniobrables, estos modelos de desbrozadoras son la mejor solución para limpiar terrenos agrícolas de mediana extensión invadidos por malezas u otros tipos de plantas indeseadas. Regulación de la altura de corte centralizada con mando ergonómico en la empuñadura. Dotados de tres ruedas, la frontal pivotante (metálica en el modelo WB 51 VB6) para disminuir el radio de giro y asegurar la máxima agilidad de estas desbrozadoras en medio de la espesura. Ruedas traseras de amplias dimensiones que permiten un desplazamiento seguro de las desbrozadoras incluso en presencia de hoyos y salientes. Equipados con tracción para reducir al mínimo en esfuerzo en terrenos accidentados o en pendiente; las desbrozadoras modelo WB 51 VB6 vienen provistas de variador de velocidad para adecuar el avance al tipo de suelo y de vegetación.' ,
                    'price' => 979 ,
                    'id_category' => '24' ,
                    'id_patent' => '17'
                ],

            ]);

            // outlet
            DB::table('item')->insert([
                /* TODO Husqvarna */
                /* NOTE Cortasetos */
                [
                'id' => '210' ,
                'name' => '122HD60' ,
                'short_name' => '122HD60' ,
                'short_description' => 'El 122 HD60 es un cortasetos ligero y poco ruidoso para uso particular. Muy sencillo de manejar gracias a sus funciones como Smart Start® y su empuñadura trasera girable.' ,
                'description' => 'La tecnología del motor de bajo ruido y el diseño especial hacen que nuestros cortasetos sean silenciosos y de fácil manejo. Muy importante para trabajos en zonas residenciales. El diseño del motor y el starter permiten a la máquina arrancar rapidamente y con el mínimo esfuerzo. La resistencia en el cordón de arranque se ha reducido hasta un 40%. La empuñadura es ajustable para facilitar el corte lateral y superior de los setos. Amortiguadores antivibración para mayor protección de manos y brazos.' ,
                'price' => 425 ,
                'id_category' => '2' ,
                'id_patent' => '13',
                'outlet' => true
                ],
                [
                'id' => '211' ,
                'name' => '136LiHD50X' ,
                'short_name' => '136LiHD50X' ,
                'short_description' => 'Un cortasetos, silencioso, ligero, bien equilibrado y fácil de utilizar con excelente ergonomía y rendimiento óptimo para usuarios exigentes, jardineros y paisajistas' ,
                'description' => 'La batería Li-ion proporciona una potencia de larga duración y rendimiento óptimo. El panel de control es fácil de operar. La empuñadura es ajustable para facilitar el corte lateral y superior de los setos.' ,
                'price' => 399 ,
                'id_category' => '2' ,
                'id_patent' => '13',
                'outlet' => true
                ],
                [
                'id' => '232' ,
                'name' => '580HD 56EL' ,
                'short_name' => '580HD56EL' ,
                'short_description' => 'Husqvarna 555FRM es una desbrozadora muy potente desarrollada para mulching en condiciones dificiles.Su motor X-Torq® aporta potencia, acceleración rápida y ahorro de combustible. Incluye una cuchilla trituradora que simplifica el mulching y el arnés Balance XT.' ,
                'description' => 'Husqvarna 555FRM es una desbrozadora muy potente desarrollada para mulching en condiciones dificiles.Su motor X-Torq® aporta potencia, acceleración rápida y ahorro de combustible. Incluye una cuchilla trituradora que simplifica el mulching y el arnés Balance XT.' ,
                'price' => 209 ,
                'id_category' => '3' ,
                'id_patent' => '13',
                'outlet' => true
                ],
                /* NOTE motosierra */
                [
                'id' => '212' ,
                'name' => '135' ,
                'short_name' => '135' ,
                'short_description' => 'Nueva motosierra ligera para particulares, ideal para aquellos que busquen una motosierra que sea fácil de arrancar y operar. Con motor X-Torq® para un menor consumo de combustible y reducción de nivel de emisiones. Equipado con una bomba de combustible y botón automático para un arranque más fácil.' ,
                'description' => 'Nueva motosierra ligera para particulares, ideal para aquellos que busquen una motosierra que sea fácil de arrancar y operar. Con motor X-Torq® para un menor consumo de combustible y reducción de nivel de emisiones. Equipado con una bomba de combustible y botón automático para un arranque más fácil. Su bajo consumo de combustible y emisiones de gases le permite cumplir con las normativas medioambientales más exigentes. Sistema de limpieza de aire centrifugado para uso reducido. Facilita la limpieza y sustitución del filtro de aire. Mayor confort gracias a sus suaves incrustaciones, gatillo ergonómico y asa asimétrica.' ,
                'price' => 299 ,
                'id_category' => '1' ,
                'id_patent' => '13',
                'outlet' => true
                ],
                [
                'id' => '223' ,
                'name' => '140e Triobrake' ,
                'short_name' => '140eTriobrake' ,
                'short_description' => 'Motosierra 140 e-series trobrake de Husqvarna, de tamaño reducido, siendo ligera e ideal para un uso particular. Cuenta con motor X-Torq, que reduce tanto el consumo de combustible como las emisiones de gases, y de tecnología Triobrake de frenado automático de la cadena. ' ,
                'description' => 'Motosierra 140 e-series trobrake de Husqvarna, de tamaño reducido, siendo ligera e ideal para un uso particular. Cuenta con motor X-Torq, que reduce tanto el consumo de combustible como las emisiones de gases, y de tecnología Triobrake de frenado automático de la cadena. ' ,
                'price' => 399 ,
                'id_category' => '1' ,
                'id_patent' => '13',
                'outlet' => true
                ],
                [
                'id' => '224' ,
                'name' => '440 e-series' ,
                'short_name' => '440e-series' ,
                'short_description' => 'Nueva motosierra ligera y multifuncional, ideal para los que buscan una máquina excepcionalmente sencilla de arrancar y manejar. Equipada con motor X-Torq® que reduce el consumo y las emisiones de gases, cuenta además con el sistema Smart Start®, bomba de combustible, mando de estrangulador/parada combinado para un arranque más fácil y tensor de cadena sin herramientas.' ,
                'description' => 'Nueva motosierra ligera y multifuncional, ideal para los que buscan una máquina excepcionalmente sencilla de arrancar y manejar. Equipada con motor X-Torq® que reduce el consumo y las emisiones de gases, cuenta además con el sistema Smart Start®, bomba de combustible, mando de estrangulador/parada combinado para un arranque más fácil y tensor de cadena sin herramientas. El diseño del motor y el starter permiten a la máquina arrancar rapidamente y con el mínimo esfuerzo. La resistencia en el cordón de arranque se ha reducido hasta un 40%. Sistema de limpieza de aire centrifugado para uso reducido. Su bajo consumo de combustible y emisiones de gases le permite cumplir con las normativas medioambientales más exigentes.' ,
                'price' => 445 ,
                'id_category' => '1' ,
                'id_patent' => '13',
                'outlet' => true
                ],
                [
                'id' => '225' ,
                'name' => '365 X-Torq' ,
                'short_name' => '365X-Torq' ,
                'short_description' => 'Husqvarna 365 es una motosierra profesional. Ha sido desarrollada junto con usuarios profesionales que trabajan en las condiciones más adversas. La combinación de su ligereza y alta potencia con la resistencia del motor convierten a esta motosierra en excepcionalmente vesátil e indicada para una variedad de aplicaciones. El motor X-TORQ convierte a esta motosierra en una de las más medioambientales reduciendo emisiones y consumo de combustible.' ,
                'description' => 'Husqvarna 365 es una motosierra profesional. Ha sido desarrollada junto con usuarios profesionales que trabajan en las condiciones más adversas. La combinación de su ligereza y alta potencia con la resistencia del motor convierten a esta motosierra en excepcionalmente vesátil e indicada para una variedad de aplicaciones. El motor X-TORQ convierte a esta motosierra en una de las más medioambientales reduciendo emisiones y consumo de combustible. Su bajo consumo de combustible y emisiones de gases le permite cumplir con las normativas medioambientales más exigentes. Sistema de limpieza de aire centrifugado para uso reducido.' ,
                'price' => 895 ,
                'id_category' => '1' ,
                'id_patent' => '13',
                'outlet' => true
                ],
                [
                'id' => '226' ,
                'name' => 'T435' ,
                'short_name' => 'T435' ,
                'short_description' => 'Nueva motosierra de poda X-Torq®. Ligera y potente para podar tanto desde el suelo como en posiciones elevadas. Su bajo peso y su alto equilibrado la hace muy sencilla de utilizar.' ,
                'description' => 'Nueva motosierra de poda X-Torq®. Ligera y potente para podar tanto desde el suelo como en posiciones elevadas. Su bajo peso y su alto equilibrado la hace muy sencilla de utilizar. Su bajo consumo de combustible y emisiones de gases le permite cumplir con las normativas medioambientales más exigentes. La bomba de aceite regulable facilita el lubricado de cadena de acuerdo a sus necesidades.' ,
                'price' => 449 ,
                'id_category' => '1' ,
                'id_patent' => '13',
                'outlet' => true
                ],
                [
                'id' => '227' ,
                'name' => 'T425' ,
                'short_name' => 'T425' ,
                'short_description' => 'La T425 es una motosierra compacta y ligera. Equipada con un potente motor de dos tiempos, bomba de combustible y tensor de cadena lateral.' ,
                'description' => 'La T425 es una motosierra compacta y ligera. Equipada con un potente motor de dos tiempos, bomba de combustible y tensor de cadena lateral. La bomba de aceite regulable facilita el lubricado de cadena de acuerdo a sus necesidades. Facilita la limpieza y sustitución del filtro de aire. Ligero, carcasa con forma de lágrima y parte inferior plana para facilitar la maniobrabilidad' ,
                'price' => 499 ,
                'id_category' => '1' ,
                'id_patent' => '13',
                'outlet' => true
                ],
                /* NOTE Desbrozadora */
                [
                'id' => '228' ,
                'name' => '128LDX' ,
                'short_name' => '128LDX' ,
                'short_description' => 'Recortadora combinada ligera ideal para particulares. Fácil arranque gracias al sistema Smart Start® y a su bomba de combustible. Resistente, cable de conexión trenzado, se suministra con cabezal de corte semiautomático T25.' ,
                'description' => 'Recortadora combinada ligera ideal para particulares. Fácil arranque gracias al sistema Smart Start® y a su bomba de combustible. Resistente, cable de conexión trenzado, se suministra con cabezal de corte semiautomático T25.' ,
                'price' => 349 ,
                'id_category' => '3' ,
                'id_patent' => '13',
                'outlet' => true
                ],
                [
                'id' => '229' ,
                'name' => '128R' ,
                'short_name' => '128R' ,
                'short_description' => 'Desbrozadora ligera, perfecta para particulares. Fácil arranque gracias al sistema Smart Start® y a la bomba de combustible. Cabezal muy resistente. Arnés doble, trimmy semiautomático y cuchilla para hierba incluidos.' ,
                'description' => 'Desbrozadora ligera, perfecta para particulares. Fácil arranque gracias al sistema Smart Start® y a la bomba de combustible. Cabezal muy resistente. Arnés doble, trimmy semiautomático y cuchilla para hierba incluidos.' ,
                'price' => 349 ,
                'id_category' => '3' ,
                'id_patent' => '13',
                'outlet' => true
                ],
                [
                'id' => '230' ,
                'name' => '553RS' ,
                'short_name' => '553RS' ,
                'short_description' => 'Máquina productiva y versátil para recortar hierba y maleza densa con frecuencia. La 553RS es ideal para particulares que necesiten una desbrozadora robusta, fiable y fácil de manejar. Equipada con un motor X-torq de bajo consumo y filtro de aire eficaz que proporciona un menor desgaste al mismo. Cabezal de corte, cuchilla y protector Combi vienen incluidos.' ,
                'description' => 'Máquina productiva y versátil para recortar hierba y maleza densa con frecuencia. La 553RS es ideal para particulares que necesiten una desbrozadora robusta, fiable y fácil de manejar. Equipada con un motor X-torq de bajo consumo y filtro de aire eficaz que proporciona un menor desgaste al mismo. Cabezal de corte, cuchilla y protector Combi vienen incluidos.' ,
                'price' => 749 ,
                'id_category' => '3' ,
                'id_patent' => '13',
                'outlet' => true
                ],
                [
                'id' => '231' ,
                'name' => '555FRM' ,
                'short_name' => '555FRM' ,
                'short_description' => 'Husqvarna 555FRM es una desbrozadora muy potente desarrollada para mulching en condiciones dificiles.Su motor X-Torq® aporta potencia, acceleración rápida y ahorro de combustible. Incluye una cuchilla trituradora que simplifica el mulching y el arnés Balance XT.' ,
                'description' => 'Husqvarna 555FRM es una desbrozadora muy potente desarrollada para mulching en condiciones dificiles.Su motor X-Torq® aporta potencia, acceleración rápida y ahorro de combustible. Incluye una cuchilla trituradora que simplifica el mulching y el arnés Balance XT.' ,
                'price' => 1249 ,
                'id_category' => '3' ,
                'id_patent' => '13',
                'outlet' => true
                ],
                /* NOTE Cortacesped */
                [
                'id' => '233' ,
                'name' => 'LB 553S' ,
                'short_name' => 'LB553S' ,
                'short_description' => 'El LB 553S es una máquina BioClip® fiable, diseñada para uso profesional duro. El diseño se ha concentrado en alcanzar las mejores condiciones ergonómicas para el operador, y un buen corte hasta en condiciones complicadas. El manillar y mecanismo de manejo disponen de muy bajas vibraciones y la altura de corte central dispone de un muelle que facilita su ajuste lo máximo posible. El LB 553S es auto-propulsado, con tracción delantera para un manejo óptimo. Las ruedas son de aluminio y ligeras.' ,
                'description' => 'El LB 553S es una máquina BioClip® fiable, diseñada para uso profesional duro. El diseño se ha concentrado en alcanzar las mejores condiciones ergonómicas para el operador, y un buen corte hasta en condiciones complicadas. El manillar y mecanismo de manejo disponen de muy bajas vibraciones y la altura de corte central dispone de un muelle que facilita su ajuste lo máximo posible. El LB 553S es auto-propulsado, con tracción delantera para un manejo óptimo. Las ruedas son de aluminio y ligeras.' ,
                'price' => 1299 ,
                'id_category' => '10' ,
                'id_patent' => '13',
                'outlet' => true
                ],
            ]);


            DB::table('item')->insert([
                /* TODO PELLENC */
                [
                    'id' => '48',
                    'name' => 'FIXION',
                    'short_name' => 'FIXION',
                    'short_description' => 'La atadora PELLENC simplifica el trabajo gracias a la rapidez de atados: hasta 12 000 atados al día, sin esfuerzo. Permite realizar fácil y rápidamente un trabajo que suele ser largo y difícil.',
                    'description' => 'La atadora FIXION es la nueva atadora de Pellenc, especialmente diseñada para recibir la nueva cinta extensible.
                        Funciona del mismo modo y ata todos los tipos de cintas de la gama Pellenc.
                        Los diferentes tipos de cintas se encuentran adaptadas a los distintos sistemas de atado: Estándar, extensible, inoxidable, bio y papel.
                        La tecnología de esta atadora le permitirá atar sarmientos y ramas en general al sistema de conducción de forma rápida y sencilla.
                        La cinta se degrada con el tiempo según las condiciones meteorológicas. El tipo de cinta “estándar” compuesta de hilo de acero de 0,44mm con una resistencia media al atado de 14 Kg, se degrada después de unos 10-12 meses de utilización, pero como mencionamos anteriormente, esto último depende de las condiciones meteorológicas de la zona.',
                    'price' => 895,
                    'id_category' => '8',
                    'id_patent' => '3',
                    'priority' => 10,
                    'video_url' => null
                ],
                [
                    'id' => '49',
                    'name' => 'CULTIVION',
                    'short_name' => 'CULTIVION',
                    'short_description' => 'El cultivador de arriates CULTIVION es único en el mundo y permite una gran variedad
                        de aplicaciones para el cultivo de la tierra y el desherbado. Por su ligereza y su estabilidad,
                        CULTIVION es muy manejable y se puede utilizar entre las plantas con total facilidad.
                        CULTIVION permite trabajar perfectamente en profundidad y en superficie.',
                    'description' => 'Las cuchillas CULTIVION funcionan
                        en un movimiento oscilatorio. Este
                        movimiento es muy rápido (hasta
                        885 golpes/minuto) y proporciona
                        a la herramienta una potencia y
                        eficacia que facilitan la penetración
                        en la tierra. Al contrario de lo que ocurre con las motobobinadoras, la CULTIVION
                        resulta muy estable durante el trabajo, y no es necesario ejercer fuerza
                        en la máquina. CULTIVION se ha sido diseñado para realizar el trabajo
                        caminando hacia atrás, lo que evita pisar la zona trabajada. Con las distintas cuchillas, podrá
                        adaptarse fácilmente a cualquier
                        entorno de trabajo. El cambio
                        rápido de cuchillas permite pasar
                        de una aplicación a otra.',
                    'price' => 750,
                    'id_category' => '9',
                    'id_patent' => '3',
                    'priority' => 10,
                    'video_url' => 'ZO83M7tRenY'
                ],
                [
                    'id' => '50',
                    'name' => 'SELION M12',
                    'short_name' => 'SELIONM12',
                    'short_description' => 'Selion M12 es la sierra podadora de cadena más ligera del mercado, con una calidad de corte y una facilidad de manejo excepcionales.',
                    'description' => 'Cero consumo de combustible.
                        Motor eléctrico Brushless PELLENC sin fricción, de alto rendimiento, sin mantenimiento.
                        Vida útil excepcional: el motor Brushless PELLENC gira a 5400 rpm, sin desgaste ni chispa y desarrolla una potencia máxima con las dimensiones mínimas.
                        Consume un 30 % de aceite menos que una herramienta térmica.',
                    'price' => 750,
                    'id_category' => '1',
                    'id_patent' => '3',
                    'priority' => 10,
                    'video_url' => null
                ],
                [
                    'id' => '51',
                    'name' => 'SELION C21',
                    'short_name' => 'SELIONC21',
                    'short_description' => 'La poda requiere un conocimiento avanzado y el uso del equipo adecuado. PELLENC ofrece a los
podadores un modelo nuevo de podadora que responde a sus expectativas en cuanto a ligereza,
equilibrio, facilidad de maniobra y potencia. La nueva podadora SELION C21 HD tiene muchas
novedades, un par motor superior y sigue siendo la más ligera del mercado',
                    'description' => 'La seguridad es primordial y PELLENC ha desarrollado 4 innovaciones para proteger al usuario: Captor de rebote con accionamiento: este mecanismo acciona instantáneamente un freno de cadena eléctrica en caso de caída o rebote, de modo que es 8 veces más sensible que un freno de cadena de motosierra térmica. El segundo elemento de seguridad es aportado por el sistema de autodiagnóstico de la herramienta: SELION. Que verifica durante el primer uso, que el captor electrónico de rebote esté operativo y, si es así, ¡la máquina puede funcionar! El tercer elemento de seguridad es el gatillo de encendido de doble impulso: esto evita que la motosierra funcione en forma accidental. Por último, el cuarto elemento de seguridad está dado por el uso de cadenas OREGON que limita el efecto de rebote: el fenómeno de rebote, si ocurre, será menos violento que con una motosierra clásica.',
                    'price' => 800,
                    'id_category' => '1',
                    'id_patent' => '3',
                    'priority' => 10,
                    'video_url' => null
                ],
                [
                    'id' => '52',
                    'name' => 'SELION PERTIGA TELESCOPICA T220-300',
                    'short_name' => 'SELIONPERTIGATELESCOPICAT220-300',
                    'short_description' => 'Las pértigas de poda fijas SELION P180, y las telescópicas SELION T150/200 y SELION T220/300
ofrecen una poda muy precisa. Con un alcance de hasta 4,5 metros, el trabajo se realiza sin
arnés de transporte, gracias a su enorme ligereza. Las podadoras de pértiga Selion son ideales para lugares
donde el ruido puede ser un problema. Son lo suficientemente potentes para realizar trabajos forestales.',
                    'description' => 'Las pértigas de poda fijas SELION P180, y las telescópicas SELION T150/200 y SELION T220/300
ofrecen una poda muy precisa. Con un alcance de hasta 4,5 metros, el trabajo se realiza sin
arnés de transporte, gracias a su enorme ligereza. Las podadoras de pértiga Selion son ideales para lugares
donde el ruido puede ser un problema. Son lo suficientemente potentes para realizar trabajos forestales.',
                    'price' => 1020,
                    'id_category' => '1',
                    'id_patent' => '3',
                    'priority' => 10,
                    'video_url' => null
                ],
                [
                    'id' => '234',
                    'name' => 'SELION PERTIGA FIJA T130',
                    'short_name' => 'SELIONPERTIGAFIJAT130',
                    'short_description' => 'Las pértigas de poda fijas SELION P180, y las telescópicas SELION T150/200 y SELION T220/300
ofrecen una poda muy precisa. Con un alcance de hasta 4,5 metros, el trabajo se realiza sin
arnés de transporte, gracias a su enorme ligereza. Las podadoras de pértiga Selion son ideales para lugares
donde el ruido puede ser un problema. Son lo suficientemente potentes para realizar trabajos forestales.',
                    'description' => 'Las pértigas de poda fijas SELION P180, y las telescópicas SELION T150/200 y SELION T220/300
ofrecen una poda muy precisa. Con un alcance de hasta 4,5 metros, el trabajo se realiza sin
arnés de transporte, gracias a su enorme ligereza. Las podadoras de pértiga Selion son ideales para lugares
donde el ruido puede ser un problema. Son lo suficientemente potentes para realizar trabajos forestales.',
                    'price' => 968,
                    'id_category' => '1',
                    'id_patent' => '3',
                    'priority' => 10,
                    'video_url' => null
                ],
                [
                    'id' => '235',
                    'name' => 'SELION PERTIGA FIJA T180',
                    'short_name' => 'SELIONPERTIGATFIJAT180',
                    'short_description' => 'Las pértigas de poda fijas SELION P180, y las telescópicas SELION T150/200 y SELION T220/300
ofrecen una poda muy precisa. Con un alcance de hasta 4,5 metros, el trabajo se realiza sin
arnés de transporte, gracias a su enorme ligereza. Las podadoras de pértiga Selion son ideales para lugares
donde el ruido puede ser un problema. Son lo suficientemente potentes para realizar trabajos forestales.',
                    'description' => 'Las pértigas de poda fijas SELION P180, y las telescópicas SELION T150/200 y SELION T220/300
ofrecen una poda muy precisa. Con un alcance de hasta 4,5 metros, el trabajo se realiza sin
arnés de transporte, gracias a su enorme ligereza. Las podadoras de pértiga Selion son ideales para lugares
donde el ruido puede ser un problema. Son lo suficientemente potentes para realizar trabajos forestales.',
                    'price' => 850,
                    'id_category' => '1',
                    'id_patent' => '3',
                    'priority' => 10,
                    'video_url' => null
                ],
                [
                    'id' => '53',
                    'name' => 'OLIVION FIJA 230',
                    'short_name' => 'OLIVIONFIJA230',
                    'short_description' => 'Producto profesional muy rentable, ultraligero y de una maniobrabilidad excepcional. Funciona con una batería multifunción de la gama PELLENC o con un transformador para una batería de 12 V (tipo automóvil).',
                    'description' => 'Producto profesional muy rentable, ultraligero y de una maniobrabilidad excepcional. Funciona con una batería multifunción de la gama PELLENC o con un transformador para una batería de 12 V (tipo automóvil). Dos posiciones diferentes en función de la variedad de las aceitunas. El peine en versión recta será el recomendado para las variedades de uva de recolección más compleja. Interruptor único que puede funcionar en modo continuo.
Una sola pulsación en el interruptor basta para encenderlo.',
                    'price' => 905,
                    'id_category' => '6',
                    'id_patent' => '3',
                    'priority' => 5,
                    'video_url' => null
                ],
                [
                    'id' => '54',
                    'name' => 'EXCELION 2000',
                    'short_name' => 'EXCELION2000',
                    'short_description' => 'Diseñada para el mantenimiento diario o para el desbrozado intensivo, la EXCELION 2000 Professional
                        responderá a las expectativas de los usuarios más exigentes. Esta desbrozadora ligera, robusta y potente
                        elimina a la perfección las hierbas altas y densas, hierbas leñosas, zarzas e incluso arbustos.
                        Gracias a su alimentación por batería PELLENC ULiB 1100, funciona de forma totalmente silenciosa, sin
                        emisiones contaminantes y con un bajo nivel de vibraciones que mejoran la comodidad del usuario. Hay
                        varios cabezales de corte compatibles con la EXCELION 2000, para permitir distintas posibilidades de trabajo.',
                    'description' => 'El piñón cónico diseñado por
                        PELLENC está fabricado en magnesio, es ligero y resistente
                        y permite equilibrar perfectamente
                        la máquina. En su fabricación se ha hecho un esfuerzo especial para reducir al máximo el ruido del
                        mecanismo. Además, la tornillería
                        está integrada para evitar que se pierda ningún tornillo de fijación. El hilo en espiral PELLENC mejora considerablemente el rendimiento
                        de la desbrozadora, tanto en lo que
                        se refiere al consumo energético como en la emisión de ruido. La desbrozadora dispone de
                        un modo ECO. Tiene la doble ventaja de permitir la utilización prolongada de la máquina
                        y un trabajo a baja velocidad,
                        limitando la proyecciones, lo que
                        es especialmente importante en entornos urbanos',
                    'price' => 890,
                    'id_category' => '3',
                    'id_patent' => '3',
                    'priority' => 10,
                    'video_url' => null
                ],
                [
                    'id' => '55',
                    'name' => 'VINION 150',
                    'short_name' => 'VINION150',
                    'short_description' => 'PELLENC ha diseñado las tijeras vitícolas más innovadoras del mercado, adaptadas a los viticultores que buscan ligereza, ergonomía, manejabilidad y precisión. La VINION es, a fecha de hoy, una revolución de tecnología punta. Las tijeras VINION se han diseñado para responder a todas las expectativas y funcionan igual de bien con una batería de bolsillo 150, ligera y compacta, como con una batería de 250 que permite conectar dos herramientas PELLENC al mismo tiempo, para realizar un trabajo alterno.',
                    'description' => 'PELLENC ha diseñado las tijeras vitícolas más innovadoras del mercado, adaptadas a los viticultores que buscan ligereza, ergonomía, manejabilidad y precisión. La VINION es, a fecha de hoy, una revolución de tecnología punta. Las tijeras VINION se han diseñado para responder a todas las expectativas y funcionan igual de bien con una batería de bolsillo 150, ligera y compacta, como con una batería de 250 que permite conectar dos herramientas PELLENC al mismo tiempo, para realizar un trabajo alterno.',
                    'price' => 790,
                    'id_category' => '5',
                    'id_patent' => '3',
                    'priority' => 5,
                    'video_url' => null
                ],
                [
                    'id' => '56',
                    'name' => 'PRUNION 150',
                    'short_name' => 'PRUNION150',
                    'short_description' => 'Con un peso inferior a los 900 gramos, la tijera de podar PRUNION ofrece a los usuarios una
                        potencia de corte y una calidad de trabajo irreprochables. Su sujeción adaptada a todos los usuarios
                        y su amplio diámetro de corte aseguran una poda muy cómoda. Las distintas innovaciones
                        de esta tijera de podar hacen que sea indispensable para cualquier podador. La batería 250 permite
                        una mayor productividad, porque se puede conectar al mismo tiempo a dos herramientas PELLENC.',
                    'description' => 'La podadora PRUNION es ideal para los agricultores que buscan en el mercado la más potente, más ligera y la más innovadora. Gracias a su ergonomía y  su diámetro de corte permite una gran comodidad de trabajo. Las numerosas innovaciones de esta tijera de poda lo hacen indispensable para todos los agricultores que poseen árboles frutales, buscando una comodidad y facilidad alternativa gracias a la batería 250 que conecta PELLENC dos herramientas          simultáneamente. La batería 250 es capaz de conectarse a la tijera de poda Prunion y Selion a la vez y poder trabajar continuamente sin tener que parar para cambiar de máquina, pudiendo llevarlas encima y utilizar la que más te convenga en el momento.',
                    'price' => 890,
                    'id_category' => '5',
                    'id_patent' => '3',
                    'priority' => 5,
                    'video_url' => 'mKW3n4iKqfw'
                ],
                [
                    'id' => '236',
                    'name' => 'PRUNION 250',
                    'short_name' => 'PRUNION250',
                    'short_description' => 'Con un peso inferior a los 900 gramos, la tijera de podar PRUNION ofrece a los usuarios una
                        potencia de corte y una calidad de trabajo irreprochables. Su sujeción adaptada a todos los usuarios
                        y su amplio diámetro de corte aseguran una poda muy cómoda. Las distintas innovaciones
                        de esta tijera de podar hacen que sea indispensable para cualquier podador. La batería 250 permite
                        una mayor productividad, porque se puede conectar al mismo tiempo a dos herramientas PELLENC.',
                    'description' => 'La podadora PRUNION es ideal para los agricultores que buscan en el mercado la más potente, más ligera y la más innovadora. Gracias a su ergonomía y  su diámetro de corte permite una gran comodidad de trabajo. Las numerosas innovaciones de esta tijera de poda lo hacen indispensable para todos los agricultores que poseen árboles frutales, buscando una comodidad y facilidad alternativa gracias a la batería 250 que conecta PELLENC dos herramientas          simultáneamente. La batería 250 es capaz de conectarse a la tijera de poda Prunion y Selion a la vez y poder trabajar continuamente sin tener que parar para cambiar de máquina, pudiendo llevarlas encima y utilizar la que más te convenga en el momento.',
                    'price' => 990,
                    'id_category' => '5',
                    'id_patent' => '3',
                    'priority' => 5,
                    'video_url' => 'mKW3n4iKqfw'
                ],
                // [
                //     'id' => '57',
                //     'name' => 'BATERIA LITIO 200',
                //     'short_name' => 'BATERIALITIO200',
                //     'short_description' => 'Sopladora de gran capacidad',
                //     'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                //     'price' => 956,
                //     'id_category' => '7',
                //     'id_patent' => '3'
                // ],
                // [
                //     'id' => '58',
                //     'name' => 'KIT BATERIA 400',
                //     'short_name' => 'KITBATERIA400',
                //     'short_description' => 'Sopladora de gran capacidad',
                //     'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                //     'price' => 956,
                //     'id_category' => '7',
                //     'id_patent' => '3'
                // ],
                // [
                //     'id' => '59',
                //     'name' => 'KIT BATERIA 700',
                //     'short_name' => 'KITBATERIA700',
                //     'short_description' => 'Sopladora de gran capacidad',
                //     'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                //     'price' => 956,
                //     'id_category' => '7',
                //     'id_patent' => '3'
                // ],
                // [
                //     'id' => '60',
                //     'name' => 'KIT BATERIA 1100',
                //     'short_name' => 'KITBATERIA1100',
                //     'short_description' => 'Sopladora de gran capacidad',
                //     'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                //     'price' => 1803,
                //     'id_category' => '7',
                //     'id_patent' => '3'
                // ],
                [
                'id' => '213' ,
                'name' => 'RASION BASIC' ,
                'short_name' => 'RASIONBASIC' ,
                'short_description' => 'Con menos de 25Kg, el cortacésped RASION BASIC revoluciona las condiciones de trabajo de los profesionales de los espacios verdes. Ultramanejable, fácilmente transportable y con una potencia inigualada, RASION BASIC ofrece una calidad de corte inmejorable para todos los tipos de trabajos de corte realizados por paisajistas y jardineros.' ,
                'description' => 'Las cuchillas dobles aseguran un corte fino en menos tiempo.Ofrecen un corte regulare inmejorable. Ajuste electrónico de la velocidad de las cuchillas de 3000 a 5000 revoluciones/minuto. La velocidad puede ajustarse durante el trabajo de corte. Posición para almacenamiento con poco espacio El cortacésped puede volcarse con total seguridad para limpiar el cárter.' ,
                'price' => 1700 ,
                'id_category' => '10' ,
                'id_patent' => '3',
                'priority' => 10,
                'video_url' => null
                ],
                [
                'id' => '214' ,
                'name' => 'AIRION 2' ,
                'short_name' => 'AIRION2' ,
                'short_description' => 'La AIRION 2 se caracteriza por su diseño a prueba de inclemencias, por sus protecciones contra el polvo y
                    la humedad y una estanqueidad total. La AIRION se caracteriza por su perfecto equilibrio de funcionamiento
                    y permite un uso continuado de varias horas sin efecto de fatiga o tensión especial en la muñeca.
                    Con un peso de 2.550Kg y un empike efectivo de 17,5N, la AIRION 2 sabe responder a las necesidades de
                    los profesionales en todo tipo de circunstancias climáticas. Funciona con la misma eficacia en entornos
                    urbanos, en zonas delicadas y en parques y jardines.' ,
                'description' => 'Por efecto de la salida de aire, las sopladoras tienden a
                    bajar el morro. Este efecto se debe contrarrestar con la
                    tensión de la muñeca. Sin embargo, la sopladora AIRION 2
                    compensa este fenómeno gracias a su admisión con coda
                    a 90°, contrariamente a lo que ocurre en los sopladores
                    rectos, que agravan el problema. El selector de velocidad de AIRION 2
                    permite gestionar la potencia del soplido en función de la superficie que haya que limpiar. La función boost ofrece un caudal máximo de aire y está
                    disponible en todas las velocidades, simplemente manteniendo
                    la presión. La potencia de soplido de AIRION 2 permite soplar
                    objetos pesados, como masas considerables de hojas empapadas
                    y pegadas al suelo.' ,
                'price' => 650 ,
                'id_category' => '4' ,
                'id_patent' => '3',
                'priority' => 10,
                'video_url' => 'ERg4egZE0zE'
                ],
                /* TODO CECOTEC */
                // [
                // 'id' => '237' ,
                // 'name' => 'Conga Excellence' ,
                // 'short_name' => 'CONGAEXCELLENCE' ,
                // 'short_description' => 'Olvídate de limpiar: Conga Excellence barre, aspira, pasa la mopa y friega el suelo por ti.
                //     Emplea tu tiempo en lo que más te guste y deja las tareas del hogar a los profesionales. El robot aspirador Conga Excellence limpia por ti gracias a su limpieza en 4 tiempos. Barre gracias a su cepillo rotativo que funciona como una escoba en movimiento. Aspira el suelo sin dejar ni rastro gracias a su elevada potencia de succión. Pasa la mopa seca para atrapar hasta las partículas del suelo más pequeñas. Por si fuera poco, hemos dado un paso más en la innovación, Conga Excellence friega el suelo a través de su depósito de goteo que empapa la mopa y deja tu casa reluciente.' ,
                // 'description' => 'Conga Excellence permite mantener el suelo perfectamente limpio, cada día y sin esfuerzo. Gracias a su sistema de navegación iTech 2.0 se adapta al entorno y limpia cada rincón del hogar: debajo de los muebles, encima de alfombras y evitando desniveles. Además, con su diseño ultra fino llega a los espacios más complicados. Consta de un conjunto de sensores de proximidad, distancia y de caída que lo sitúan en su entorno y hacen que se adapte a cada hogar, respetando los muebles y evitando los obstáculos, sabiendo siempre qué y cómo limpiar. Nos gustan las mascotas, por ello, hemos diseñado un aspirador silencioso que tiene un modo de succión sin enredos. Mantén la casa limpia de pelos con la boquilla de succión de alta potencia, evitando los enredos y posibles problemas que ocasionan en otras máquinas. El robot no se estropeará y al llegar a casa podrás disfrutar siempre de tu mascota jugando en un suelo limpio y sin pelos.' ,
                // 'price' => 200 ,
                // 'id_category' => '28' ,
                // 'id_patent' => '18',
                // 'priority' => 10,
                // 'video_url' => 'O_tPnjwi5Qc'
                // ],
                [
                'id' => '238' ,
                'name' => 'Conga Excellence 990' ,
                'short_name' => 'CONGAEXCELLENCE990' ,
                'short_description' => 'Olvídate de limpiar: Conga Excellence barre, aspira, pasa la mopa y friega el suelo por ti.
                    Emplea tu tiempo en lo que más te guste y deja las tareas del hogar a los profesionales. El robot aspirador Conga Excellence limpia por ti gracias a su limpieza en 4 tiempos. Barre gracias a su cepillo rotativo que funciona como una escoba en movimiento. Aspira el suelo sin dejar ni rastro gracias a su elevada potencia de succión. Pasa la mopa seca para atrapar hasta las partículas del suelo más pequeñas. Por si fuera poco, hemos dado un paso más en la innovación, Conga Excellence friega el suelo a través de su depósito de goteo que empapa la mopa y deja tu casa reluciente.' ,
                'description' => 'Robot aspirador profesional 4 en 1: Barre, aspira, pasa la mopa y friega el suelo. Navegación iTech 3.0 inteligente milímetro a milímetro gracias a sus sensores de proximidad, distancia y anticaída. Se adapta a tu hogar: Limpia bajo los muebles, detecta obstáculos y no se cae por las escaleras.
                    Extrapower Suction Pro: Modo de limpieza que maximiza la gran potencia de succión para garantizar un suelo siempre limpio, tenga la suciedad que tenga. TurboBoost: Sistema avanzado con una turbina potente que maximiza la succión.
                    Motorized Power Brush: Cepillo rotativo que limpia a fondo arrastrando la suciedad en alfombras y moquetas. Intelligent Battery Pro: consigue un tiempo de autonomía de 130 minutos. AutoBack Home: Vuelta automática a la base al finalizar la limpieza.
                    5 modos de limpieza: Auto, Bordes, Habitación, espiral y vuelta a casa. Programmable memory: Programable 24 horas al día 7 días a la semana controlado por un mando a distancia con pantalla LCD, sencillo y intuitivo' ,
                'price' => 250 ,
                'id_category' => '28' ,
                'id_patent' => '18',
                'priority' => 9,
                'video_url' => 'dCzgFC2QfsY'
                ],
            ]);
        } else { echo "\e[31mTable item is not empty, therefore NOT "; }
    }
}
