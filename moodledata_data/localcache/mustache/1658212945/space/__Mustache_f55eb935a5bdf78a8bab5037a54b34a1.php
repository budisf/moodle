<?php

class __Mustache_f55eb935a5bdf78a8bab5037a54b34a1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="searchform-auto-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="form-inline simplesearchform">
';
        $buffer .= $indent . '    <div class="search-input-group d-inline-flex justify-content-between w-100" role="search">
';
        $buffer .= $indent . '        <label for="searchinput">
';
        $buffer .= $indent . '            <span class="sr-only">';
        $blockFunction = $context->findInBlock('label');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section9dbf37a0f544ff636ac78cdadec0a0c6($context, $indent, $value);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '        </label>
';
        $buffer .= $indent . '        <span class="search-input-icon">
';
        $buffer .= $indent . '            <svg width="22" height="22" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z"></path>
';
        $buffer .= $indent . '            </svg>
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '        <input
';
        $buffer .= $indent . '           type="text"
';
        $buffer .= $indent . '           data-region="input"
';
        $buffer .= $indent . '           data-action="search"
';
        $buffer .= $indent . '           id="searchinput"
';
        $buffer .= $indent . '           class="search-input w-100 withclear"
';
        $buffer .= $indent . '           placeholder="';
        $blockFunction = $context->findInBlock('placeholder');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section9dbf37a0f544ff636ac78cdadec0a0c6($context, $indent, $value);
        }
        $buffer .= '"
';
        $buffer .= $indent . '           name="search"
';
        $buffer .= $indent . '           value="';
        $blockFunction = $context->findInBlock('value');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '"
';
        $buffer .= $indent . '           autocomplete="off"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '            class="search-input-btn d-none"
';
        $buffer .= $indent . '            data-action="clearsearch"
';
        $buffer .= $indent . '            type="button"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.25 6.75L6.75 17.25"></path>
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.75 6.75L17.25 17.25"></path>
';
        $buffer .= $indent . '            </svg>
';
        $buffer .= $indent . '            <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section40e9cf3a64788ffede70afd9139160c8($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section9dbf37a0f544ff636ac78cdadec0a0c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' search, core ';
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
                
                $buffer .= ' search, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40e9cf3a64788ffede70afd9139160c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' clearsearch, core ';
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
                
                $buffer .= ' clearsearch, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
