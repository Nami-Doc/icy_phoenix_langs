<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
* Lopalong
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

//
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\"
// The FAQ items will appear on the FAQ page in the same order they are listed in this file


$faq[] = array("--","Acerca del inicio de cuenta (login) y registro");
$faq[] = array("�Por qu� no puedo iniciar mi cuenta?", "�Ya se registr�? Debe registrarse en el sistema antes de poder acceder a �l. �Ha sido bloqueado en el foro? (si es as�, le aparecer� un mensaje). Si le ha sucedido eso, env�e un mensaje al administrador del foro para saber la causa. Si se ha registrado y no ha sido bloqueado, compruebe que su nombre de usuario y contrase�a coincidan, es el problema m�s com�n. Si est� seguro de que est�n correctos los datos, env�e un mensaje al administrador, quiz� el foro est� mal configurado y/o tenga fallos en la programaci�n.");
$faq[] = array("�Por qu� me tengo que registrar para todo?", "No est� obligado a hacerlo, la decisi�n la toman los administradores y moderadores. Sin embargo, estar registrado le da muchas ventajas que como usuario invitado no disfrutar�a, como tener su gr�fico personalizado (avatar), mensajes privados, suscripci�n a grupos de usuarios, etc.... S�lo le tomar� unos segundos, es muy recomendable.");
$faq[] = array("�Por qu� mi sesi�n de usuario/a expira autom�ticamente?", "Si no activa la casilla <i>Ingresar autom�ticamente</i> cuando ingresa al foro, sus datos se guardan en una cookie que se elimina al salir de la p�gina o tras cierto tiempo. Esto previene que su cuenta pueda ser usada por alguien m�s. Para que el sistema le reconozca autom�ticamente, basta con que active la casilla al ingresar. NO es recomendable si accede al foro desde un ordenador compartido (cibercaf�, biblioteca, colegio, etc).");
$faq[] = array("�C�mo evito aparecer en las listas de usuarios/as conectados/as?", "En su perfil encontrar� la opci�n <i>Ocultar mi estado de conexi�n</i>. Si activa esta opci�n aparecer� solo para los administradores, moderadores y para s� mismo; para los dem�s ser� un usuario oculto.");
$faq[] = array("�He perdido mi contrase�a!", "Calma, si su contrase�a no puede ser recuperada puede desactivarla o cambiarla. Para hacer esto dir�jase a la p�gina de registro y pulse en <u>Olvid� mi contrase�a</u>, siga las instrucciones, y estar� dentro en muy poco tiempo");
$faq[] = array("�Me he registrado y no puedo ingresar!", "Primeramente compruebe sus datos (usuario y contrase�a). Si todo es correcto, hay dos posibles razones. Si el sistema de protecci�n infantil (COPPA) est� activado y cuando se registr� eligi� la opci�n <u>Soy menor de 13 a�os</u>, entonces tendr� que seguir algunas instrucciones que se le dar�n para activar la cuenta. En otros casos, el administrador pide que las cuentas se activen mediante un e-mail, as� que revise su correo y confirme su suscripci�n. Algunos foros necesitan confirmaci�n de registro. Si no sucede nada de esto, contacte con el administrador del foro.");
$faq[] = array("�Hace un tiempo me registr�, pero ahora no puedo ingresar!", "Hay varias razones posibles. Ingres� un nombre de usuario o contrase�a incorrectos (verifique el mensaje que se le envi� al registrarse). O quiz� el administrador haya borrado su cuenta: esto es muy frecuente, pues si no ha escrito ning�n mensaje en cierto tiempo el administrador puede borrar al usuario para que la base de datos no se sature de registros. Si es as�, reg�strese de nuevo y participe :)");


