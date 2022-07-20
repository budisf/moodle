<?php

class __Mustache_34c5b43bfd4b8b58a7d985a639a36099 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="content-bank-container ';
        // 'viewlist' section
        $value = $context->find('viewlist');
        $buffer .= $this->section19dda5f76a8e3fbe9fbc9198731628ca($context, $indent, $value);
        $buffer .= ' ';
        // 'viewlist' inverted section
        $value = $context->find('viewlist');
        if (empty($value)) {
            
            $buffer .= 'view-grid';
        }
        $buffer .= '"
';
        $buffer .= $indent . 'data-region="contentbank">
';
        $buffer .= $indent . '    <div class="d-flex justify-content-between flex-column flex-wrap flex-sm-row pb-2 mb-4 border-bottom">
';
        $buffer .= $indent . '        <div class="cb-search-container mb-2">
';
        if ($partial = $this->mustache->loadPartial('core_contentbank/bankcontent/search')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="cb-toolbar-container mb-2 d-flex">
';
        if ($partial = $this->mustache->loadPartial('core_contentbank/bankcontent/toolbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="cb-navigation-container mb-2">
';
        if ($partial = $this->mustache->loadPartial('core_contentbank/bankcontent/navigation')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="rui-content-bank">
';
        $buffer .= $indent . '        <div class="content-bank">
';
        $buffer .= $indent . '            <div class="cb-navbar">
';
        $buffer .= $indent . '                <div class="cb-navbar-breadbrumb">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="cb-navbar-totalsearch badge badge-success d-none">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        // 'contents.0' section
        $value = $context->findDot('contents.0');
        $buffer .= $this->section8d48f9fb4bec53147fb50450b3af5e0c($context, $indent, $value);
        // 'contents.0' inverted section
        $value = $context->findDot('contents.0');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="cb-content-wrapper d-flex flex-wrap p-2" data-region="filearea">
';
            $buffer .= $indent . '                    <div class="w-100 p-3 text-center text-muted">
';
            $buffer .= $indent . '                        ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionB63c34da46c8607bf8757e3d2073b6ec($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </div>
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section19dda5f76a8e3fbe9fbc9198731628ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'view-list';
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
                
                $buffer .= 'view-list';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEfb060e8e340aeef038a9f361ae84863(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contentname, contentbank ';
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
                
                $buffer .= ' contentname, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09e81649e361630dba5bdcdc8f81f0df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} contentname, contentbank {{/str}} ';
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
                
                $buffer .= ' sortbyx, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEfb060e8e340aeef038a9f361ae84863($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAcf19a95522adab83126f605063b6ad7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' uses, contentbank ';
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
                
                $buffer .= ' uses, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b5130c103c6fa67c632d55f426cab44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} uses, contentbank {{/str}} ';
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
                
                $buffer .= ' sortbyx, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAcf19a95522adab83126f605063b6ad7($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD991ac8c3a8732e5beba939c72b9b033(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastmodified, contentbank ';
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
                
                $buffer .= ' lastmodified, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16861daffd416dd352c34f90b67af6ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} lastmodified, contentbank {{/str}} ';
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
                
                $buffer .= ' sortbyx, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD991ac8c3a8732e5beba939c72b9b033($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f3049b376b3c382ea32b3d74c46c120(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' size, contentbank ';
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
                
                $buffer .= ' size, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBee1cbe9c7e14fb1a44fc8da0f4dda49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} size, contentbank {{/str}} ';
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
                
                $buffer .= ' sortbyx, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9f3049b376b3c382ea32b3d74c46c120($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01b2c4e2861d98a63b5cea7e807c6c31(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' type, contentbank ';
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
                
                $buffer .= ' type, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c1371b59553fb5335a576b903796d65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} type, contentbank {{/str}} ';
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
                
                $buffer .= ' sortbyx, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section01b2c4e2861d98a63b5cea7e807c6c31($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE87fcaabdead8162e6c818fca20a54cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' author, contentbank ';
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
                
                $buffer .= ' author, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57945adec13d7308ecb9d1022868811f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} author, contentbank {{/str}} ';
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
                
                $buffer .= ' sortbyx, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE87fcaabdead8162e6c818fca20a54cb($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa192024ff24af5bf24af89dd7f3b575(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'row';
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
                
                $buffer .= 'row';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a5dfe4660baa62f7bdf21a7b9cf5f30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cb-unlisted';
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
                
                $buffer .= 'cb-unlisted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c16870499a70829fcce540bcae4c23e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimedatetimeshort, core_langconfig ';
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
                
                $buffer .= ' strftimedatetimeshort, core_langconfig ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC65fb0e3104962a85688b3451c5eaa8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{ timemodified }}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} ';
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
                $value = $this->resolveValue($context->find('timemodified'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3c16870499a70829fcce540bcae4c23e($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE979b52547441801d761bb493efee0f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div role="{{#viewlist}}row{{/viewlist}}{{^viewlist}}listitem{{/viewlist}}"
                        class="cb-listitem {{#visibilityunlisted}}cb-unlisted{{/visibilityunlisted}}"
                        data-file="{{ title }}"
                        data-name="{{ name }}"
                        data-bytes="{{ bytes }}"
                        data-uses="{{ uses }}"
                        data-timemodified="{{ timemodified }}"
                        data-type="{{ type }}"
                        data-author="{{ author }}">
                        <div class="cb-file cb-column position-relative">
                            <div class="cb-thumbnail" role="img" aria-label="{{ name }}"
                            style="background-image: url(\'{{{ icon }}}\');">
                            </div>
                            <a href="{{{ link }}}" class="cb-link stretched-link" title="{{ name }}">
                                <span class="cb-name word-break-all clamp-2" data-region="cb-content-name">
                                    {{{ name }}}
                                </span>
                            </a>
                        </div>
                        <div class="cb-uses cb-column small">
                            {{ uses }}
                        </div>
                        <div class="cb-date cb-column small">
                            {{#userdate}} {{ timemodified }}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} {{/userdate}}
                        </div>
                        <div class="cb-size cb-column small">
                            {{ size }}
                        </div>
                        <div class="cb-type cb-column small">
                            {{{ type }}}
                        </div>
                        <div class="cb-type cb-column last small">
                            {{{ author }}}
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
                
                $buffer .= $indent . '                    <div role="';
                // 'viewlist' section
                $value = $context->find('viewlist');
                $buffer .= $this->sectionDa192024ff24af5bf24af89dd7f3b575($context, $indent, $value);
                // 'viewlist' inverted section
                $value = $context->find('viewlist');
                if (empty($value)) {
                    
                    $buffer .= 'listitem';
                }
                $buffer .= '"
';
                $buffer .= $indent . '                        class="cb-listitem ';
                // 'visibilityunlisted' section
                $value = $context->find('visibilityunlisted');
                $buffer .= $this->section0a5dfe4660baa62f7bdf21a7b9cf5f30($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-file="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-bytes="';
                $value = $this->resolveValue($context->find('bytes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-uses="';
                $value = $this->resolveValue($context->find('uses'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-timemodified="';
                $value = $this->resolveValue($context->find('timemodified'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-type="';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-author="';
                $value = $this->resolveValue($context->find('author'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="cb-file cb-column position-relative">
';
                $buffer .= $indent . '                            <div class="cb-thumbnail" role="img" aria-label="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                            style="background-image: url(\'';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= $value;
                $buffer .= '\');">
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= '" class="cb-link stretched-link" title="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="cb-name word-break-all clamp-2" data-region="cb-content-name">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="cb-uses cb-column small">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('uses'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="cb-date cb-column small">
';
                $buffer .= $indent . '                            ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->sectionC65fb0e3104962a85688b3451c5eaa8e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="cb-size cb-column small">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('size'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="cb-type cb-column small">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="cb-type cb-column last small">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('author'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8d48f9fb4bec53147fb50450b3af5e0c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="cb-content-wrapper d-flex px-2" data-region="filearea">
                    <div class="cb-heading bg-white">
                        <div class="cb-file cb-column d-flex">
                            <div class="title">{{#str}} contentname, contentbank {{/str}}</div>
                            <button class="btn-icon--sm btn-secondary cb-btnsort dir-none ml-auto" data-string="contentname" data-action="sortname"
                                title="{{#str}} sortbyx, core, {{#str}} contentname, contentbank {{/str}} {{/str}}">
                                <span class="default">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.75 7C4.33579 7 4 7.33579 4 7.75C4 8.16421 4.33579 8.5 4.75 8.5V7ZM19.25 8.5C19.6642 8.5 20 8.16421 20 7.75C20 7.33579 19.6642 7 19.25 7V8.5ZM4.75 8.5H19.25V7H4.75V8.5Z" fill="currentColor"></path>
                                        <path d="M6.75 11C6.33579 11 6 11.3358 6 11.75C6 12.1642 6.33579 12.5 6.75 12.5V11ZM17.25 12.5C17.6642 12.5 18 12.1642 18 11.75C18 11.3358 17.6642 11 17.25 11V12.5ZM6.75 12.5H17.25V11H6.75V12.5Z" fill="currentColor"></path>
                                        <path d="M8.75 15C8.33579 15 8 15.3358 8 15.75C8 16.1642 8.33579 16.5 8.75 16.5V15ZM15.25 16.5C15.6642 16.5 16 16.1642 16 15.75C16 15.3358 15.6642 15 15.25 15V16.5ZM8.75 16.5H15.25V15H8.75V16.5Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <span class="desc">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.25 14L4.75 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.25 18.25L4.75 18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.25 9.75L4.75 9.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.75 14.75L16 18.25L19.25 14.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16 5.75V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <span class="asc">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.25 10L4.75 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.25 5.75L4.75 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.25 14.25L4.75 14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.75 9.25L16 5.75L19.25 9.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16 6.5V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="cb-uses cb-column d-flex">
                            <div class="title">{{#str}} uses, contentbank {{/str}}</div>
                            <button class="btn-icon--sm btn-secondary cb-btnsort dir-none ml-auto" data-string="uses" data-action="sortuses"
                            title="{{#str}} sortbyx, core, {{#str}} uses, contentbank {{/str}} {{/str}}">
                                <span class="default">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.75 7C4.33579 7 4 7.33579 4 7.75C4 8.16421 4.33579 8.5 4.75 8.5V7ZM19.25 8.5C19.6642 8.5 20 8.16421 20 7.75C20 7.33579 19.6642 7 19.25 7V8.5ZM4.75 8.5H19.25V7H4.75V8.5Z" fill="currentColor"></path>
                                        <path d="M6.75 11C6.33579 11 6 11.3358 6 11.75C6 12.1642 6.33579 12.5 6.75 12.5V11ZM17.25 12.5C17.6642 12.5 18 12.1642 18 11.75C18 11.3358 17.6642 11 17.25 11V12.5ZM6.75 12.5H17.25V11H6.75V12.5Z" fill="currentColor"></path>
                                        <path d="M8.75 15C8.33579 15 8 15.3358 8 15.75C8 16.1642 8.33579 16.5 8.75 16.5V15ZM15.25 16.5C15.6642 16.5 16 16.1642 16 15.75C16 15.3358 15.6642 15 15.25 15V16.5ZM8.75 16.5H15.25V15H8.75V16.5Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <span class="desc">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.25 14L4.75 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.25 18.25L4.75 18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.25 9.75L4.75 9.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.75 14.75L16 18.25L19.25 14.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16 5.75V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <span class="asc">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.25 10L4.75 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.25 5.75L4.75 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.25 14.25L4.75 14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.75 9.25L16 5.75L19.25 9.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16 6.5V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="cb-date cb-column d-flex">
                            <div class="title">{{#str}} lastmodified, contentbank {{/str}}</div>
                            <button class="btn-icon--sm btn-secondary cb-btnsort dir-none ml-auto" data-string="lastmodified" data-action="sortdate"
                            title="{{#str}} sortbyx, core, {{#str}} lastmodified, contentbank {{/str}} {{/str}}">
                                <span class="default">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.75 7C4.33579 7 4 7.33579 4 7.75C4 8.16421 4.33579 8.5 4.75 8.5V7ZM19.25 8.5C19.6642 8.5 20 8.16421 20 7.75C20 7.33579 19.6642 7 19.25 7V8.5ZM4.75 8.5H19.25V7H4.75V8.5Z" fill="currentColor"></path>
                                        <path d="M6.75 11C6.33579 11 6 11.3358 6 11.75C6 12.1642 6.33579 12.5 6.75 12.5V11ZM17.25 12.5C17.6642 12.5 18 12.1642 18 11.75C18 11.3358 17.6642 11 17.25 11V12.5ZM6.75 12.5H17.25V11H6.75V12.5Z" fill="currentColor"></path>
                                        <path d="M8.75 15C8.33579 15 8 15.3358 8 15.75C8 16.1642 8.33579 16.5 8.75 16.5V15ZM15.25 16.5C15.6642 16.5 16 16.1642 16 15.75C16 15.3358 15.6642 15 15.25 15V16.5ZM8.75 16.5H15.25V15H8.75V16.5Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <span class="desc">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.25 14L4.75 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.25 18.25L4.75 18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.25 9.75L4.75 9.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.75 14.75L16 18.25L19.25 14.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16 5.75V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <span class="asc">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.25 10L4.75 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.25 5.75L4.75 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.25 14.25L4.75 14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.75 9.25L16 5.75L19.25 9.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16 6.5V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="cb-size cb-column d-flex">
                            <div class="title">{{#str}} size, contentbank {{/str}}</div>
                            <button class="btn-icon--sm btn-secondary cb-btnsort dir-none ml-auto" data-string="size" data-action="sortsize"
                            title="{{#str}} sortbyx, core, {{#str}} size, contentbank {{/str}} {{/str}}">
                                <span class="default">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.75 7C4.33579 7 4 7.33579 4 7.75C4 8.16421 4.33579 8.5 4.75 8.5V7ZM19.25 8.5C19.6642 8.5 20 8.16421 20 7.75C20 7.33579 19.6642 7 19.25 7V8.5ZM4.75 8.5H19.25V7H4.75V8.5Z" fill="currentColor"></path>
                                        <path d="M6.75 11C6.33579 11 6 11.3358 6 11.75C6 12.1642 6.33579 12.5 6.75 12.5V11ZM17.25 12.5C17.6642 12.5 18 12.1642 18 11.75C18 11.3358 17.6642 11 17.25 11V12.5ZM6.75 12.5H17.25V11H6.75V12.5Z" fill="currentColor"></path>
                                        <path d="M8.75 15C8.33579 15 8 15.3358 8 15.75C8 16.1642 8.33579 16.5 8.75 16.5V15ZM15.25 16.5C15.6642 16.5 16 16.1642 16 15.75C16 15.3358 15.6642 15 15.25 15V16.5ZM8.75 16.5H15.25V15H8.75V16.5Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <span class="desc">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.25 14L4.75 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.25 18.25L4.75 18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.25 9.75L4.75 9.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.75 14.75L16 18.25L19.25 14.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16 5.75V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <span class="asc">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.25 10L4.75 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.25 5.75L4.75 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.25 14.25L4.75 14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.75 9.25L16 5.75L19.25 9.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16 6.5V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="cb-type cb-column d-flex">
                            <div class="title">{{#str}} type, contentbank {{/str}}</div>
                            <button class="btn-icon--sm btn-secondary cb-btnsort dir-none ml-auto" data-string="type" data-action="sorttype"
                            title="{{#str}} sortbyx, core, {{#str}} type, contentbank {{/str}} {{/str}}">
                                <span class="default">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.75 7C4.33579 7 4 7.33579 4 7.75C4 8.16421 4.33579 8.5 4.75 8.5V7ZM19.25 8.5C19.6642 8.5 20 8.16421 20 7.75C20 7.33579 19.6642 7 19.25 7V8.5ZM4.75 8.5H19.25V7H4.75V8.5Z" fill="currentColor"></path>
                                        <path d="M6.75 11C6.33579 11 6 11.3358 6 11.75C6 12.1642 6.33579 12.5 6.75 12.5V11ZM17.25 12.5C17.6642 12.5 18 12.1642 18 11.75C18 11.3358 17.6642 11 17.25 11V12.5ZM6.75 12.5H17.25V11H6.75V12.5Z" fill="currentColor"></path>
                                        <path d="M8.75 15C8.33579 15 8 15.3358 8 15.75C8 16.1642 8.33579 16.5 8.75 16.5V15ZM15.25 16.5C15.6642 16.5 16 16.1642 16 15.75C16 15.3358 15.6642 15 15.25 15V16.5ZM8.75 16.5H15.25V15H8.75V16.5Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <span class="desc">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.25 14L4.75 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.25 18.25L4.75 18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.25 9.75L4.75 9.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.75 14.75L16 18.25L19.25 14.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16 5.75V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <span class="asc">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.25 10L4.75 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.25 5.75L4.75 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.25 14.25L4.75 14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.75 9.25L16 5.75L19.25 9.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16 6.5V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="cb-author cb-column d-flex last">
                            <div class="title">{{#str}} author, contentbank {{/str}}</div>
                            <button class="btn-icon--sm btn-secondary cb-btnsort dir-none ml-auto" data-string="author" data-action="sortauthor"
                            title="{{#str}} sortbyx, core, {{#str}} author, contentbank {{/str}} {{/str}}">
                                <span class="default">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.75 7C4.33579 7 4 7.33579 4 7.75C4 8.16421 4.33579 8.5 4.75 8.5V7ZM19.25 8.5C19.6642 8.5 20 8.16421 20 7.75C20 7.33579 19.6642 7 19.25 7V8.5ZM4.75 8.5H19.25V7H4.75V8.5Z" fill="currentColor"></path>
                                        <path d="M6.75 11C6.33579 11 6 11.3358 6 11.75C6 12.1642 6.33579 12.5 6.75 12.5V11ZM17.25 12.5C17.6642 12.5 18 12.1642 18 11.75C18 11.3358 17.6642 11 17.25 11V12.5ZM6.75 12.5H17.25V11H6.75V12.5Z" fill="currentColor"></path>
                                        <path d="M8.75 15C8.33579 15 8 15.3358 8 15.75C8 16.1642 8.33579 16.5 8.75 16.5V15ZM15.25 16.5C15.6642 16.5 16 16.1642 16 15.75C16 15.3358 15.6642 15 15.25 15V16.5ZM8.75 16.5H15.25V15H8.75V16.5Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <span class="desc">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.25 14L4.75 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.25 18.25L4.75 18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.25 9.75L4.75 9.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.75 14.75L16 18.25L19.25 14.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16 5.75V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <span class="asc">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.25 10L4.75 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.25 5.75L4.75 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.25 14.25L4.75 14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.75 9.25L16 5.75L19.25 9.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16 6.5V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                {{#contents}}
                    <div role="{{#viewlist}}row{{/viewlist}}{{^viewlist}}listitem{{/viewlist}}"
                        class="cb-listitem {{#visibilityunlisted}}cb-unlisted{{/visibilityunlisted}}"
                        data-file="{{ title }}"
                        data-name="{{ name }}"
                        data-bytes="{{ bytes }}"
                        data-uses="{{ uses }}"
                        data-timemodified="{{ timemodified }}"
                        data-type="{{ type }}"
                        data-author="{{ author }}">
                        <div class="cb-file cb-column position-relative">
                            <div class="cb-thumbnail" role="img" aria-label="{{ name }}"
                            style="background-image: url(\'{{{ icon }}}\');">
                            </div>
                            <a href="{{{ link }}}" class="cb-link stretched-link" title="{{ name }}">
                                <span class="cb-name word-break-all clamp-2" data-region="cb-content-name">
                                    {{{ name }}}
                                </span>
                            </a>
                        </div>
                        <div class="cb-uses cb-column small">
                            {{ uses }}
                        </div>
                        <div class="cb-date cb-column small">
                            {{#userdate}} {{ timemodified }}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} {{/userdate}}
                        </div>
                        <div class="cb-size cb-column small">
                            {{ size }}
                        </div>
                        <div class="cb-type cb-column small">
                            {{{ type }}}
                        </div>
                        <div class="cb-type cb-column last small">
                            {{{ author }}}
                        </div>
                    </div>
                {{/contents}}
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
                
                $buffer .= $indent . '                <div class="cb-content-wrapper d-flex px-2" data-region="filearea">
';
                $buffer .= $indent . '                    <div class="cb-heading bg-white">
';
                $buffer .= $indent . '                        <div class="cb-file cb-column d-flex">
';
                $buffer .= $indent . '                            <div class="title">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEfb060e8e340aeef038a9f361ae84863($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                            <button class="btn-icon--sm btn-secondary cb-btnsort dir-none ml-auto" data-string="contentname" data-action="sortname"
';
                $buffer .= $indent . '                                title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section09e81649e361630dba5bdcdc8f81f0df($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="default">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M4.75 7C4.33579 7 4 7.33579 4 7.75C4 8.16421 4.33579 8.5 4.75 8.5V7ZM19.25 8.5C19.6642 8.5 20 8.16421 20 7.75C20 7.33579 19.6642 7 19.25 7V8.5ZM4.75 8.5H19.25V7H4.75V8.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                        <path d="M6.75 11C6.33579 11 6 11.3358 6 11.75C6 12.1642 6.33579 12.5 6.75 12.5V11ZM17.25 12.5C17.6642 12.5 18 12.1642 18 11.75C18 11.3358 17.6642 11 17.25 11V12.5ZM6.75 12.5H17.25V11H6.75V12.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                        <path d="M8.75 15C8.33579 15 8 15.3358 8 15.75C8 16.1642 8.33579 16.5 8.75 16.5V15ZM15.25 16.5C15.6642 16.5 16 16.1642 16 15.75C16 15.3358 15.6642 15 15.25 15V16.5ZM8.75 16.5H15.25V15H8.75V16.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                                <span class="desc">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M9.25 14L4.75 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M11.25 18.25L4.75 18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M8.25 9.75L4.75 9.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M12.75 14.75L16 18.25L19.25 14.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M16 5.75V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                                <span class="asc">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M9.25 10L4.75 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M11.25 5.75L4.75 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M8.25 14.25L4.75 14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M12.75 9.25L16 5.75L19.25 9.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M16 6.5V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="cb-uses cb-column d-flex">
';
                $buffer .= $indent . '                            <div class="title">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAcf19a95522adab83126f605063b6ad7($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                            <button class="btn-icon--sm btn-secondary cb-btnsort dir-none ml-auto" data-string="uses" data-action="sortuses"
';
                $buffer .= $indent . '                            title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2b5130c103c6fa67c632d55f426cab44($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="default">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M4.75 7C4.33579 7 4 7.33579 4 7.75C4 8.16421 4.33579 8.5 4.75 8.5V7ZM19.25 8.5C19.6642 8.5 20 8.16421 20 7.75C20 7.33579 19.6642 7 19.25 7V8.5ZM4.75 8.5H19.25V7H4.75V8.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                        <path d="M6.75 11C6.33579 11 6 11.3358 6 11.75C6 12.1642 6.33579 12.5 6.75 12.5V11ZM17.25 12.5C17.6642 12.5 18 12.1642 18 11.75C18 11.3358 17.6642 11 17.25 11V12.5ZM6.75 12.5H17.25V11H6.75V12.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                        <path d="M8.75 15C8.33579 15 8 15.3358 8 15.75C8 16.1642 8.33579 16.5 8.75 16.5V15ZM15.25 16.5C15.6642 16.5 16 16.1642 16 15.75C16 15.3358 15.6642 15 15.25 15V16.5ZM8.75 16.5H15.25V15H8.75V16.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                                <span class="desc">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M9.25 14L4.75 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M11.25 18.25L4.75 18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M8.25 9.75L4.75 9.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M12.75 14.75L16 18.25L19.25 14.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M16 5.75V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                                <span class="asc">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M9.25 10L4.75 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M11.25 5.75L4.75 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M8.25 14.25L4.75 14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M12.75 9.25L16 5.75L19.25 9.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M16 6.5V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="cb-date cb-column d-flex">
';
                $buffer .= $indent . '                            <div class="title">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD991ac8c3a8732e5beba939c72b9b033($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                            <button class="btn-icon--sm btn-secondary cb-btnsort dir-none ml-auto" data-string="lastmodified" data-action="sortdate"
';
                $buffer .= $indent . '                            title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section16861daffd416dd352c34f90b67af6ed($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="default">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M4.75 7C4.33579 7 4 7.33579 4 7.75C4 8.16421 4.33579 8.5 4.75 8.5V7ZM19.25 8.5C19.6642 8.5 20 8.16421 20 7.75C20 7.33579 19.6642 7 19.25 7V8.5ZM4.75 8.5H19.25V7H4.75V8.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                        <path d="M6.75 11C6.33579 11 6 11.3358 6 11.75C6 12.1642 6.33579 12.5 6.75 12.5V11ZM17.25 12.5C17.6642 12.5 18 12.1642 18 11.75C18 11.3358 17.6642 11 17.25 11V12.5ZM6.75 12.5H17.25V11H6.75V12.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                        <path d="M8.75 15C8.33579 15 8 15.3358 8 15.75C8 16.1642 8.33579 16.5 8.75 16.5V15ZM15.25 16.5C15.6642 16.5 16 16.1642 16 15.75C16 15.3358 15.6642 15 15.25 15V16.5ZM8.75 16.5H15.25V15H8.75V16.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                                <span class="desc">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M9.25 14L4.75 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M11.25 18.25L4.75 18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M8.25 9.75L4.75 9.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M12.75 14.75L16 18.25L19.25 14.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M16 5.75V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                                <span class="asc">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M9.25 10L4.75 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M11.25 5.75L4.75 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M8.25 14.25L4.75 14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M12.75 9.25L16 5.75L19.25 9.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M16 6.5V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="cb-size cb-column d-flex">
';
                $buffer .= $indent . '                            <div class="title">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9f3049b376b3c382ea32b3d74c46c120($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                            <button class="btn-icon--sm btn-secondary cb-btnsort dir-none ml-auto" data-string="size" data-action="sortsize"
';
                $buffer .= $indent . '                            title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBee1cbe9c7e14fb1a44fc8da0f4dda49($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="default">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M4.75 7C4.33579 7 4 7.33579 4 7.75C4 8.16421 4.33579 8.5 4.75 8.5V7ZM19.25 8.5C19.6642 8.5 20 8.16421 20 7.75C20 7.33579 19.6642 7 19.25 7V8.5ZM4.75 8.5H19.25V7H4.75V8.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                        <path d="M6.75 11C6.33579 11 6 11.3358 6 11.75C6 12.1642 6.33579 12.5 6.75 12.5V11ZM17.25 12.5C17.6642 12.5 18 12.1642 18 11.75C18 11.3358 17.6642 11 17.25 11V12.5ZM6.75 12.5H17.25V11H6.75V12.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                        <path d="M8.75 15C8.33579 15 8 15.3358 8 15.75C8 16.1642 8.33579 16.5 8.75 16.5V15ZM15.25 16.5C15.6642 16.5 16 16.1642 16 15.75C16 15.3358 15.6642 15 15.25 15V16.5ZM8.75 16.5H15.25V15H8.75V16.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                                <span class="desc">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M9.25 14L4.75 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M11.25 18.25L4.75 18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M8.25 9.75L4.75 9.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M12.75 14.75L16 18.25L19.25 14.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M16 5.75V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                                <span class="asc">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M9.25 10L4.75 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M11.25 5.75L4.75 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M8.25 14.25L4.75 14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M12.75 9.25L16 5.75L19.25 9.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M16 6.5V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="cb-type cb-column d-flex">
';
                $buffer .= $indent . '                            <div class="title">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section01b2c4e2861d98a63b5cea7e807c6c31($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                            <button class="btn-icon--sm btn-secondary cb-btnsort dir-none ml-auto" data-string="type" data-action="sorttype"
';
                $buffer .= $indent . '                            title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0c1371b59553fb5335a576b903796d65($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="default">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M4.75 7C4.33579 7 4 7.33579 4 7.75C4 8.16421 4.33579 8.5 4.75 8.5V7ZM19.25 8.5C19.6642 8.5 20 8.16421 20 7.75C20 7.33579 19.6642 7 19.25 7V8.5ZM4.75 8.5H19.25V7H4.75V8.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                        <path d="M6.75 11C6.33579 11 6 11.3358 6 11.75C6 12.1642 6.33579 12.5 6.75 12.5V11ZM17.25 12.5C17.6642 12.5 18 12.1642 18 11.75C18 11.3358 17.6642 11 17.25 11V12.5ZM6.75 12.5H17.25V11H6.75V12.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                        <path d="M8.75 15C8.33579 15 8 15.3358 8 15.75C8 16.1642 8.33579 16.5 8.75 16.5V15ZM15.25 16.5C15.6642 16.5 16 16.1642 16 15.75C16 15.3358 15.6642 15 15.25 15V16.5ZM8.75 16.5H15.25V15H8.75V16.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                                <span class="desc">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M9.25 14L4.75 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M11.25 18.25L4.75 18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M8.25 9.75L4.75 9.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M12.75 14.75L16 18.25L19.25 14.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M16 5.75V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                                <span class="asc">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M9.25 10L4.75 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M11.25 5.75L4.75 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M8.25 14.25L4.75 14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M12.75 9.25L16 5.75L19.25 9.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M16 6.5V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="cb-author cb-column d-flex last">
';
                $buffer .= $indent . '                            <div class="title">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE87fcaabdead8162e6c818fca20a54cb($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                            <button class="btn-icon--sm btn-secondary cb-btnsort dir-none ml-auto" data-string="author" data-action="sortauthor"
';
                $buffer .= $indent . '                            title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section57945adec13d7308ecb9d1022868811f($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="default">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M4.75 7C4.33579 7 4 7.33579 4 7.75C4 8.16421 4.33579 8.5 4.75 8.5V7ZM19.25 8.5C19.6642 8.5 20 8.16421 20 7.75C20 7.33579 19.6642 7 19.25 7V8.5ZM4.75 8.5H19.25V7H4.75V8.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                        <path d="M6.75 11C6.33579 11 6 11.3358 6 11.75C6 12.1642 6.33579 12.5 6.75 12.5V11ZM17.25 12.5C17.6642 12.5 18 12.1642 18 11.75C18 11.3358 17.6642 11 17.25 11V12.5ZM6.75 12.5H17.25V11H6.75V12.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                        <path d="M8.75 15C8.33579 15 8 15.3358 8 15.75C8 16.1642 8.33579 16.5 8.75 16.5V15ZM15.25 16.5C15.6642 16.5 16 16.1642 16 15.75C16 15.3358 15.6642 15 15.25 15V16.5ZM8.75 16.5H15.25V15H8.75V16.5Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                                <span class="desc">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M9.25 14L4.75 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M11.25 18.25L4.75 18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M8.25 9.75L4.75 9.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M12.75 14.75L16 18.25L19.25 14.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M16 5.75V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                                <span class="asc">
';
                $buffer .= $indent . '                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                        <path d="M9.25 10L4.75 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M11.25 5.75L4.75 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M8.25 14.25L4.75 14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M12.75 9.25L16 5.75L19.25 9.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                        <path d="M16 6.5V18.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                // 'contents' section
                $value = $context->find('contents');
                $buffer .= $this->sectionE979b52547441801d761bb493efee0f9($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB63c34da46c8607bf8757e3d2073b6ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nocontentavailable, core_contentbank ';
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
                
                $buffer .= ' nocontentavailable, core_contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
