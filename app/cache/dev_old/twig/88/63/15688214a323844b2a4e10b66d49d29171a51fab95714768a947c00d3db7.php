<?php

/* EcoBundle:Default:DeleteProf.html.twig */
class __TwigTemplate_886315688214a323844b2a4e10b66d49d29171a51fab95714768a947c00d3db7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(6);

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

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Gestion Professeurs</h1>
<form action=\"\" method=\"post\" >
    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("addProf");
        echo "\">ADD PROFESSEUR</a></li>
    
    <table>
        
       
        
         <tr>
        
            <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle_prp", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle_prp", array()), 'errors');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle_prp", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
        
        
        
        
         
         <tr>
        
            <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'errors');
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
        
         <tr>
        
            <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "niveau", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "niveau", array()), 'errors');
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "niveau", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
        
        
        
        
          
        
       <tr><td><input type=\"submit\" /><td></tr>
";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
     
   </table>

    </form>
<h1> Liste Professeurs </h1>
 <table border=\"1\">
     <tr>
         <th>Id Professeur</th>
         
        
     </tr>
         ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 72
            echo "<tr>
<td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>

<td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_prof", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"> Supprimer</a></td>
<td><a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_prof", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\">Modifie</a></td>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            echo "<tr><td>Aucun Professeur n'a trouvée</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo " </table>
 ";
    }

    public function getTemplateName()
    {
        return "EcoBundle:Default:DeleteProf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 82,  163 => 80,  154 => 76,  150 => 75,  145 => 73,  142 => 72,  137 => 71,  122 => 59,  107 => 47,  103 => 46,  98 => 44,  87 => 36,  83 => 35,  78 => 33,  63 => 21,  59 => 20,  54 => 18,  43 => 10,  39 => 8,  36 => 7,  11 => 6,);
    }
}
