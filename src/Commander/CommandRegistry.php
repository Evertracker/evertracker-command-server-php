<?php

/*
 * This file is part of the Commander package.
 *
 * (c) Evertracker GmbH <developers@evertracker.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Commander;

use Commander\Commands\CommandInterface;
use InvalidArgumentException;
use LogicException;

/**
 * Class CommandRegistry
 * Registers all commands for global use.
 *
 * @package Commander
 */
class CommandRegistry
{
    /**
     * All the registered commands in the registry
     *
     * @var CommandInterface[]
     */
    protected $commands;

    /**
     * Register a command to the registry
     *
     * @param mixed            $commandType
     * @param CommandInterface $command
     */
    public function register($commandType, CommandInterface $command)
    {
        // Check arguments
        if (empty($command) || !($command instanceof CommandInterface)) {
            throw new InvalidArgumentException('The given command is invalid.');
        }

        // Check if command already exists
        if (empty($this->get($commandType))) {
            throw new LogicException('There is already a registered command with the same type.');
        }

        $this->pushCommand($commandType, $command);
    }

    /**
     * Pushes a command on to the stack.
     *
     * @param mixed            $commandType
     * @param CommandInterface $command
     *
     * @return $this
     */
    public function pushCommand($commandType, CommandInterface $command)
    {
        $this->commands[$commandType] = $command;

        return $this;
    }

    /**
     * Pops a command from the stack
     *
     * @return CommandInterface
     */
    public function popCommand()
    {
        if (empty($this->commands)) {
            throw new LogicException('You tried to pop from an empty handler stack.');
        }

        return array_shift($this->commands);
    }

    /**
     * @param CommandInterface[] $commands
     *
     * @return $this
     */
    public function setCommands(array $commands)
    {
        $this->commands = $commands;

        return $this;
    }

    /**
     * @return CommandInterface[]
     */
    public function getCommands()
    {
        return $this->commands;
    }

    /**
     * Get a command from the stack.
     * If the command doesn't exist, returns null.
     *
     * @param string $commandType The command type id
     *
     * @return CommandInterface|null
     */
    public function get($commandType)
    {
        return isset($this->getCommands()[$commandType]) ? $this->getCommands()[$commandType] : null;
    }
}
