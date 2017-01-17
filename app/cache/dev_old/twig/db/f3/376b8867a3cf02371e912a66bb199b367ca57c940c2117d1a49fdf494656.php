<?php

/* EcoBundle:Default:DeleteClasse.html.twig */
class __TwigTemplate_dbf3376b8867a3cf02371e912a66bb199b367ca57c940c2117d1a49fdf494656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(4);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Gestion Classes</h1>
<form action=\"\" method=\"post\" >
    <form action=\"\" method=\"post\" >
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("AddClasse");
        echo "\">ADD CLASSE</a></li>
    <table>
        
        <tr>
        
            <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Libelle_classe", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Libelle_classe", array()), 'errors');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Libelle_classe", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        
        
         
        
          
        
       
        
        
        
        
        
          
        
       <tr><td><input type=\"submit\" /><td></tr>
";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
     
   </table>

    </form>
<h1> liste Classe </h1>
 <table border=\"1\">
     <tr>
         <th>Id Classe</th>
         
        
     </tr>
         ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 50
            echo "<tr>
<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>

<td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_classe", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
<td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Edit_classe", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "<tr><td>Aucune classe n'a trouvée</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo " </table>
 ";
    }

    public function getTemplateName()
    {
        return "EcoBundle:Default:DeleteClasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 60,  125 => 58,  116 => 54,  112 => 53,  107 => 51,  104 => 50,  99 => 49,  84 => 37,  61 => 17,  57 => 16,  52 => 14,  44 => 9,  39 => 6,  36 => 5,  11 => 4,);
    }
}
