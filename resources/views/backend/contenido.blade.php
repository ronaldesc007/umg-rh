@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-header">
        <strong>@lang('strings.backend.dashboard.welcome') {{ $logged_in_user->name }}!</strong>
      </div>
      <!--card-header-->
      <div class="card-body">

        <div class="row">
          <div class="col-xs-12 col-lg-4">
            
            <div class="card">
              <div class="card-body p-0 d-flex align-items-center">
                  Introducción 
1.	Contexto, motivación del proyecto y variables
La gestión de la información es uno de los elementos más importantes para cualquier empresa ya que a través de la misma se busca como objetivo principal la optimización de las funciones que se realizan. En este sentido, una de las herramientas más eficaces para mejorar y agilizar el desarrollo de las operaciones es contar con un sistema informático que sea capaz de gestionar cualquier operación que se desee realizar en los datos de recursos humanos el cual se encarga de planificar, organizar, dirigir y coordinar los procesos de reclutamiento, selección, contratación; registro y organización de expedientes y desarrollo de todo el personal que compone la empresa, de manera eficaz y respondiendo a las necesidades de la misma.
    	1.1  Hipótesis

Con este trabajo se intenta hacer referencia a los conceptos y valoraciones teóricas que envuelven a esta herramienta, con el fin de llegar a una conclusión que permita apreciar la viabilidad del sistema informático de gestión del recurso humano como herramienta destinada a lograr una mayor productividad laboral, además de mejorar el ambiente de trabajo y tiempo.

1.2 Variables
Definición: Es acerca de un fenómeno al que se le va a evaluar su capacidad para influir, incidir, o afectar a otras variables. Son explicativas.

•	Se puede definir como variable, el ahorro de tiempo en la eficacia dentro de la empresa al momento de emplear el sistema de gestión del recurso humano.




1.2.2. Variable Dependiente
Definición: Se trata de explicar el objeto de la investigación, que se intenta explicar en función de otras variables.
•	La importancia de la modificación de ciertos aspectos o costumbres dentro de la empresa para aplicar la herramienta satisfactoriamente.

2.	Antecedentes
En la actualidad existen  muchas empresas con departamentos desactualizados y con una gestión del recurso humano extremadamente lenta debida a que utilizan sistemas muy antiguos para dicho manejo de datos e incluso aun no poseen dichos sistemas de gestión.
Es por este problema que se ha planteado el desarrollo de esta herramienta útil para el  departamento de recursos humanos que cumpla no solo con los requerimientos de calidad de las empresas (funcionalidad, fiabilidad, eficiencia, seguridad etc.) sino que apoye a la administración del recurso humano, satisfaciendo los requerimientos solicitados, incluyendo reportes personalizados, y enfocado a manejar la información del personal de manera más eficiente.

3.	Alcances
Al finalizar este proyecto se obtendrá un sistema informático para la gestión del recurso humano para cualquier empresa; entregándose bajo plataforma web, funcional, libre de errores. Junto a la aplicación, se contempla la elaboración de los manuales de usuario y de instalación incluso se ofrece una capacitación al personal de recursos humanos para poder hacer uso correcto de la herramienta.






4.	Identificación del problema
En base a la problemática existente antes mencionado podemos identificar que hay una vulnerabilidad de seguridad y orden en la forma en la que algunas empresas aun manejan sus datos; por ejemplo, si se hace por medios electrónicos (editores de texto Word, Excel etc.) y se necesita una revisión gerencial se envían por correo o manipulan por objetos físicos como memorias de almacenamiento. Entonces, el siguiente planteamiento busca visualizar la problemática en dos estados diferentes, el primero representa el estado inicial (Estado A), y el segundo es el estado que se desea alcanzar (Estado B) por medio de la solución al problema planteado.
ESTADO A
Dificultad en procesos de registro y obtención de información del empleado y falta de organización en la información proporcionada acerca de la gestión.
ESTADO B
Mejor control y registro de información de empleados y soporte a la evaluación de desempeño.
5.	Objetivo general y especifico
Objetivo General
 Desarrollar un sistema informático para la gestión del recurso humano, que permita agilizar y dinamizar los procesos que se llevan a cabo en el departamento de Recursos Humanos de las empresas. 
Objetivos Específicos 
• Estudiar la situación actual de los departamentos de recursos humanos a fin de analizar los distintos procesos que se llevan a cabo en el departamento para identificar oportunidades de mejora. 
• Determinar los requerimientos necesarios para el desarrollo de una solución adecuada a las necesidades presentadas en el departamento de recursos humanos.
• Diseñar una solución que facilite al departamento de recursos humanos la gestión del personal, en base a los requerimientos definidos con el usuario. 


6.	Marco Teórico

