<?php

class __Mustache_df2f7df90f1093cfefb77da0b1a94d67 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'editing' section
        $value = $context->find('editing');
        $buffer .= $this->sectionC3e961778aa94d72dde77d82c76f6fdb($context, $indent, $value);
        // 'editing' inverted section
        $value = $context->find('editing');
        if (empty($value)) {
            
            // 'iscurrent' section
            $value = $context->find('iscurrent');
            $buffer .= $this->sectionCe8f2bb52fdefbb39b08f30e5d2ead52($context, $indent, $value);
            // 'hiddenfromstudents' section
            $value = $context->find('hiddenfromstudents');
            $buffer .= $this->sectionCa071a90a0cb22827eb0e18bdb01aec4($context, $indent, $value);
            // 'notavailable' section
            $value = $context->find('notavailable');
            $buffer .= $this->section4e8d39ed3573f43b6d29e14a8551103c($context, $indent, $value);
        }

        return $buffer;
    }

    private function section31ae0fbdc439c6d3e86010ee0fe2597e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notavailable';
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
                
                $buffer .= 'notavailable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa413acb7776474efcb52c4cbf9fc6f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hiddenfromstudents';
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
                
                $buffer .= 'hiddenfromstudents';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3e961778aa94d72dde77d82c76f6fdb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="mx-2 badge badge-sm badge-primary order-1 {{^iscurrent}}d-none{{/iscurrent}}" data-type="iscurrent">
        {{ highlightedlabel }}
    </span>
    <span class="mx-2 badge badge-sm badge-secondary order-3 {{^notavailable}}d-none{{/notavailable}}">
        {{#str}}notavailable{{/str}}
    </span>
    <span class="ml-2 badge badge-xs badge-warning order-2 {{^hiddenfromstudents}}d-none{{/hiddenfromstudents}}" data-type="hiddenfromstudents">
        <span class="badge--icon">
            <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.6247 10C19.0646 10.8986 19.25 11.6745 19.25 12C19.25 13 17.5 18.25 12 18.25C11.2686 18.25 10.6035 18.1572 10 17.9938M7 16.2686C5.36209 14.6693 4.75 12.5914 4.75 12C4.75 11 6.5 5.75 12 5.75C13.7947 5.75 15.1901 6.30902 16.2558 7.09698"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 4.75L4.75 19.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.409 13.591C9.53033 12.7123 9.53033 11.2877 10.409 10.409C11.2877 9.5303 12.7123 9.5303 13.591 10.409"></path>
            </svg>
        </span>
        <span class="badge--text ml-2">{{#str}}hiddenfromstudents{{/str}}</span>
    </span>    
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
                
                $buffer .= $indent . '    <span class="mx-2 badge badge-sm badge-primary order-1 ';
                // 'iscurrent' inverted section
                $value = $context->find('iscurrent');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '" data-type="iscurrent">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('highlightedlabel'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '    </span>
';
                $buffer .= $indent . '    <span class="mx-2 badge badge-sm badge-secondary order-3 ';
                // 'notavailable' inverted section
                $value = $context->find('notavailable');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '">
';
                $buffer .= $indent . '        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section31ae0fbdc439c6d3e86010ee0fe2597e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </span>
';
                $buffer .= $indent . '    <span class="ml-2 badge badge-xs badge-warning order-2 ';
                // 'hiddenfromstudents' inverted section
                $value = $context->find('hiddenfromstudents');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '" data-type="hiddenfromstudents">
';
                $buffer .= $indent . '        <span class="badge--icon">
';
                $buffer .= $indent . '            <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.6247 10C19.0646 10.8986 19.25 11.6745 19.25 12C19.25 13 17.5 18.25 12 18.25C11.2686 18.25 10.6035 18.1572 10 17.9938M7 16.2686C5.36209 14.6693 4.75 12.5914 4.75 12C4.75 11 6.5 5.75 12 5.75C13.7947 5.75 15.1901 6.30902 16.2558 7.09698"></path>
';
                $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 4.75L4.75 19.25"></path>
';
                $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.409 13.591C9.53033 12.7123 9.53033 11.2877 10.409 10.409C11.2877 9.5303 12.7123 9.5303 13.591 10.409"></path>
';
                $buffer .= $indent . '            </svg>
';
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '        <span class="badge--text ml-2">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAa413acb7776474efcb52c4cbf9fc6f9($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '    </span>    
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe8f2bb52fdefbb39b08f30e5d2ead52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="mx-2 badge badge-sm badge-primary order-1">{{ highlightedlabel }}</span>
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
                
                $buffer .= $indent . '        <span class="mx-2 badge badge-sm badge-primary order-1">';
                $value = $this->resolveValue($context->find('highlightedlabel'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa071a90a0cb22827eb0e18bdb01aec4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="mx-2 badge badge-sm badge-warning order-2">{{#str}}hiddenfromstudents{{/str}}</span>
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
                
                $buffer .= $indent . '        <span class="mx-2 badge badge-sm badge-warning order-2">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAa413acb7776474efcb52c4cbf9fc6f9($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e8d39ed3573f43b6d29e14a8551103c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="mx-2 badge badge-sm badge-secondary order-3">{{#str}}notavailable{{/str}}</span>
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
                
                $buffer .= $indent . '        <span class="mx-2 badge badge-sm badge-secondary order-3">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section31ae0fbdc439c6d3e86010ee0fe2597e($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
