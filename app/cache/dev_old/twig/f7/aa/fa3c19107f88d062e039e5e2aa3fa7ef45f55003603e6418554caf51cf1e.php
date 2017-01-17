<?php

/* EcoBundle:Default:index.html.twig */
class __TwigTemplate_f7aafa3c19107f88d062e039e5e2aa3fa7ef45f55003603e6418554caf51cf1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "


 <h1> NOS ELEVES  </h1>
 <table border=\"1\">
     <tr>
         <th>Id Eleve</th>
         
        
     </tr>
         ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 15
            echo "<tr>
<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>

<td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_etud", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger \"> Supprimer</a></td>
<td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_etud", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary \">Modifie</a></td>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "<tr><td>Aucun eleve n'a trouvée</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo " </table>
 ";
    }

    public function getTemplateName()
    {
        return "EcoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  78 => 23,  69 => 19,  65 => 18,  60 => 16,  57 => 15,  52 => 14,  39 => 4,  36 => 3,  11 => 2,);
    }
}
