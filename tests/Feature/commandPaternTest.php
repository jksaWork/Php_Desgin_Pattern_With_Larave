<?php

namespace Tests\Feature;

use App\Patterns\Behaviorural\Commands\CliInvoker;
use App\Patterns\Behaviorural\Commands\GitIReserver;
use App\Patterns\Behaviorural\Commands\GitPullFromOrigin2;
use App\Patterns\Behaviorural\Commands\GitPushToOrigin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class commandPaternTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_git_can_add_and_commit_and_push_command_pattern_test()
    {
        $resever = new GitIReserver;
        $pushCommand = new GitPushToOrigin($resever);
        $invoker  = new CliInvoker;
        $invoker->setCommand($pushCommand);
        $invoker->run();
        $this->assertCount(3, $resever->getGitLog());
        $this->assertEquals([
            (new GitIReserver)->gitAdd(),
            (new GitIReserver)->gitCommit(),
            (new GitIReserver)->gitPush(),
        ], $resever->getGitLog());
    }
    public function test_git_can_stash_and_pull_fromOrgin_command_pattern_test(){
        $resever = new GitIReserver;
        $pushCommand = new GitPullFromOrigin2($resever);
        $invoker  = new CliInvoker;
        $invoker->setCommand($pushCommand);
        $invoker->run();
        $this->assertCount(2, $resever->getGitLog());
        // $this->assertEquals([
        //     (new GitIReserver)->gitAdd(),
        //     (new GitIReserver)->gitCommit(),
        //     (new GitIReserver)->gitPush(),
        // ], $resever->getGitLog());
    }
}
