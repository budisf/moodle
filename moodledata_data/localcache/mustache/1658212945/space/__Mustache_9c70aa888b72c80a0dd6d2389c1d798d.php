<?php

class __Mustache_9c70aa888b72c80a0dd6d2389c1d798d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="my-2 initialbar ';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <h5 class="initialbarlabel font-weight-bold d-block">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h5>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="initialbargroups d-flex flex-wrap justify-content-center justify-content-md-start">
';
        $buffer .= $indent . '        <ul class="pagination pagination-sm my-1">
';
        // 'current' section
        $value = $context->find('current');
        $buffer .= $this->section3e5f89bc5739291cf397b89a8312bafe($context, $indent, $value);
        // 'current' inverted section
        $value = $context->find('current');
        if (empty($value)) {
            
            $buffer .= $indent . '            <li class="initialbarall page-item active">
';
            $buffer .= $indent . '                <a data-initial="" class="page-link">
';
            $buffer .= $indent . '                    <svg class="mr-2" width="20" height="20" fill="none" viewBox="0 0 24 24">
';
            $buffer .= $indent . '                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.75 19.2502H18.25C18.8023 19.2502 19.25 18.8025 19.25 18.2502V5.75C19.25 5.19772 18.8023 4.75 18.25 4.75H5.75C5.19772 4.75 4.75 5.19772 4.75 5.75V18.2502C4.75 18.8025 5.19772 19.2502 5.75 19.2502Z"></path>
';
            $buffer .= $indent . '                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 9.25L5.25 9.25"></path>
';
            $buffer .= $indent . '                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 14.75L5.25 14.75"></path>
';
            $buffer .= $indent . '                    </svg>
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->find('all'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '</a>
';
            $buffer .= $indent . '                </a>
';
            $buffer .= $indent . '            </li>
';
        }
        $buffer .= $indent . '        </ul>
';
        // 'group' section
        $value = $context->find('group');
        $buffer .= $this->section922c96bd88dbbe0a6bcbafb7cdfdd4b5($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section3e5f89bc5739291cf397b89a8312bafe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="initialbarall page-item">
                <a data-initial="" class="page-link" href="{{url}}">
                    <svg class="mr-2" width="20" height="20" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.75 19.2502H18.25C18.8023 19.2502 19.25 18.8025 19.25 18.2502V5.75C19.25 5.19772 18.8023 4.75 18.25 4.75H5.75C5.19772 4.75 4.75 5.19772 4.75 5.75V18.2502C4.75 18.8025 5.19772 19.2502 5.75 19.2502Z"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 9.25L5.25 9.25"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 14.75L5.25 14.75"></path>
                    </svg>
                    {{all}}</a>
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
                
                $buffer .= $indent . '            <li class="initialbarall page-item">
';
                $buffer .= $indent . '                <a data-initial="" class="page-link" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <svg class="mr-2" width="20" height="20" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.75 19.2502H18.25C18.8023 19.2502 19.25 18.8025 19.25 18.2502V5.75C19.25 5.19772 18.8023 4.75 18.25 4.75H5.75C5.19772 4.75 4.75 5.19772 4.75 5.75V18.2502C4.75 18.8025 5.19772 19.2502 5.75 19.2502Z"></path>
';
                $buffer .= $indent . '                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 9.25L5.25 9.25"></path>
';
                $buffer .= $indent . '                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 14.75L5.25 14.75"></path>
';
                $buffer .= $indent . '                    </svg>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('all'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f8699c947c04b58f200ec15cb20bf43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li data-initial="{{name}}" class="page-item active {{name}}"><span class="page-link">{{name}}</span></li>
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
                
                $buffer .= $indent . '                        <li data-initial="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="page-item active ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><span class="page-link">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ba151ff314a7a660593cfbf8ef85ca3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#selected}}
                        <li data-initial="{{name}}" class="page-item active {{name}}"><span class="page-link">{{name}}</span></li>
                    {{/selected}}
                    {{^selected}}
                        <li data-initial="{{name}}" class="page-item {{name}}"><a class="page-link" href="{{url}}">{{name}}</a></li>
                    {{/selected}}
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
                
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->section9f8699c947c04b58f200ec15cb20bf43($context, $indent, $value);
                // 'selected' inverted section
                $value = $context->find('selected');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <li data-initial="';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" class="page-item ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"><a class="page-link" href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a></li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section922c96bd88dbbe0a6bcbafb7cdfdd4b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <ul class="pagination pagination-sm my-1">
                {{#letter}}
                    {{#selected}}
                        <li data-initial="{{name}}" class="page-item active {{name}}"><span class="page-link">{{name}}</span></li>
                    {{/selected}}
                    {{^selected}}
                        <li data-initial="{{name}}" class="page-item {{name}}"><a class="page-link" href="{{url}}">{{name}}</a></li>
                    {{/selected}}
                {{/letter}}
            </ul>
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
                
                $buffer .= $indent . '            <ul class="pagination pagination-sm my-1">
';
                // 'letter' section
                $value = $context->find('letter');
                $buffer .= $this->section8ba151ff314a7a660593cfbf8ef85ca3($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
