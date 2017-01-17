<?php

/* EcoBundle:Default:DeleteReglementProf.html.twig */
class __TwigTemplate_2e41e5bd2d4b4b68fb3c004b5d73483c204bae12ba3f4d74ad457a7b5fbf2c59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(5);

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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<h1>Gestion Reglement Etudiant</h1>
<form action=\"\" method=\"post\" >
    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("AddRegProf");
        echo "\">ADD REGLEMENT</a></li>
    <table>
        
       
        
         <tr>
        
            <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "dateReg", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "dateReg", array()), 'errors');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "dateReg", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
         <tr>
        
            <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Matricule", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Matricule", array()), 'errors');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Matricule", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
         <tr>
        
            <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Annee", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Annee", array()), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Annee", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
         <tr>
        
            <td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "mois", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "mois", array()), 'errors');
        echo "
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "mois", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
         <tr>
        
            <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "trimestre", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "trimestre", array()), 'errors');
        echo "
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "trimestre", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
        
        
        
        
        
          
        
       <tr><td><input type=\"submit\" /><td></tr>
";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
     
   </table>

    </form>
<h1> Liste Reglement </h1>
 <table border=\"1\">
     <tr>
         <th>Id </th>
         
        
     </tr>
         ";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 86
            echo "<tr>
<td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>

<td><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_regE", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-sm btn-danger \"> Supprimer</a></td>
<td><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_regE", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-sm btn-primary \">Modifie</a></td>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "<tr><td>Aucun Reglement n'a trouvée</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo " </table>
";
    }

    public function getTemplateName()
    {
        return "EcoBundle:Default:DeleteReglementProf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 96,  197 => 94,  188 => 90,  184 => 89,  179 => 87,  176 => 86,  171 => 85,  156 => 73,  140 => 60,  136 => 59,  131 => 57,  121 => 50,  117 => 49,  112 => 47,  102 => 40,  98 => 39,  93 => 37,  83 => 30,  79 => 29,  74 => 27,  64 => 20,  60 => 19,  55 => 17,  45 => 10,  39 => 7,  36 => 6,  11 => 5,);
    }
}
