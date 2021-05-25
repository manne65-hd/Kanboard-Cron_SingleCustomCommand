<?php

namespace Kanboard\Plugin\Cron_SingleCustomCommand;

use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\Cron_SingleCustomCommand\Console\MySingleCustomCommand;

class Plugin extends Base
{
    public function initialize()
    {
        // create a custom CLI-command
        $this->cli->add(new MySingleCustomCommand($this->container));
    }

    public function getClasses()
    {
        return [
            'Plugin\Cron_SingleCustomCommand\Console' => [
                'MySingleCustomCommand',
                ],
        ];
    }

    public function getPluginName()
    {
        return 'Cron_SingleCustomCommand';
    }

    public function getPluginDescription()
    {
        return t('Add ONE new custom command to Kanboard\'s CLI-interface');
    }

    public function getPluginAuthor()
    {
        return 'Manfred Hoffmann';
    }

    public function getPluginVersion()
    {
        return '0.9.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.35';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/manne65-hd/Kanboard-Cron_SingleCustomCommand';
    }
}
?>
