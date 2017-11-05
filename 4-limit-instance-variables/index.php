<?
class UserController {
    protected $userService;
    protected $registerService;
    protected $userRepository;
    protected $strip;
    protected $mailer;
    protected $logger;

    public function __construct(
        UserService $userService,
        RegisterService $registerService,
        UserRepository $userRepository,
        Strip $strip,
        Mailer $mailer
    )
    {
        
    }
}

// fix
class UserController2 {
    // 3~5个instance variables是合适的
    protected $userService;

    public function __construct(UserService $userService)
    {
        
    }
}

class UserService {
    protected $userRepository;
    protected $userEventRepository;
    public function __construct(UserRepository $userRepository, UserEventRepsotory $userEventRepository)
    {
        $this->userRepository = $userRepository;
        $this->userEventRepository = $userEventRepository;
    }
}

class AuthController {
    protected $registerService;
    public function __construct(UserRepository $registerService)
    {
        $this->registerService = $registerService;
    }
}
