<?php

/* EcoBundle:Default:AddClasse.html.twig */
class __TwigTemplate_677e6609ca3761c5e9103ceaae06bdb2e1e2157875d2a2e259e8f2825e1d8798 extends Twig_Template
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
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<body>
<h1>Gestion Classes</h1>
<form action=\"\" method=\"post\" >
    
    <table>
        
       
        
         <tr>
        
            <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Libelle_classe", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Libelle_classe", array()), 'errors');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Libelle_classe", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
        
        
        
        
          
        
       <tr><td><input type=\"submit\" /><td></tr>
";
        // line 32
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
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 45
            echo "<tr>
<td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>

<td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_classe", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-sm btn-danger \"> Supprimer</a></td>
<td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Edit_classe", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary \">Modifie</a></td>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "<tr><td>Aucune classe n'a trouvée</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo " </table>
</body>
";
    }

    public function getTemplateName()
    {
        return "EcoBundle:Default:AddClasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 55,  118 => 53,  109 => 49,  105 => 48,  100 => 46,  97 => 45,  92 => 44,  77 => 32,  62 => 20,  58 => 19,  53 => 17,  39 => 6,  36 => 5,  11 => 4,);
    }
}
