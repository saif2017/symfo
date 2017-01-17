<?php

/* EcoBundle:Default:EditProf.html.twig */
class __TwigTemplate_4da22ecbd1135f924997b95da9d2606ebccc9fa66cf236977ce6c50c454bdc0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<h1>Gestion Professeurs</h1>
<form action=\"\" method=\"post\" >
    
    <table>
        
       
        
         <tr>
        
            <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle_prp", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle_prp", array()), 'errors');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle_prp", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
        
        
        
        
         
          
        
         <tr>
        
            <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "niveau", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "niveau", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "niveau", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
        <tr>
        
            <td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'errors');
        echo "
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'widget');
        echo "
            </td>
        
        
        </tr> 
        
        
        
        
          
        
       <tr><td><input type=\"submit\" /><td></tr>
";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
     
   </table>

    </form>
<h1> LISTE PROFESSEUR </h1>
 <table border=\"1\">
     <tr>
         <th>Id Professeur</th>
         
        
     </tr>
         ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 68
            echo "<tr>
<td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>

<td><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_prof", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-sm btn-danger \"> Supprimer</a></td>
<td><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_prof", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-sm btn-primary \">Modifie</a></td>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 76
            echo "<tr><td>Aucun professeur n'a trouvée</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo " </table>

";
    }

    public function getTemplateName()
    {
        return "EcoBundle:Default:EditProf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 78,  162 => 76,  153 => 72,  149 => 71,  144 => 69,  141 => 68,  136 => 67,  121 => 55,  106 => 43,  102 => 42,  97 => 40,  87 => 33,  83 => 32,  78 => 30,  61 => 16,  57 => 15,  52 => 13,  39 => 3,  36 => 2,  11 => 1,);
    }
}
