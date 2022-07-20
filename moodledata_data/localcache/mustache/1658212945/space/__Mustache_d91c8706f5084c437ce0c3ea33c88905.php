<?php

class __Mustache_d91c8706f5084c437ce0c3ea33c88905 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_space/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-wrapper" class="d-print-block ';
        // 'output.courseheadermenu' section
        $value = $context->findDot('output.courseheadermenu');
        $buffer .= $this->section074790dc1144afd4e123c57768aa2ba7($context, $indent, $value);
        $buffer .= ' ';
        // 'output.courseheadermenu' inverted section
        $value = $context->findDot('output.courseheadermenu');
        if (empty($value)) {
            
            $buffer .= 'rui--course-witout-nav';
        }
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_space/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page" data-region="mainpage" data-usertour="scroller" class="container-fluid drawers ';
        // 'courseindexopen' section
        $value = $context->find('courseindexopen');
        $buffer .= $this->section05ab28b93094b30436e1224de5468efa($context, $indent, $value);
        $buffer .= ' ';
        // 'blockdraweropen' section
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section2f9abbbc7cfc8a578df65e02c2f006ff($context, $indent, $value);
        $buffer .= ' drag-container">
';
        $buffer .= $indent . '        <div id="topofscroll" class="main-inner">
';
        $buffer .= $indent . '            <div id="page-content" class="page-content wrapper-page">
