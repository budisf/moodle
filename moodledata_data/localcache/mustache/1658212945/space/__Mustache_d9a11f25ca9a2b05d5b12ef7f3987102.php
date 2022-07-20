<?php

class __Mustache_d9a11f25ca9a2b05d5b12ef7f3987102 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="hidden rui-message-header-margin" aria-hidden="true" data-region="view-settings">
';
        $buffer .= $indent . '    <div class="d-flex align-items-center w-100">
';
        // 'isdrawer' section
        $value = $context->find('isdrawer');
        $buffer .= $this->section26ca95ab700e629614e6d7323ab8c12a($context, $indent, $value);
        $buffer .= $indent . '        <h4 class="rui-message-heading ml-3">
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section89fe6ec2ad927929ef01bc4d6a8446c4($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </h4>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section26ca95ab700e629614e6d7323ab8c12a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="align-self-stretch">
            <a class="ml-3 d-flex align-items-center btn-msg" href="#" data-route-back role="button">
                {{> core_message/message_drawer_icon_back }}
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
                
                $buffer .= $indent . '        <div class="align-self-stretch">
';
                $buffer .= $indent . '            <a class="ml-3 d-flex align-items-center btn-msg" href="#" data-route-back role="button">
';
                if ($partial = $this->mustache->loadPartial('core_message/message_drawer_icon_back')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section89fe6ec2ad927929ef01bc4d6a8446c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' settings, core ';
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
                
                $buffer .= ' settings, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
