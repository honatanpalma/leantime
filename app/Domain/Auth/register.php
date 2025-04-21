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
    $quotes[] = "\"El primer paso no te lleva a donde quieres ir, pero te saca de donde estas.\"<br /><br />- No identificado";
    $quotes[] = "\"La disciplina es el puente entre las metas y los logros.\"<br /><br />- Jim Rohn";
    $quotes[] = "\"El exito no consiste en vencer siempre, sino en no desanimarse nunca.\"<br /><br />- Napoleon Bonaparte";
    $quotes[] = "\"La clave del exito no esta en tener habilidades excepcionales, sino en descubrir nuestras habilidades ordinarias y usarlas de forma excepcional.\"<br /><br />- John Maxwell";
    $quotes[] = "\"Los grandes espiritus siempre han encontrado violenta oposicion de mentes mediocres.\"<br /><br />- Albert Einstein";
    $quotes[] = "\"El futuro pertenece a quienes creen en la belleza de sus sueños.\"<br /><br />- Eleanor Roosevelt";
    $quotes[] = "\"No te canses, ni te rindas, porque cada esfuerzo, por pequeno que sea, te acerca a tu meta.\"<br /><br />- No identificado";
    $quotes[] = "\"El exito es la suma de pequenos esfuerzos repetidos dia tras dia.\"<br /><br />- Robert Collier";
    $quotes[] = "\"Cuando dejas de soñar, dejas de vivir.\"<br /><br />- Malcolm Forbes";
    $quotes[] = "\"La confianza en si mismo es el primer secreto del exito.\"<br /><br />- Ralph Waldo Emerson";
    $quotes[] = "\"El camino hacia el exito siempre esta en construccion.\"<br /><br />- Lily Tomlin";
    $quotes[] = "\"El exito no es cuanto dinero ganas, sino la diferencia que haces en la vida de las personas.\"<br /><br />- Michelle Obama";
    $quotes[] = "\"La vida es 10% lo que te sucede y 90% como reaccionas a ello.\"<br /><br />- Charles R. Swindoll";
    $quotes[] = "\"El unico lugar donde el exito viene antes que el trabajo es en el diccionario.\"<br /><br />- Vidal Sassoon";
    $quotes[] = "\"Cree que puedes y ya estas a mitad del camino.\"<br /><br />- Theodore Roosevelt";
    $quotes[] = "\"La mejor venganza es un exito masivo.\"<br /><br />- Frank Sinatra";

    $random = rand(0, count($quotes) - 1);

    return '
                <div class="socialProofContent">
                    <i>'.$quotes[$random].'</i>
                </div>
    ';
});
