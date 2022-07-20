<?php

class __Mustache_6f17e09cfdf750755b9aa16e97f605f6 extends Mustache_Template
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
        $buffer .= $indent . '<div id="page-wrapper" class="d-print-block">
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
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('coursepageinformationbanners'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                <div class="wrapper-header">
';
        // 'headeractions' section
        $value = $context->find('headeractions');
        $buffer .= $this->sectionD28c04efb07428a305cf30b9de36f850($context, $indent, $value);
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div id="region-main-box" class="region-main-wrapper">
';
        $buffer .= $indent . '                    <section id="region-main" class="region-main-content ';
        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->section8ae768dbd9f60a7f7df4aaf3cee7aa89($context, $indent, $value);
        $buffer .= '" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <div ';
        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->section60be17912465fe6a072f0e6d332c7271($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '                            <div class="';
        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->section373cf0466f8349b6b0945a79b0183721($context, $indent, $value);
        $buffer .= '">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->sectionBf0818eee6c3fb77fa31c60b8439b559($context, $indent, $value);
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'headercontent' section
        $value = $context->find('headercontent');
        $buffer .= $this->section6401545d16238f1238f2d687771de281($context, $indent, $value);
        // 'overflow' section
        $value = $context->find('overflow');
        $buffer .= $this->section7b1c6a51b69c4ea6e3253b16aeacde6e($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                <div class="rui-dashboard-top">
';
        $buffer .= $indent . '                                    <div id="blocks-dashboardtopblock" class="col-12 px-0">
';
        $buffer .= $indent . '                                    ';
        $value = $this->resolveValue($context->find('dtopblocks'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="rui-dashboard-main mb-4">';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                <div class="rui-dashboard-columns row justify-content-between">
';
        $buffer .= $indent . '
';
        // 'hasonecol' section
        $value = $context->find('hasonecol');
        $buffer .= $this->section2d39a569e279ed50da7c9ebd85c283e7($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hasonecol' inverted section
        $value = $context->find('hasonecol');
        if (empty($value)) {
            
            // 'hasleftcolumn' section
            $value = $context->find('hasleftcolumn');
            $buffer .= $this->section1aaa29cead9eee1449d478632022f486($context, $indent, $value);
            $buffer .= $indent . '
';
            // 'hasdmiddleblocks' section
            $value = $context->find('hasdmiddleblocks');
            $buffer .= $this->section5d5f38a6e12b98d89496801952f0748f($context, $indent, $value);
            $buffer .= $indent . '
';
            // 'hasrightcolumn' section
            $value = $context->find('hasrightcolumn');
            $buffer .= $this->section67db87a4d0dbb5c9b633b4dd490f6da7($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '
';
        // 'hasdbottomblocks' section
        $value = $context->find('hasdbottomblocks');
        $buffer .= $this->sectionD0267e80d41413be91d561c0ab048851($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hasdbottomblocks' section
        $value = $context->find('hasdbottomblocks');
        $buffer .= $this->section7bf4c810f12af9fabbd5346a33810d50($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    </section>
';
        $buffer .= $indent . '                </div>                    
';
        $buffer .= $indent . '            </div> 
';
        $buffer .= $indent . '        </div>           
';
        if ($partial = $this->mustache->loadPartial('theme_space/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
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

    private function sectionD28c04efb07428a305cf30b9de36f850(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="header-actions-container ml-1" data-region="header-actions-container">
                        <div class="header-action">{{{.}}}</div>
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
                
                $buffer .= $indent . '                    <div class="header-actions-container ml-1" data-region="header-actions-container">
';
                $buffer .= $indent . '                        <div class="header-action">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ae768dbd9f60a7f7df4aaf3cee7aa89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-blocks';
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
                
                $buffer .= 'has-blocks';
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

    private function section60be17912465fe6a072f0e6d332c7271(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="blocks-wrapper d-inline-flex justify-content-between w-100"';
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
                
                $buffer .= 'class="blocks-wrapper d-inline-flex justify-content-between w-100"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section373cf0466f8349b6b0945a79b0183721(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'wrapper-blocks';
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
                
                $buffer .= 'wrapper-blocks';
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

    private function section6401545d16238f1238f2d687771de281(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{> core/activity_header }}
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
                
                if ($partial = $this->mustache->loadPartial('core/activity_header')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7b1c6a51b69c4ea6e3253b16aeacde6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="container-fluid tertiary-navigation">
                                        <div class="navitem">
                                            {{> core/url_select}}
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
                
                $buffer .= $indent . '                                    <div class="container-fluid tertiary-navigation">
';
                $buffer .= $indent . '                                        <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                            ');
                }
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d39a569e279ed50da7c9ebd85c283e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div id="blocks-dashboardonecol" class="col-12 rui-blocks-area">
                                {{{ dleftblocks }}}
                                {{{ dmiddleblocks }}}
                                {{{ drightblocks }}}
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
                
                $buffer .= $indent . '                                <div id="blocks-dashboardonecol" class="col-12 rui-blocks-area">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('dleftblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('dmiddleblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('drightblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbdc23c8e499e90b290229443bc5e378(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^customdcolsize}}col-lg-3{{/customdcolsize}}{{customdcolsize}}';
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
                
                // 'customdcolsize' inverted section
                $value = $context->find('customdcolsize');
                if (empty($value)) {
                    
                    $buffer .= 'col-lg-3';
                }
                $value = $this->resolveValue($context->find('customdcolsize'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE25ab3094e9f8d927b7a2081221128ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div id="blocks-dashboardleftblock" class="{{#hastwocol}}{{^customdcolsize}}col-lg-3{{/customdcolsize}}{{customdcolsize}}{{/hastwocol}}{{^hastwocol}}col-lg-3{{/hastwocol}} rui-blocks-area">
                                            {{{ dleftblocks }}}
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
                
                $buffer .= $indent . '                                        <div id="blocks-dashboardleftblock" class="';
                // 'hastwocol' section
                $value = $context->find('hastwocol');
                $buffer .= $this->sectionEbdc23c8e499e90b290229443bc5e378($context, $indent, $value);
                // 'hastwocol' inverted section
                $value = $context->find('hastwocol');
                if (empty($value)) {
                    
                    $buffer .= 'col-lg-3';
                }
                $buffer .= ' rui-blocks-area">
';
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('dleftblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1aaa29cead9eee1449d478632022f486(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{#hasdleftblocks}}
                                        <div id="blocks-dashboardleftblock" class="{{#hastwocol}}{{^customdcolsize}}col-lg-3{{/customdcolsize}}{{customdcolsize}}{{/hastwocol}}{{^hastwocol}}col-lg-3{{/hastwocol}} rui-blocks-area">
                                            {{{ dleftblocks }}}
                                        </div>
                                        {{/hasdleftblocks}}
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
                
                // 'hasdleftblocks' section
                $value = $context->find('hasdleftblocks');
                $buffer .= $this->sectionE25ab3094e9f8d927b7a2081221128ab($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEdf50ab87e35c1e72479830a0f4b242f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-lg';
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
                
                $buffer .= 'col-lg';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d5f38a6e12b98d89496801952f0748f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div id="blocks-dashboardmiddleblock" class="{{#hastwocol}}col-lg{{/hastwocol}}{{^hastwocol}}col-lg-6{{/hastwocol}} rui-blocks-area">
                                        {{{ dmiddleblocks }}}
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
                
                $buffer .= $indent . '                                    <div id="blocks-dashboardmiddleblock" class="';
                // 'hastwocol' section
                $value = $context->find('hastwocol');
                $buffer .= $this->sectionEdf50ab87e35c1e72479830a0f4b242f($context, $indent, $value);
                // 'hastwocol' inverted section
                $value = $context->find('hastwocol');
                if (empty($value)) {
                    
                    $buffer .= 'col-lg-6';
                }
                $buffer .= ' rui-blocks-area">
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('dmiddleblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section178aae1cdb8a88999e1075777dcfdf4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div id="blocks-dashboardrightblock" class="{{#hastwocol}}{{^customdcolsize}}col-lg-3{{/customdcolsize}}{{customdcolsize}}{{/hastwocol}}{{^hastwocol}}col-lg-3{{/hastwocol}} rui-blocks-area">
                                            {{{ drightblocks }}}
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
                
                $buffer .= $indent . '                                        <div id="blocks-dashboardrightblock" class="';
                // 'hastwocol' section
                $value = $context->find('hastwocol');
                $buffer .= $this->sectionEbdc23c8e499e90b290229443bc5e378($context, $indent, $value);
                // 'hastwocol' inverted section
                $value = $context->find('hastwocol');
                if (empty($value)) {
                    
                    $buffer .= 'col-lg-3';
                }
                $buffer .= ' rui-blocks-area">
';
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('drightblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67db87a4d0dbb5c9b633b4dd490f6da7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{#hasdrightblocks}}
                                        <div id="blocks-dashboardrightblock" class="{{#hastwocol}}{{^customdcolsize}}col-lg-3{{/customdcolsize}}{{customdcolsize}}{{/hastwocol}}{{^hastwocol}}col-lg-3{{/hastwocol}} rui-blocks-area">
                                            {{{ drightblocks }}}
                                        </div>
                                        {{/hasdrightblocks}}               
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
                
                // 'hasdrightblocks' section
                $value = $context->find('hasdrightblocks');
                $buffer .= $this->section178aae1cdb8a88999e1075777dcfdf4d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0267e80d41413be91d561c0ab048851(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="rui-dashboard-bottom mt-4 mb-4">
                                <div data-region="blocks-dashboardbottomblock" class="col-12 p-0">
                                {{{ dbottomblocks }}}
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
                
                $buffer .= $indent . '                                <div class="rui-dashboard-bottom mt-4 mb-4">
';
                $buffer .= $indent . '                                <div data-region="blocks-dashboardbottomblock" class="col-12 p-0">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('dbottomblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7bf4c810f12af9fabbd5346a33810d50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="rui-dashboard-bottom mt-4 mb-4">
                                    <div data-region="blocks-dashboardbottomblock" class="col-12 p-0">
                                    {{{ dbottomblocks }}}
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
                
                $buffer .= $indent . '                                <div class="rui-dashboard-bottom mt-4 mb-4">
';
                $buffer .= $indent . '                                    <div data-region="blocks-dashboardbottomblock" class="col-12 p-0">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('dbottomblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
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
