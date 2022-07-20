<?php

class __Mustache_7e57e9f0d8d2afd042c1155e8ed37afb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'headerlinksdata' section
        $value = $context->find('headerlinksdata');
        $buffer .= $this->section95b3b9a55513493be64d2fa497ee55ee($context, $indent, $value);

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

    private function section1b3e6f3607b0e42c6b84b337032ba0cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li class="rui-sidebar-nav-item">
        <a href="{{{url}}}" id="{{itemid}}" class="rui-sidebar-nav-item-link {{#isactiveitem}}active{{/isactiveitem}}">
            <span class="rui-sidebar-nav-icon">{{{icon}}}</span>
            <span class="rui-sidebar-nav-text"">{{{title}}}</span>
        </a>
    </li>
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
                
                $buffer .= $indent . '    <li class="rui-sidebar-nav-item">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" id="';
                $value = $this->resolveValue($context->find('itemid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="rui-sidebar-nav-item-link ';
                // 'isactiveitem' section
                $value = $context->find('isactiveitem');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <span class="rui-sidebar-nav-icon">';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '            <span class="rui-sidebar-nav-text"">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08000c92636e338b589ba54dc7f0b07d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#status}}
    <li class="rui-sidebar-nav-item">
        <a href="{{{url}}}" id="{{itemid}}" class="rui-sidebar-nav-item-link {{#isactiveitem}}active{{/isactiveitem}}">
            <span class="rui-sidebar-nav-icon">{{{icon}}}</span>
            <span class="rui-sidebar-nav-text"">{{{title}}}</span>
        </a>
    </li>
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
                $buffer .= $this->section1b3e6f3607b0e42c6b84b337032ba0cb($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95b3b9a55513493be64d2fa497ee55ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#visability}}
    {{#status}}
    <li class="rui-sidebar-nav-item">
        <a href="{{{url}}}" id="{{itemid}}" class="rui-sidebar-nav-item-link {{#isactiveitem}}active{{/isactiveitem}}">
            <span class="rui-sidebar-nav-icon">{{{icon}}}</span>
            <span class="rui-sidebar-nav-text"">{{{title}}}</span>
        </a>
    </li>
    {{/status}}
    {{/visability}}
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
                
                // 'visability' section
                $value = $context->find('visability');
                $buffer .= $this->section08000c92636e338b589ba54dc7f0b07d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
