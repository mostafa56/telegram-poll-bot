<?php

set_time_limit(0);

require_once 'PollBot.php';

define('BOT_TOKEN', '210139986:AAG0IqjezPGPGSkE5Xs0VP_i7bJFbTAENRc');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
