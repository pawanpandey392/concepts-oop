<?php

require_once '../error-reporting/index.php';

interface CommandInterface
{
    public function execute();
}

class OutputCommand implements CommandInterface
{
    public function execute()
    {
        echo 'Output from the command';
    }
}

class FileCommand implements CommandInterface
{
    public function execute()
    {
        file_put_contents(__DIR__.'/log.txt', ' '.date('Y-m-d H:i:s').' ', FILE_APPEND | LOCK_EX);
    }
}

class NullCommand implements CommandInterface
{
    public function execute()
    {
        echo '<br>localhost is available. and this is the null object example from design patterns.';
    }
}

class Application
{
    public function run(CommandInterface $command = null)
    {
        // $executableCommand = $command ?? new NullCommand();
        
        // Null coalesce operator doesn't work with php 5.6 so we'll use ternary operator
        $executableCommand = $command ? $command : new NullCommand();

        return $executableCommand->execute();
    }
}



$outputCommand = new OutputCommand();
$fileCommand = new FileCommand();
$nullCommand = new NullCommand();
$application = new Application();

// Echo predefined string
$application->run( $outputCommand ); // Output from the command

// Create a file and append string to it
$application->run( $fileCommand );

// Do nothing
$application->run( $nullCommand );