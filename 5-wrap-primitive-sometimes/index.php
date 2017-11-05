<?

class Second {
    protected $seconds;
    public function __construct($seconds)
    {
        $this->seconds = $seconds;
    }
}

function cache($data, Second $second)
{
    
}

cache([], new Second(50));

// 1. does it bring clarity?
// 2. is there behavior?
// 3. consistency
class EmailAddress {
    public function __construct()
    {
        
    }
}

// 4. important domain concept?
class Location {
    public function __construct($latitude, $longtitude)
    {
        
    }
}

class Weight {
    protected $weight;
    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    public function gain($pounds)
    {
        $this->weight += $pounds;
    }

    public function lose($pounds)
    {
        $this->weight -= $pounds;
    }
}

class WorkoutPlaceMember {
    public function __construct($name, Weight $weight)
    {
        
    }

    public function workoutFor(Timelenght $lenght)
    {
        
    }

    public function workoutForHours($hour)
    {
        
    }
}

class Timelength {
    protected $seconds;
    public function __construct($seconds)
    {
        $this->seconds = $seconds;
    }

    public static function fromMinutes($minutes)
    {
        return new static($minutes * 60);
    }

    public static function fromHours($hours)
    {
        return new static($hours * 60 * 60);
    }

    public function fromSeconds()
    {
        return $this->seconds;
    }
}

$joe = new WorkoutPlaceMember('joe', new Weight(165));
$joe->workoutFor(new Timelength(30));
$joe->workoutFor(Timelength::fromMinutes(34));
