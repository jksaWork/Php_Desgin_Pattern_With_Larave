<?php
namespace App\Patterns\Behaviorural\Commands;
class GitIReserver {
    private $logs = [];
    public function gitAdd(){
        return
            $this->logs [] = 'git add';
    }

    public function gitCommit(){
    return     $this->logs [] = 'git Commit';
    }

    public function gitPush(){
        return $this->logs [] = 'git Push';
    }

    public function gitPull(){
        $this->logs [] = 'git Pull';
    }

    public function gitStash(){
        $this->logs [] = 'git stash';
    }

    public function getGitLog() : Array
    {
        return $this->logs;
    }
}
