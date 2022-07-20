<?php

class __Mustache_f79e42dc206115531457def921a529f3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="view-selector">
';
        $buffer .= $indent . '    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle icon-no-margin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
';
        $buffer .= $indent . '            aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0fa205000ef28b6095fc51405a3bcb1e($context, $indent, $value);
        $buffer .= '" aria-controls="menusortby" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0fa205000ef28b6095fc51405a3bcb1e($context, $indent, $value);
        $buffer .= '" aria-describedby="timeline-view-selector-current-selection">
';
        $buffer .= $indent . '        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
        $buffer .= $indent . '            <path d="M9.25 14L4.75 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
';
        $buffer .= $indent . '            <path d="M11.25 18.25L4.75 18.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
';
        $buffer .= $indent . '            <path d="M8.25 9.75L4.75 9.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
';
        $buffer .= $indent . '            <path d="M12.75 14.75L16 18.25L19.25 14.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
';
        $buffer .= $indent . '            <path d="M16 5.75V18.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
';
        $buffer .= $indent . '        </svg>
';
        $buffer .= $indent . '        <span id="timeline-view-selector-current-selection" class="sr-only" data-active-item-text>
';
        $buffer .= $indent . '            ';
        // 'sorttimelinecourses' section
        $value = $context->find('sorttimelinecourses');
        $buffer .= $this->sectionDfa06877fd09c2cddf0a4f1dd0fc532b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        // 'sorttimelinedates' section
        $value = $context->find('sorttimelinedates');
        $buffer .= $this->sectionB00ffd9dad0df485052a361e3aca95d3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <div id="menusortby" role="menu" class="dropdown-menu dropdown-menu-right hidden" data-show-active-item data-skip-active-class="true">
';
        $buffer .= $indent . '        <a
';
        $buffer .= $indent . '            class="dropdown-item"
';
        $buffer .= $indent . '            href="#view_dates_';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '            data-toggle="tab"
';
        $buffer .= $indent . '            data-filtername="sortbydates"
';
        $buffer .= $indent . '            ';
        // 'sorttimelinedates' section
        $value = $context->find('sorttimelinedates');
        $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB059cbc52d578d75eb17a5d7ee98c57e($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '            role="menuitem"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            <svg class="mr-2" width="20" height="20" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.75 8.75C4.75 7.64543 5.64543 6.75 6.75 6.75H17.25C18.3546 6.75 19.25 7.64543 19.25 8.75V17.25C19.25 18.3546 18.3546 19.25 17.25 19.25H6.75C5.64543 19.25 4.75 18.3546 4.75 17.25V8.75Z"></path>
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4.75V8.25"></path>
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4.75V8.25"></path>
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.75 10.75H16.25"></path>
';
        $buffer .= $indent . '            </svg>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <span>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0e371d172f96b805892a6421f8a90d73($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <a
';
        $buffer .= $indent . '            class="dropdown-item"
';
        $buffer .= $indent . '            href="#view_courses_';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '            data-toggle="tab"
';
        $buffer .= $indent . '            data-filtername="sortbycourses"
';
        $buffer .= $indent . '            ';
        // 'sorttimelinecourses' section
        $value = $context->find('sorttimelinecourses');
        $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section03cebf862b1d4876fc56e14d75f8c3dc($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '            role="menuitem"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            <svg class="mr-2" width="20" height="20" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.25 5.75C19.25 5.19772 18.8023 4.75 18.25 4.75H14C12.8954 4.75 12 5.64543 12 6.75V19.25L12.8284 18.4216C13.5786 17.6714 14.596 17.25 15.6569 17.25H18.25C18.8023 17.25 19.25 16.8023 19.25 16.25V5.75Z"></path>
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.75 5.75C4.75 5.19772 5.19772 4.75 5.75 4.75H10C11.1046 4.75 12 5.64543 12 6.75V19.25L11.1716 18.4216C10.4214 17.6714 9.40401 17.25 8.34315 17.25H5.75C5.19772 17.25 4.75 16.8023 4.75 16.25V5.75Z"></path>
';
        $buffer .= $indent . '            </svg>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <span>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBfaaee379c81d3133b94a4d029246ae1($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section0fa205000ef28b6095fc51405a3bcb1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ariaviewselector, block_timeline';
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
                
                $buffer .= ' ariaviewselector, block_timeline';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e6898f76f5e70b1d03b979cbea41cbf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbycourses, block_timeline';
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
                
                $buffer .= ' sortbycourses, block_timeline';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDfa06877fd09c2cddf0a4f1dd0fc532b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} sortbycourses, block_timeline{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5e6898f76f5e70b1d03b979cbea41cbf($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0e371d172f96b805892a6421f8a90d73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbydates, block_timeline ';
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
                
                $buffer .= ' sortbydates, block_timeline ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB00ffd9dad0df485052a361e3aca95d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} sortbydates, block_timeline {{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0e371d172f96b805892a6421f8a90d73($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc0c0b051caebb6243b5c2bd6d728967(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-current="true"';
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
                
                $buffer .= 'aria-current="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB059cbc52d578d75eb17a5d7ee98c57e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ariaviewselectoroption, block_timeline, {{#str}} sortbydates, block_timeline {{/str}}';
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
                
                $buffer .= ' ariaviewselectoroption, block_timeline, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0e371d172f96b805892a6421f8a90d73($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfaaee379c81d3133b94a4d029246ae1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbycourses, block_timeline ';
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
                
                $buffer .= ' sortbycourses, block_timeline ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03cebf862b1d4876fc56e14d75f8c3dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ariaviewselectoroption, block_timeline, {{#str}} sortbycourses, block_timeline {{/str}}';
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
                
                $buffer .= ' ariaviewselectoroption, block_timeline, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBfaaee379c81d3133b94a4d029246ae1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
