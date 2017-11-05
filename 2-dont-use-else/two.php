<?
// old
function signup($subscription)
{
    if ($subscription == 'monthly') {
        $this->createMonthlySubscription();
    }
    elseif ($subscription == 'forever') {
        $this->createForeverSubscription();
    }
    else {

    }
}

// fix
function signup($subscription)
{
    $subscription->create();
}

function getSubscriptionType($type)
{
    if ($type == 'forever') {
        return new ForeverSuscription;
    }

    return new MonthlySubscription;
}

$subscription = getSubscriptionType($type);
signup($subscription);
