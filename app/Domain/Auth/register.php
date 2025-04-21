<?php

use Leantime\Core\Events\EventDispatcher;

EventDispatcher::add_filter_listener('leantime.domain.auth.template.userInvite.welcomeText', function ($content, $params) {
    $language = app()->make(\Leantime\Core\Language::class);

    return $language->__('text.welcome_to_leantime_content');
});

EventDispatcher::add_filter_listener('leantime.domain.auth.template.userInvite2.welcomeText', function ($content, $params) {
    $language = app()->make(\Leantime\Core\Language::class);

    return $language->__('text.welcome_to_leantime_content');
});

EventDispatcher::add_filter_listener('leantime.domain.auth.template.userInvite3.welcomeText', function ($content, $params) {
    $language = app()->make(\Leantime\Core\Language::class);

    return $language->__('text.welcome_to_leantime_content');
});

EventDispatcher::add_filter_listener('leantime.domain.auth.template.userInvite4.welcomeText', function ($content, $params) {
    $language = app()->make(\Leantime\Core\Language::class);

    return $language->__('text.welcome_to_leantime_content');
});

EventDispatcher::add_filter_listener('leantime.domain.auth.template.userInvite5.welcomeText', function ($content, $params) {
    $language = app()->make(\Leantime\Core\Language::class);

    return $language->__('text.welcome_to_leantime_content');
});