$faq[] = array("--","Preferencias de usuario y configuraciones");
$faq[] = array("�C�mo puedo cambiar mi configuraci�n?", "Todos sus datos y configuraciones (si est� registrado) est�n archivados en nuestra base de datos. Para modificarlos pulse en el enlace <u>Perfil</u>, generalmente se encuentra arriba de cada p�gina.");
$faq[] = array("�La hora de los foros no es correcta!", "Las horas son correctas, es posible que est� viendo las horas correspondientes a otra zona horaria. Si ese es el caso, ingrese en su perfil y defina su zona horaria de acuerdo a su ubicaci�n (ej. Londres, Par�s, New York, Sydney, etc.). Cambiando esto las horas deben aparecer de acuerdo a su zona y tiempo. Si no se ha registrado, es hora de hacerlo :)");
$faq[] = array("�He cambiado la zona horaria en mi perfil, pero la hora sigue siendo incorrecta!", "Si est� segur@ de que la zona horaria es correcta, es posible que se deba a los horarios de verano implementados por algunos pa�ses.");
$faq[] = array("�Mi idioma no est� en la lista!", "Esto se puede deber a que el administrador no ha instalado el paquete de su idioma para el foro, o nadie ha creado una traducci�n: (Si es as�, si�ntase libre de hacer una traducci�n (miles de personas se lo agradecer�n); encuentre informaci�n sobre esto en la web de Icy Phoenix (Pulse en el enlace que se encuentra al final de la p�gina)");
$faq[] = array("�C�mo puedo poner una imagen bajo mi nombre de usuario?", "Hay dos tipos de im�genes debajo de su nombre de usuario. La primera es el rango, que est� asociada con el n�mero de mensajes que ha escrito en el foro (generalmente son estrellas o bloques). La segunda es el avatar, que es un gr�fico generalmente �nico y personal. El administrador decide si se pueden usar o no; si es posible, puede introducirlo en su perfil. En caso de que no exista esa opci�n, contacte con el administrador y pida que sea activada esa opci�n :)");
$faq[] = array("�C�mo puedo cambiar mi rango?", "No puede cambiar su rango directamente, ya que est� asociado directamente al n�mero de mensajes publicados o a su estado de moderador, administrador, u otros rangos especiales. Por favor, no abuse de escribir mensajes innecesariamente para incrementar su rango.");
$faq[] = array("Cuando pulso sobre el enlace de correo me pide que me registre.", "Para poder enviar correo a un usuario via formulario (si el administrador lo tiene activado) necesita estar registrado. As� se evitar SPAM o mensajes maliciosos de usuarios an�nimos.");

$faq[] = array("--","Publicaci�n de mensajes");
$faq[] = array("�C�mo puedo publicar un mensaje en el foro?", "F�cil. Reg�strese como usuario del foro (pulsando en el enlace de registro, generalmente arriba de cada p�gina). Tras registrarse, pulse en <i>Enviar nuevo mensaje</i>: se le presentar� un panel con el que facilmente publicar� su mensaje :)");
$faq[] = array("�C�mo puedo editar o borrar un mensaje?", "Si no es administrador o moderador del foro, s�lo puede borrar los mensajes que haya enviado usted mismo. Puede editar un mensaje pulsando en <i>editar</i>. Si alguien ya ha respondido a su mensaje, encontrar� un peque�o texto en el suyo diciendo que ha sido modificado y las veces que lo ha hecho; no aparece si fue un moderador o el administrador el que lo edit� (la mayoria de las veces dejan un mensaje aclaratorio).");
$faq[] = array("�C�mo puedo agregar una firma a mis mensajes?", "Primero debe crear una firma, lo que puede hacer desde su perfil. Una vez creada, active la opci�n <i>Agregar firma</i> cuando publique un mensaje. Tambi�n puede hacer que todos sus mensajes tengan au firma, activando la opci�n en su perfil.");
$faq[] = array("�C�mo creo una encuesta?", "Crear una encuesta es f�cil. Cuando inicie un nuevo tema ver� la opci�n <i>Crear una encuesta</i>. Introuzca los datos de la encuesta, como t�tulo y opciones. Puede poner l�mite al n�mero de participantes (0 es infinito)");
$faq[] = array("�C�mo edito o borro una encuesta?", "Si usted inici� la encuesta puede editarla de la misma manera que un mensaje. Pero esto s�lo es posible si la encuesta a�n no tiene respuestas, pues, de tenerlas, s�lo el administrador o moderadores podr�n editarla o borrarla");
$faq[] = array("�Por qu� no puedo acceder a un foro?", "Algunos foros pueden estar limitados a ciertos usuarios o grupos. Para verlos, leer, escribir, etc., podr�a necesitar una autorizaci�n especial que s�lo el moderador del foro o el administrador del sitio pueden dar, as� que deber�a contactar con ellos.");
$faq[] = array("�Por qu� no puedo votar en encuestas?", "Para prevenir resultados trucados, s�lo los usuarios registrados pueden votar en encuestas. Si se ha registrado pero no puede votar, es posible que no tenga autorizaci�n para votar en esa encuesta.");

$faq[] = array("--","Formateo de mensajes y tipos de temas");
$faq[] = array("�Qu� es el c�digo BBCode?", "BBCode es una implementaci�n especial del HTML; la forma en que puede usarse es determinada por el administrador. Es muy similar al HTML: las etiquetas van entre corchetes [ y ] para mas informaci�n puede ver el manual de BBCode, el enlace aparece cada vez que va a publicar un mensaje.");
$faq[] = array("�Puedo usar HTML?", "Depende de si el administrador tenga habilitada la opci�n y de qu� etiquetas HTML est�n activadas, ya que muchas etiquetas HTML podr�an da�ar severamente la estructura del mensaje.");
$faq[] = array("�Qu� son los emoticonos?", "Emoticonos son peque�os gr�ficos que pueden ser usados para expresar emociones. Aparecen introduciendo un peque�o c�digo. Por ejemplo:  :) significa feliz, :( significa triste. La lista completa de emoticonos se despliega cuando va a escribir un mensaje.");
$faq[] = array("�Puedo publicar im�genes?", "Las im�genes pueden ser adheridas al mensaje insert�ndolas en el momento de redactarlo. No puede haber im�genes de sitios de correo, b�squeda o que requieran autentificaci�n (Yahoo, Hotmail...).");
$faq[] = array("�Qu� son los anuncios?", "Los anuncios contienen informaci�n importante para los usuarios.");
$faq[] = array("�Qu� son las notas?", "Temas importantes, aparecen debajo de los anuncios y s�lo en la primera p�gina. Es informaci�n importante que deber�a leer :)");
$faq[] = array("�Qu� son los temas cerrados o bloqueados?", "Los temas cerrados o bloqueados son temas en los que ya no se puede escribir por decisi�n del administrador o moderadores.");

