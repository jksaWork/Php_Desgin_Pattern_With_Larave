<?php
namespace App\Patterns\Behaviorural\Commands;
class GitPullFromOrigin2 implements CommandInterface
 {
    public GitIReserver $invoker;
    public function __construct(GitIReserver $invoker )
    {
        // dd('heelo');
        $this->invoker = $invoker;
    }
    public function execute()
    {
        $this->invoker->gitStash();
        $this->invoker->gitPull();
    }
 }
