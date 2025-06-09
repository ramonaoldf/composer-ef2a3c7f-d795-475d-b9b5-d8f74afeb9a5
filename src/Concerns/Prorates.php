<?php

namespace Laravel\Paddle\Concerns;

/**
 * @link https://developer.paddle.com/concepts/subscriptions/proration
 */
trait Prorates
{
    /**
     * The current proration behavior.
     *
     * @var bool
     */
    protected $prorationBehavior = 'prorated_next_billing_period';

    /**
     * Indicate that the buyer is billed the prorated amount on their next renewal.
     *
     * @return $this
     */
    public function prorate()
    {
        $this->prorationBehavior = 'prorated_next_billing_period';

        return $this;
    }

    /**
     * Indicate that the buyer is billed for the full amount on their next renewal.
     *
     * @return $this
     */
    public function noProrate()
    {
        $this->prorationBehavior = 'full_next_billing_period';

        return $this;
    }

    /**
     * Indicate that the buyer is billed the prorated amount now.
     *
     * @return $this
     */
    public function prorateImmediately()
    {
        $this->prorationBehavior = 'prorated_immediately';

        return $this;
    }

    /**
     * Indicate that the buyer is billed the full amount now.
     *
     * @return $this
     */
    public function immediatelyWithoutProrate()
    {
        $this->prorationBehavior = 'full_immediately';

        return $this;
    }

    /**
     * Indicate that the buyer is not billed for the prorated amount or the full amount.
     *
     * @return $this
     */
    public function doNotBill()
    {
        $this->prorationBehavior = 'do_not_bill';

        return $this;
    }

    /**
     * Set the proration behavior.
     *
     * @param  string  $prorationBehavior
     * @return $this
     */
    public function setProrationBehavior($prorationBehavior)
    {
        $this->prorationBehavior = $prorationBehavior;

        return $this;
    }
}
