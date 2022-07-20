<?php

class __Mustache_45ff2c8413f644fc115dfdcebd8f97a9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'istrackeduser' section
        $value = $context->find('istrackeduser');
        $buffer .= $this->sectionA0f3b3945615d7613ae8118a3d536317($context, $indent, $value);
        // 'istrackeduser' inverted section
        $value = $context->find('istrackeduser');
        if (empty($value)) {
            
            $buffer .= $indent . '        <button class="btn--activity-manual btn--disabled" disabled title="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section448e18140949629a4c17dbabe7973cbe($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '            <svg width="30" height="30" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><rect id="a" height="50" rx="25" width="50"/><mask id="b" height="54" width="54" x="-2" y="-2"><path d="m-2-2h54v54h-54z" fill="#fff"/><use xlink:href="#a"/></mask></defs><g fill="none" fill-rule="evenodd" transform="translate(2 2)"><use mask="url(#b)" stroke="currentColor" stroke-dasharray="5" stroke-width="4" xlink:href="#a"/><path d="m19 26.1165 2.58995 3.5473c.81176 1.1118 2.47795 1.0902 3.26065-.0423l6.6494-9.6215" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/></g></svg>
';
            $buffer .= $indent . '        </button>
';
        }
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section69a568a86edbde42a3787f5075bc56a6($context, $indent, $value);

        return $buffer;
    }

    private function section9585d79f2064844c36246dac1d81a2a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
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
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $buffer .= 'aria-label="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1415cb41a4d751af24109d3b9d9f3694(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion_manual:aria:done, course, {{activityname}} ';
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
                
                $buffer .= 'completion_manual:aria:done, course, ';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8de2005da529464baadcdda30955db77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <button class="btn--activity-manual" data-action="toggle-manual-completion" data-toggletype="manual:undo" data-cmid="{{cmid}}" data-activityname="{{activityname}}" data-withavailability="{{withavailability}}" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}{{!
        }}{{^accessibledescription}}{{!
            }}title="{{#str}}completion_manual:aria:done, course, {{activityname}} {{/str}}" {{!
            }}aria-label="{{#str}}completion_manual:aria:done, course, {{activityname}} {{/str}}" {{!
        }}{{/accessibledescription}}{{!
        }}
        >
            <svg width="30"  height="30" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><rect fill="#dde9cc" height="50" rx="25" width="50"/><path d="m19 26.1165 2.58995 3.5473c.81176 1.1118 2.47795 1.0902 3.26065-.0423l6.6494-9.6215" stroke="#00665f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/></g></svg>
        </button>
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
                
                $buffer .= $indent . '        <button class="btn--activity-manual" data-action="toggle-manual-completion" data-toggletype="manual:undo" data-cmid="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-activityname="';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-withavailability="';
                $value = $this->resolveValue($context->find('withavailability'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'accessibledescription' section
                $value = $context->find('accessibledescription');
                $buffer .= $this->section9585d79f2064844c36246dac1d81a2a2($context, $indent, $value);
                // 'accessibledescription' inverted section
                $value = $context->find('accessibledescription');
                if (empty($value)) {
                    
                    $buffer .= 'title="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section1415cb41a4d751af24109d3b9d9f3694($context, $indent, $value);
                    $buffer .= '" ';
                    $buffer .= 'aria-label="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section1415cb41a4d751af24109d3b9d9f3694($context, $indent, $value);
                    $buffer .= '" ';
                }
                $buffer .= '
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '            <svg width="30"  height="30" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><rect fill="#dde9cc" height="50" rx="25" width="50"/><path d="m19 26.1165 2.58995 3.5473c.81176 1.1118 2.47795 1.0902 3.26065-.0423l6.6494-9.6215" stroke="#00665f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/></g></svg>
';
                $buffer .= $indent . '        </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e716ec6364ba26d1c17de9b2a71fdf0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion_manual:aria:markdone, course, {{activityname}} ';
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
                
                $buffer .= 'completion_manual:aria:markdone, course, ';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01cbe763a944d620cfd2c99ae2445d37(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <button class="btn--activity-manual" data-action="toggle-manual-completion" data-toggletype="manual:mark-done" data-cmid="{{cmid}}" data-activityname="{{activityname}}" data-withavailability="{{withavailability}}" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}{{!
        }}{{^accessibledescription}}{{!
            }}title="{{#str}}completion_manual:aria:markdone, course, {{activityname}} {{/str}}" {{!
            }}aria-label="{{#str}}completion_manual:aria:markdone, course, {{activityname}} {{/str}}" {{!
        }}{{/accessibledescription}}{{!
        }}
        >
            <svg width="30" height="30" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><rect id="a" height="50" rx="25" width="50"/><mask id="b" height="54" width="54" x="-2" y="-2"><path d="m-2-2h54v54h-54z" fill="#fff"/><use xlink:href="#a"/></mask></defs><g fill="none" fill-rule="evenodd" transform="translate(2 2)"><use mask="url(#b)" stroke="currentColor" stroke-dasharray="5" stroke-width="4" xlink:href="#a"/><path d="m19 26.1165 2.58995 3.5473c.81176 1.1118 2.47795 1.0902 3.26065-.0423l6.6494-9.6215" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/></g></svg>
        </button>
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
                
                $buffer .= $indent . '        <button class="btn--activity-manual" data-action="toggle-manual-completion" data-toggletype="manual:mark-done" data-cmid="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-activityname="';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-withavailability="';
                $value = $this->resolveValue($context->find('withavailability'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'accessibledescription' section
                $value = $context->find('accessibledescription');
                $buffer .= $this->section9585d79f2064844c36246dac1d81a2a2($context, $indent, $value);
                // 'accessibledescription' inverted section
                $value = $context->find('accessibledescription');
                if (empty($value)) {
                    
                    $buffer .= 'title="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section7e716ec6364ba26d1c17de9b2a71fdf0($context, $indent, $value);
                    $buffer .= '" ';
                    $buffer .= 'aria-label="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section7e716ec6364ba26d1c17de9b2a71fdf0($context, $indent, $value);
                    $buffer .= '" ';
                }
                $buffer .= '
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '            <svg width="30" height="30" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><rect id="a" height="50" rx="25" width="50"/><mask id="b" height="54" width="54" x="-2" y="-2"><path d="m-2-2h54v54h-54z" fill="#fff"/><use xlink:href="#a"/></mask></defs><g fill="none" fill-rule="evenodd" transform="translate(2 2)"><use mask="url(#b)" stroke="currentColor" stroke-dasharray="5" stroke-width="4" xlink:href="#a"/><path d="m19 26.1165 2.58995 3.5473c.81176 1.1118 2.47795 1.0902 3.26065-.0423l6.6494-9.6215" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/></g></svg>
';
                $buffer .= $indent . '        </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0f3b3945615d7613ae8118a3d536317(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#overallcomplete}}
        <button class="btn--activity-manual" data-action="toggle-manual-completion" data-toggletype="manual:undo" data-cmid="{{cmid}}" data-activityname="{{activityname}}" data-withavailability="{{withavailability}}" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}{{!
        }}{{^accessibledescription}}{{!
            }}title="{{#str}}completion_manual:aria:done, course, {{activityname}} {{/str}}" {{!
            }}aria-label="{{#str}}completion_manual:aria:done, course, {{activityname}} {{/str}}" {{!
        }}{{/accessibledescription}}{{!
        }}
        >
            <svg width="30"  height="30" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><rect fill="#dde9cc" height="50" rx="25" width="50"/><path d="m19 26.1165 2.58995 3.5473c.81176 1.1118 2.47795 1.0902 3.26065-.0423l6.6494-9.6215" stroke="#00665f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/></g></svg>
        </button>
    {{/overallcomplete}}
    {{#overallincomplete}}
        <button class="btn--activity-manual" data-action="toggle-manual-completion" data-toggletype="manual:mark-done" data-cmid="{{cmid}}" data-activityname="{{activityname}}" data-withavailability="{{withavailability}}" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}{{!
        }}{{^accessibledescription}}{{!
            }}title="{{#str}}completion_manual:aria:markdone, course, {{activityname}} {{/str}}" {{!
            }}aria-label="{{#str}}completion_manual:aria:markdone, course, {{activityname}} {{/str}}" {{!
        }}{{/accessibledescription}}{{!
        }}
        >
            <svg width="30" height="30" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><rect id="a" height="50" rx="25" width="50"/><mask id="b" height="54" width="54" x="-2" y="-2"><path d="m-2-2h54v54h-54z" fill="#fff"/><use xlink:href="#a"/></mask></defs><g fill="none" fill-rule="evenodd" transform="translate(2 2)"><use mask="url(#b)" stroke="currentColor" stroke-dasharray="5" stroke-width="4" xlink:href="#a"/><path d="m19 26.1165 2.58995 3.5473c.81176 1.1118 2.47795 1.0902 3.26065-.0423l6.6494-9.6215" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/></g></svg>
        </button>
    {{/overallincomplete}}
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
                
                // 'overallcomplete' section
                $value = $context->find('overallcomplete');
                $buffer .= $this->section8de2005da529464baadcdda30955db77($context, $indent, $value);
                // 'overallincomplete' section
                $value = $context->find('overallincomplete');
                $buffer .= $this->section01cbe763a944d620cfd2c99ae2445d37($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section448e18140949629a4c17dbabe7973cbe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completion_manual:markdone, core_course ';
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
                
                $buffer .= ' completion_manual:markdone, core_course ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69a568a86edbde42a3787f5075bc56a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_course/manual_completion_toggle\'], toggle => {
    toggle.init()
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
                
                $buffer .= $indent . 'require([\'core_course/manual_completion_toggle\'], toggle => {
';
                $buffer .= $indent . '    toggle.init()
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