$faq[] = array("--","Niveles de usuario/a y grupos");
$faq[] = array("�Qu� son los administradores/as?", "Son personas que tienen asignado un alto nivel de control sobre el foro entero: permisos, moderaci�n, y todo tipo de configuraciones.");
$faq[] = array("�Qu� son los moderadores/as?", "Son personas que tienen el poder de editar o borrar foros, cerrarlos o abrirlos. Son designados por el administrador y tienen menos opciones que �l.");
$faq[] = array("Qu� son los grupos de usuarios/as?", "Son una de las formas en las que el administrador del foro puede agrupar usuarios. Un usuario puede pertenecer a varios grupos. Esto se hace con el fin de conceder permisos colectivos sobre el foro (como convertir a todo un grupo en moderadores).");
$faq[] = array("�C�mo puedo pertenecer a un grupo de usuarios/as?", "Pulse en grupos de usuarios y pida su inscripcion. Recibir� un correo si es aceptado. No todos los grupos son abiertos.");
$faq[] = array("�C�mo me convierto en el moderador/a de un grupo de usuarios/as?", "S�lo el administrador puede asignar ese permiso, contacte con �l :)");

$faq[] = array("--","Mensajer�a privada");
$faq[] = array("�No puedo enviar mensajes privados!", "Hay tres posibles razones: No est� registrado o no ha ingresado, el administrador deshabilit� el sistema de mensajes privados, o desabilit� para usted la mensajer�a.");
$faq[] = array("�Quiero evitar mensajes privados no deseados!", "En el futuro ser� agregada la caracter�stica de ignorar mensajes; por ahora, env�e un mensaje al administrador si recibe mensajes no deseados :(.");
$faq[] = array("�He recibido spam o correos maliciosos de alguien en este foro!", "Lo sentimos mucho, la caracter�stica de mandar correos tiene amplios conceptos de seguridad y privacidad. Env�e el correo al administrador, tal como ven�a, incluyendo cabeceras y dem�s. �l tomar� medidas.");

$faq[] = array("--","Generador de avatar");
$faq[] = array("�Qu� es?", "El <strong>Generador de avatar</strong> es usado para generar avatares para este foro phpBB por los usuarios.");
$faq[] = array("�D�nde lo puedo encontrar?", "Los puede encontrar en su perfil en la secci�n de avatares");
$faq[] = array("�C�mo guardo mi avatar?", "Debe de haber un enlace debajo del avatar que se ha generado. El enlace dice <strong>Pulse aqu� para a�adir este avatar a su perfil</strong>. Una vez que pulse en �l, ver� un mensaje que le informara sobre el cambio.");

$faq[] = array("--","Album de fotos");
$faq[] = array("�C�mo puedo acceder al �lbum de fotos? ", "Basta con usar el enlace '�lbum de fotos' en el men� de navegaci�n. Esto le llevar� al directorio principal donde se muestran todos los �lbumes publicos. Tambi�n puede acceder a la galer�a personal de un usuario haciendo clic en el enlace 'Galer�as personales de usuarios' debajo de la categor�a p�blica.");
$faq[] = array("�C�mo puedo a�adir una imagen a un �lbum de fotos?", "Una vez que usted est� en el directorio principal del �lbum de fotos, seleccione una de las' categor�as p�blicas' o 'Galer�as personales de usuarios'. Ahora debe ver un bot�n que dice 'Subir imagen' en la parte superior y la parte inferior de la p�gina. Haga clic en este bot�n y siga las instrucciones en la p�gina siguiente.");
$faq[] = array("�Cu�l es el tama�o m�ximo de archivo, m�ximo ancho y la m�xima altura de la imagen permitido?", "Estos ajustes aparecen en 'Subir imagen'. El administrador fija el l�mite superior para el tama�o del archivo, define las extensiones de archivos permitidas y otras cosas para cargar im�genes en los �lbumes.");
$faq[] = array("�Qu� formato tiene que tener mi imagen?", "Estos ajustes aparecen en 'Subir imagen'. El administrador fija un l�mite superior para el tama�o del archivo, define las extensiones de archivos y otras cosas para cargar im�genes en los �lbumes.");
$faq[] = array("Al subir mi imagen me aparece un mensaje de error!", "Vuelva a la p�gina 'Subir imagen' y aseg�rese de seguir todas las instrucciones que aparecen all�. El fichero que usted ha intentado subir puede ser m�s grande que el tama�o m�ximo de archivo permitido, puede estar tratando de subir una foto que no se ajustan a las dimensiones especificadas, puede estar tratando de cargar una foto en un formato no est� disponible, o simplemente pueden haber olvidado que rellenar los campos necesarios para para enviar correctamente la foto.");
$faq[] = array("He cometido un error en el t�tulo y/o descripci�n de mi imagen. �Qu� puedo hacer?", "Al ver un �lbum, hay varias opciones disponibles para los usuarios. Si el administrador lo ha permitido, usted encontrar� el enlace 'Editar' debajo de cada miniatura que le permitir� modificar esta informaci�n en cualquier momento.");
$faq[] = array("�C�mo puedo borrar una foto?", "Al ver un �lbum, hay varias opciones disponibles para los usuarios. Si el administrador lo ha permitido, usted encontrar� el enlace 'Eliminar' debajo de cada miniatura que le permitir� eliminar cualquier imagen suya.");
$faq[] = array("Me gustar�a saber si a la gente le gusta o no le gusta mi imagen. �C�mo puedo hacerlo?", "Al ver un �lbum o una foto, hay varias opciones disponibles para los usuarios. Si el administrador lo ha permitido, encontrar�s los enlaces' calificaci�n 'y' comentarios' debajo de cada miniatura o imagen que le permiten hacer esto de un par de maneras en cualquier momento.");

