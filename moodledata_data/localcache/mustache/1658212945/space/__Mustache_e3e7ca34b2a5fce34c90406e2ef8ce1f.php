<?php

class __Mustache_e3e7ca34b2a5fce34c90406e2ef8ce1f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="h-100 rui-view-overview-body" aria-hidden="false" data-region="view-overview" ';
        // 'isdrawer' inverted section
        $value = $context->find('isdrawer');
        if (empty($value)) {
            
            $buffer .= 'data-in-panel="true"';
        }
        $buffer .= ' data-user-id="';
        $value = $this->resolveValue($context->findDot('loggedinuser.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div id="message-drawer-view-overview-container-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="rui-message-drawer-container d-flex flex-column h-100" style="overflow-y: auto">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="rui-message-section-starred">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section_favourites')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="rui-message-section-group">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section_group_messages')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="rui-message-section-private">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section_messages')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}