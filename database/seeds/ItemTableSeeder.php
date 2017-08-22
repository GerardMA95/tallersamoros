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
                /* HONDA */
                /* Cortacesped */
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
                    'price' => 414,
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
                    'name' => 'HRX 476 VYE',
                    'short_name' => 'HRX476VYE_2',
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
                    'name' => 'HRX 537 VYE',
                    'short_name' => 'HRX537VYE_2',
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
                /* DESBROZADORA */
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
                    'short_description' => 'Desbrozadora',
                    'description' => 'Desbrozadora de gran capacidadCortacesped de gran capacidad',
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
                /* BARREDORA */
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
                /*  REGENERADOR */
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
                    'id' => '26',
                    'name' => 'PB 250 (EUST2)',
                    'short_name' => 'PB250',
                    'short_description' => 'Sopladora de gran capacidad',
                    'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                    'price' => 279,
                    'id_category' => '4',
                    'id_patent' => '2'
                ],
                [
                    'id' => '27',
                    'name' => 'PB 251 (EUST2)',
                    'short_name' => 'PB251',
                    'short_description' => 'Sopladora de gran capacidad',
                    'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                    'price' => 299,
                    'id_category' => '12',
                    'id_patent' => '1'
                ],
                /* ECHO */
                /* Motosierra */
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

                /* PELLENC */
                [
                    'id' => '48',
                    'name' => 'FIXION',
                    'short_name' => 'FIXION',
                    'short_description' => 'La atadora PELLENC simplifica el trabajo gracias a la rapidez de atados: hasta 12 000 atados al día, sin esfuerzo. Permite realizar fácil y rápidamente un trabajo que suele ser largo y difícil.',
                    'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                    'price' => 1083,
                    'id_category' => '8',
                    'id_patent' => '3'
                ],
                [
                    'id' => '49',
                    'name' => 'CULTIVION',
                    'short_name' => 'CULTIVION',
                    'short_description' => 'Sopladora de gran capacidad',
                    'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                    'price' => 908,
                    'id_category' => '9',
                    'id_patent' => '3'
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
                    'price' => 908,
                    'id_category' => '1',
                    'id_patent' => '3'
                ],
                // [
                        // 'id' => '51',
                //     'name' => 'SELION C21',
                //     'short_name' => 'PB251',
                //     'short_description' => 'Sopladora de gran capacidad',
                //     'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                //     'price' => SIN PRECIO?,
                //     'id_category' => '12',
                //     'id_patent' => '1'
                // ]
                //PODADORA??
                // [
                //     'id' => '52',
                //     'name' => 'SELION PERTIGA T220-300',
                //     'short_name' => 'SELIONPERTIGAT220-300',
                //     'short_description' => 'Sopladora de gran capacidad',
                //     'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                //     'price' => 1234,
                //     'id_category' => '4',
                //     'id_patent' => '3'
                // ],
                [
                    'id' => '53',
                    'name' => 'OLIVION 230',
                    'short_name' => 'OLIVION230',
                    'short_description' => 'Sopladora de gran capacidad',
                    'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                    'price' => 1060,
                    'id_category' => '6',
                    'id_patent' => '3'
                ]
                ,
                // [
                //     'id' => '54',
                //     'name' => 'EXCELION 2000',
                //     'short_name' => 'EXCELION2000',
                //     'short_description' => 'Sopladora de gran capacidad',
                //     'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                //     'price' => SIN PRECIO,
                //     'id_category' => '3',
                //     'id_patent' => '3'
                // ],
                [
                    'id' => '55',
                    'name' => 'VINION 150',
                    'short_name' => 'VINION150',
                    'short_description' => 'Sopladora de gran capacidad',
                    'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                    'price' => 956,
                    'id_category' => '5',
                    'id_patent' => '3'
                ],
                [
                    'id' => '56',
                    'name' => 'PRUNION 250',
                    'short_name' => 'PRUNION250',
                    'short_description' => 'Sopladora de gran capacidad',
                    'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                    'price' => 1150,
                    'id_category' => '5',
                    'id_patent' => '3'
                ],
                [
                    'id' => '57',
                    'name' => 'BATERIA LITIO 200',
                    'short_name' => 'BATERIALITIO200',
                    'short_description' => 'Sopladora de gran capacidad',
                    'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                    'price' => 956,
                    'id_category' => '7',
                    'id_patent' => '3'
                ],
                [
                    'id' => '58',
                    'name' => 'KIT BATERIA 400',
                    'short_name' => 'KITBATERIA400',
                    'short_description' => 'Sopladora de gran capacidad',
                    'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                    'price' => 956,
                    'id_category' => '7',
                    'id_patent' => '3'
                ],
                [
                    'id' => '59',
                    'name' => 'KIT BATERIA 700',
                    'short_name' => 'KITBATERIA700',
                    'short_description' => 'Sopladora de gran capacidad',
                    'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                    'price' => 956,
                    'id_category' => '7',
                    'id_patent' => '3'
                ],
                [
                    'id' => '60',
                    'name' => 'KIT BATERIA 1100',
                    'short_name' => 'KITBATERIA1100',
                    'short_description' => 'Sopladora de gran capacidad',
                    'description' => 'Sopladora de gran capacidadCortacesped de gran capacidad',
                    'price' => 1803,
                    'id_category' => '7',
                    'id_patent' => '3'
                ]
            ]);
        } else { echo "\e[31mTable item is not empty, therefore NOT "; }
    }
}
