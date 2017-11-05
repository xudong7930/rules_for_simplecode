<?
// 不要缩写
class Trnsltr {
    
}

class Translater {
    public function find()
    {
        // 不要使用意义的变量
        foreach ($x as $people) {
            echo $x->name;
        }
    }
}


class UserRepository {
    // 不要使用fetch
    public function fetchByBillingId($id)
    {
        
    }
}

(new UserRepository)->fetchByBillingId($id);


class Order {
    // 不要shipOrder
    public function ship()
    {
        
    }
}

(new Order)->ship();
