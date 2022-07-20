<?php

class __Mustache_5b835b33b38423b30f451ccd9e74848c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form action="';
        $value = $this->resolveValue($context->find('legacyseturl'), $context);
        $buffer .= $value;
        $buffer .= '" method="post" class="d-flex align-items-center editmode-switch-form">
';
        $buffer .= $indent . '    <div class="input-group ';
        // 'checked' section
        $value = $context->find('checked');
        $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <label class="custom-control ios-switch d-inline-flex align-items-center m-0">
';
        $buffer .= $indent . '                <input type="checkbox"';
        $buffer .= ' name="setmode"';
        // 'checked' section
        $value = $context->find('checked');
        $buffer .= $this->section7e001738dbd2a76d83db5114fa7c2e4e($context, $indent, $value);
        // 'checked' inverted section
        $value = $context->find('checked');
        if (empty($value)) {
            
            $buffer .= ' aria-checked="false"';
        }
        $buffer .= ' class="ios-switch-control-input"';
        $buffer .= ' id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-editingswitch"';
        $buffer .= ' data-context="';
        $value = $this->resolveValue($context->find('pagecontextid'), $context);
        $buffer .= $value;
        $buffer .= '"';
        $buffer .= ' data-pageurl="';
        $value = $this->resolveValue($context->find('pageurl'), $context);
        $buffer .= $value;
        $buffer .= '"';
        $buffer .= '>
';
        $buffer .= $indent . '                <span class="ios-switch-control-indicator"></span>
';
        $buffer .= $indent . '                <label class="my-0 small" for="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-editingswitch">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8eb26301b7adb5b471f5b42058e0700c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </label>
';
        $buffer .= $indent . '            </label>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= $value;
        $buffer .= '">
';
        $buffer .= $indent . '    <input type="hidden" name="pageurl" value="';
        $value = $this->resolveValue($context->find('pageurl'), $context);
        $buffer .= $value;
        $buffer .= '">
';
        $buffer .= $indent . '    <input type="hidden" name="context" value="';
        $value = $this->resolveValue($context->find('pagecontextid'), $context);
        $buffer .= $value;
        $buffer .= '">
';
        $buffer .= $indent . '    <noscript>
';
        $buffer .= $indent . '        <input type="submit" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section784055b0413ba2959bcc3ebc23efe456($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    </noscript>
';
        $buffer .= $indent . '</form>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionA0ac314ac3090eb4fbe5862ab9f2b412($context, $indent, $value);

        return $buffer;
    }

    private function section51d7c9c652ced0161cb587bacd669266(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked';
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
                
                $buffer .= 'checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e001738dbd2a76d83db5114fa7c2e4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
                    }} aria-checked="true" checked{{!
                }}';
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
                
                $buffer .= ' aria-checked="true" checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8eb26301b7adb5b471f5b42058e0700c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' editmode ';
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
                
                $buffer .= ' editmode ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section784055b0413ba2959bcc3ebc23efe456(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'setmode, core';
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
                
                $buffer .= 'setmode, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0ac314ac3090eb4fbe5862ab9f2b412(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core/edit_switch\'], function(editSwitch) {
    editSwitch.init(\'{{uniqid}}-editingswitch\');
});
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
                
                $buffer .= $indent . 'require([\'core/edit_switch\'], function(editSwitch) {
';
                $buffer .= $indent . '    editSwitch.init(\'';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-editingswitch\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
