<?php get_header(); ?>
<?php
  $mensajes = array('Tengo otros mensajes de error mucho mas graciosos, informativos e interesantes que &eacute;ste.',
        'Uno de nuestros monos entrenados para programar en GNU Emacs se escap&oacute; y se llev&oacute; algunas p&aacute;ginas con &eacute;l...',
        'No entres en p&aacute;nico, &#191;trajiste tu toalla?',
        'No te sientas mal, estas cosas pasan. <br/>Debe ser culpa de Flash...',
        'Presione la tecla "Any" para continuar.',
        'Tengo un webmaster perezoso que todav&iacute;a no me ha terminado, y suele dejar enlaces rotos por ah&iacute;.',
        'Presione la combinaci&oacute;n de teclas "Alt +F4" para realizar un test de inteligencia.',
        '&#191;Alguien ha visto mi engrampadora?',
        'Es la hora de manteca de man&iacute; con jalea',
        'All Your Base Are Belong To Us',
        'La p&aacute;gina ha sido atacada por Velociraptors... &#161;malditos gorriones superdesarrollados!',
        'Encontraste el mensaje de error perdido. rep&oacute;rtalo y reclama tu premio de dos &aacute;tomos de hidr&oacute;geno.',
        'Este mensaje fue escrito a las 03:05 a.m. un s&aacute;bado a la noche.',
        'Valoramos mucho su tiempo, por favor aguarde en l&iacute;nea mientras uno de nuestros operadores se desocupa.',
        'Dividiendo entre cero, por favor aguarde en l&iacute;nea.',
        'Ayuda, me tienen atrapado en un s&oacute;tano escribiendo mensajes para este sitio.',
        'Es culpa de PHP, estas cosas con Ruby no pasan.',
        'El servidor Tomcat donde tenemos desplegada la aplicaci&oacute;n est&aacute; persiguiendo un puntero l&aacute;ser. Sospechamos que se cansar&aacute; en breve y volver&aacute; a sus tareas diarias como servidor')
?>

<div class="twelve columns">
  <div class="post" id="post-<?php the_ID(); ?>">
    <div class="three columns">
      <img src="<?php bloginfo('template_url');?>/images/404.png" alt="404"/>
    </div>
    <div class="eight columns">
      <h2>No se encontr&oacute; lo que estabas buscando</h2>

      <p>El enlace que seguiste no funciona. La consola de errores dice:</p>
      <div class="codigo">
        <?php $in = rand(0,18);
              echo $mensajes[$in];
            ?>
      </div>
      <p>Es poco probable que haya borrado la p&aacute;gina, por lo que debe andar cerca. Puedo busc&aacute;rtela, para eso por favor cont&aacute;ctame:</p>
      <p>Ingresa al <strong><a href="http://picandocodigo.net/contacto/">formulario de contacto</a></strong> para escribirme.</p>
      <p>O podr&iacute;as avisarme por <a href="http://twitter.com/picandocodigo">Twitter</a> o <a href="http://identi.ca/picandocodigo">Identi.ca</a> si tienes una cuenta ah&iacute;.</p>
    </div>
  </div>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
