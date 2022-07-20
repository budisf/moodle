<?php

class __Mustache_45c0b1a60e93fd3667048236042048af extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="nav-drawer" data-region="drawer" class="d-block moodle-has-zindex ';
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'closed';
        }
        $buffer .= '" aria-hidden="';
        // 'navdraweropen' section
        $value = $context->find('navdraweropen');
        $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'true';
        }
        $buffer .= '" tabindex="-1">
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '    <div class="nav-drawer-container">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('sidebartopblocks'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'customsidebarlogo' section
        $value = $context->find('customsidebarlogo');
        $buffer .= $this->sectionEd6a13b99e94e9eed86eb2aa485fac3a($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'customstcontent' section
        $value = $context->find('customstcontent');
        $buffer .= $this->sectionE5516a232765ef892c7245492f4bc795($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'output.mainsidebarmenu' section
        $value = $context->findDot('output.mainsidebarmenu');
        $buffer .= $this->section5bc3ba978114400426ea078f6c915c34($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'customsmcontent' section
        $value = $context->find('customsmcontent');
        $buffer .= $this->section88f7276c67a0d2cdb151126f127c39c8($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="rui-sidebar-mycourses">
';
        $buffer .= $indent . '            <button class="rui-sidebar-abtn rui-sidebar-nav-item-link" type="button" data-toggle="collapse" data-target="#myCoursesBox" aria-expanded="false" aria-controls="myCoursesBox">
';
        $buffer .= $indent . '                <span class="rui-sidebar-nav-icon">
';
        $buffer .= $indent . '                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
        $buffer .= $indent . '                        <path d="M10.75 7.75C10.75 6.64543 11.6454 5.75 12.75 5.75H17.25C18.3546 5.75 19.25 6.64543 19.25 7.75V16.25C19.25 17.3546 18.3546 18.25 17.25 18.25H12.75C11.6454 18.25 10.75 17.3546 10.75 16.25V7.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
        $buffer .= $indent . '                        <path d="M10.25 8.5C10.6642 8.5 11 8.16421 11 7.75C11 7.33579 10.6642 7 10.25 7V8.5ZM10.25 18C10.6642 18 11 17.6642 11 17.25C11 16.8358 10.6642 16.5 10.25 16.5V18ZM9.75 8.5H10.25V7H9.75V8.5ZM10.25 16.5H9.75V18H10.25V16.5ZM8.5 15.25V9.75H7V15.25H8.5ZM9.75 16.5C9.05964 16.5 8.5 15.9404 8.5 15.25H7C7 16.7688 8.23122 18 9.75 18V16.5ZM9.75 7C8.23122 7 7 8.23122 7 9.75H8.5C8.5 9.05964 9.05964 8.5 9.75 8.5V7Z" fill="currentColor"></path>
';
        $buffer .= $indent . '                        <path d="M7.25 9.5C7.66421 9.5 8 9.16421 8 8.75C8 8.33579 7.66421 8 7.25 8V9.5ZM7.25 17C7.66421 17 8 16.6642 8 16.25C8 15.8358 7.66421 15.5 7.25 15.5V17ZM6.75 9.5H7.25V8H6.75V9.5ZM7.25 15.5H6.75V17H7.25V15.5ZM5.5 14.25V10.75H4V14.25H5.5ZM6.75 15.5C6.05964 15.5 5.5 14.9404 5.5 14.25H4C4 15.7688 5.23122 17 6.75 17V15.5ZM6.75 8C5.23122 8 4 9.23122 4 10.75H5.5C5.5 10.0596 6.05964 9.5 6.75 9.5V8Z" fill="currentColor"></path>
';
        $buffer .= $indent . '                    </svg>
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '                <span class="rui-sidebar-nav-text">';
        $value = $this->resolveValue($context->findDot('output.space_mycourses_heading_text'), $context);
        $buffer .= $value;
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '            <div class="collapse" id="myCoursesBox">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.space_mycourses_heading'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                <div class="rui-course-wrapper">';
        $value = $this->resolveValue($context->findDot('output.space_mycourses'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.space_allcourseslink'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </div>    
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        
';
        // 'customsfcontent' section
        $value = $context->find('customsfcontent');
        $buffer .= $this->sectionBfe52556ff93a1a22bb90230d6089429($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('sidebarbottomblocks'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
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
                
                $buffer .= 'false';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f02bdab39bdb326c592eb1133254d23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dark-mode-logo';
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
                
                $buffer .= 'dark-mode-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section788395411b59d2ee863e110160dbc71a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img src="{{customsidebardmlogo}}" alt="{{sitename}}" class="rui-custom-dmlogo ml-2 img-fluid" />';
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
                
                $buffer .= '<img src="';
                $value = $this->resolveValue($context->find('customsidebardmlogo'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="rui-custom-dmlogo ml-2 img-fluid" />';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd6a13b99e94e9eed86eb2aa485fac3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-drawer-logo {{#customsidebardmlogo}}dark-mode-logo{{/customsidebardmlogo}}">
            <img src="{{customsidebarlogo}}" alt="{{sitename}}" class="rui-custom-logo ml-2 img-fluid" />
            {{#customsidebardmlogo}}<img src="{{customsidebardmlogo}}" alt="{{sitename}}" class="rui-custom-dmlogo ml-2 img-fluid" />{{/customsidebardmlogo}}
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
                
                $buffer .= $indent . '        <div class="rui-drawer-logo ';
                // 'customsidebardmlogo' section
                $value = $context->find('customsidebardmlogo');
                $buffer .= $this->section9f02bdab39bdb326c592eb1133254d23($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <img src="';
                $value = $this->resolveValue($context->find('customsidebarlogo'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="rui-custom-logo ml-2 img-fluid" />
';
                $buffer .= $indent . '            ';
                // 'customsidebardmlogo' section
                $value = $context->find('customsidebardmlogo');
                $buffer .= $this->section788395411b59d2ee863e110160dbc71a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5516a232765ef892c7245492f4bc795(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-custom-sidebar-content my-4">
        {{{customstcontent}}}
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
                
                $buffer .= $indent . '        <div class="rui-custom-sidebar-content my-4">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('customstcontent'), $context);
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

    private function section5bc3ba978114400426ea078f6c915c34(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <ul class="rui-flatnavigation rui-flatnavigation-box {{^customsidebarlogo}}mt-2{{/customsidebarlogo}}">
        {{{output.mainsidebarmenu}}}
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
                
                $buffer .= $indent . '        <ul class="rui-flatnavigation rui-flatnavigation-box ';
                // 'customsidebarlogo' inverted section
                $value = $context->find('customsidebarlogo');
                if (empty($value)) {
                    
                    $buffer .= 'mt-2';
                }
                $buffer .= '">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->findDot('output.mainsidebarmenu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88f7276c67a0d2cdb151126f127c39c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-custom-sidebar-content my-4">
        {{{customsmcontent}}}
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
                
                $buffer .= $indent . '        <div class="rui-custom-sidebar-content my-4">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('customsmcontent'), $context);
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

    private function sectionBfe52556ff93a1a22bb90230d6089429(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-custom-sidebar-content my-4">
        {{{customsfcontent}}}
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
                
                $buffer .= $indent . '        <div class="rui-custom-sidebar-content my-4">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('customsfcontent'), $context);
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
