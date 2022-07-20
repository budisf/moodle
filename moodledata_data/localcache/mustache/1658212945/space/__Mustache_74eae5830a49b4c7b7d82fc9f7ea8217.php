<?php

class __Mustache_74eae5830a49b4c7b7d82fc9f7ea8217 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'hasnavbar' section
        $value = $context->find('hasnavbar');
        $buffer .= $this->section41dabcdb20096ddfeda524efacf5c54f($context, $indent, $value);

        return $buffer;
    }

    private function section41dabcdb20096ddfeda524efacf5c54f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="rui-breadcrumbs wrapper-page">
        <div id="page-navbar" class="breadcrumbs-container">
            {{{navbar}}}
        </div>
      </div>
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
                
                $buffer .= $indent . '      <div class="rui-breadcrumbs wrapper-page">
';
                $buffer .= $indent . '        <div id="page-navbar" class="breadcrumbs-container">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('navbar'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
