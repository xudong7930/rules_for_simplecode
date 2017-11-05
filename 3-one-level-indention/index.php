<?php

class BankAccount {
    protected $accounts;

    public function __construct($account)
    {
        $this->accounts = $account;
    }

    public function filterBy($accountType)
    {
        $filtered = [];

        // 1
        foreach ($this->accounts as $account) {

            // 2
            if ($account->type() == $accountType) {

                // 3
                if ($account->isActive()) {
                    $filtered[] = $account;
                }
            }
        }

        return $filtered;
    }

    // fix 1
    public function filterBy2($accountType)
    {
        $filtered = [];

        foreach ($this->accounts as $account) {
            if ($this->isOfType($accountType, $account)) {
                $filtered[] = $account;
            }
        }
    }

    // fix 2
    public function filterBy3($accountType)
    {
        return array_filter($this->accounts, function ($account) use ($accountType) {
            // return $this->isOfType($accountType, $account);
            return $account->isOfType($accountType);
        });
    }

    public function isOfType($accountType, $account)
    {
        return $account->type() == $accountType && $account->isActive();
    }
}

class Account {
    protected $accounts;
    protected $type;

    private function __construct($type)
    {
        $this->type = $type;
    }

    public function type()
    {
        return $this->type;
    }

    public function isActive()
    {
        return true;
    }

    public static function open($type)
    {
        return new static($type);
    }

    public function isOfTyping($accountType)
    {
        return $this->type() == $accountType && $this->isActive();
    }
}

$accounts = [
    Account::open('checking'),
    Account::open('savings'),
    Account::open('checking'),
    Account::open('savings')
];

$bankAccounts = new BankAccount($accounts);
$savings = $bankAccounts->filterBy('checking');

var_dump($savings);
