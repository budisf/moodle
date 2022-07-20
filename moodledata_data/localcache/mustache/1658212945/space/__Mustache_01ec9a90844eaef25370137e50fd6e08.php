<?php

class __Mustache_01ec9a90844eaef25370137e50fd6e08 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'url' section
        $value = $context->find('url');
        $buffer .= $this->section532017739f6bb25fab6b6631a97ad682($context, $indent, $value);

        return $buffer;
    }

    private function section19520bc3dfc6967e25532fd901cf207d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a href="{{url}}" class="{{linkclasses}} rui-instancename aalink stretched-link" onclick="{{{onclick}}}">
                            <span class="instancename">{{{instancename}}} {{{altname}}}</span>
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
                
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('linkclasses'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' rui-instancename aalink stretched-link" onclick="';
                $value = $this->resolveValue($context->find('onclick'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                            <span class="instancename">';
                $value = $this->resolveValue($context->find('instancename'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('altname'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section532017739f6bb25fab6b6631a97ad682(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="activity-instance d-flex flex-column">
        <div class="activitytitle media {{textclasses}} modtype_{{modname}} position-relative align-self-start">
            <div class="activityiconcontainer {{purpose}} courseicon align-self-start">
                <img src="{{{icon}}}" class="rui-activityicon" alt="{{{modname}}} icon">
            </div>
            <div class="media-body align-self-center">
                <div class="rui-pluginname">
                    {{{pluginname}}}
                </div>
                <div class="activityname">
                    {{#uservisible}}
                        <a href="{{url}}" class="{{linkclasses}} rui-instancename aalink stretched-link" onclick="{{{onclick}}}">
                            <span class="instancename">{{{instancename}}} {{{altname}}}</span>
                        </a>
                    {{/uservisible}}
                    {{^uservisible}}
                        <span class="instancename">
                            {{{instancename}}} {{{altname}}}
                        </span>
                    {{/uservisible}}
                </div>
            </div>
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
                
                $buffer .= $indent . '    <div class="activity-instance d-flex flex-column">
';
                $buffer .= $indent . '        <div class="activitytitle media ';
                $value = $this->resolveValue($context->find('textclasses'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' modtype_';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' position-relative align-self-start">
';
                $buffer .= $indent . '            <div class="activityiconcontainer ';
                $value = $this->resolveValue($context->find('purpose'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' courseicon align-self-start">
';
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= $value;
                $buffer .= '" class="rui-activityicon" alt="';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= $value;
                $buffer .= ' icon">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="media-body align-self-center">
';
                $buffer .= $indent . '                <div class="rui-pluginname">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('pluginname'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="activityname">
';
                // 'uservisible' section
                $value = $context->find('uservisible');
                $buffer .= $this->section19520bc3dfc6967e25532fd901cf207d($context, $indent, $value);
                // 'uservisible' inverted section
                $value = $context->find('uservisible');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <span class="instancename">
';
                    $buffer .= $indent . '                            ';
                    $value = $this->resolveValue($context->find('instancename'), $context);
                    $buffer .= $value;
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('altname'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                    $buffer .= $indent . '                        </span>
';
                }
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
