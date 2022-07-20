<?php

class __Mustache_d8cb0f7c40767e880848fb6ce5156083 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'courseindex' section
        $value = $context->find('courseindex');
        $buffer .= $this->section3a7411ee240b20e0c50165680cc061c0($context, $indent, $value);

        return $buffer;
    }

    private function sectionAfaaa3dab86fd46a075d917e3ce891f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opendrawerindex, core';
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
                
                $buffer .= 'opendrawerindex, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14c724f5a6859d4cc56d9befdffaeac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show';
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
                
                $buffer .= 'show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8c059d8e564034fcd5a4fcfed7ed8eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closecourseindex, core';
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
                
                $buffer .= 'closecourseindex, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a7411ee240b20e0c50165680cc061c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="drawer-toggler drawer-right-toggle open-nav d-print-none">
            <button
                class="btn-drawer btn-drawer--right"
                data-toggler="drawers"
                data-action="toggle"
                data-target="theme_space-drawers-courseindex"
                data-toggle="tooltip"
                data-placement="right"
                title="{{#str}}opendrawerindex, core{{/str}}"
            >
                <span class="sr-only">{{#str}}opendrawerindex, core{{/str}}</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 7H7V9H9V7Z" fill="currentColor" /><path d="M7 13V11H9V13H7Z" fill="currentColor" /><path d="M7 15V17H9V15H7Z" fill="currentColor" /><path d="M11 15V17H17V15H11Z" fill="currentColor" /><path d="M17 13V11H11V13H17Z" fill="currentColor" /><path d="M17 7V9H11V7H17Z" fill="currentColor" /></svg>
            </button>
        </div>
        
        {{< theme_space/drawer }}
            {{$id}}theme_space-drawers-courseindex{{/id}}
            {{$drawerclasses}}drawer drawer-right drawer-course-right drawer-course-index {{#courseindexopen}}show{{/courseindexopen}}{{/drawerclasses}}
            {{$drawercontent}}
                {{{courseindex}}}
            {{/drawercontent}}
            {{$drawerpreferencename}}drawer-open-index{{/drawerpreferencename}}
            {{$drawerstate}}show-drawer-right{{/drawerstate}}
            {{$tooltipplacement}}right{{/tooltipplacement}}
            {{$closebuttontext}}{{#str}}closecourseindex, core{{/str}}{{/closebuttontext}}
        {{/ theme_space/drawer}}
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
                
                $buffer .= $indent . '        <div class="drawer-toggler drawer-right-toggle open-nav d-print-none">
';
                $buffer .= $indent . '            <button
';
                $buffer .= $indent . '                class="btn-drawer btn-drawer--right"
';
                $buffer .= $indent . '                data-toggler="drawers"
';
                $buffer .= $indent . '                data-action="toggle"
';
                $buffer .= $indent . '                data-target="theme_space-drawers-courseindex"
';
                $buffer .= $indent . '                data-toggle="tooltip"
';
                $buffer .= $indent . '                data-placement="right"
';
                $buffer .= $indent . '                title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAfaaa3dab86fd46a075d917e3ce891f0($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '                <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAfaaa3dab86fd46a075d917e3ce891f0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 7H7V9H9V7Z" fill="currentColor" /><path d="M7 13V11H9V13H7Z" fill="currentColor" /><path d="M7 15V17H9V15H7Z" fill="currentColor" /><path d="M11 15V17H17V15H11Z" fill="currentColor" /><path d="M17 13V11H11V13H17Z" fill="currentColor" /><path d="M17 7V9H11V7H17Z" fill="currentColor" /></svg>
';
                $buffer .= $indent . '            </button>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '        ';
                if ($parent = $this->mustache->loadPartial('theme_space/drawer')) {
                    $context->pushBlockContext(array(
                        'id' => array($this, 'blockD13f60d7c889be2537d5d5b05ee2715e'),
                        'drawerclasses' => array($this, 'block8a6d58a74e39e417f0c9e981b2ae5ba2'),
                        'drawercontent' => array($this, 'block17ce5a33eda98e3f82cfe68c1d9b3c7e'),
                        'drawerpreferencename' => array($this, 'block24fc4cc7410bc884a3b9fba5f26dc7b9'),
                        'drawerstate' => array($this, 'block0ea572ae0e89f9c5cc1dc5d7238a50d5'),
                        'tooltipplacement' => array($this, 'block2a81b037a416792e91b78e41049f49f9'),
                        'closebuttontext' => array($this, 'blockBf74c876b2af3ed54ba5adde4e2bc10c'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockD13f60d7c889be2537d5d5b05ee2715e($context)
    {
        $indent = $buffer = '';
        $buffer .= 'theme_space-drawers-courseindex';
    
        return $buffer;
    }

    public function block8a6d58a74e39e417f0c9e981b2ae5ba2($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-right drawer-course-right drawer-course-index ';
        // 'courseindexopen' section
        $value = $context->find('courseindexopen');
        $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
    
        return $buffer;
    }

    public function block17ce5a33eda98e3f82cfe68c1d9b3c7e($context)
    {
        $indent = $buffer = '';
        $buffer .= '                ';
        $value = $this->resolveValue($context->find('courseindex'), $context);
        $buffer .= $value;
        $buffer .= '
';
    
        return $buffer;
    }

    public function block24fc4cc7410bc884a3b9fba5f26dc7b9($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'drawer-open-index';
    
        return $buffer;
    }

    public function block0ea572ae0e89f9c5cc1dc5d7238a50d5($context)
    {
        $indent = $buffer = '';
        $buffer .= 'show-drawer-right';
    
        return $buffer;
    }

    public function block2a81b037a416792e91b78e41049f49f9($context)
    {
        $indent = $buffer = '';
        $buffer .= 'right';
    
        return $buffer;
    }

    public function blockBf74c876b2af3ed54ba5adde4e2bc10c($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD8c059d8e564034fcd5a4fcfed7ed8eb($context, $indent, $value);
    
        return $buffer;
    }
}