EventDispatcher::add_filter_listener('leantime.domain.auth.*.belowWelcomeText', function ($content, $params) {

    $quotes = [];
    $quotes[] = "\"La planificacion es traer el futuro al presente para que puedas hacer algo al respecto ahora.\"<br /><br />- Alan Lakein";
    $quotes[] = "\"El progreso siempre implica riesgo. No puedes robarte la segunda base y mantener tu pie en la primera.\"<br /><br />- Fred Allen";
    $quotes[] = "\"La mejor manera de predecir el futuro es crearlo.\"<br /><br />- Peter Drucker";
    $quotes[] = "\"El tiempo es un recurso precioso. Usalo sabiamente enfocandote en lo esencial para alcanzar tus metas.\"<br /><br />- Greg McKeown";
    $quotes[] = "\"El secreto para avanzar es comenzar. El secreto para terminar es comenzar dando el primer paso en la direccion de tu meta.\"<br /><br />- Mark Twain";
    $quotes[] = "\"Nuestras metas solo pueden alcanzarse a traves de un plan, en el que debemos creer fervientemente, y sobre el cual debemos actuar vigorosamente. No hay otro camino al exito.\"<br /><br />- Clarence Darrow";
    $quotes[] = "\"La calidad nunca es un accidente; siempre es el resultado de un esfuerzo inteligente.\"<br /><br />- John Ruskin";
    $quotes[] = "\"Un objetivo propiamente establecido es la mitad del camino recorrido.\"<br /><br />- Zig Ziglar";
    $quotes[] = "\"No esperes. El tiempo nunca sera el justo.\"<br /><br />- Napoleon Hill";
    $quotes[] = "\"Cada minuto que dedicas a la planificacion ahorra diez en la ejecucion.\"<br /><br />- Brian Tracy";
    $quotes[] = "\"La vision sin ejecucion es alucinacion.\"<br /><br />- Thomas Edison";
    $quotes[] = "\"El exito no es la clave de la felicidad. La felicidad es la clave del exito. Si amas lo que haces, tendras exito.\"<br /><br />- Albert Schweitzer";
    $quotes[] = "\"La perseverancia no es una carrera larga; son muchas carreras cortas una tras otra.\"<br /><br />- Walter Elliot";
    $quotes[] = "\"El mayor error que puedes cometer es tener miedo de cometer uno.\"<br /><br />- Elbert Hubbard";
    $quotes[] = "\"La innovacion distingue entre un lider y un seguidor.\"<br /><br />- Steve Jobs";
    $quotes[] = "\"El progreso es imposible sin cambio, y aquellos que no pueden cambiar sus mentes no pueden cambiar nada.\"<br /><br />- George Bernard Shaw";
    $quotes[] = "\"La paciencia y la perseverancia tienen un efecto magico ante el que las dificultades desaparecen y los obstaculos se desvanecen.\"<br /><br />- John Quincy Adams";
    $quotes[] = "\"La accion no siempre trae felicidad, pero no hay felicidad sin accion.\"<br /><br />- Benjamin Disraeli";
    $quotes[] = "\"El futuro recompensa a quienes siguen adelante. No tengo tiempo para sentir lastima por mi mismo. No tengo tiempo para quejarme.\"<br /><br />- Stephen Hawking";
    $quotes[] = "\"El exito parece ser en buena parte cuestion de perseverar despues de que otros han renunciado.\"<br /><br />- William Feather";
    $quotes[] = "\"No he fallado. Simplemente he encontrado 10,000 maneras que no funcionan.\"<br /><br />- Thomas Edison";
    $quotes[] = "\"El unico modo de hacer un gran trabajo es amar lo que haces.\"<br /><br />- Steve Jobs";
    $quotes[] = "\"El coraje es la primera de las cualidades humanas porque es la cualidad que garantiza todas las demas.\"<br /><br />- Winston Churchill";
    $quotes[] = "\"Cree que puedes y estaras a mitad del camino.\"<br /><br />- Theodore Roosevelt";
    $quotes[] = "\"Nadie que haya dado lo mejor de si mismo se ha arrepentido de ello.\"<br /><br />- George Halas";
    $quotes[] = "\"La diferencia entre una persona exitosa y otras no es la falta de fuerza, ni la falta de conocimiento, sino la falta de voluntad.\"<br /><br />- Vince Lombardi";
    $quotes[] = "\"Los desafios son lo que hacen la vida interesante y superarlos es lo que hace la vida significativa.\"<br /><br />- Joshua Marine";
    $quotes[] = "\"El exito no es final, el fracaso no es fatal: lo que cuenta es el coraje para continuar.\"<br /><br />- Winston Churchill";
    $quotes[] = "\"La innovacion es la capacidad de ver el cambio como una oportunidad, no como una amenaza.\"<br /><br />- Steve Jobs";
    $quotes[] = "\"El liderazgo y el aprendizaje son indispensables el uno para el otro.\"<br /><br />- John F. Kennedy";
    $quotes[] = "\"La motivacion es lo que te pone en marcha. El habito es lo que te mantiene en movimiento.\"<br /><br />- Jim Ryun";
    $quotes[] = "\"No importa lo lento que vayas, siempre y cuando no te detengas.\"<br /><br />- Confucio";
    $quotes[] = "\"El unico limite para nuestra realizacion del mañana seran nuestras dudas de hoy.\"<br /><br />- Franklin D. Roosevelt";
    $quotes[] = "\"Cree en tus suenos y ellos se haran realidad. Cree en ti y tu te haras realidad.\"<br /><br />- Walt Disney";
    $quotes[] = "\"La disciplina es el puente entre las metas y los logros.\"<br /><br />- Jim Rohn";
    $quotes[] = "\"El exito no consiste en vencer siempre, sino en no desanimarse nunca.\"<br /><br />- Napoleon Bonaparte";
    $quotes[] = "\"La clave del exito no esta en tener habilidades excepcionales, sino en descubrir nuestras habilidades ordinarias y usarlas de forma excepcional.\"<br /><br />- John Maxwell";
    $quotes[] = "\"Los grandes espiritus siempre han encontrado violenta oposicion de mentes mediocres.\"<br /><br />- Albert Einstein";
    $quotes[] = "\"El futuro pertenece a quienes creen en la belleza de sus sueños.\"<br /><br />- Eleanor Roosevelt";
    $quotes[] = "\"El exito es la suma de pequenos esfuerzos repetidos dia tras dia.\"<br /><br />- Robert Collier";
    $quotes[] = "\"Cuando dejas de soñar, dejas de vivir.\"<br /><br />- Malcolm Forbes";
    $quotes[] = "\"La confianza en si mismo es el primer secreto del exito.\"<br /><br />- Ralph Waldo Emerson";
    $quotes[] = "\"El camino hacia el exito siempre esta en construccion.\"<br /><br />- Lily Tomlin";
    $quotes[] = "\"El exito no es cuanto dinero ganas, sino la diferencia que haces en la vida de las personas.\"<br /><br />- Michelle Obama";
    $quotes[] = "\"La vida es 10% lo que te sucede y 90% como reaccionas a ello.\"<br /><br />- Charles R. Swindoll";
    $quotes[] = "\"El unico lugar donde el exito viene antes que el trabajo es en el diccionario.\"<br /><br />- Vidal Sassoon";
    $quotes[] = "\"Cree que puedes y ya estas a mitad del camino.\"<br /><br />- Theodore Roosevelt";
    $quotes[] = "\"La mejor venganza es un exito masivo.\"<br /><br />- Frank Sinatra";
    $quotes[] = "\"La innovacion es lo que distingue a un lider de los demas.\"<br /><br />- Steve Jobs";
    $quotes[] = "\"El liderazgo es accion, no posicion.\"<br /><br />- Donald McGannon";
    $quotes[] = "\"El talento gana partidos, pero el trabajo en equipo y la inteligencia ganan campeonatos.\"<br /><br />- Michael Jordan";
    $quotes[] = "\"El exito no se trata de ir de la A a la Z, sino de atravesar cada letra del alfabeto.\"<br /><br />- David Bednar";
    $quotes[] = "\"La unica manera de hacer un trabajo genial es amar lo que haces.\"<br /><br />- Steve Jobs";
    $quotes[] = "\"La creatividad es la inteligencia divirtiendose.\"<br /><br />- Albert Einstein";
    $quotes[] = "\"El pesimista se queja del viento; el optimista espera que cambie; el realista ajusta las velas.\"<br /><br />- William Arthur Ward";
    $quotes[] = "\"La mejor forma de aprender es haciendo.\"<br /><br />- Richard Branson";
    $quotes[] = "\"Los errores son la prueba de que lo estas intentando.\"<br /><br />- John C. Maxwell";
    $quotes[] = "\"No tengas miedo de renunciar a lo bueno para ir por lo grandioso.\"<br /><br />- John D. Rockefeller";
    $quotes[] = "\"El exito no es la ausencia de fracaso, sino la persistencia a pesar del fracaso.\"<br /><br />- Aisha Tyler";
    $quotes[] = "\"La disciplina es recordar lo que quieres.\"<br /><br />- David Allen";
    $quotes[] = "\"El secreto de la felicidad no se encuentra en la busqueda de mas, sino en el desarrollo de la capacidad de disfrutar de menos.\"<br /><br />- Socrates";
    $quotes[] = "\"La mayor gloria no es nunca caer, sino levantarse cada vez que caemos.\"<br /><br />- Nelson Mandela";
    $quotes[] = "\"El exito es dejar un legado, no solo una nomina.\"<br /><br />- Mark Cuban";
    $quotes[] = "\"La unica constante es el cambio.\"<br /><br />- Heraclito";
    $quotes[] = "\"El conocimiento es poder.\"<br /><br />- Francis Bacon";
    $quotes[] = "\"La imaginacion es mas importante que el conocimiento.\"<br /><br />- Albert Einstein";
    $quotes[] = "\"La lectura hace al hombre completo; la conversacion lo agiliza, el escribir lo precisa.\"<br /><br />- Francis Bacon";
    $quotes[] = "\"El proposito de la vida es una vida con proposito.\"<br /><br />- Robert Byrne";
    $quotes[] = "\"La felicidad no es algo hecho. Viene de tus propias acciones.\"<br /><br />- Dalai Lama";
    $quotes[] = "\"La amabilidad en las palabras crea confianza. La amabilidad en el pensamiento crea profundidad. La amabilidad en el dar crea amor.\"<br /><br />- Lao Tzu";
    $quotes[] = "\"El arte de la comunicacion es el lenguaje del liderazgo.\"<br /><br />- James Humes";
    $quotes[] = "\"El mayor descubrimiento de todos los tiempos es que una persona puede alterar su futuro simplemente alterando su actitud.\"<br /><br />- Oprah Winfrey";
    $quotes[] = "\"La innovacion es el motor del progreso.\"<br /><br />- Bill Gates";
    $quotes[] = "\"El trabajo duro supera al talento cuando el talento no trabaja duro.\"<br /><br />- Tim Notke";
    $quotes[] = "\"La unica manera de hacer un trabajo extraordinario es amar lo que haces.\"<br /><br />- Steve Jobs";
    $quotes[] = "\"El exito no es la llave de la felicidad. La felicidad es la llave del exito.\"<br /><br />- Albert Schweitzer";
    $quotes[] = "\"La humildad es la solida base de todas las virtudes.\"<br /><br />- Confucio";
    $quotes[] = "\"La integridad no tiene precio. Cuando finalmente la pierdes, lo pierdes todo.\"<br /><br />- Zig Ziglar";
    $quotes[] = "\"El caracter no se puede desarrollar en la facilidad y la tranquilidad. Solo a traves de la experiencia de la prueba y el sufrimiento se puede fortalecer el alma, inspirar la ambicion y lograr el exito.\"<br /><br />- Helen Keller";
    $quotes[] = "\"La educacion es el arma mas poderosa que puedes usar para cambiar el mundo.\"<br /><br />- Nelson Mandela";
    $quotes[] = "\"El cambio es la ley de la vida. Y aquellos que solo miran al pasado o al presente seguramente se perderan el futuro.\"<br /><br />- John F. Kennedy";
    $quotes[] = "\"La medida de lo que somos es lo que hacemos con lo que tenemos.\"<br /><br />- Vince Lombardi";
    $quotes[] = "\"El exito es aprender a ir de fracaso en fracaso sin perder el entusiasmo.\"<br /><br />- Winston Churchill";
    $quotes[] = "\"La verdadera prueba no es si evitas este fracaso, porque no lo haras. Es si lo dejas endurecerte o avergonzarte hasta la inaccion, o si aprendes de el; si eliges perseverar.\"<br /><br />- Barack Obama";
    $quotes[] = "\"El liderazgo es resolver problemas. El dia que los soldados dejen de traerte sus problemas es el dia en que has dejado de liderarlos.\"<br /><br />- Colin Powell";
    $quotes[] = "\"La historia la escriben los vencedores.\"<br /><br />- Winston Churchill";
    $quotes[] = "\"No cuentes los dias, haz que los dias cuenten.\"<br /><br />- Muhammad Ali";
    $quotes[] = "\"El valor no siempre ruge. A veces el valor es la vocecita al final del dia que dice, lo intentare de nuevo mañana.\"<br /><br />- Mary Anne Radmacher";
    $quotes[] = "\"La unica forma de hacer un trabajo grandioso es amar lo que haces.\"<br /><br />- Steve Jobs";
    $quotes[] = "\"El exito no es la ausencia de problemas, sino la capacidad de lidiar con ellos.\"<br /><br />- Zig Ziglar";
    $quotes[] = "\"La perseverancia es caerse 19 veces y levantarse 20.\"<br /><br />- Julie Andrews";
    $quotes[] = "\"El optimismo es la fe que conduce al logro. Nada puede hacerse sin esperanza y confianza.\"<br /><br />- Helen Keller";
    $quotes[] = "\"El futuro tiene muchos nombres: para los debiles es lo inalcanzable, para los temerosos lo desconocido, para los valientes la oportunidad.\"<br /><br />- Victor Hugo";
    $quotes[] = "\"La accion es la llave fundamental de todo exito.\"<br /><br />- Pablo Picasso";
    $quotes[] = "\"Los suenos no se hacen realidad magicamente; se necesita sudor, determinacion y trabajo duro.\"<br /><br />- Colin Powell";
    $quotes[] = "\"El exito no es un destino, es un viaje.\"<br /><br />- Ben Sweetland";
    $quotes[] = "\"La unica revolucion posible es la interior.\"<br /><br />- Mahatma Gandhi";
    $quotes[] = "\"Se el cambio que quieres ver en el mundo.\"<br /><br />- Mahatma Gandhi";
    $quotes[] = "\"La felicidad no es tener todo lo que quieres, sino querer todo lo que tienes.\"<br /><br />- Oscar Wilde";
    $quotes[] = "\"El arte de vivir es mas parecido al de la lucha que al de la danza, en la medida en que tambien en la lucha es necesario estar preparado y firme para los golpes repentinos.\"<br /><br />- Marco Aurelio";
    $quotes[] = "\"La mejor filosofia es aquella que el hombre practica.\"<br /><br />- Oliver Goldsmith";
    $quotes[] = "\"La verdadera sabiduria esta en reconocer la propia ignorancia.\"<br /><br />- Socrates";
    $quotes[] = "\"Conócete a ti mismo.\"<br /><br />- Socrates";
    $quotes[] = "\"La virtud es conocimiento.\"<br /><br />- Socrates";

    $random = rand(0, count($quotes) - 1);

    return '
                <div class="socialProofContent">
                    <i>'.$quotes[$random].'</i>
                </div>
    ';
});