6.1	 Bases Teóricas
Se define “gestión de recursos humanos” para iniciar esta investigación, ya que es el punto principal del tema primario que es “Creación del sistema para la gestión del recurso humano”. Antes definir y desglosar este tema debemos tener en claro algunos conceptos que se estarán describiendo a continuación.
       6.1.2 ¿Que es la gestión del recurso humano?
La gestión de recursos humanos contribuye a que los seres humanos que integran una empresa apoyen al logro de los objetivos. y es una de las principales funciones de la empresa y es por eso  que la manera en que los empresarios pretenden encontrar a los empleados más adecuados para cada puesto y para cada momento, que tengan la formación suficiente para desempeñar las tareas que le son encomendadas y desarrollen su trabajo de manera eficiente para alcanzar los fines de la organización.

       6.1.3 ¿Cuál es la importancia de la gestión del recurso humano de una empresa?
La importancia de la gestión de los recursos humanos radica en que actualmente la empresa debe dar respuestas a los cambios experimentados en la sociedad en general y del mundo laboral en particular entre los que destacan:
•	Aumento de la competencia y por lo tanto de la necesidad de ser competitivo.
•	Los costos y ventajas relacionadas con el uso de los recursos humanos.
•	La crisis de productividad
•	El aumento del ritmo y complejidad de los cambios sociales, culturales, normativos, demográficos y educacionales.
•	Los síntomas de las alteraciones en el funcionamiento de los lugares de trabajo.


6.2	aplicación del sistema creado para la mejora y optimización del recurso humano
se realizara la descripción paso a paso de cada uno de los procesos a mecanizar: contratación de personal; registro, organización y actualización de expedientes de empleados; evaluación de desempeño del personal, gestión del manual de puestos; capacitación institucional; usuarios involucrados así como también documentos generados o requeridos para su desarrollo. Para la creación de un sistema de interfaz web capaz de brindar apoyo a los usuarios para la creación de perfiles, salidas de personal, cálculos financieros automatizados para una mayor eficiencia y exactitud de los procesos requeridos.




6.2.1	aplicaciones a utilizar para la creación del sistema
Como elementos a utilizar tenemos a un código de página web flexible en múltiples aspectos con diversas opciones además que es capaz de conectarse a la base de datos creada especialmente para almacenar, consultar y editar cualquier registro ingresado en el sistema , dicho este creado a través de editor de código especializado capaz de dar un óptimo diseño y fácil usabilidad para los usuarios que tendrán acceso al mismo.








6.2.2 Competencias necesarias Para los servicios prestados

•	Eficiencia	
•	Precisión
•	Uniformidad
•	Constancia
•	Receptividad
•	Accesibilidad
•	Capacidad
•	Cortesía
•	Cuidado
•	Seguridad





7.	Propuesta de solución 


Para un departamento de recursos humanos es indispensable contar con un sistema capaz de dar al usuario accesibilidad al sistema de una manera amigable, fácil de entender y sobre todo estable y rápido, con diversas funciones como poder editar, consultar y crear datos sin necesidad de recurrir a otro sistema anexo a este, teniendo en cuenta que la elaboración es compleja, lo que se espera es que el cliente, en este caso, (la empresa) pueda con este sistema mejorar el tiempo de gestión y ordenamiento de los datos manipulados con exactitud y seguridad.




8.	Conclusiones y recomendaciones

8.1	  Conclusiones

Una vez finalizado el proyecto por medio de distintas etapas para el desarrollo del sistema, se concluye que:
 • Es imprescindible elegir un modelo de ciclo de vida del programa así como el mantenimiento del mismo.
 • Obtener información por parte de los empleados en los procesos descritos representa una ayuda importante para localizar las posibles oportunidades de mejora dentro del sistema. 


8.2	   Recomendaciones


•	Tomar en cuenta todos los detalles presentados en la documentación del sistema y manuales proporcionados pues estos elementos comprenden la herramienta bibliográfica para el funcionamiento y operación del sistema. 

•	Garantizar la realización de capacitaciones al personal de RRHH sobre la utilización del sistema, una vez implementado, a fin de ayudarlos a la compresión y manejo del sistema.


9.	Bibliografía y E-grafía

•	https://www.gestionyadministracion.com/empresas/gestion-de-recursos-humanos.html
https://cepymenews.es/procesos-estrategicos-gestion-recursos-humanos/
Craig Larman, UML y Patrones; Introducción al análisis y diseño orientado a objetos; Prentice Hall, Segunda Edición, México, 2003.

https://www.informaticamilenium.com.mx/es/temas/que-es-diseno-web.html
http://www.elclubdelprogramador.com/2012/03/28/uml-diagramas-de

García, Carlos Ernesto M.Sc; El Anteproyecto: Guía de preparación; Versión 1.1, Ciudad Universitaria, 2009



              </div>
            </div> 
          </div>

        </div>

      </div>
      <!--card-body-->
    </div>
    <!--card-->
  </div>
  <!--col-->
</div>
<!--row-->
@endsection