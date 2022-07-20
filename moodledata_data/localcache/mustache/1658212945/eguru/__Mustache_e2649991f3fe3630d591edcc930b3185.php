<?php

class __Mustache_e2649991f3fe3630d591edcc930b3185 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'maintenancefooter' section
        $value = $context->find('maintenancefooter');
        $buffer .= $this->section60522f49f0e7fd9df4521f7183573448($context, $indent, $value);
        // 'maintenancefooter' inverted section
        $value = $context->find('maintenancefooter');
        if (empty($value)) {
            
            $buffer .= $indent . '    <footer id="page-footer" class="footer-block">
';
            $buffer .= $indent . '        <div id="footer">
';
            // 'blockarrange' section
            $value = $context->find('blockarrange');
            $buffer .= $this->section7dd58a82ed9afe6d1fd0725147e9c5a0($context, $indent, $value);
            // 'copyright' section
            $value = $context->find('copyright');
            $buffer .= $this->section650bab049980229d54cb07381c9c3885($context, $indent, $value);
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '        <div data-region="footer-container-popover">
';
            $buffer .= $indent . '            <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section5a5198f26dc6ad191d1a18c314235d65($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '                ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->section46f926dcc61094038ebb3542556c1993($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '            </button>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '        <div class="footer-content-popover container" data-region="footer-content-popover">
';
            // 'output.has_popover_links' section
            $value = $context->findDot('output.has_popover_links');
            $buffer .= $this->sectionA5a5bc4a0ad6072691fae550e22d7003($context, $indent, $value);
            $buffer .= $indent . '            <div class="footer-section p-3 border-bottom">
';
            $buffer .= $indent . '                <div class="logininfo">
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->findDot('output.login_info'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '                <div class="tool_usertours-resettourcontainer">
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="footer-section p-3">
';
            $buffer .= $indent . '                <div>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section3cef0c729bd31199c0f96ce94b38f287($context, $indent, $value);
            $buffer .= '</div>
';
            // 'output.moodle_release' section
            $value = $context->findDot('output.moodle_release');
            $buffer .= $this->section417f99f891d9ce90a203cd1a4b37a721($context, $indent, $value);
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '        <div class="footer-content-debugging footer-dark bg-dark text-light">
';
            $buffer .= $indent . '            <div class="container-fluid footer-dark-inner">
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </footer>
';
        }
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionB60a5f65013c307b4cb66614d8cf1e1d($context, $indent, $value);

        return $buffer;
    }

    private function section143ce3ea45e0b819cc78cfbf9f099eb2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <p>{{{copyright_footer}}}</p>
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
                
                $buffer .= $indent . '          <p>';
                $value = $this->resolveValue($context->find('copyright_footer'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60522f49f0e7fd9df4521f7183573448(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<footer id="page-footer" class=" footer-popover footer-dark bg-dark text-light">
    <div id="footer">
      <div class="footer-bootom">
        {{# copyright_footer}}
          <p>{{{copyright_footer}}}</p>
        {{/ copyright_footer}}
      </div>
    </div>
</footer>
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
                
                $buffer .= $indent . '<footer id="page-footer" class=" footer-popover footer-dark bg-dark text-light">
';
                $buffer .= $indent . '    <div id="footer">
';
                $buffer .= $indent . '      <div class="footer-bootom">
';
                // 'copyright_footer' section
                $value = $context->find('copyright_footer');
                $buffer .= $this->section143ce3ea45e0b819cc78cfbf9f099eb2($context, $indent, $value);
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</footer>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5eac268c03d1d0e50df40dcb465560a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="logo-footer">
                                        <a href="{{{ config.wwwroot }}}/?redirect=0">
                                            <img src="{{logourl}}" width="183" height="67" alt="Eguru">
                                        </a>
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
                
                $buffer .= $indent . '                                    <div class="logo-footer">
';
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/?redirect=0">
';
                $buffer .= $indent . '                                            <img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="183" height="67" alt="Eguru">
';
                $buffer .= $indent . '                                        </a>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9263ec495f5e89112205d962f579f087(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="{{colclass}}">
                                <div class="footer-desc">
                                    {{#footerlogo}}
                                    <div class="logo-footer">
                                        <a href="{{{ config.wwwroot }}}/?redirect=0">
                                            <img src="{{logourl}}" width="183" height="67" alt="Eguru">
                                        </a>
                                    </div>
                                    {{/footerlogo}}
                                    <p>{{footnote}}</p>
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
                
                $buffer .= $indent . '                            <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <div class="footer-desc">
';
                // 'footerlogo' section
                $value = $context->find('footerlogo');
                $buffer .= $this->sectionF5eac268c03d1d0e50df40dcb465560a($context, $indent, $value);
                $buffer .= $indent . '                                    <p>';
                $value = $this->resolveValue($context->find('footnote'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section933df95de847954bf42f6b6bf88371a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="{{colclass}}">
                                <div class="footer-nav">
                                    <h4>{{footerbtitle2}}</h4>
                                    <ul>
                                    {{{footerlinks}}}
                                    </ul>
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
                
                $buffer .= $indent . '                            <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <div class="footer-nav">
';
                $buffer .= $indent . '                                    <h4>';
                $value = $this->resolveValue($context->find('footerbtitle2'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                                    <ul>
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('footerlinks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                    </ul>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e2723670d594a90a270dd0714fa77d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <li class="smedia-01">
                                            <a href="{{fburl}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fa fa-facebook"></i>
                                                </span>
                                                <span class="media-name">{{fbn}}</span>
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
                
                $buffer .= $indent . '                                        <li class="smedia-01">
';
                $buffer .= $indent . '                                            <a href="';
                $value = $this->resolveValue($context->find('fburl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                                <span class="media-icon">
';
                $buffer .= $indent . '                                                <i class="fa fa-facebook"></i>
';
                $buffer .= $indent . '                                                </span>
';
                $buffer .= $indent . '                                                <span class="media-name">';
                $value = $this->resolveValue($context->find('fbn'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </a>
';
                $buffer .= $indent . '                                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section26cfd5dfaa9dac3240fea93d7f3a369a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <li class="smedia-02">
                                            <a href="{{twurl}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fa fa-twitter"></i>
                                                </span>
                                                <span class="media-name">{{twn}}</span>
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
                
                $buffer .= $indent . '                                        <li class="smedia-02">
';
                $buffer .= $indent . '                                            <a href="';
                $value = $this->resolveValue($context->find('twurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                                <span class="media-icon">
';
                $buffer .= $indent . '                                                <i class="fa fa-twitter"></i>
';
                $buffer .= $indent . '                                                </span>
';
                $buffer .= $indent . '                                                <span class="media-name">';
                $value = $this->resolveValue($context->find('twn'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </a>
';
                $buffer .= $indent . '                                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40eb8219e6d9d13865dcc0e6b292c938(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <li class="smedia-03">
                                            <a href="{{gpurl}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fa fa-google-plus"></i>
                                                </span>
                                                <span class="media-name">{{gpn}}</span>
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
                
                $buffer .= $indent . '                                        <li class="smedia-03">
';
                $buffer .= $indent . '                                            <a href="';
                $value = $this->resolveValue($context->find('gpurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                                <span class="media-icon">
';
                $buffer .= $indent . '                                                <i class="fa fa-google-plus"></i>
';
                $buffer .= $indent . '                                                </span>
';
                $buffer .= $indent . '                                                <span class="media-name">';
                $value = $this->resolveValue($context->find('gpn'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </a>
';
                $buffer .= $indent . '                                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc4df455c8dc5b5c86ba703e5ff7a37d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <li class="smedia-04">
                                            <a href="{{pinurl}}" target="_blank">
                                            <span class="media-icon">
                                            <i class="fa fa-pinterest-p"></i>
                                            </span>
                                            <span class="media-name">{{pin}}</span>
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
                
                $buffer .= $indent . '                                        <li class="smedia-04">
';
                $buffer .= $indent . '                                            <a href="';
                $value = $this->resolveValue($context->find('pinurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                            <span class="media-icon">
';
                $buffer .= $indent . '                                            <i class="fa fa-pinterest-p"></i>
';
                $buffer .= $indent . '                                            </span>
';
                $buffer .= $indent . '                                            <span class="media-name">';
                $value = $this->resolveValue($context->find('pin'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </a>
';
                $buffer .= $indent . '                                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5a9690c22f86fab76fb6684d95474f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="{{colclass}}">
                                <div class="social-media">
                                    <h4>{{footerbtitle3}}</h4>
                                    <ul>
                                        {{# fburl}}
                                        <li class="smedia-01">
                                            <a href="{{fburl}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fa fa-facebook"></i>
                                                </span>
                                                <span class="media-name">{{fbn}}</span>
                                            </a>
                                        </li>
                                        {{/ fburl}}

                                        {{# twurl}}
                                        <li class="smedia-02">
                                            <a href="{{twurl}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fa fa-twitter"></i>
                                                </span>
                                                <span class="media-name">{{twn}}</span>
                                            </a>
                                        </li>
                                        {{/ twurl}}

                                        {{# gpurl}}
                                        <li class="smedia-03">
                                            <a href="{{gpurl}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fa fa-google-plus"></i>
                                                </span>
                                                <span class="media-name">{{gpn}}</span>
                                            </a>
                                        </li>
                                        {{/ gpurl}}

                                        {{# pinurl}}
                                        <li class="smedia-04">
                                            <a href="{{pinurl}}" target="_blank">
                                            <span class="media-icon">
                                            <i class="fa fa-pinterest-p"></i>
                                            </span>
                                            <span class="media-name">{{pin}}</span>
                                            </a>
                                        </li>
                                        {{/ pinurl}}
                                    </ul>
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
                
                $buffer .= $indent . '                            <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <div class="social-media">
';
                $buffer .= $indent . '                                    <h4>';
                $value = $this->resolveValue($context->find('footerbtitle3'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                                    <ul>
';
                // 'fburl' section
                $value = $context->find('fburl');
                $buffer .= $this->section5e2723670d594a90a270dd0714fa77d3($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'twurl' section
                $value = $context->find('twurl');
                $buffer .= $this->section26cfd5dfaa9dac3240fea93d7f3a369a($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'gpurl' section
                $value = $context->find('gpurl');
                $buffer .= $this->section40eb8219e6d9d13865dcc0e6b292c938($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'pinurl' section
                $value = $context->find('pinurl');
                $buffer .= $this->sectionAc4df455c8dc5b5c86ba703e5ff7a37d($context, $indent, $value);
                $buffer .= $indent . '                                    </ul>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC949942690e27d511e5661137b2d18a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <p><i class="fa fa-phone-square"></i>{{phone}}: {{phoneno}}</p>
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
                
                $buffer .= $indent . '                                        <p><i class="fa fa-phone-square"></i>';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ': ';
                $value = $this->resolveValue($context->find('phoneno'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section651bdc9b04df828317d17c470b02ca23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <p><i class="fa fa-envelope"></i>
                                        {{mail}} <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a>
                                        </p>
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
                
                $buffer .= $indent . '                                        <p><i class="fa fa-envelope"></i>
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' <a class="mail-link" href="mailto:';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                        </p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf8f98474a77da05e4d85ddecb5d9337(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="{{colclass}}">
                                <div class="footer-contact">
                                    <h4>{{footerbtitle4}}</h4>
                                    <p>{{address}}</p>
                                    {{# phoneno}}
                                        <p><i class="fa fa-phone-square"></i>{{phone}}: {{phoneno}}</p>
                                    {{/ phoneno}}

                                    {{# emailid}}
                                        <p><i class="fa fa-envelope"></i>
                                        {{mail}} <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a>
                                        </p>
                                    {{/ emailid}}

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
                
                $buffer .= $indent . '                            <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <div class="footer-contact">
';
                $buffer .= $indent . '                                    <h4>';
                $value = $this->resolveValue($context->find('footerbtitle4'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                                    <p>';
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                // 'phoneno' section
                $value = $context->find('phoneno');
                $buffer .= $this->sectionC949942690e27d511e5661137b2d18a1($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'emailid' section
                $value = $context->find('emailid');
                $buffer .= $this->section651bdc9b04df828317d17c470b02ca23($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7dd58a82ed9afe6d1fd0725147e9c5a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-main">
                    <div class="container-fluid">
                        <div class="row">
                            {{#block1}}
                            <div class="{{colclass}}">
                                <div class="footer-desc">
                                    {{#footerlogo}}
                                    <div class="logo-footer">
                                        <a href="{{{ config.wwwroot }}}/?redirect=0">
                                            <img src="{{logourl}}" width="183" height="67" alt="Eguru">
                                        </a>
                                    </div>
                                    {{/footerlogo}}
                                    <p>{{footnote}}</p>
                                </div>
                            </div>
                            {{/block1}}
                            {{#block2}}
                            <div class="{{colclass}}">
                                <div class="footer-nav">
                                    <h4>{{footerbtitle2}}</h4>
                                    <ul>
                                    {{{footerlinks}}}
                                    </ul>
                                </div>
                            </div>
                            {{/block2}}
                            {{# block3}}
                            <div class="{{colclass}}">
                                <div class="social-media">
                                    <h4>{{footerbtitle3}}</h4>
                                    <ul>
                                        {{# fburl}}
                                        <li class="smedia-01">
                                            <a href="{{fburl}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fa fa-facebook"></i>
                                                </span>
                                                <span class="media-name">{{fbn}}</span>
                                            </a>
                                        </li>
                                        {{/ fburl}}

                                        {{# twurl}}
                                        <li class="smedia-02">
                                            <a href="{{twurl}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fa fa-twitter"></i>
                                                </span>
                                                <span class="media-name">{{twn}}</span>
                                            </a>
                                        </li>
                                        {{/ twurl}}

                                        {{# gpurl}}
                                        <li class="smedia-03">
                                            <a href="{{gpurl}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fa fa-google-plus"></i>
                                                </span>
                                                <span class="media-name">{{gpn}}</span>
                                            </a>
                                        </li>
                                        {{/ gpurl}}

                                        {{# pinurl}}
                                        <li class="smedia-04">
                                            <a href="{{pinurl}}" target="_blank">
                                            <span class="media-icon">
                                            <i class="fa fa-pinterest-p"></i>
                                            </span>
                                            <span class="media-name">{{pin}}</span>
                                            </a>
                                        </li>
                                        {{/ pinurl}}
                                    </ul>
                                </div>
                            </div>
                            {{/ block3}}
                            {{#block4}}
                            <div class="{{colclass}}">
                                <div class="footer-contact">
                                    <h4>{{footerbtitle4}}</h4>
                                    <p>{{address}}</p>
                                    {{# phoneno}}
                                        <p><i class="fa fa-phone-square"></i>{{phone}}: {{phoneno}}</p>
                                    {{/ phoneno}}

                                    {{# emailid}}
                                        <p><i class="fa fa-envelope"></i>
                                        {{mail}} <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a>
                                        </p>
                                    {{/ emailid}}

                                </div>
                            </div>
                            {{/block4}}
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
                
                $buffer .= $indent . '                <div class="footer-main">
';
                $buffer .= $indent . '                    <div class="container-fluid">
';
                $buffer .= $indent . '                        <div class="row">
';
                // 'block1' section
                $value = $context->find('block1');
                $buffer .= $this->section9263ec495f5e89112205d962f579f087($context, $indent, $value);
                // 'block2' section
                $value = $context->find('block2');
                $buffer .= $this->section933df95de847954bf42f6b6bf88371a0($context, $indent, $value);
                // 'block3' section
                $value = $context->find('block3');
                $buffer .= $this->sectionD5a9690c22f86fab76fb6684d95474f2($context, $indent, $value);
                // 'block4' section
                $value = $context->find('block4');
                $buffer .= $this->sectionDf8f98474a77da05e4d85ddecb5d9337($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section650bab049980229d54cb07381c9c3885(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="footer-foot">
                <div class="container">{{{copyright}}}</div>
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
                
                $buffer .= $indent . '            <div class="footer-foot">
';
                $buffer .= $indent . '                <div class="container">';
                $value = $this->resolveValue($context->find('copyright'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a5198f26dc6ad191d1a18c314235d65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showfooter, theme_boost';
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
                
                $buffer .= 'showfooter, theme_boost';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46f926dcc61094038ebb3542556c1993(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/question, core';
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
                
                $buffer .= 'e/question, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2bb27d99fcee3b2120ef1613c3a8ff8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>{{{ output.page_doc_link }}}</div>
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
                
                $buffer .= $indent . '                        <div>';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9013d4a5a4988d74bb15930508e58503(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>{{{ output.services_support_link }}}</div>
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
                
                $buffer .= $indent . '                        <div>';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4184bc884d75fc40a83b97aa6d9fd873(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>{{{ output.supportemail }}}</div>
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
                
                $buffer .= $indent . '                        <div>';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA5a5bc4a0ad6072691fae550e22d7003(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-section p-3 border-bottom">
                    {{# output.page_doc_link }}
                        <div>{{{ output.page_doc_link }}}</div>
                    {{/ output.page_doc_link }}

                    {{# output.services_support_link }}
                        <div>{{{ output.services_support_link }}}</div>
                    {{/ output.services_support_link }}

                    {{# output.supportemail }}
                        <div>{{{ output.supportemail }}}</div>
                    {{/ output.supportemail }}
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
                
                $buffer .= $indent . '                <div class="footer-section p-3 border-bottom">
';
                // 'output.page_doc_link' section
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->sectionF2bb27d99fcee3b2120ef1613c3a8ff8($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'output.services_support_link' section
                $value = $context->findDot('output.services_support_link');
                $buffer .= $this->section9013d4a5a4988d74bb15930508e58503($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'output.supportemail' section
                $value = $context->findDot('output.supportemail');
                $buffer .= $this->section4184bc884d75fc40a83b97aa6d9fd873($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cef0c729bd31199c0f96ce94b38f287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredbymoodle, core';
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
                
                $buffer .= 'poweredbymoodle, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
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
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section417f99f891d9ce90a203cd1a4b37a721(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>
                        {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
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
                
                $buffer .= $indent . '                    <div>
';
                $buffer .= $indent . '                        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB60a5f65013c307b4cb66614d8cf1e1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
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
                
                $buffer .= $indent . 'require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
