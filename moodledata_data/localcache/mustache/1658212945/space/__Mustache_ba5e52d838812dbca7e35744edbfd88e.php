<?php

class __Mustache_ba5e52d838812dbca7e35744edbfd88e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'competencycount' section
        $value = $context->find('competencycount');
        $buffer .= $this->section67df08cdcd384d9d7f6d13adae2a08bf($context, $indent, $value);

        return $buffer;
    }

    private function sectionAbee49c427ef59303f760c27eb9fe51e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'xcompetenciesproficientoutofyincourse, tool_lp, { "x": "{{proficientcompetencycount}}", "y": "{{competencycount}}" } ';
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
                
                $buffer .= 'xcompetenciesproficientoutofyincourse, tool_lp, { "x": "';
                $value = $this->resolveValue($context->find('proficientcompetencycount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '", "y": "';
                $value = $this->resolveValue($context->find('competencycount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE17eafe8835503e34fef1ed744a8d148(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< tool_lp/progress_bar}}
            {{$progresstext}}
                {{#str}}xcompetenciesproficientoutofyincourse, tool_lp, { "x": "{{proficientcompetencycount}}", "y": "{{competencycount}}" } {{/str}}
            {{/progresstext}}
            {{$percentage}}{{proficientcompetencypercentage}}{{/percentage}}
            {{$percentlabel}}{{proficientcompetencypercentageformatted}}&nbsp;%{{/percentlabel}}
        {{/tool_lp/progress_bar}}
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
                
                $buffer .= $indent . '        ';
                if ($parent = $this->mustache->loadPartial('tool_lp/progress_bar')) {
                    $context->pushBlockContext(array(
                        'progresstext' => array($this, 'block09abc823a3c4e05bd90c7593d449d02c'),
                        'percentage' => array($this, 'block34ecb99b6aae2767331b27e354e30d39'),
                        'percentlabel' => array($this, 'block7d7b29e4af28232b5b00b862f84c2135'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99630888f48fb1a71fef2aba23a7f491(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'competenciesmostoftennotproficientincourse, tool_lp';
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
                
                $buffer .= 'competenciesmostoftennotproficientincourse, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEfd3946236562ae1e1c602e69511abb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="mr-4">
                <a href="#competency-info-link-{{id}}" class="d-block my-2">
                <div class="d-inline-flex"><h4 class="mb-0"><span class="shortname py-1 mr-2">{{{shortname}}}</span><div class="badge badge-info">{{idnumber}}</div></h4></div>
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
                
                $buffer .= $indent . '                <li class="mr-4">
';
                $buffer .= $indent . '                <a href="#competency-info-link-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="d-block my-2">
';
                $buffer .= $indent . '                <div class="d-inline-flex"><h4 class="mb-0"><span class="shortname py-1 mr-2">';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= $value;
                $buffer .= '</span><div class="badge badge-info">';
                $value = $this->resolveValue($context->find('idnumber'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div></h4></div>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5dda8e3e9094eac5c9da217ab8dfc027(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        <div>
            <div class="badge badge-info">{{#str}}competenciesmostoftennotproficientincourse, tool_lp{{/str}}</div>
        </div>
        <nav class="my-5 pb-0 border-bottom">
            <ul class="list-unstyled d-inline-flex">
            {{#leastproficient}}
                <li class="mr-4">
                <a href="#competency-info-link-{{id}}" class="d-block my-2">
                <div class="d-inline-flex"><h4 class="mb-0"><span class="shortname py-1 mr-2">{{{shortname}}}</span><div class="badge badge-info">{{idnumber}}</div></h4></div>
                </a>
                </li>
            {{/leastproficient}}
            </ul
        </nav>
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
                
                $buffer .= '    <div>
';
                $buffer .= $indent . '        <div>
';
                $buffer .= $indent . '            <div class="badge badge-info">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section99630888f48fb1a71fef2aba23a7f491($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <nav class="my-5 pb-0 border-bottom">
';
                $buffer .= $indent . '            <ul class="list-unstyled d-inline-flex">
';
                // 'leastproficient' section
                $value = $context->find('leastproficient');
                $buffer .= $this->sectionEfd3946236562ae1e1c602e69511abb1($context, $indent, $value);
                $buffer .= $indent . '            </ul
';
                $buffer .= $indent . '        </nav>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e9ec85a3a5fa16c8f0e5c6f74ccff11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#leastproficientcount}}
    <div>
        <div>
            <div class="badge badge-info">{{#str}}competenciesmostoftennotproficientincourse, tool_lp{{/str}}</div>
        </div>
        <nav class="my-5 pb-0 border-bottom">
            <ul class="list-unstyled d-inline-flex">
            {{#leastproficient}}
                <li class="mr-4">
                <a href="#competency-info-link-{{id}}" class="d-block my-2">
                <div class="d-inline-flex"><h4 class="mb-0"><span class="shortname py-1 mr-2">{{{shortname}}}</span><div class="badge badge-info">{{idnumber}}</div></h4></div>
                </a>
                </li>
            {{/leastproficient}}
            </ul
        </nav>
    </div>
    {{/leastproficientcount}}
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
                
                // 'leastproficientcount' section
                $value = $context->find('leastproficientcount');
                $buffer .= $this->section5dda8e3e9094eac5c9da217ab8dfc027($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67df08cdcd384d9d7f6d13adae2a08bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<hr class="hr-small" />
<div data-region="coursecompetencystatistics" class="mt-4 wrapper-fw">
    {{#canbegradedincourse}}
        {{< tool_lp/progress_bar}}
            {{$progresstext}}
                {{#str}}xcompetenciesproficientoutofyincourse, tool_lp, { "x": "{{proficientcompetencycount}}", "y": "{{competencycount}}" } {{/str}}
            {{/progresstext}}
            {{$percentage}}{{proficientcompetencypercentage}}{{/percentage}}
            {{$percentlabel}}{{proficientcompetencypercentageformatted}}&nbsp;%{{/percentlabel}}
        {{/tool_lp/progress_bar}}
    {{/canbegradedincourse}}
    {{#canmanagecoursecompetencies}}
    {{#leastproficientcount}}
    <div>
        <div>
            <div class="badge badge-info">{{#str}}competenciesmostoftennotproficientincourse, tool_lp{{/str}}</div>
        </div>
        <nav class="my-5 pb-0 border-bottom">
            <ul class="list-unstyled d-inline-flex">
            {{#leastproficient}}
                <li class="mr-4">
                <a href="#competency-info-link-{{id}}" class="d-block my-2">
                <div class="d-inline-flex"><h4 class="mb-0"><span class="shortname py-1 mr-2">{{{shortname}}}</span><div class="badge badge-info">{{idnumber}}</div></h4></div>
                </a>
                </li>
            {{/leastproficient}}
            </ul
        </nav>
    </div>
    {{/leastproficientcount}}
    {{/canmanagecoursecompetencies}}
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
                
                $buffer .= $indent . '<hr class="hr-small" />
';
                $buffer .= $indent . '<div data-region="coursecompetencystatistics" class="mt-4 wrapper-fw">
';
                // 'canbegradedincourse' section
                $value = $context->find('canbegradedincourse');
                $buffer .= $this->sectionE17eafe8835503e34fef1ed744a8d148($context, $indent, $value);
                // 'canmanagecoursecompetencies' section
                $value = $context->find('canmanagecoursecompetencies');
                $buffer .= $this->section1e9ec85a3a5fa16c8f0e5c6f74ccff11($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block09abc823a3c4e05bd90c7593d449d02c($context)
    {
        $indent = $buffer = '';
        $buffer .= '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAbee49c427ef59303f760c27eb9fe51e($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block34ecb99b6aae2767331b27e354e30d39($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('proficientcompetencypercentage'), $context);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }

    public function block7d7b29e4af28232b5b00b862f84c2135($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('proficientcompetencypercentageformatted'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '&nbsp;%';
    
        return $buffer;
    }
}
