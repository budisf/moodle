<?php

class __Mustache_66123509ec174cff2f77556d6c8496cd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'tools' section
        $value = $context->find('tools');
        $buffer .= $this->section9ce1473ba597972f721089283324e772($context, $indent, $value);
        $buffer .= $indent . '<div class="rui-contentbank-view-btns">
';
        $buffer .= $indent . '    <button class="icon-no-margin btn btn-sm btn-secondary ';
        // 'viewlist' inverted section
        $value = $context->find('viewlist');
        if (empty($value)) {
            
            $buffer .= 'active';
        }
        $buffer .= ' ml-4"
';
        $buffer .= $indent . '    title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD393d30432f1ed8167e50ad70d93d722($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-action="viewgrid">
';
        $buffer .= $indent . '        <svg width="26" height="26" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 5.75C4.75 5.19772 5.19772 4.75 5.75 4.75H9.25C9.80228 4.75 10.25 5.19772 10.25 5.75V9.25C10.25 9.80228 9.80228 10.25 9.25 10.25H5.75C5.19772 10.25 4.75 9.80228 4.75 9.25V5.75Z"/>
';
        $buffer .= $indent . '            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 14.75C4.75 14.1977 5.19772 13.75 5.75 13.75H9.25C9.80228 13.75 10.25 14.1977 10.25 14.75V18.25C10.25 18.8023 9.80228 19.25 9.25 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V14.75Z"/>
';
        $buffer .= $indent . '            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.75 5.75C13.75 5.19772 14.1977 4.75 14.75 4.75H18.25C18.8023 4.75 19.25 5.19772 19.25 5.75V9.25C19.25 9.80228 18.8023 10.25 18.25 10.25H14.75C14.1977 10.25 13.75 9.80228 13.75 9.25V5.75Z"/>
';
        $buffer .= $indent . '            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.75 14.75C13.75 14.1977 14.1977 13.75 14.75 13.75H18.25C18.8023 13.75 19.25 14.1977 19.25 14.75V18.25C19.25 18.8023 18.8023 19.25 18.25 19.25H14.75C14.1977 19.25 13.75 18.8023 13.75 18.25V14.75Z"/>
';
        $buffer .= $indent . '        </svg>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <button class="icon-no-margin btn btn-sm btn-secondary ';
        // 'viewlist' section
        $value = $context->find('viewlist');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6ee07984ce4742385b2226eeb0de8436($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-action="viewlist">
';
        $buffer .= $indent . '        <svg width="26" height="26" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 6.75C4.75 5.64543 5.64543 4.75 6.75 4.75H17.25C18.3546 4.75 19.25 5.64543 19.25 6.75V17.25C19.25 18.3546 18.3546 19.25 17.25 19.25H6.75C5.64543 19.25 4.75 18.3546 4.75 17.25V6.75Z"></path>
';
        $buffer .= $indent . '            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12L5 12"></path>
';
        $buffer .= $indent . '        </svg>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section5eb61323e70938f22fa4a368d9a81918(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{>core_contentbank/bankcontent/toolbar_dropdown}}
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
                
                if ($partial = $this->mustache->loadPartial('core_contentbank/bankcontent/toolbar_dropdown')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ce1473ba597972f721089283324e772(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#dropdown}}
        {{>core_contentbank/bankcontent/toolbar_dropdown}}
    {{/dropdown}}
    {{^dropdown}}
        <a href="{{ link }}" class="icon-no-margin btn btn-sm btn-secondary" title="{{ name }}" data-action="{{ action }}">
            <span class="mr-2">
            <svg width="26" height="26" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 14.75V16.25C4.75 17.9069 6.09315 19.25 7.75 19.25H16.25C17.9069 19.25 19.25 17.9069 19.25 16.25V14.75"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14.25L12 5"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.75 8.25L12 4.75L15.25 8.25"></path>
            </svg>
            </span>
            {{{ name }}}
        </a>
    {{/dropdown}}
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
                
                // 'dropdown' section
                $value = $context->find('dropdown');
                $buffer .= $this->section5eb61323e70938f22fa4a368d9a81918($context, $indent, $value);
                // 'dropdown' inverted section
                $value = $context->find('dropdown');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <a href="';
                    $value = $this->resolveValue($context->find('link'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" class="icon-no-margin btn btn-sm btn-secondary" title="';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-action="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '            <span class="mr-2">
';
                    $buffer .= $indent . '            <svg width="26" height="26" fill="none" viewBox="0 0 24 24">
';
                    $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 14.75V16.25C4.75 17.9069 6.09315 19.25 7.75 19.25H16.25C17.9069 19.25 19.25 17.9069 19.25 16.25V14.75"></path>
';
                    $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14.25L12 5"></path>
';
                    $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.75 8.25L12 4.75L15.25 8.25"></path>
';
                    $buffer .= $indent . '            </svg>
';
                    $buffer .= $indent . '            </span>
';
                    $buffer .= $indent . '            ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                    $buffer .= $indent . '        </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD393d30432f1ed8167e50ad70d93d722(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '  displayicons, contentbank  ';
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
                
                $buffer .= '  displayicons, contentbank  ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
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
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ee07984ce4742385b2226eeb0de8436(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' displaydetails, contentbank ';
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
                
                $buffer .= ' displaydetails, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