$faq[] = array("--","Archivos adjuntos");
$faq[] = array("�C�mo puedo a�adir un archivo adjunto?", "Puede agregar un adjunto cuando se publica un nuevo mensaje si el administrador se lo ha permitido. Deber�a ver 'A�adir adjunto' debajo de la zona donde se escribe el texto del mensaje. Pulselo y despu�s haga clic en 'examinar' para que se abra un cuadro dialogo est�ndar de selecci�n de archivos. Busque el archivo que desea adjuntar, selecci�nelo y haga clic en OK, Abrir o doble clic como lo har�a cuando usa el explorador de archivos en su ordenador. Si decide a�adir un comentario en el campo comentario del archivo este comentario ser� usado como un enlace al archivo adjunto. Si no ha a�adido un comentario se utilizar� el nombre del archivo para enlazar con el archivo adjunto. Si el administrador lo ha permitido usted podr� subir varios adjuntos siguiendo el mismo procedimiento que se describe m�s arriba hasta llegar al m�ximo n�mero de archivos adjuntos permitidos para cada mensaje.<br/><br/>El administrador fija el l�mite de tama�o de archivo, define las extensiones de archivos permitidas y otras cosas para los archivos adjuntos en el foro. Tenga en cuenta que es su responsabilidad de que sus archivos adjuntos cumplan la legalidad vigente, las normas de uso del foro, y que pueden ser borrados sin previo aviso.<br/><br/>Por favor tenga en cuenta que el propietario del foro, el webmaster, administrador o moderadores declinan toda responsabilidad por cualquier p�rdida de datos.");
$faq[] = array("�C�mo puedo a�adir un archivo adjunto despu�s de haber publicado un mensaje?", "Para a�adir un archivo adjunto despu�s de haber publicado un mensaje deber� editar su mensaje y seguir los pasos anteriores. El nuevo archivo adjunto se agregar� al mensaje editado al hacer clic en <i>Enviar</i>.");
$faq[] = array("�C�mo se elimina un archivo adjunto?", "Para borrar los archivos adjuntos deber� editar el mensaje y hacer clic en <i>Eliminar adjunto</i>, junto al adjunto que quiere borrar en la zona <i>Adjuntos agregados</i>. El archivo adjunto se elimina cuando se haga clic en <i>Enviar</i>.");
$faq[] = array("�C�mo puedo actualizar el comentario de un adjunto?", "Para actualizar el comentario de un adjunto deber� editar su mensaje, edite el texto en <i>Comentario del archivo</i> y haga clic en el bot�n <i>Actualizar comentario</i>, situado junto al archivo que desea comentar. El comentario del archivo se actualizar� en el mensaje cuando haga clic en <i>Enviar</i>.");
$faq[] = array("�Por qu� no veo el adjunto en mi mensaje?", "Probablemente el archivo o la extensi�n no est�n permitido en el foro, o un moderador o administrador lo han eliminado por no cumplir las normas de uso de la web.");
$faq[] = array("�Por qu� no puedo agregar adjuntos?", "En algunos foros a�adir adjuntos puede estar limitado a ciertos grupos de usuarios. Para agregar un adjunto podr�a necesitar una autorizaci�n especial, solo un moderador o administrador puede otorgar este permiso, p�ngase en contacto con ellos.");
$faq[] = array("Tengo los permisos necesarios, �porque no puedo agregar adjuntos?", "El administrador fija un l�mite m�ximo de tama�o del archivo, extensiones y otras cosas para los archivos adjuntos en el foro. Un administrador o moderador puede haber modificado o cancelado sus permisos, para adjuntar archivos en un foro espec�fico. Deber�a obtener una explicaci�n en el mensaje de error que aparece al tratar de agregar un archivo adjunto, si no, considere la posibilidad de contactar con el administrador o moderador.");
$faq[] = array("�Por qu� no puedo borrar adjuntos?", "En algunos foros borrar adjuntos puede estar limitado a ciertos grupos de usuarios. Para borrar un adjunto podr�a necesitar una autorizaci�n especial, solo un moderador o administrador puede otorgar este permiso, p�ngase en contacto con ellos.");
$faq[] = array("�Por qu� no puedo ver/bajar adjuntos?", "En algunos foros la visualizaci�n/descarga de los adjuntos puede estar limitado a ciertos grupos de usuarios. Para ver/bajar un adjunto podr�a necesitar una autorizaci�n especial, solo un moderador o administrador puede otorgar este permiso, p�ngase en contacto con ellos.");
$faq[] = array("�Con quien contacto sobre los adjuntos ilegales o posiblemente ilegales?", "Usted debe ponerse en contacto con el administrador de este foro. Si no lo encuentra en primer lugar deber�a contactar uno de los moderadores de los foros para preguntarle a quien se debe dirigir. Si aun as� no obtiene respuesta deber�a ponerse en contacto con el propietario del dominio (hacer b�squeda whois) o, si este se est� ejecutando en un servicio gratuito (ej. yahoo, free.fr, f2s.com, etc), con el departamento que gestiona el abuso de ese servicio. Tenga en cuenta que el equipo de Icy Phoenix no tiene absolutamente ning�n control y no puede de ninguna manera ser considerado responsable de como, donde o quien usa este foro. Es absolutamente in�til contactar con el equipo de Icy Phoenix en relaci�n a cualquier acto ilegal (cesar y desistir, responsabilidades, comentarios difamatorios, etc) que no est� directamente relacionado con el sitio web Icy Phoenix.com o al software de Icy Phoenix. Si lo hace al e-mail de equipo de Icy Phoenix acerca de cualquier utilizaci�n por un tercero de este software es posible que le contestemos o que no dependiendo del caso.");