';
        if ($partial = $this->mustache->loadPartial('theme_space/navbar-secondary')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.breadcrumbs'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('coursepageinformationbanners'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                <div class="wrapper-header">
';
        $buffer .= $indent . '                    <div class="rui-courseheadermenu-container">';
        $value = $this->resolveValue($context->findDot('output.courseheadermenu'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                
';
        $buffer .= $indent . '                <div id="region-main-box" class="region-main-wrapper">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section11baf4d0161f20f00a217e2fd2a4423c($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <section id="region-main" class="';
        // 'hassidecourseblocks' section
        $value = $context->find('hassidecourseblocks');
        $buffer .= $this->section79beb5cfa7b89bb67e7da9a67f96d7d7($context, $indent, $value);
        $buffer .= '" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <div ';
        // 'hassidecourseblocks' section
        $value = $context->find('hassidecourseblocks');
        $buffer .= $this->section5928b9351d1b93038acfc2bb930e4a55($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '                            <div class="';
        // 'hassidecourseblocks' section
        $value = $context->find('hassidecourseblocks');
        $buffer .= $this->section8ce6577f7e0e34d379fdcf89cda2c95e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'courseimagefw' section
        $value = $context->find('courseimagefw');
        $buffer .= $this->sectionEf689bf30bf73e3f18c4a8eec43df411($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hasctopbl' section
        $value = $context->find('hasctopbl');
        $buffer .= $this->section2ec2f688a0f851655c7740fd9071445d($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hascstopbl' section
        $value = $context->find('hascstopbl');
        $buffer .= $this->sectionFdf63f98616afaf644fa64d4927b6191($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                ';
        // 'courseimagecontent' section
        $value = $context->find('courseimagecontent');
        $buffer .= $this->section3b192377221b40affaef805cefab4fef($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->sectionBf0818eee6c3fb77fa31c60b8439b559($context, $indent, $value);
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'hascsbottombl' section
        $value = $context->find('hascsbottombl');
        $buffer .= $this->section0a554bf236466444e810a9ec4cc74d26($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            </div>
';
        // 'hassidecourseblocks' section
        $value = $context->find('hassidecourseblocks');
        $buffer .= $this->sectionDc38c19332673c38d8fecdf5b5e024f1($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </section>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        // 'hascbottombl' section
        $value = $context->find('hascbottombl');
        $buffer .= $this->section9f4f7d40b1261485169113b670236af4($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_space/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        
';
        $buffer .= $indent . '    </div>       
';
        $buffer .= $indent . '
';
        // 'hiddensidebar' inverted section
        $value = $context->find('hiddensidebar');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('theme_space/nav-drawer')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
        }
        if ($partial = $this->mustache->loadPartial('theme_space/courseindex-tmpl')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        if ($partial = $this->mustache->loadPartial('theme_space/hasblocks-tmpl')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section0f4730ff57ace05ab169dc547cb26b4c($context, $indent, $value);

        return $buffer;
    }

    private function section074790dc1144afd4e123c57768aa2ba7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui--course-with-nav';
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
                
                $buffer .= 'rui--course-with-nav';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05ab28b93094b30436e1224de5468efa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-drawer-right';
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
                
                $buffer .= 'show-drawer-right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f9abbbc7cfc8a578df65e02c2f006ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-hidden-drawer';
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
                
                $buffer .= 'show-hidden-drawer';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC396334c8d01cbbc9c3fe11fdd5408e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-sidecourseblocks';
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
                
                $buffer .= 'has-sidecourseblocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11baf4d0161f20f00a217e2fd2a4423c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="region-main-settings-menu" class="rui-blocks-area {{#hassidecourseblocks}}has-sidecourseblocks{{/hassidecourseblocks}}">
                        <div> {{{ output.region_main_settings_menu }}} </div>
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
                
                $buffer .= $indent . '                    <div id="region-main-settings-menu" class="rui-blocks-area ';
                // 'hassidecourseblocks' section
                $value = $context->find('hassidecourseblocks');
                $buffer .= $this->sectionC396334c8d01cbbc9c3fe11fdd5408e5($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <div> ';
                $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
                $buffer .= $value;
                $buffer .= ' </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section79beb5cfa7b89bb67e7da9a67f96d7d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-sidecourseblocks wrapper-has-blocks';
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
                
                $buffer .= 'has-sidecourseblocks wrapper-has-blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
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
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5928b9351d1b93038acfc2bb930e4a55(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="blocks-wrapper d-inline-flex flex-wrap justify-content-between w-100"';
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
                
                $buffer .= 'class="blocks-wrapper d-inline-flex flex-wrap justify-content-between w-100"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ce6577f7e0e34d379fdcf89cda2c95e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'wrapper-blocks mx-0';
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
                
                $buffer .= 'wrapper-blocks mx-0';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf689bf30bf73e3f18c4a8eec43df411(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="rui-course-cover mt-4">{{{ output.course_hero }}}</div>
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
                
                $buffer .= $indent . '                                <div class="rui-course-cover mt-4">';
                $value = $this->resolveValue($context->findDot('output.course_hero'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ec2f688a0f851655c7740fd9071445d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="my-4 wrapper-xxl">
                                    <section id="ctopbl" data-region="tmpl-course-blocks" class="rui-blocks-area">
                                        {{{ ctopbl }}}
                                    </section>
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
                
                $buffer .= $indent . '                                <div class="my-4 wrapper-xxl">
';
                $buffer .= $indent . '                                    <section id="ctopbl" data-region="tmpl-course-blocks" class="rui-blocks-area">
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('ctopbl'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                    </section>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFdf63f98616afaf644fa64d4927b6191(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <section id="cstopbl" data-region="tmpl-course-blocks" class="rui-blocks-area">
                                    {{{ cstopbl }}}
                                </section>
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
                
                $buffer .= $indent . '                                <section id="cstopbl" data-region="tmpl-course-blocks" class="rui-blocks-area">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('cstopbl'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b192377221b40affaef805cefab4fef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="rui-course-cover mb-4">{{{ output.course_hero }}}</div>';
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
                
                $buffer .= '<div class="rui-course-cover mb-4">';
                $value = $this->resolveValue($context->findDot('output.course_hero'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf0818eee6c3fb77fa31c60b8439b559(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="region_main_settings_menu_proxy"></div>
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
                
                $buffer .= $indent . '                                    <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a554bf236466444e810a9ec4cc74d26(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div>
                                    <section id="csbottombl" data-region="tmpl-course-blocks" class="rui-blocks-area">
                                        {{{ csbottombl }}}
                                    </section>
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
                
                $buffer .= $indent . '                                <div>
';
                $buffer .= $indent . '                                    <section id="csbottombl" data-region="tmpl-course-blocks" class="rui-blocks-area">
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('csbottombl'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                    </section>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc38c19332673c38d8fecdf5b5e024f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="tmpl-course-blocks">
                                <section id="sidecourseblocks" data-region="tmpl-incourse-blocks" class="rui-blocks-area">
                                    {{{ sidecourseblocks }}}
                                </section>
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
                
                $buffer .= $indent . '                            <div class="tmpl-course-blocks">
';
                $buffer .= $indent . '                                <section id="sidecourseblocks" data-region="tmpl-incourse-blocks" class="rui-blocks-area">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('sidecourseblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                </section>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f4f7d40b1261485169113b670236af4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="mt-4 wrapper-xxl">
                    <section id="cbottombl" data-region="tmpl-course-blocks" class="rui-blocks-area">
                        {{{ cbottombl }}}
                    </section>
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
                
                $buffer .= $indent . '                <div class="mt-4 wrapper-xxl">
';
                $buffer .= $indent . '                    <section id="cbottombl" data-region="tmpl-course-blocks" class="rui-blocks-area">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('cbottombl'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </section>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f4730ff57ace05ab169dc547cb26b4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_space/loader\');
require([\'theme_space/loader\', \'theme_space/drawer\'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete(\'theme_space/loader\');
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
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_space/loader\');
';
                $buffer .= $indent . 'require([\'theme_space/loader\', \'theme_space/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '    Drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_space/loader\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
