<?php

class __Mustache_d708ad4a8fa338f3af67bbb7789999f6 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="sticky-header-settings-menu d-inline-flex">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.customeditblockbtn'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';

        return $buffer;
    }
}