$faq[] = array("--","Descargas");
$faq[] = array("�D�nde puedo encontrar las descargas?", "Links a las descargas est�n situados en el menu de navegaci�n y en la navegaci�n del portal. Directlink: [<a href=\"downloads.php\">Downloads</a>]");
$faq[] = array("�Qu� significa <img border=\"0\" src=\"" . $images['Dl_blue'] . "\" alt=\"\" title=\"\" />?", "No es posible la descarga. El tr�fico total ajustado por el administrador para cada descarga o para la categor�a ys se ha alcanzado este mes.");
$faq[] = array("�Qu� significa <img border=\"0\" src=\"" . $images['Dl_red'] . "\" alt=\"\" title=\"\" />?", "No es posible la descarga. Puede ser:<br />- La descarga est� bloqueada por el administrador.<br />- El usuario no est� logado y la descarga solo est� permitida para usuarios registrados.<br />- El usuario no tiene suficiente tr�fico para descargar el fichero.<br />- El administrador ha fijado un n�mero m�nimo de posteos y el usuario no los tiene\"t.<br />- El l�mite de tr�fico para este fichero se ha superado.");
$faq[] = array("�Qu� significa <img border=\"0\" src=\"" . $images['Dl_grey'] . "\" alt=\"\" title=\"\" />?", "Fuente externa. La descarga comenzar� desde un servidor externo. Esto ser� manejado como <img border=\"0\" src=\"" . $images['Dl_green'] . "\" alt=\"\" title=\"\" />. El tr�fico del usuario o el total no se decrementar�n.");
$faq[] = array("�Qu� significa <img border=\"0\" src=\"" . $images['Dl_white'] . "\" alt=\"\" title=\"\" />?", "Como <img border=\"0\" src=\"" . $images['Dl_green'] . "\" alt=\"\" title=\"\" /> el tr�fico del usuario no se decrementar� . Pero solo usuarios logados pueden descargar gratuitamente. El tr�fico total se decrementar�.");
$faq[] = array("�Qu� significa <img border=\"0\" src=\"" . $images['Dl_yellow'] . "\" alt=\"\" title=\"\" />?", "Descarga es posible con restricciones. La descarga es solo posible para usuarios registrados. El usuario debe logarse. El tama�o del fichero ser� restado de su tr�fico y del tr�fico total.");
$faq[] = array("�Qu� significa <img border=\"0\" src=\"" . $images['Dl_green'] . "\" alt=\"\" title=\"\" />?", "Descarga gratuita. La descarga no ser� restringida. Este fichero puede ser descargado por invitados. No es necesario estar logado. Tu tr�fico no se decrementar�, pero si el total.");
$faq[] = array("�Por qu� no puedo descargar un fichero?", "Puede ser por varias razones. Mira bajo <img border=\"0\" src=\"" . $images['Dl_blue'] . "\" alt=\"\" title=\"\" /> y <img border=\"0\" src=\"" . $images['Dl_red'] . "\" alt=\"\" title=\"\" />.");
$faq[] = array("�C�mo y cu�ndo obtengo nuevo tr�fico para mi cuenta?", "Despu�s del primer login el usuario obtiene un timestamp. Cada primer d�a de mes, cuando el usuario entre a descargas, el tr�fico ser� refrescado. Preguta a tu administrador la cantidad que obtendr�s.");
$faq[] = array("Deseo a�n descargar un fichero m�s, pero no me queda m�s tr�fico", "En estos caso, pideselo a tu administrador. Solo �l puede decidir incrementar el tr�fico de usuario antes de que la cuenta obtenga nueva cuota de forma autom�tica el siguiente mes.");
$faq[] = array("�C�mo puedo calificar descargas?", "Despu�s de cada descarga en la categor�a o en la vista de detalle ver�s una secci�n para evaluar.<br />By pulsa en  \"Rate\" un usuario registrado puede evaluar una descarga desde 1 punto (muy mala) a 10 puntos (muy buena). Puedes evaluar una descarga una sola vez.");

