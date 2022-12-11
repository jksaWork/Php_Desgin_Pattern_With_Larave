<?php
namespace App\Patterns\Behaviorural\Commands;

use PDO;

class CliInvoker {
    private CommandInterface $command;
    public function setCommand(CommandInterface $command){
        $this->command = $command;
    }

    public function run(){
        $this->command->execute();
    }
}
