<?php

/* menu.html.twig */
class __TwigTemplate_9d9004b0c3999d3bbee11d3cc29f832b04314597ce2d3d4641bb268e72e89774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" 
              data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">ACCUEIL</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("AddClasse");
        echo "\"> CLASSE<span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("addEleve");
        echo "\">ELEVE</a></li>
        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("AddMat");
        echo "\">MATIERE</a></li>
        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("addProf");
        echo "\">PROFESSEUR</a></li>
        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("AddInscri");
        echo "\">INSCRIPTION</a></li>
        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("AddRegEtud");
        echo "\">REGLEMENT DES ETUDIANTS</a></li>
        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("AddRegPro");
        echo "\">REGLEMENT DES PROFESSEURS</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
             aria-haspopup=\"true\" aria-expanded=\"false\">clients<span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("AddClasse");
        echo "\">CLASSE</a></li>
              <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("addProf");
        echo "\">PROFESSEUR</a></li>
            
            
          </ul>
        </li>
      </ul>
            
      <form class=\"navbar-form navbar-left\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
      </form>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\">Link</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Action</a></li>
            <li><a href=\"#\">Another action</a></li>
            <li><a href=\"#\">Something else here</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\">Separated link</a></li>
          </ul>
        </li>
      </ul>
            <MARQUEE BEHAVIOR=\"alternate\" BGCOLOR=\"#40A44A\"  HEIGHT=120><font color=\"#FFFFFF\"><h1>BIENVENUE DANS L'UNIVERSITE LIBRE DE TUNIS</h1></font> </MARQUEE>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  73 => 29,  65 => 24,  61 => 23,  57 => 22,  53 => 21,  49 => 20,  45 => 19,  41 => 18,  33 => 13,  19 => 1,);
    }
}