$faq[] = array("--","Res�menes");
$faq[] = array("�Qu� son los res�menes?", "Son correos que se env�an peri�dicamente con el resumen de los posts hechos en el sitio. Est�n disponibles diaria o semanalmente.");
$faq[] = array("�Por qu� podr�a deseat un resumen?", "Hace la vida m�s f�cil. No tienes que visitar el sitio expl�citamente para ver que conversaciones est�n teniendo lugar. Solo con leer el resumen vemos lo que nos interesa y con un clic de rat�n accederemos a �l y comenzaremos nuestra participaci�n. Puedes eliminar la suscripci�n en cualquier momento.");
$faq[] = array("�Cada cu�nto tiempo se env�a?", "Diaria o semanalmente. Los env�os semanales son procesados el domingo.");
$faq[] = array("�Cu�ndo se env�an los res�menes?", "Tu determinas la hora a la que deseas recibir el resumen. Se a cual fuere la hora que elijas, obtendr�s siempre las �ltimas noticias de tal manera que se ajuste a tu estilo de vida.");
$faq[] = array("�Qu� per�odo de tiempo cubre el resumen?", "24 horas o  7 d�as, dependiendo de si seleccionaste resumen diario o semanal. Los mensajes m�s antiguos que esas fechas no se enviar�n. Adem�s, si lo deseas, puedes elegir no ver los mensajes desde tu �ltimo login si hiciste esa visita recientemente. Puedes incluso filtrar tus propios mensajes");
$faq[] = array("Supongamos que no deseo res�menes de cada mensaje. �Puedo ser selectivo?", "Si. Puedes seleccionar el foro o foros que te interesen. Por defecto, obtendr�s los mensajes de todos los foros a los que tengas acceso.");
$faq[] = array("�Qu� formatos de correo est�n disponibles?", "Se pueden mandar correos en HTML o texto. A menos que tu programa de correo no maneje HTML (muy raro actualmente), te sugerimos usar este formato. Sinceramente, los res�menes en formato texto parecen demasiado planos y dif�ciles de leer Esto es la naturaleza de los textos planos.");
$faq[] = array("�se env�a el mensaje completo en el resumen?", "Por defecto, se env�an los primeros 150 caracteres del mensaje, o puedes elegir no ver nada del mensaje y solo el t�tulo en su lugar. Puedes elegir la inclusi�n de los primeros 50, 100, 150, 300 o 600 caracteres o el texto completo del mensaje hasta 32.000 caracteres. M�s all� de este tama�o, ser� trucado. Recomendamos mantener la longitud del mensaje por defecto porque si no, los res�menes ser�n inmanejables. Tambi�n tenemos noticias de que grandes re�menes son rechazados por los ISP o pueden superar las cuotas de almacenamiento de los servidores. Un extracto no reduce los anchos de banda y es usualmente todo lo que se necesita. �Por qu�? Porque cada mensaje tiene un enlace que te permitir� ir al tema de inter�s. .");
$faq[] = array("�C�mo puedo empezar?", "Pulsa en el enlace a res�menes (Digests) en el bloque de enlaces de navegaci�n o aqu�: <a href=\"./digests.php\">Digests</a>.");
$faq[] = array("�Puedo cancelar la suscripci�n?", "�Por supuesto!. Solo con ir a la misma p�gina y pulsar  \"None\" for \"Type of Digest Wanted\". Entonces rellena el formulario. Tu suscripci�n finalizar� de inmediato.");
$faq[] = array("�Los rens�menes est�n libres de publicidad?", "Por supuesto. No hay ning�n molesto anuncio y nunca lo habr�.");
$faq[] = array("�Est� mi privacidad protegida?", "Si. Tu resumen se env�a a t� y a nadie m�s. A nadie m�s que a qu�en tu nos digas en tu perfil. Piensa en el res�men como una edici�n especial del un per�odico parametrizado solo para t�. Algo diferente a eso es otro tipo de resumen.");


