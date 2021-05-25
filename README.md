Cron_SingleCustomCommand
========================

Skeleton for a plugin that adds ONE new custom command to the CLI-interface

### Purpose of this plugin
This is not meant to be a _(really)_ productive plugin, but rather the starting point if you want to develop a plugin that is supposed to add ONE custom command to the CLI-interface of Kanboard.

I made this, while trying to figure out how make a plugin that can act as a CRON-command and thought I'd share it here, so that others can also use and _(if necessary)_ improve this skeleton.

If you plan to make a plugin that is supposed to add more than ONE custom command to the CLI-interface ... [take a look at another version of this skeleton.](https://github.com/manne65-hd/Kanboard-Cron_ManyCustomCommands)


### Does is actually DO something?
Yes ... this is in fact a fully functioning plugin in order to demonstrate the basic concept.

Whenever being called via ```php cli my-single-custom-command```  it will create a new task in a project with ID 1 and use user-ID 1 as the creator of the new task.

### Screenshots
![01-CLI-list-single-command](https://user-images.githubusercontent.com/48651533/119446990-8b1d5500-bd2f-11eb-8881-8ae562536ef1.png)

![02-CLI-execute-single-command](https://user-images.githubusercontent.com/48651533/119447004-8f497280-bd2f-11eb-96ab-d23aa9ed3bf2.png)

![03-NewTask-SingleCommand-Board](https://user-images.githubusercontent.com/48651533/119447018-92dcf980-bd2f-11eb-8b63-94391352c07d.png)

![04-NewTask-SingleCommand-Details](https://user-images.githubusercontent.com/48651533/119447023-953f5380-bd2f-11eb-8abd-0394455f1675.png)


Author
------

- Manfred Hoffmann
- License MIT

Requirements
------------

- Kanboard >= 1.0.35

Installation
------------

You have the choice between 2 methods:

1. Download the zip file and decompress everything under the directory `plugins/Cron_SingleCustomCommand`
2. Clone this repository into the folder `plugins/Cron_SingleCustomCommand`

Note: Plugin folder is case-sensitive.
