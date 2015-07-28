<?php

/* output.tpl */
class __TwigTemplate_88bd0bfb10683896111ee043ca3fa9fc1cf6ee49a104a5bb313feff0c91a578f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta name=\"charset\" content=\"UTF-8\">
    <title>ロバのみみblog 表示画面</title>
    <style>
    body{width: 600px; margin: 0 auto;}
    h1 {font-size: 50px;color: rgb(142, 189, 78);}
    .user > h2{float:left;margin:0px;padding:0px;margin-right:50px;}
    .user > textarea{resize: none;   }
    </style>
  </head>
  <body>
    <h1>ロバのみみblog 表示画面</h1>
    <div class=\"user\">
    <h2>投稿者</h2>
    <textarea name=\"name\" cols=\"20\" rows=\"1\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</textarea>
    </div>
    <h2>本文</h2>
      <textarea name=\"text\" rows=\"15\" cols=\"70\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["article"]) ? $context["article"] : null), "html", null, true);
        echo "</textarea>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "output.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 20,  37 => 17,  19 => 1,);
    }
}