$faq[] = array("--","Informaci�n de mensajes no leidos almacenados en base de datos (UPI2DB)");
$faq[] = array("�Cu�l es la diferencia entre el sistema basado en  cookies usado por defecto y el sistema UP2DB?", "El sistema basado en cookies es el sistema por defecto de los foros phpBB2. Cuando un mensaje es le�do, la informaci�n al respecto es almacenada en una cookie en tu ordenador, la cual incluye la informaci�n de que has le�do el mensaje. La mayor desventaja de este sistema es que se pierden las informaciones sobre hilos marcados como le�dos o no le�dos al cerrar el explorador. El sistema UPI2DB no almacena informaci�n como cookies en tu ordenador, lo hace de forma separada en la base de datos.");
$faq[] = array("�C�ales son los pros y contras del sistema de cookies?", "<strong>Ventaja:</strong> Con grandes foros el sistema de cookies tiene una mayor velocidad de carga de p�ginas que el sistema UPI2DB, porque el sistema debe tambi�n cargar la informaci�n sobre los mensajes le�dos desde la base de datos. Otra ventaja es que los datos se almacenar�n varios meses (si no los borras del ordenador) y no estar�n sujetos a borrados de archivos antiguos en la base de datos del sistema. Esto es interesante para usuarios que solo leen el foro cada 2 meses, por ejemplo. <br /><strong>Desventaja:</strong> La mayor desventaja es que todos los mensajes son marcados como le�dos al cerrar el explotador. Otra desventaja es que los mensajes editados no se marcan de nuevo como no le�dos y por ello no fijar�s atenci�n en ellos.");
$faq[] = array("�Cu�les son los pros y contras del sistema UPI2DB?", "<strong>Ventaja:</strong> Mensajes no le�dos quedan como no le�dos si se cierra el explorador. Si se cierra el explorador, no tendr�s que buscar los elementos que no hayas le�do porque el sistema te los se�ala. Los posts se pueden tambi�n marcar como le�dos durante un per�do de " . $unread_days . " con el sistema UPI2DB. Los foros que no te interesen pueden ser marcador como \"permanentemente le�dos\", hasta que cambies esa opci�n. Contribuciones editadas se marcan como no le�das con la nota \"Editado\" y adem�s tienen otro color diferente de los mensajes normales no le�dos. Una nueva funci�n de b�squeda permite buscar solo entre los mensajes no le�dos o editados. Cuando el administrador activa la visualizaci�n de contribuciones editadas en la parte superior del los posts, ,esas contribuciones editadas se marcar�n en la primera l�nea del mensaje.<br /><strong>Desventajas:</strong> Para foros muy grandes con muchos mensajes y usuarios, puede tardar m�s en cargar la p�gina. La informaci�n de si una contribuci�n ha sido le�da est� en la base de datos solo durante un determinado tiempo tras el cua� es marcada como le�da. El per�odo est�ndar es de 30 d�as, pero puede se modificado por el administrador.");
$faq[] = array("No puedo ver ning�n par�metro en mi perfil donde seleccionar el uso de cookies o el sistema UPI2DB", "Si no ves las opciones para el sistema UPI2DB, el administrador ha activado o desactivado permanentemente el sistema. En ese caso, no tienes posibilidad de cambiar la opci�n.");
$faq[] = array("�Qu� condiciones puede fijar el administrador?", "Por defecto, el sistema UPI2DB permite al administrador la opci�n de seleccionar cuantos posts debe haber posteado un usuario en el sistema para poder usar esta opci�n o desde hace cuanto tiempo se debe haber registrado para poder usarla.");
$faq[] = array("Siempre que intento, no puedo marcar notas o anuncios como le�dos", "Notas y anuncios deben ser le�dos, no pueden ser marcados como le�dos y por ello no se pueden usar las funciones de: \"Marcar todos los foros/contribuciones como le�dos\" o \"Mostrar contribuciones no le�das\"!");
$faq[] = array("Quiero marcar todos los mensajes de m�s de " . $unread_days . " d�as como \"permanentemente le�dos\"!", "Esto es como ocurrir� y no puede ser cambiado. Tenemos que mantener el compromiso de hacer que el sistema no ir� demasiado lento.");
$faq[] = array("�Como se puede marcar un foro como \"permanentemente le�do\"?", "Solamente pulsa en el dibujo delante del nombre del foro. El dibujo debe cambiar.");
$faq[] = array("�C�mo puedo marcar un tema como \"permanentemente le�do\"?", "Pulsa en el dibujo delante del nombre del hilo. El dibujo deber�a cambiar u el tema se mover� al �ltimo lugar en la lista. Alternativamente, puedes pulsar \"Tema marcado permanentemente como le�do\" en la parte de abajo de la p�gina.");
$faq[] = array("No puedo marcar notas y anuncios como  \"permanentemente le�dos\"!", "Notas y anuncios no pueden ser marcados como \"permanentemente le�dos\", porque podr�as perder informaciones valiosas. ");
$faq[] = array("He marcado un foro como \"permanentemente le�do\", pero, �aparecen nuevos mensajes!", "Cuando alguien contribuye con una nota o un anuncio, el foro marcado como \"permanentemente le�do\" ser� ajustado de nuevo a su valor por defecto. Esto es importante para evitar que se pierdan importantes informaciones.");
$faq[] = array("�C�mo puedo marcar una informaci�n para encontrarla f�cilmente m�s tarde?", "En cada contribuci�n puedes encontrar un bot�n en el t�tulo que se puede usar para marcarla. Contribuciones m�s antiguas que " . $unread_days . " d�as o contrubuciones que fueron escritas antes de tu fecha de registro en este foro no ser�n marcadas.");
$faq[] = array("�C�mo puedo fijar de nuevo un hilo le�do como no le�do?", "En cada mensaje hay un enlace al t�tulo del tema. Con este enlace se pueden marcar todos los posts enviados o editados despu�s de �l como nuevos o editados.");
$faq[] = array("�Por qu� no puedo marcar algunos hilos?", "Hilos marcados como \"permanentemente le�dos\" en un foro o lo que fue escrito antes de tu fecha de registro no pueden ser marcados. Contribuciones m�s antiguas de " . $unread_days . " d�as, tampoco pueden ser marcadas..");
$faq[] = array("�Los hilos marcados permanecen as� para siempre?", "No, todas las marcas que pongas ser�n borradas autom�ticamente despu�s de " . $del_mark . " d�as desde que se puso la marca.");
$faq[] = array("�Qu� significa MAR?", "Es la abreviatura de \"Marcar todo le�do\"");


