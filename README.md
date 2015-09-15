# CI3hmvc
Implementación de Codeigniter 3 integrada con TWIG y HMVC
Se implementó HMVC desde:
https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
Se implementó TWIG desde:
https://github.com/kenjis/codeigniter-ss-twig
y para la compatibilidad de TWIG con HMVC nos basamos en 
http://edmundask.github.io/codeigniter-twiggy/

Para implementación:

Llamada al controlador:

  <code>$controlador = modules::run("modulo/controlador");</code>

Llamada a modelo:

<code>
 $this->load->model('documentos/tag','alias'); 
</code>

<code>
 $this->alias->funcion();
</code>

Llamada a instancia de modulo:

<code>
 $modulo = modules::load("modulo");
</code>
