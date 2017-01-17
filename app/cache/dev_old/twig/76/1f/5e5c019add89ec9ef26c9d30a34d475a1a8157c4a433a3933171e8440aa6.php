<?php

/* EcoBundle:Default:addClasse.html.twig */
class __TwigTemplate_761f5e5c019add89ec9ef26c9d30a34d475a1a8157c4a433a3933171e8440aa6 extends Twig_Template
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
        echo "<h1>Gestion classe</h1>
<form action=\"\" method=\"post\" >
    
    <table>
        
       
        
         <tr>
        
            <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Libelle_classe", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Libelle_classe", array()), 'errors');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Libelle_classe", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
        
        
        
        
          
        
       <tr><td><input type=\"submit\" /><td></tr>
";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
     
   </table>

    </form>
<h1> Liste Classe </h1>
 <table border=\"1\">
     <tr>
         <th>Id  Classe</th>
         
        
     </tr>
         ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 43
            echo "<tr>
<td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>

<td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_classe", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"> Supprimer</a></td>
<td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Edit_classe", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\">Modifie</a></td>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "<tr><td>Aucune classe n'a trouvée</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo " </table>
";
    }

    public function getTemplateName()
    {
        return "EcoBundle:Default:addClasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 53,  115 => 51,  106 => 47,  102 => 46,  97 => 44,  94 => 43,  89 => 42,  74 => 30,  59 => 18,  55 => 17,  50 => 15,  39 => 6,  36 => 5,  11 => 4,);
    }
}
