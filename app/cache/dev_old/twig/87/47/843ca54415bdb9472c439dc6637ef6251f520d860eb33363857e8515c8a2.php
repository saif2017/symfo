<?php

/* EcoBundle:Default:DeleteInscri.html.twig */
class __TwigTemplate_8747843ca54415bdb9472c439dc6637ef6251f520d860eb33363857e8515c8a2 extends Twig_Template
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
        echo "<h1>Gestion Inscription</h1>
<form action=\"\" method=\"post\" >
    
    <table>
        <tr>
        
            <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Date_Inscri", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Date_Inscri", array()), 'errors');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Date_Inscri", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
      
        
        <tr>
        
            <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Id_Etudiant", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Id_Etudiant", array()), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Id_Etudiant", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Id_Classe", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Id_Classe", array()), 'errors');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Id_Classe", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Observation", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Observation", array()), 'errors');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Observation", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        
        <tr>
        
            <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Reglement", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Reglement", array()), 'errors');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Reglement", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        
        <tr>
        
            <td>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Montant", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Montant", array()), 'errors');
        echo "
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Montant", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "NumPiece", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "NumPiece", array()), 'errors');
        echo "
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "NumPiece", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Echance", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Echance", array()), 'errors');
        echo "
                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Echance", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
        
        
         
        
        
        
        
          
        
       <tr><td><input type=\"submit\" /><td></tr>
";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
     
   </table>

    </form>
<h1> Liste Inscription </h1>
 <table border=\"1\">
     <tr>
         <th>Id Inscriptiont</th>
         
        
     </tr>
         ";
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 118
            echo "<tr>
<td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>


<td><a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_insc", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"> Supprimer</a></td>
<td><a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_insc", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\">Modifie</a></td>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 127
            echo "<tr><td>Aucune inscription n'a trouvée</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo " </table>
";
    }

    public function getTemplateName()
    {
        return "EcoBundle:Default:DeleteInscri.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 129,  253 => 127,  244 => 123,  240 => 122,  234 => 119,  231 => 118,  226 => 117,  211 => 105,  193 => 90,  189 => 89,  184 => 87,  174 => 80,  170 => 79,  165 => 77,  155 => 70,  151 => 69,  146 => 67,  135 => 59,  131 => 58,  126 => 56,  115 => 48,  111 => 47,  106 => 45,  96 => 38,  92 => 37,  87 => 35,  77 => 28,  73 => 27,  68 => 25,  56 => 16,  52 => 15,  47 => 13,  39 => 7,  36 => 6,  11 => 5,);
    }
}
