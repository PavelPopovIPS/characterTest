<?php    
    /**     
     * @param string $templateName     
     * @param array $vars     
     * @return string     
     */    

    function getView($template, $vars)    
    {       
        $smarty = new Smarty();
        $smarty -> setTemplateDir(TEMPLATE_DIR);
        $smarty -> setCompileDir(TEMPLATE_C_DIR);
        $smarty -> assign($vars);
        return $smarty -> fetch($template);
    }

    function buildPage($template, $vars = array())
    {
        $header = getView('header.html', $vars);
        $body = getView('body.html', $vars);
        $footer = getView('footer.html', $vars);
        return $header . $body . $footer;
    }   
