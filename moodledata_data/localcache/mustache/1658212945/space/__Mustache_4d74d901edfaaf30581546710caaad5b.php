<?php

class __Mustache_4d74d901edfaaf30581546710caaad5b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'showcoursenav' section
        $value = $context->find('showcoursenav');
        $buffer .= $this->section74a094829ab96785efec5a82aabfb3e6($context, $indent, $value);

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

    private function section407c800fdd9e88756bca847155cfa65e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{url}}}" title="{{{title}}}" id="{{itemid}}" class="header-link-item {{#isactiveitem}}active{{/isactiveitem}}">
                <span class="header-link-item-icon">{{{icon}}}</span>
                {{{title}}}
            </a>
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
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '" id="';
                $value = $this->resolveValue($context->find('itemid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="header-link-item ';
                // 'isactiveitem' section
                $value = $context->find('isactiveitem');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <span class="header-link-item-icon">';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC15c83dbd95a8afbd9cc8f837adbb196(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#status}}
            <a href="{{{url}}}" title="{{{title}}}" id="{{itemid}}" class="header-link-item {{#isactiveitem}}active{{/isactiveitem}}">
                <span class="header-link-item-icon">{{{icon}}}</span>
                {{{title}}}
            </a>
            {{/status}}
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
                
                // 'status' section
                $value = $context->find('status');
                $buffer .= $this->section407c800fdd9e88756bca847155cfa65e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74a094829ab96785efec5a82aabfb3e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="rui-course-nav-container">
    <div class="header-links">
        {{#headerlinksdata}}
            {{#status}}
            <a href="{{{url}}}" title="{{{title}}}" id="{{itemid}}" class="header-link-item {{#isactiveitem}}active{{/isactiveitem}}">
                <span class="header-link-item-icon">{{{icon}}}</span>
                {{{title}}}
            </a>
            {{/status}}
        {{/headerlinksdata}}
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
                
                $buffer .= $indent . '<div class="rui-course-nav-container">
';
                $buffer .= $indent . '    <div class="header-links">
';
                // 'headerlinksdata' section
                $value = $context->find('headerlinksdata');
                $buffer .= $this->sectionC15c83dbd95a8afbd9cc8f837adbb196($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . ' </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