$faq[] = array("--","Temas relacionados con phpBB");
$faq[] = array("�Qui�n escribi� este tabl�n de anuncios?", "Este software (en su forma no modificada) es producido, liberado y con copyright de <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Se libera bajo Licencia P�blica General GNU y puede ser libremente distribuido; ver enlace para m�s detalles.");
$faq[] = array("�Por qu� no est� disponible la funcionalidad X?", "Este software fue escrito y licenciado a trav�s del grupo phpBB. Si tu crees que esta funcionalidad necesita ser incluida, entonces visita la web phpbb.com y mira lo que tiene que decir el grupo phpBB Group. Por favor, no escribir peticiones de funcionalidades en phpbb.com. El grupo usa sourceforge para manejar las nuevas funcionalidades. Por favor, lee cuidadosamente los foros y observa que mira que puede ya haberse tomado una decisi�n sobre la funcionalidad y entonces sigue el procedimiento all� indicado.");
$faq[] = array("�Con qui�n debo contactar por uso abusivo y/o asuntos legales relativos a esta web?", "Debes contactar con el administrador. Si no puedes encontrar qui�n es, deber�as primero contactar con un moderador y preguntarle con qui�n debes contactar. Si no hay respuesta, debes contactar con el due�o del dominio o si est� ejecut�ndose en uno gratuito (como yahoo, free.fr, f2s.com, etc.), con el departamento de gesti�n de uso abusivo o ilegal de ese servicio. Por favor, nota que el grupo phpBB Group no tiene control de ning�n modo de c�mo, d�nde y por qui�n es usado. Es absolutamente in�til contactar con el grupo phpBB en relaci�n con asuntos legales (cesar y desistir, responsable, comentarios difamatorios, etc) por que es una cuesti�n que no est� directamente relacionada con el sitio web phpbb.com o con el software de phpBB. Si a pesar de todo lo comunica por correo al grupo phpBB no debe esperar una respuesta.");


$faq[] = array("--", "Sobre Icy Phoenix");
$faq[] = array("�Qu� es Icy Phoenix?", "Icy Phoenix es un sistema de gesti�n de contenidos que permite al usuario crear una web din�mica con muchas caracter�sticas embebidas: foro, portal, p�ginas y bloques parametrizables, descargas, galer�a de fotos y mucho m�s.");
$faq[] = array("�Qui�n escribi� el software?", "Este software est� basado en phpBB el cual est� liberado bajo una Licencia General P�blica (GNU), as�, Icy Phoenix debe estar liberado bajo el mismo tipo de licencia y esto significa que puede ser modificado y distribuido libremente. Aparte de los ficheros core phpBB, la mayor�a de los ficheros han sido directamente codificados o modificados por Mighty Gorgon y el <a href=\"http://www.icyphoenix.com/\" target=\"_blank\">equipo de Icy Phoenix</a>. Una lista no exhaustiva de colaboradores a este proyecto se puede encontrar en: <a href=\"http://www.icyphoenix.com/credits.php\" target=\"_blank\">Icy Phoenix credits</a>.");



?>