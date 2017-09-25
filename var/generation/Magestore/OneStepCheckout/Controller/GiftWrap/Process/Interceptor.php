<?php
namespace Magestore\OneStepCheckout\Controller\GiftWrap\Process;

/**
 * Interceptor class for @see \Magestore\OneStepCheckout\Controller\GiftWrap\Process
 */
class Interceptor extends \Magestore\OneStepCheckout\Controller\GiftWrap\Process implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\Framework\DataObjectFactory $dataObjectFactory, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Quote\Api\CartTotalRepositoryInterface $cartTotalRepositoryInterface, \Magento\Checkout\Model\Sidebar $sidebar, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Quote\Model\Quote\TotalsCollector $totalsCollector)
    {
        $this->___init();
        parent::__construct($context, $jsonHelper, $dataObjectFactory, $resultJsonFactory, $cartTotalRepositoryInterface, $sidebar, $checkoutSession, $quoteRepository, $totalsCollector);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
