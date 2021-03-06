<?php
namespace Magento\Catalog\Model\Attribute\Backend\Customlayoutupdate;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Attribute\Backend\Customlayoutupdate
 */
class Interceptor extends \Magento\Catalog\Model\Attribute\Backend\Customlayoutupdate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Model\Layout\Update\ValidatorFactory $layoutUpdateValidatorFactory)
    {
        $this->___init();
        parent::__construct($layoutUpdateValidatorFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        if (!$pluginInfo) {
            return parent::validate($object);
        } else {
            return $this->___callPlugins('validate', func_get_args(), $pluginInfo);
        }
    }
}
