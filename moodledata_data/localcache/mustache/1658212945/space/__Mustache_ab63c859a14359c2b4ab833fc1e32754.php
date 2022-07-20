<?php

class __Mustache_ab63c859a14359c2b4ab833fc1e32754 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer id="s-page-footer" class="wrapper-page" ';
        // 'footerbgimg' section
        $value = $context->find('footerbgimg');
        $buffer .= $this->section4f71eca16c6200a7350d9514ecddd0ad($context, $indent, $value);
        $buffer .= ' ';
        // 'footercustomcss' section
        $value = $context->find('footercustomcss');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <div class="';
        // 'isfrontpage' inverted section
        $value = $context->find('isfrontpage');
        if (empty($value)) {
            
            $buffer .= 'wrapper-fw';
        }
        $buffer .= ' ';
        // 'isfrontpage' section
        $value = $context->find('isfrontpage');
        $buffer .= $this->section81636657c9d6f9133e14c1fe49987043($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        // 'footerblock1' section
        $value = $context->find('footerblock1');
        $buffer .= $this->section603ed1b0a68fb3753ad0f772c453f404($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'footerblock2' section
        $value = $context->find('footerblock2');
        $buffer .= $this->section59c455c60487aaaec5b058e206603e68($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'footerblock3' section
        $value = $context->find('footerblock3');
        $buffer .= $this->section9c547f5e236ba0f55a5930803e6ca5e6($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="rui-footer-copy rui-footer-content">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('footercopy'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="mt-3">
';
        $buffer .= $indent . '                <div id="course-footer">';
        $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="rui-footer-btns">
';
        // 'output.page_doc_link' section
        $value = $context->findDot('output.page_doc_link');
        $buffer .= $this->sectionA5045e176c80a1e38cc2b65fe257dee2($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'output.services_support_link' section
        $value = $context->findDot('output.services_support_link');
        $buffer .= $this->sectionB296d7c23f2b2043f3fa9868d01f2f5a($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'output.supportemail' section
        $value = $context->findDot('output.supportemail');
        $buffer .= $this->sectionD8b1a3896028d2a4b21f0adcaa75a961($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="tool_usertours-resettourcontainer"></div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="rui-footer-btns">';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '                <div class="rui-debug rui-footer-btns w-100 d-block my-2 small">';
        $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '
';
        // 'displaycustomalert' section
        $value = $context->find('displaycustomalert');
        $buffer .= $this->sectionDc8effa71eac10ddefcf3f0b523188af($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . ' 
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';

        return $buffer;
    }

    private function section4f71eca16c6200a7350d9514ecddd0ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'style="background-image: url(\'{{{footerbgimg}}}\');"';
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
                
                $buffer .= 'style="background-image: url(\'';
                $value = $this->resolveValue($context->find('footerbgimg'), $context);
                $buffer .= $value;
                $buffer .= '\');"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81636657c9d6f9133e14c1fe49987043(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'wrapper-xl';
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
                
                $buffer .= 'wrapper-xl';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section603ed1b0a68fb3753ad0f772c453f404(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-footer-content rui-footer-block--1">
            <div class="mb-5">
            {{{ footerblock1 }}}
            </div>
        </div>
        <hr class="rui-footer-hr--1" />
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
                
                $buffer .= $indent . '        <div class="rui-footer-content rui-footer-block--1">
';
                $buffer .= $indent . '            <div class="mb-5">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('footerblock1'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <hr class="rui-footer-hr--1" />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59c455c60487aaaec5b058e206603e68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-footer-content rui-footer-block--2">
            {{{ footerblock2 }}}
        </div>
        <hr class="rui-footer-hr--2" />
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
                
                $buffer .= $indent . '        <div class="rui-footer-content rui-footer-block--2">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('footerblock2'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <hr class="rui-footer-hr--2" />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c547f5e236ba0f55a5930803e6ca5e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-footer-content  rui-footer-block--3">
            {{{ footerblock3 }}}
        </div>
        <hr class="rui-footer-hr--3" />
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
                
                $buffer .= $indent . '        <div class="rui-footer-content  rui-footer-block--3">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('footerblock3'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <hr class="rui-footer-hr--3" />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA5045e176c80a1e38cc2b65fe257dee2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="helplink">{{{ output.page_doc_link }}}</div>
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
                
                $buffer .= $indent . '                        <div class="helplink">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB296d7c23f2b2043f3fa9868d01f2f5a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="supportlink">{{{ output.services_support_link }}}</div>
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
                
                $buffer .= $indent . '                        <div class="supportlink">';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8b1a3896028d2a4b21f0adcaa75a961(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="suportemail">{{{ output.supportemail }}}</div>
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
                
                $buffer .= $indent . '                        <div class="suportemail">';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33eb4998ef9dfe8c0bd1dea103a52ff2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hide_alert';
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
                
                $buffer .= 'hide_alert';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5df32c823635343f7f995cd871927699(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'close_once';
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
                
                $buffer .= 'close_once';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83350429afb9b3c7102906caedb5653d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        $(document).on(\'click\', \'.close_once\', function() {
            localStorage.setItem(\'hideAlert\', \'true\');
        });

        $(document).ready(function() {
            let hide = localStorage.getItem(\'hideAlert\');
            if (hide === \'false\' || hide === null) {
                $(\'.hide_alert\').addClass(\'show\');
            }
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
                
                $buffer .= $indent . '        $(document).on(\'click\', \'.close_once\', function() {
';
                $buffer .= $indent . '            localStorage.setItem(\'hideAlert\', \'true\');
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(document).ready(function() {
';
                $buffer .= $indent . '            let hide = localStorage.getItem(\'hideAlert\');
';
                $buffer .= $indent . '            if (hide === \'false\' || hide === null) {
';
                $buffer .= $indent . '                $(\'.hide_alert\').addClass(\'show\');
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbf51b9a0fcfb43765c8ec70151f3a4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#js}}
        $(document).on(\'click\', \'.close_once\', function() {
            localStorage.setItem(\'hideAlert\', \'true\');
        });

        $(document).ready(function() {
            let hide = localStorage.getItem(\'hideAlert\');
            if (hide === \'false\' || hide === null) {
                $(\'.hide_alert\').addClass(\'show\');
            }
        });
    {{/js}}
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
                
                // 'js' section
                $value = $context->find('js');
                $buffer .= $this->section83350429afb9b3c7102906caedb5653d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc8effa71eac10ddefcf3f0b523188af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="rui-custom-alert rui-custom-alert--light alert alert-dismissible fade {{#closecustomalert}}hide_alert{{/closecustomalert}}" role="alert">
        <div class="rui-custom-alert-content">
        {{{customalerthtml}}}
        </div>
        <button class="rui-custom-alert-close {{#closecustomalert}}close_once{{/closecustomalert}}" type="button" data-dismiss="alert" aria-label="Close">
            <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.25 6.75L6.75 17.25"></path>
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.75 6.75L17.25 17.25"></path>
            </svg>
        </button>
    </div>
    {{#closecustomalert}}
    {{#js}}
        $(document).on(\'click\', \'.close_once\', function() {
            localStorage.setItem(\'hideAlert\', \'true\');
        });

        $(document).ready(function() {
            let hide = localStorage.getItem(\'hideAlert\');
            if (hide === \'false\' || hide === null) {
                $(\'.hide_alert\').addClass(\'show\');
            }
        });
    {{/js}}
    {{/closecustomalert}}
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
                
                $buffer .= $indent . '    <div class="rui-custom-alert rui-custom-alert--light alert alert-dismissible fade ';
                // 'closecustomalert' section
                $value = $context->find('closecustomalert');
                $buffer .= $this->section33eb4998ef9dfe8c0bd1dea103a52ff2($context, $indent, $value);
                $buffer .= '" role="alert">
';
                $buffer .= $indent . '        <div class="rui-custom-alert-content">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('customalerthtml'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <button class="rui-custom-alert-close ';
                // 'closecustomalert' section
                $value = $context->find('closecustomalert');
                $buffer .= $this->section5df32c823635343f7f995cd871927699($context, $indent, $value);
                $buffer .= '" type="button" data-dismiss="alert" aria-label="Close">
';
                $buffer .= $indent . '            <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.25 6.75L6.75 17.25"></path>
';
                $buffer .= $indent . '            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.75 6.75L17.25 17.25"></path>
';
                $buffer .= $indent . '            </svg>
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '    </div>
';
                // 'closecustomalert' section
                $value = $context->find('closecustomalert');
                $buffer .= $this->sectionDbf51b9a0fcfb43765c8ec70151f3a4d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
