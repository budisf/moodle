<?php

class __Mustache_c6ad97c4a4f3de1d90b0a00763146468 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $this->resolveValue($context->findDot('output.doctype'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '<html ';
        $value = $this->resolveValue($context->findDot('output.htmlattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '    <title>';
        $value = $this->resolveValue($context->findDot('output.page_title'), $context);
        $buffer .= $value;
        $buffer .= '</title>
';
        $buffer .= $indent . '
';
        // 'themeauthor' section
        $value = $context->find('themeauthor');
        $buffer .= $this->section46d547124e7f247101a8cd23a30d0dd8($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        // 'seometadesc' section
        $value = $context->find('seometadesc');
        $buffer .= $this->section911f0122e1af5e081fb765d350d5f608($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <meta name="theme-color" content="';
        $value = $this->resolveValue($context->find('seothemecolor'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        // 'seothemecolor' inverted section
        $value = $context->find('seothemecolor');
        if (empty($value)) {
            
            $buffer .= '#00665F';
        }
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <link rel="shortcut icon" href="';
        $value = $this->resolveValue($context->findDot('output.favicon'), $context);
        $buffer .= $value;
        $buffer .= '" />
';
        $buffer .= $indent . '    ';
        // 'seoappletouchicon' section
        $value = $context->find('seoappletouchicon');
        $buffer .= $this->section51d2aab02794407c1086dba01236c39c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_head_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width, initial-scale=1.0">
';
        $buffer .= $indent . '
';
        // 'googlefonturl' section
        $value = $context->find('googlefonturl');
        $buffer .= $this->section927dda6b50ae9364ea2d40f00ce0d04d($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'isfrontpage' section
        $value = $context->find('isfrontpage');
        $buffer .= $this->section2013420b5f7d971afad0178fd35bb858($context, $indent, $value);
        $buffer .= $indent . '</head>';

        return $buffer;
    }

    private function section46d547124e7f247101a8cd23a30d0dd8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <!--

      Theme: Space Moodle Theme
      Author: Marcin Czaja - Rosea Themes (rosea.io)
      Version: 2.0

      Copyright © 2022

    -->
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <!--
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      Theme: Space Moodle Theme
';
                $buffer .= $indent . '      Author: Marcin Czaja - Rosea Themes (rosea.io)
';
                $buffer .= $indent . '      Version: 2.0
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      Copyright © 2022
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section911f0122e1af5e081fb765d350d5f608(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<meta name="description" content="{{seometadesc}}">';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<meta name="description" content="';
                $value = $this->resolveValue($context->find('seometadesc'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51d2aab02794407c1086dba01236c39c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<link rel="apple-touch-icon" href="{{seoappletouchicon}}">';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<link rel="apple-touch-icon" href="';
                $value = $this->resolveValue($context->find('seoappletouchicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section927dda6b50ae9364ea2d40f00ce0d04d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{{googlefonturl}}}" rel="stylesheet">
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <link rel="preconnect" href="https://fonts.googleapis.com">
';
                $buffer .= $indent . '    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
';
                $buffer .= $indent . '    <link href="';
                $value = $this->resolveValue($context->find('googlefonturl'), $context);
                $buffer .= $value;
                $buffer .= '" rel="stylesheet">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2013420b5f7d971afad0178fd35bb858(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <!-- Swiper JS -->
    <script src="{{siteurl}}/theme/space/addons/swiper/swiper-bundle.min.js"></script>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <!-- Swiper JS -->
';
                $buffer .= $indent . '    <script src="';
                $value = $this->resolveValue($context->find('siteurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/theme/space/addons/swiper/swiper-bundle.min.js"></script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
