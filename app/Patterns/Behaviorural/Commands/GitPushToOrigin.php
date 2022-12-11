<?php
namespace App\Patterns\Behaviorural\Commands;
class GitPushToOrigin implements CommandInterface
 {
    public GitIReserver $invoker;
    public function __construct(GitIReserver $invoker )
    {
        $this->invoker = $invoker;
    }
    public function execute()
    {
        $this->invoker->gitAdd();
        $this->invoker->gitCommit();
        $this->invoker->gitPush();
    }
 }
