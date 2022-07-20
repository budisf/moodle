<?php

class __Mustache_63592d8020ec46f24272cf670225dae2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($parent = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section')) {
            $context->pushBlockContext(array(
                'region' => array($this, 'block0d825094e3f87721e5aeacfebed18011'),
                'title' => array($this, 'block2ea8a34e542d81f38d5f37af0efecfd9'),
                'placeholder' => array($this, 'blockE9b23ea6ffe7cff2e099ad2c26b6072a'),
                'notification' => array($this, 'blockBb6768e18067f2dbd798f3771708e8b5'),
                'emptymessage' => array($this, 'block7f17d2807b7c8209773a52c77d194b7b'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function sectionF36d9c53138ae56f420c83046248fd3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' individualconversations, core_message ';
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
                
                $buffer .= ' individualconversations, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2aa1d110403ad6a595948cdd11dfef60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="text-center p-2">
                <p class="text-center small">{{.}}</p>
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
                
                $buffer .= $indent . '            <div class="text-center p-2">
';
                $buffer .= $indent . '                <p class="text-center small">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section088ffe8d586f44aaabcd5c09cc823693(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noindividualconversations, core_message ';
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
                
                $buffer .= ' noindividualconversations, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block0d825094e3f87721e5aeacfebed18011($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'view-overview-messages';
    
        return $buffer;
    }

    public function block2ea8a34e542d81f38d5f37af0efecfd9($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF36d9c53138ae56f420c83046248fd3c($context, $indent, $value);
    
        return $buffer;
    }

    public function blockE9b23ea6ffe7cff2e099ad2c26b6072a($context)
    {
        $indent = $buffer = '';
        $buffer .= '        <div class="text-center py-2">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
    
        return $buffer;
    }

    public function blockBb6768e18067f2dbd798f3771708e8b5($context)
    {
        $indent = $buffer = '';
        // 'overview.notification' section
        $value = $context->findDot('overview.notification');
        $buffer .= $this->section2aa1d110403ad6a595948cdd11dfef60($context, $indent, $value);
    
        return $buffer;
    }

    public function block7f17d2807b7c8209773a52c77d194b7b($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <p>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section088ffe8d586f44aaabcd5c09cc823693($context, $indent, $value);
        $buffer .= '</p>
';
    
        return $buffer;
    }
}
