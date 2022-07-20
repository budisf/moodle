<?php

class __Mustache_69bfe5ae61388636bbdac0176d693672 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="';
        // 'activityinfo' section
        $value = $context->find('activityinfo');
        $buffer .= $this->sectionD66a4732e65b4cb42ca35ac9a74da6a5($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        // 'moveicon' section
        $value = $context->find('moveicon');
        $buffer .= $this->section2e7d3cdfffee27291ffca5f384d8d23d($context, $indent, $value);
        $buffer .= '
';
        // 'activityinfo' section
        $value = $context->find('activityinfo');
        $buffer .= $this->sectionEfba717b79d0aafcbc9fc396f1f8ad50($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'activityinfo' section
        $value = $context->find('activityinfo');
        $buffer .= $this->sectionC4ee8c45b0acfd58eae4f5542a7a22df($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="activity-basis d-flex align-items-center">
';
        $buffer .= $indent . '        <div class="d-flex flex-column flex-md-row w-100 align-self-start">
';
        // 'hasname' inverted section
        $value = $context->find('hasname');
        if (empty($value)) {
            
            $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/badges');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/badges')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
            }
        }
        // 'cmname' section
        $value = $context->find('cmname');
        $buffer .= $this->section36c5e6287510ffac91dada33176691d1($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        // 'controlmenu' section
        $value = $context->find('controlmenu');
        $buffer .= $this->section0c3f9e3bbd0277d15dc96302ffe2ba21($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        // 'hasname' section
        $value = $context->find('hasname');
        $buffer .= $this->sectionA6913c60b07e14e2e80261524d0b2320($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="rui-contentafterlink description">
';
        // 'altcontent' section
        $value = $context->find('altcontent');
        $buffer .= $this->section01802e74a9df09e6720f7c374dd8eba6($context, $indent, $value);
        // 'modavailability' section
        $value = $context->find('modavailability');
        $buffer .= $this->section59227921106a62badb39181ab68051f4($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        // 'afterlink' section
        $value = $context->find('afterlink');
        $buffer .= $this->section533038c410ebfcca794b270cb3169119($context, $indent, $value);
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionA6757e1db9273769542d5d993cc3db2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui--activity-is-automatic';
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
                
                $buffer .= 'rui--activity-is-automatic';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7eff89c785ae711eeae0bb4b00d78a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui--activity-is-manual';
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
                
                $buffer .= 'rui--activity-is-manual';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD66a4732e65b4cb42ca35ac9a74da6a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#isautomatic}}rui--activity-is-automatic{{/isautomatic}}{{#showmanualcompletion}}rui--activity-is-manual{{/showmanualcompletion}}';
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
                
                // 'isautomatic' section
                $value = $context->find('isautomatic');
                $buffer .= $this->sectionA6757e1db9273769542d5d993cc3db2a($context, $indent, $value);
                // 'showmanualcompletion' section
                $value = $context->find('showmanualcompletion');
                $buffer .= $this->sectionC7eff89c785ae711eeae0bb4b00d78a2($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e7d3cdfffee27291ffca5f384d8d23d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{moveicon}}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('moveicon'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4d533f216f9622c64afd5d00c909083(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completionrequirements, core_course, {{activityname}}';
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
                
                $buffer .= 'completionrequirements, core_course, ';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5eca502276b2200d2da0c0933c304608(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{$ core_course/completion_automatic }}
                                    {{> core_course/completion_automatic }}
                                {{/ core_course/completion_automatic }}
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
                
                $blockFunction = $context->findInBlock('core_course/completion_automatic');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_course/completion_automatic')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                                    ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c780bbdc5fd6dca97a851c09ab9ac58(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="rui-completion-info mb-2 automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                            {{#completiondetails}}
                                {{$ core_course/completion_automatic }}
                                    {{> core_course/completion_automatic }}
                                {{/ core_course/completion_automatic }}
                            {{/completiondetails}}
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
                
                $buffer .= $indent . '                        <div class="rui-completion-info mb-2 automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB4d533f216f9622c64afd5d00c909083($context, $indent, $value);
                $buffer .= '">
';
                // 'completiondetails' section
                $value = $context->find('completiondetails');
                $buffer .= $this->section5eca502276b2200d2da0c0933c304608($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF8637b57a3a6e136ee4f55c9909d0390(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{$ core_course/completion_manual }}
                                {{> core_course/completion_manual }}
                            {{/ core_course/completion_manual }}
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
                
                $blockFunction = $context->findInBlock('core_course/completion_manual');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_course/completion_manual')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                                ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9130994edfbca6a22c762a584a9cd380(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div data-region="completion-info">
                    {{#isautomatic}}
                        <div class="rui-completion-info mb-2 automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                            {{#completiondetails}}
                                {{$ core_course/completion_automatic }}
                                    {{> core_course/completion_automatic }}
                                {{/ core_course/completion_automatic }}
                            {{/completiondetails}}
                        </div>
                    {{/isautomatic}}
                    {{^isautomatic}}
                        {{#showmanualcompletion}}
                            {{$ core_course/completion_manual }}
                                {{> core_course/completion_manual }}
                            {{/ core_course/completion_manual }}
                        {{/showmanualcompletion}}
                    {{/isautomatic}}
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
                
                $buffer .= $indent . '                <div data-region="completion-info">
';
                // 'isautomatic' section
                $value = $context->find('isautomatic');
                $buffer .= $this->section9c780bbdc5fd6dca97a851c09ab9ac58($context, $indent, $value);
                // 'isautomatic' inverted section
                $value = $context->find('isautomatic');
                if (empty($value)) {
                    
                    // 'showmanualcompletion' section
                    $value = $context->find('showmanualcompletion');
                    $buffer .= $this->sectionF8637b57a3a6e136ee4f55c9909d0390($context, $indent, $value);
                }
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b72ac581920350ba3724b01f63dd7fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#uservisible}}
                <div data-region="completion-info">
                    {{#isautomatic}}
                        <div class="rui-completion-info mb-2 automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                            {{#completiondetails}}
                                {{$ core_course/completion_automatic }}
                                    {{> core_course/completion_automatic }}
                                {{/ core_course/completion_automatic }}
                            {{/completiondetails}}
                        </div>
                    {{/isautomatic}}
                    {{^isautomatic}}
                        {{#showmanualcompletion}}
                            {{$ core_course/completion_manual }}
                                {{> core_course/completion_manual }}
                            {{/ core_course/completion_manual }}
                        {{/showmanualcompletion}}
                    {{/isautomatic}}
                </div>
            {{/uservisible}}
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
                
                // 'uservisible' section
                $value = $context->find('uservisible');
                $buffer .= $this->section9130994edfbca6a22c762a584a9cd380($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEfba717b79d0aafcbc9fc396f1f8ad50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div data-region="activity-information" data-activityname="{{activityname}}" class="activity-information">
        {{#hascompletion}}
            {{#uservisible}}
                <div data-region="completion-info">
                    {{#isautomatic}}
                        <div class="rui-completion-info mb-2 automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                            {{#completiondetails}}
                                {{$ core_course/completion_automatic }}
                                    {{> core_course/completion_automatic }}
                                {{/ core_course/completion_automatic }}
                            {{/completiondetails}}
                        </div>
                    {{/isautomatic}}
                    {{^isautomatic}}
                        {{#showmanualcompletion}}
                            {{$ core_course/completion_manual }}
                                {{> core_course/completion_manual }}
                            {{/ core_course/completion_manual }}
                        {{/showmanualcompletion}}
                    {{/isautomatic}}
                </div>
            {{/uservisible}}
        {{/hascompletion}}
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
                
                $buffer .= $indent . '    <div data-region="activity-information" data-activityname="';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="activity-information">
';
                // 'hascompletion' section
                $value = $context->find('hascompletion');
                $buffer .= $this->section2b72ac581920350ba3724b01f63dd7fd($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC98254c424351c4907bf10cd15deec0c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{$core_course/activity_date}}
                            {{>core_course/activity_date}}
                        {{/core_course/activity_date}}
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
                
                $blockFunction = $context->findInBlock('core_course/activity_date');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_course/activity_date')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                            ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE28497814f1ecdb86ddfcc99c2a394a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div data-region="activity-dates" class="rui-activity-dates activity-dates course-description-item">
                    {{#activitydates}}
                        {{$core_course/activity_date}}
                            {{>core_course/activity_date}}
                        {{/core_course/activity_date}}
                    {{/activitydates}}
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
                
                $buffer .= $indent . '            <div data-region="activity-dates" class="rui-activity-dates activity-dates course-description-item">
';
                // 'activitydates' section
                $value = $context->find('activitydates');
                $buffer .= $this->sectionC98254c424351c4907bf10cd15deec0c($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4ee8c45b0acfd58eae4f5542a7a22df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#hasdates}}
            <div data-region="activity-dates" class="rui-activity-dates activity-dates course-description-item">
                    {{#activitydates}}
                        {{$core_course/activity_date}}
                            {{>core_course/activity_date}}
                        {{/core_course/activity_date}}
                    {{/activitydates}}
            </div>
            {{/hasdates}}
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
                
                // 'hasdates' section
                $value = $context->find('hasdates');
                $buffer .= $this->sectionE28497814f1ecdb86ddfcc99c2a394a0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36c5e6287510ffac91dada33176691d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{$ core/inplace_editable }}
                {{> core/inplace_editable }}
            {{/ core/inplace_editable }}
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
                
                $blockFunction = $context->findInBlock('core/inplace_editable');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core/inplace_editable')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c3f9e3bbd0277d15dc96302ffe2ba21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="activity-actions align-self-start">
                {{$ core_courseformat/local/content/cm/controlmenu }}
                    {{> core_courseformat/local/content/cm/controlmenu }}
                {{/ core_courseformat/local/content/cm/controlmenu }}
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
                
                $buffer .= $indent . '            <div class="activity-actions align-self-start">
';
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/controlmenu');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/controlmenu')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA6913c60b07e14e2e80261524d0b2320(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{$ core_courseformat/local/content/cm/badges }}
            {{> core_courseformat/local/content/cm/badges }}
        {{/ core_courseformat/local/content/cm/badges }}
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
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/badges');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/badges')) {
                        $buffer .= $partial->renderInternal($context, $indent . '            ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section746de66bee105811578d855ec762f801(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'course-description-item ';
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
                
                $buffer .= 'course-description-item ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01802e74a9df09e6720f7c374dd8eba6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="activity-altcontent mt-2 {{#hasname}}course-description-item {{/hasname}}{{^hasname}}contentwithoutlink{{/hasname}} d-flex">
                <div class="flex-fill description-inner">
                    {{{altcontent}}}
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
                
                $buffer .= $indent . '            <div class="activity-altcontent mt-2 ';
                // 'hasname' section
                $value = $context->find('hasname');
                $buffer .= $this->section746de66bee105811578d855ec762f801($context, $indent, $value);
                // 'hasname' inverted section
                $value = $context->find('hasname');
                if (empty($value)) {
                    
                    $buffer .= 'contentwithoutlink';
                }
                $buffer .= ' d-flex">
';
                $buffer .= $indent . '                <div class="flex-fill description-inner">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('altcontent'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59227921106a62badb39181ab68051f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{$ core_courseformat/local/content/cm/availability }}
                {{> core_courseformat/local/content/cm/availability }}
            {{/ core_courseformat/local/content/cm/availability }}
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
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/availability');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/availability')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section533038c410ebfcca794b270cb3169119(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-contentafterlink afterlink mt-2">
            {{{afterlink}}}
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
                
                $buffer .= $indent . '        <div class="rui-contentafterlink afterlink mt-2">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('afterlink'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
