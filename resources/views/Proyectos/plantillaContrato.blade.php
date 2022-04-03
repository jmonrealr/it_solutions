<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="IT Solutions" name="author">


        <!--Favicon -->
		<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon"/>
		<!-- Title -->
		<title>IT Solutions</title>
	</head>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

	<body>
<div class="row mt-2">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
            <div class="tab-content">
                <div class="tab-pane active" id="tab5">
                    <div class="card-body">
                        <div id="texte_a_afficher" class="texte_inselectionnable" style="height: 633px;">
                            <span class="stabilisation"></span>
                            <p style="text-align: center;"><strong>CONTRATO DE DESARROLLO DE SOFTWARE</strong></p>
                            <p><br>CONTRATO DE DESARROLLO DE SOFTWARE QUE CELEBRAN EN CALIDAD DE CLIENTES:</p>
                        
                            <p style="padding-left: 30px;"><strong><span id="span_id_pm_a_0">{{$project->customers->first_name}} {{$project->customers->first_name}}</span></strong>, persona moral que se encuentra debidamente constituida. Persona mayor de edad que cuenta con las facultades suficientes y necesarias para suscribir el presente contrato.</p>
                        
                            <p><br>Y EN CALIDAD DE DESARROLLADOR:</p>
                        
                            <p style="padding-left: 30px;"><strong><span id="span_id_pm_b_0">IT Solutions</span></strong>, persona moral que se encuentra debidamente constituida</p>
                            <p style="padding-left: 30px;">Actuando <strong><span id="span_id_pm_b_0">IT Solutions</span></strong> en este acto a través de: <span id="span_id_rl_pm_b_0_rl_1">Juan Carlos Monreal Romero</span>, persona mayor de edad que cuenta con las facultades suficientes y necesarias para suscribir el presente contrato.</p>
                        
                            <p><br>QUIENES SE RECONOCEN EXPRESA Y RECÍPROCAMENTE CON CAPACIDAD PLENA PARA OBLIGARSE, Y PARA TAL EFECTO, LA PRIMERA DE ELLAS SERÁ IDENTIFICADA COMO EL "CLIENTE" Y LA SEGUNDA DE ELLAS SERÁ IDENTIFICADA COMO EL "DESARROLLADOR"; ADEMÁS SE HARÁ REFERENCIA A ELLAS DE MANERA CONJUNTA COMO "LAS PARTES"; EN ESTE SENTIDO, LAS PARTES MANIFIESTAN EN PRIMER LUGAR LAS SIGUIENTES:</p>


                            {{-- DECLARACIONES --}}
                            <p style="text-align: center;"><br><strong>DECLARACIONES</strong></p>
                            <p><br><strong>I</strong>. Que EL DESARROLLADOR se dedica a la siguiente actividad:</p>
                            <p style="padding-left: 30px;"><span id="span_id_activididad_desarrollador"><span class="variable_vide">________</span></span></p>
                            <p><strong>II</strong>. Que en virtud de lo anterior EL DESARROLLADOR dispone de los conocimientos y medios necesarios para el diseño y codificación de programas informáticos o aplicaciones;</p>
                            <p><strong>III</strong>. Que EL CLIENTE desea el desarrollo del software denominada <span id="span_id_nombre_software">{{$project->name}}</span> (en adelante, EL "SOFTWARE"), con la serie de características y funcionalidades que han sido comunicadas a EL DESARROLLADOR;</p>
                            <p><strong>IV</strong>. Que, con el fin de desarrollar el Software de acuerdo a las especificidades y funcionalidades solicitadas por EL CLIENTE, las Partes han negociado y aceptado un presupuesto que se incluye como anexo;</p>
                            <p><br>Ambas PARTES, conociendo el contenido de las declaraciones vertidas con anterioridad, las cuales ratifican por contener la verdad, y sin existir error, dolo, violencia, mala fe o vicio alguno en el consentimiento que pudieran invalidar al mismo, y estando de acuerdo en lo descrito y manifestado por ambas, sirven en someterse a las siguientes:</p>


                            {{-- CLAUSULAS --}}
                            <p style="text-align: center;"><strong><br>CLÁUSULAS</strong></p>

                            {{-- CLAUSULA PRIMERA --}}
                            <p><br><strong>Cláusula primera. Objeto del contrato.</strong></p>
                            <p>Mediante el presente contrato EL CLIENTE encomienda AL DESARROLLADOR y éste se obliga a diseñar, estructurar y codificar el Software   de acuerdo al presupuesto negociado   entre las Partes de forma previa a la firma del presente contrato y cuya titularidad corresponderá en su integridad AL CLIENTE.</p>
                            <p>  EL DESARROLLADOR diseñará y codificará el Software siguiendo lo establecido en esta cláusula, así como lo recogido en el propio contrato y en todos sus Anexos.</p>
                            <p>El desarrollo del Software estará a cargo de: <span id="span_id_persona_encargada_del_software">Juan Carlos Monreal Romero</span>.</p>

                            {{-- CLAUSULA SEGUNDA--}}
                            <p><br><strong>Cláusula segunda. Plazo.</strong></p>
                            <p>EL DESARROLLADOR se obliga a llevar a cabo el diseño y codificación del Software objeto del presente contrato en forma personal e independiente, a partir del día <span id="span_id_fecha_inicio">{{$project->start_date}}</span> y llevará acabo su entrega AL CLIENTE antes del día <span id="span_id_fecha_terminacion"> {{$project->end_date}}</span>.</p>
                        
                            <p>En todo caso, EL CLIENTE se compromete a colaborar y a aportar toda la información necesaria que le sea requerida por EL DESARROLLADOR para poder codificar el Software de acuerdo a los plazos establecidos en esta cláusula. En el caso de que EL CLIENTE no facilite esta información o no preste su colaboración de forma adecuada, EL DESARROLLADOR podrá comunicar por escrito AL CLIENTE su imposibilidad de cumplir con los plazos establecidos en esta cláusula. </p>

                            {{-- CLAUSULA TERCERA --}}
                            <p><br><strong>Cláusula tercera. Honorarios.</strong></p>
                            <p>Las Partes acuerdan el pago de una cantidad que asciende a $<span id="span_id_precio_del_software">{{$project->total_cost}}</span> como remuneración del Software, incluyendo los impuestos que se pudieran derivar de esta operación.</p>

                            {{-- CLAUSULA CUARTA --}}
                            <p><br><strong>Cláusula cuarta. Forma de pago.</strong></p>
                            <p>El pago de la remuneración se realizará sobre la base del presupuesto que las Partes han aceptado.</p>
                        
                            <p>El pago de la remuneración establecida por el desarrollo del software se podrá realizar en efectivo, <span class="texte_apparu_avec_ajax" style="background-color: rgb(255, 255, 255); display: inline;">en el domicilio señalado por EL DESARROLLADOR en las declaraciones de este contrato.</span></p>


                            <p>En todo caso EL DESARROLLADOR se encuentra obligado a emitir los recibos por los pagos efectivamente realizados por EL CLIENTE, no obstante, será obligación de EL CLIENTE recabar el recibo correspondiente.</p>

                            {{-- CLAUSULA QUINTA --}}
                            <p><br><strong>Cláusula quinta. Único pago.</strong></p>
                            <p>Las Partes convienen que la remuneración establecida en este contrato serán la única remuneración que EL DESARROLLADOR recibirá como pago por los servicios materia del mismo.</p>

                            {{-- CLAUSULA SEXTA --}}
                            <p><br><strong>Cláusula sexta. Relación no laboral.</strong></p>
                            <p>EL CLIENTE no adquiere ni reconoce obligación alguna de carácter laboral, a favor DEL DESARROLLADOR en virtud de no ser aplicables a la relación contractual que consta en este instrumento, los artículos 1 y 8 de la Ley Federal del Trabajo, por lo que EL DESARROLLADOR no será considerada como trabajador para ningún efecto legal.</p>
                        
                            {{-- CLAUSULA SEPTIMA --}}
                            <p><br><strong>Cláusula séptima. Cumplimiento normativa.</strong></p>
                            <p>EL DESARROLLADOR se compromete a desarrollar el Software cumpliendo de forma diligente con toda la normativa aplicable y, en particular, con todas las obligaciones laborales, de la Seguridad Social, fiscales y de protección de datos que le sean aplicables en relación con el desarrollo del Software.</p>

                            {{-- CLAUSULA OCTAVO --}}
                            <p><br><strong>Cláusula octava. Modificación del software.</strong></p>
                            <p>EL CLIENTE podrá solicitar cambios, modificaciones o mejoras en el Software durante su desarrollo,   sin embargo, estos cambios sólo se llevarán a cabo si así accede EL DESARROLLADOR, en este caso, la introducción de los cambios, se deberá negociar y recoger por escrito, incluyendo los nuevos plazos de entrega y precio de acuerdo a las modificaciones solicitadas.</p>
                            
                            {{-- CLAUSULA NOVENA --}}
                            <p><br><strong>Cláusula novena. Propiedad intelectual del software.</strong></p>
                            <p>EL DESARROLLADOR reconoce de forma expresa que EL CLIENTE será el titular de pleno dominio de la propiedad intelectual e industrial del Software.</p>
                            <p>De esta forma, EL DESARROLLADOR renuncia expresa y totalmente, a cuantos derechos de propiedad intelectual e industrial pudieran generarse como consecuencia del desarrollo del Software. Por tanto, el resultado de los trabajos realizados, en su totalidad o en cualquiera de sus fases, será propiedad DEL CLIENTE. Así mismo, EL DESARROLLADOR entregará los documentos o materiales que integren el desarrollo, así como todos sus antecedentes, borradores, datos o procedimientos.</p>
                            <p>EL CLIENTE podrá llevar a cabo la inscripción del Software en el Registro de la Propiedad Intelectual correspondiente, así como realizar todas las renovaciones de dicha inscripción que se consideren necesarias.</p>
                            <p>La cesión de los derechos de propiedad intelectual e industrial en favor DEL CLIENTE prevista en el presente contrato no tiene ámbito geográfico determinado; es decir, se extiende a todos los países del mundo sin limitación geográfica de ninguna clase.</p>
                            <p>Por último, EL DESARROLLADOR no mantendrá derecho de propiedad alguno, ni tendrá derecho a ninguna compensación más allá de lo establecido en este contrato, sobre todas aquellas partes del Software o de sus módulos desarrollados.</p>
                        
                            {{-- CLAUSULA DECIMA --}}
                            <p><br><strong>Cláusula decima. Subcontratación.</strong></p>
                            <p>Las Partes no podrán ceder los derechos y obligaciones del presente contrato sin el consentimiento previo, expreso y por escrito de la otra Parte.</p>
                            <p>En particular EL DESARROLLADOR se compromete a comunicar AL CLIENTE por escrito, y de forma previa a la celebración de cualquier acuerdo de subcontratación, su intención de subcontratar a un tercero, para llevar a cabo el desarrollo del Software, precisando su identidad, el tipo de servicios y trabajos a realizar, las condiciones económicas y legales de la relación de subcontatación, para facilitar que EL CLIENTE pueda aprobar la subcontratación, sin que dicha autorización suponga la asunción de responsabilidad alguna por parte DEL CLIENTE o la aprobación del resultado de los servicios y trabajos que la parte subcontatista como parte del desarrollo del Software.</p>
                            <p>Igualmente, será responsabilidad EL DESARROLLADOR comprobar que la parte subcontratista está autorizada para la prestación de los servicios o actividades objeto de subcontratación, así como regular por escrito la relación contractual con la misma, incorporando o anexando los acuerdos o contratos establecidos en el presente instrumento. Además, EL DESARROLLADOR se obliga a entregar AL CLIENTE una copia del contrato en los 5 (cinco) días siguientes a su firma.</p>
                            <p>La parte subcontratista actuará en todo momento bajo la dirección y control DEL DESARROLLADOR, quien se obliga y responsabiliza de hacer cumplir todas las obligaciones asumidas en el presente contrato.</p>
                            <p>EL DESARROLLADOR responderá solidariamente de las obligaciones que asuma la parte subcontratista, incluyendo los daños y perjuicios que pudiese sufrir directa o indirectamente por la actuación de dicha parte subcontratista.</p>
                            
                            {{-- CLAUSULA DECIMOPRIMERA --}}
                            <p><br><strong>Cláusula decimoprimera. Entrega del software.</strong></p>
                            <p>Una vez cumplido el plazo establecido se realizará la entrega del Software en favor DEL CLIENTE.</p>
                            <p>Si las Partes así lo acuerdan, se podrá aprobar la entrega parcial antes del vencimiento del plazo de entrega de partes o módulos del Software que puedan funcionar de forma autónoma.</p>
                            <p>EL CLIENTE podrá expresar las reservas o incidencias que estime oportunas cuando el Software no satisfaga sus expectativas, sin embargo, se compromete a la recepción del Software.</p>
                            
                            {{-- CLAUSULA DECIMOSEGUNDA --}}
                            <p><br><strong>Cláusula decimosegunda. Garantía.</strong></p>
                            <p>Las Partes acuerdan su conformidad respecto a que el Software será entregado con una garantía vigente por un plazo de <span id="span_id_numero_de_dias_naturales">60</span> (sesenta)} días naturales, contados a partir de la entrega y aceptación de la mismo.</p>
                            <p>Los términos de la garantía estarán apegados a lo establecido en la Ley Federal de Protección al Consumidor.</p>
                        
                            <p>La garantía legal  no será de aplicación en el caso de que EL CLIENTE incumpla su obligación de pago o decida terminar de forma anticipada este contrato por decisión voluntaria.</p>

                            {{-- CLAUSULA DECIMOTERCERA --}}
                            <p><br><strong>Cláusula decimotercera. Gastos.</strong></p>
                            <p>EL DESARROLLADOR se hará cargo de todos los gastos derivados en relación con el diseño y codificación del Software. Así mismo, deberá hacerse cargo del pago de los medios e instrumentos necesarios para poder ejecutar el contrato correctamente, así como de todos los impuestos o tasas que se devenguen en relación con la creación del Software, quedando EL CLIENTE exento del pago de todos estos gastos.</p>
                            
                            {{-- CLAUSULA DECIMOCUARTA --}}
                            <p><br><strong>Cláusula decimocuarta. Incumplimiento del contrato.</strong></p>
                            <p>El incumplimiento por cualquiera de las Partes de las obligaciones recogidas en el presente contrato que no contemple una sanción específica en su correspondiente estipulación, facultará a la otra Parte para exigir su cumplimiento más el correspondiente pago de intereses derivados del retraso en el cumplimiento, o bien resolver el contrato en el caso de que no se rectifique o subsane el incumplimiento en el plazo de diez (10) días naturales desde la fecha en la que se verifique el incumplimiento, con la consiguiente indemnización de daños y perjuicios, más el pago de los intereses legales por el retraso según lo dispuesto en el Código Civil.</p>
                            <p>Ninguna de las Partes podrá eximirse del cumplimiento de las obligaciones del presente contrato mediante el solo pago de la correspondiente indemnización de daños y perjuicios, pudiendo exigirse además el cumplimiento de las obligaciones o prestaciones debidas junto a la satisfacción de la correspondiente indemnización.</p>
                        
                            {{-- CLAUSULA DECIMOQUINTA --}}
                            <p><br><strong>Cláusula decimoquinta. Confidencialidad.</strong></p>
                            <p>Toda información que se suministren Las Partes, ya sea durante la fase precontractual, de negociación o durante la ejecución de los servicios contratados, será proporcionada en términos de estricta reserva y confidencialidad. Las Partes no podrán compartir ningún tipo de información a la que pudiesen haber tenido acceso y adoptarán las mismas medidas de seguridad que adoptarían respecto a la información confidencial de su propiedad, evitando su pérdida, robo o sustracción.</p>
                            <p>Las Partes se comprometen, en su caso, a advertir sobre la existencia del deber de confidencialidad a sus empleados, asociados, y a toda persona a la cual se le facilite la Información, haciéndose responsable del uso indebido que estos puedan hacer de la Información relacionada con el contrato.</p>
                            <p>Asimismo, la Parte que recibe la Información se compromete a poner en conocimiento de la otra Parte cualquier acción o incidente por parte de terceros que pueda atentar contra la confidencialidad de la Información.</p>
                            <p>Las Partes se comprometen a que la utilización de la Información solo estará dirigida a alcanzar los objetivos del contrato y no otros, y que solo estará en conocimiento de aquellas personas estrictamente necesarias para cumplir con dichos objetivos.</p>
                            <p>Las obligaciones de confidencialidad previstas en este contrato se aplicarán durante la vigencia del mismo.</p>
                        
                            {{-- CLAUSULA DECIMOSEXTA --}}
                            <p><br><strong>Cláusula decimosexta. Protección de datos.</strong></p>
                            <p>Las Partes de este contrato conocen y se obligan a cumplir con lo establecido en la Ley Federal de Protección de Datos Personales. De esta forma, las Partes son conscientes de que mediante la firma de este contrato los datos personales recogidos en el presente contrato, así como aquellos que se pudiesen recoger en el futuro para poder dar cumplimiento o una correcta ejecución de este mismo, podrán ser incorporados por la otra Parte a sus registros con el fin de ejecutar correctamente la relación contractual y, eventualmente, para una gestión administrativa y/o comercial.</p>
                            <p>En todo caso, las Partes se comprometen a que estos datos personales no serán compartidos con terceros, aunque, llegado el caso en que se requiera compartir dichos datos personales, se comprometen siempre y de forma previa, a solicitar el consentimiento expreso, informado, e inequívoco de la Parte que es titular de dichos datos de carácter personal, indicando la finalidad para la que serán compartidos los datos.</p>
                            <p>De esta Estipulación no resulta ninguna limitación o restricción para las Partes en cuanto al ejercicio de los derechos de acceso, rectificación, cancelación u oposición.</p>
                        
                            {{-- CLAUSULA DECIMOSEPTIMA --}}
                            <p><br><strong>Cláusula decimoseptima. Elevación a público del contrato.</strong></p>
                            <p>Cualquiera de las Partes podrá solicitar la elevación a público del presente contrato.</p>
                            <p>En ese caso, las Partes elegirán por mutuo acuerdo el Notario o Notaria Público ante el cual se otorgará la escritura pública. La parte solicitante se hará cargo de los correspondientes gastos notariales.</p>

                            {{-- CLAUSULA DECIMOCTAVA --}}
                            <p><br><strong>Cláusula decimoctava. Fuerza mayor.</strong></p>
                            <p>El retraso en el cumplimiento de cualquier obligación de las Partes no será considerado una omisión o un incumplimiento del contrato en el caso de que tenga su origen en causas imprevisibles o inevitables (en adelante, "Fuerza Mayor"), siempre que se haya informado debidamente a la otra Parte sobre esta situación.</p>

                            {{-- CLAUSULA DECIMONOVENA --}}
                            <p><br><strong>Cláusula decimonovena. Integridad del contrato.</strong></p>
                            <p>Las Partes reconocen que este contrato y todos sus documentos Anexos y/o adjuntados así como aquellos que sean adjuntados en el futuro, forman parte integrante del mismo a todos los efectos, y por tanto son totalmente vinculantes para las Partes.</p>
                            <p>El presente contrato sustituye y reemplaza a todos los restantes acuerdos o pactos, escritos o verbales, entre las Partes previos a la suscripción de este contrato en relación con el mismo objeto, los cuales dejan de tener la vigencia y efectividad desde la firma del presente contrato.</p>
                            <p>Si alguna de las Partes de este contrato deviniera en ineficaz o fuese anulada, o incluso nula de pleno derecho, se tendrán por no puestas, manteniendo el resto del contrato su obligatoriedad. Llegado este caso, Las Partes se comprometen a negociar de buena fe un nuevo texto para aquellas cláusulas o partes del contrato afectadas.</p>

                            {{-- CLAUSULA VIGESIMA --}}
                            <p><br><strong>Cláusula vigésima. Modificaciones del contrato.</strong></p>
                            <p>El presente contrato sólo puede ser modificado mediante convenio escrito firmado por las Partes contratantes.</p>

                            {{-- CLAUSULA VIGESIMOPRIMERA --}}
                            <p><br><strong>Cláusula vigesimoprimera. Comunicación entre las partes.</strong></p>
                            <p>Todo aviso, notificación, requerimiento o comunicación entre Las Partes respecto al objeto del presente contrato deberá realizarse por escrito en el domicilio señalado por cada una de ellas.</p>
                            <p>En caso de que alguna de Las Partes cambie su domicilio deberá comunicarlo a la otra, a más tardar cinco días antes de que tenga lugar el cambio de residencia, de lo contrario las notificaciones hechas al anterior domicilio surtirán todos sus efectos. Así mismo, deberá de indemnizar a la otra por los gastos extraordinarios que se lleguen a realizar con motivo de los incumplimientos de las obligaciones de este contrato generados a partir de la falta de comunicación.</p>

                            {{-- CLAUSULA VIGESIMOSEGUNDA--}}
                            <p><br><strong>Cláusula vigesimosegunda. Ampliación del contrato.</strong></p>
                            <p>Si al termino de la vigencia del contrato EL CLIENTE requiere de los servicios DEL DESARROLLADOR para modificar, o actualizar el Software, se pactará la celebración de un nuevo contrato con las formalidades correspondientes.</p>

                            {{-- CLAUSULA VIGESIMOTERCERA --}}
                            <p><br><strong>Cláusula vigesimotercera. Solución de conflictos y jurisdicción.</strong></p>
                            <p>Las Partes acuerdan que en caso de presentarse diferencias o disputas por virtud de la interpretación, cumplimiento y ejecución del presente contrato, tratarán razonablemente de resolverlas en forma amistosa, a través de un proceso de mediación y/o conciliación que será voluntario y tendrá un carácter previo a cualquier otro. De continuar la controversia, Las Partes se someten voluntaria y expresamente a la jurisdicción y competencia de los Juzgados y Tribunales que conforme a derecho deban conocer el asunto en razón del lugar en el que es firmado el acuerdo, con renuncia a su propio fuero en caso que este les aplique y sea procedente por razón de domicilio, vecindad, o por cualquier otra naturaleza.</p>

                            {{-- CLAUSULA VIGESIMOCUARTA --}}
                            <p><br><strong>Cláusula vigesimocuarta. Encabezados.</strong></p>
                            <p>Los encabezados de las cláusulas utilizados en el presente contrato son meramente demostrativos, sirven para guiar sobre el contenido de las mismas. Bajo ninguna circunstancia se tomarán dichos encabezados como un texto explicativo, y mucho menos limitativo.</p>        

                            {{-- FIRMAS --}}
                            <p><br>Leído que fue el presente contrato y enteradas las Partes del contenido y alcances de todas y cada una de las cláusulas del mismo, lo firman de común acuerdo en <span id="span_id_municipio_en_que_se_celebra_el_contrato">Ciudad Victoria</span>, <span id="span_id_estado_en_que_se_celebra_el_contrato">Tamaulipas</span> a <span id="span_id_fecha_en_que_se_celebra_el_contrato" class="encours">{{$project->start_date}}</span>.</p>
                        
                        
                            <p style="text-align: center;"><br><br><br>______________________________</p>
                            <p style="text-align: center;"><span id="span_id_rl_pm_a_0_rl_1">{{$project->customers->first_name}} {{$project->customers->last_name}}</span></p>
                        
                        
                            <p style="text-align: center;"><br><br><br>______________________________</p>
                            <p style="text-align: center;"><span id="span_id_rl_pm_b_0_rl_1">Juan Carlos Monreal Romero</span> en nombre y representación de <strong><span id="span_id_pm_b_0">IT Solutions</span></strong></p>
                        </div>
                    </div>
                </div>
            </div>		
        </div>
    </div>
</div>
</body>
</html>